<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 24.09.18
 * Time: 14:57
 */

namespace App\Console\Commands;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Throwable;

class Import extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     */
    public function handle()
    {
	    $this->call('config:cache');
        $ctx = stream_context_create(['http' => ['timeout' => 10]]);
        $xml_flats = storage_path('app/public/import_flats.xml');
        $xmlUrl = 'https://pics.capitalgroup.ru/pic/prod/%D0%A0%D0%9A_%D0%A1%D0%B0%D0%B9%D1%82_%D0%9F%D0%BE%D0%B7%D0%B8%D1%82%D0%B8%D0%B2.xml';
        try {
            $xml_data = file_get_contents($xmlUrl, false, $ctx);
            File::put($xml_flats, $xml_data);
        } catch (Exception $e) {
            $this->line($e->getMessage());
        }

        DB::table('flats')->delete();
        try {
            $xml = XmlParser::load($xml_flats);

            $feed = $xml->getContent();
            if (0 === \count($feed->mcdsoft_apartment_complex->mcdsoft_house)) {
                $this->line('not exist mcdsoft_house');
                return 0;
            }
            if (1 === \count($feed->mcdsoft_apartment_complex->mcdsoft_house)) {
                $houses[] = $feed->mcdsoft_apartment_complex->mcdsoft_house;
            } else {
                $houses = $feed->mcdsoft_apartment_complex->mcdsoft_house;
            }

            $insert = [];

            $r_id = 1;
            $time = Carbon::now();
            foreach ($houses as $house) {
                $buildingNumber = $house->mcdsoft_number;
                $sections = null;
                if (1 === \count($house->mcdsoft_section)) {
                    $sections[] = $house->mcdsoft_section;
                } else {
                    $sections = $house->mcdsoft_section;
                }

                foreach ($sections as $section) {
                    $sectionNumber = $section->mcdsoft_number;
                    $properties = null;
                    if (1 === \count($section->mcdsoft_property)) {
                        $properties[] = $section->mcdsoft_property;
                    } else {
                        $properties = $section->mcdsoft_property;
                    }

                    foreach ($properties as $property) {
                        if (!$property->mcdsoft_propertyid) continue;
                        $insert[] = [
                            'id' => $r_id,
                            'rooms' => (int)$property->mcdsoft_number_rooms,
                            'sqm' => (float)str_replace(',', '.', (string)$property->mcdsoft_whole_project_area),
                            'floor' => (int)$property->mcdsoft_floor_height, // этаж
                            'building' => (int)$buildingNumber, // корпус
                            'platformnumber' => (int)$property->mcdsoft_number_on_site, // Номер на площадке
                            'section' => (int)$sectionNumber, // секция
                            'flatnumber' => (int)$property->mcdsoft_relevant_number, // Условный номер квартиры
                            'price' => (float)preg_replace("/[^,.0-9]/", '', str_replace(',', '.', (string)$property->mcdsoft_price)),
                            'sold' => false,
                            'mortgage' => (isset($property->mcdsoft_mortgage) && (string)$property->mcdsoft_mortgage === 'Да'),
                            'image' => isset($property->mcdsoft_photos[0]->mcdsoft_photo) ? (string)$property->mcdsoft_photos[0]->mcdsoft_photo : '',
                            'created_at' => $time,
                            'updated_at' => $time,
                            'ext_id' => (string)$property->mcdsoft_propertyid,
                        ];

                        $r_id++;
                    }
                    DB::table('flats')->insert($insert);
                }
            }
        } catch (Throwable $throwable) {
            $this->line($throwable->getMessage());
        }


        $this->call('cache:clear');
        $this->call('view:clear');
    }
}
