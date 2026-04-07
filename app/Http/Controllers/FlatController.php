<?php

namespace App\Http\Controllers;

use App\Classes\Helper;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

use App\Models\Flat;
use App\Http\Requests;
use App\Models\Settings;

use DB;
use Excel;
use Exception;

use Carbon\Carbon;

use XmlParser;
use File;

class FlatController extends Controller
{
    private function getFilters($flats = null)
    {
        if (!$flats || !count($flats)) {
            $flats = Flat::where('sold', false)->get();
        }
        $filter_data = [];
        $filters = [
            'building' => [],
            'floor' => ['min' => 0, 'max' => 0, 'all' => 0],
            'sqm' => ['min' => 0, 'max' => 0, 'all' => 0],
            'rooms' => ['min' => 0, 'max' => 0, 'all' => 0],
            'price' => ['min' => 0, 'max' => 0, 'all' => 0],
            'flats' => [],
        ];

        if (count($flats)) {
            foreach ($flats as $flat) {
                $filter_data['building'][$flat->building] = $flat->building;
                $filter_data['rooms'][$flat->rooms] = $flat->rooms;
                $filter_data['sqm'][$flat->sqm] = $flat->sqm;
                $filter_data['price'][$flat->price] = $flat->price;
                $filter_data['floor'][$flat->floor] = $flat->floor;
            }
            $filter_data = collect($filter_data);

            $filters = [
                'building' => $filter_data['building'],
                'floor' => [
                    'min' => collect($filter_data['floor'])->min(),
                    'max' => collect($filter_data['floor'])->max(),
                    'all' => collect($filter_data['floor'])->sort()->flatten()
                ],
                'sqm' => [
                    'min' => round((float)collect($filter_data['sqm'])->min(), 1, PHP_ROUND_HALF_DOWN) - 1,
                    'max' => round(collect($filter_data['sqm'])->max(), 1) + 1,
                    'all' => collect($filter_data['sqm'])->sort()->flatten()
                ],
                'rooms' => [
                    'min' => collect($filter_data['rooms'])->min(),
                    'max' => collect($filter_data['rooms'])->max(),
                    'all' => collect($filter_data['rooms'])->sort()->flatten()
                ],
                'price' => [
                    'min' => round(collect($filter_data['price'])->min() / 1000000, 1) - 1,
                    'max' => round(collect($filter_data['price'])->max() / 1000000, 1) + 1,
                    'all' => collect($filter_data['price'])->sort()->flatten()
                ], 'flats' => $flats
            ];
        }

        return $filters;
    }

    public function index()
    {
        $flats = Flat::where('sold', false)->get();
        $filters = self::getFilters($flats);

        return view('flatpicker.index', ['filters' => $filters]);
    }

    public function index_design($isPhone = false)
    {
        $mode = 'dev';
        $view = $isPhone ? 'phone_design' : 'design';
        $flats = Flat::where('sold', false)->get();
//        $flats = Helper::getApartments();
        $filters = self::getFilters($flats);
        if (Route::getCurrentRoute()->getName() == 'flats.iframe') {
            $mode = 'production';
        }

        return view('flatpicker.' . $view, ['filters' => $filters, 'mode' => $mode]);
    }

    public function phone_index_design()
    {
		return $this->index_design(true);
    }

    public function index_newdesign()
    {
        $mode = 'dev';
        $flats = Flat::where('sold', false)->get();
        $filters = self::getFilters($flats);
        if (Route::getCurrentRoute()->getName() == 'flats.iframe') $mode = 'production';

        return view('flatpicker.newdesign', ['filters' => $filters, 'mode' => $mode]);
    }

    public function filter_(Request $request)
    {
        $building = $request->input('building');
        $floor_max = $request->input('floor_max');
        $floor_min = $request->input('floor_min');
        $price_max = $request->input('price_max') ? ($request->input('price_max') * 1000000) : '';
        $price_min = $request->input('price_min') ? ($request->input('price_min') * 1000000) : '';
        $rooms = $request->input('rooms');
        $sqm_max = $request->input('sqm_max');
        $sqm_min = $request->input('sqm_min');
        //                ->groupBy('building', 'sqm', 'floor')
        $flats_q = Flat::whereBetween('floor', [$floor_min, $floor_max])
            ->whereRaw('round(sqm, 1) >= ' . $sqm_min)
            ->whereRaw('round(sqm, 1) <= ' . $sqm_max)
            ->where('price', '>=', $price_min)
            ->where('price', '<=', $price_max)
            ->orderBy('price', 'asc')
            ->where('sold', false);
        if ($rooms != 'all') $flats_q->whereIn('rooms', $rooms);
        if ($building != 'all') $flats_q->whereIn('building', $building);
        $flats = $flats_q->get();

        return response()->json(['html' => view('flatpicker.filter', ['flats' => $flats])->render(), 'filters' => self::getFilters($flats), 'flats' => $flats]);
    }

    public function filter(Request $request)
    {
        $building = $request->input('building');
        $floor_max = $request->input('floor_max');
        $floor_min = $request->input('floor_min');
        $price_max = $request->input('price_max') ? ($request->input('price_max') * 1000000) : '';
        $price_min = $request->input('price_min') ? ($request->input('price_min') * 1000000) : '';
        $rooms = $request->input('rooms');
        $sqm_max = $request->input('sqm_max');
        $sqm_min = $request->input('sqm_min');

        $filter = [];

        $query = Flat::query();

        if ($building != 'all') {
//            $filter['tisa_publicity.tisa_korpus'] = $building;
            $query->where('building', $building);
        }
        if ($rooms != 'all') {
//            $filter['tisa_rooms'] = $rooms;
            $query->where('rooms', $rooms);
        }

        $query->where('floor', '>=', $floor_min)->where('floor', '<=', $floor_max);
        $query->where('price', '>=', $price_min)->where('floor', '<=', $price_max);
        $query->where('sqm', '>=', $sqm_min)->where('floor', '<=', $sqm_max);
//        $filter['tisa_floor'] = ['from' => $floor_min, 'to' => $floor_max];
//        $filter['tisa_price'] = ['from' => $price_min, 'to' => $price_max];
//        $filter['tisa_quantity'] = ['from' => $sqm_min, 'to' => $sqm_max];



//        $flats = Helper::searchApartments($filter);
        $flats = $query->get();
        /*$flatsNew = [];
        foreach ($flats as $flat) {
            $price = floatval(str_replace(",", ".", $flat['tisa_price']));
            $sqm = floatval(str_replace(",", ".", $flat['tisa_quantity']));

            $flatsNew[] = (object)[
                'rooms' => $flat['tisa_rooms'],
                'sqm' => $sqm,
                'floor' => $flat['tisa_floor'],
                'building' => $flat['tisa_publicity.tisa_korpus'],
                'platformnumber' => $flat['tisa_platformnumber'],
                'section' => $flat['tisa_sectionnumber'],
                'flatnumber' => $flat['tisa_beforebtinumber'],
                'price' => $price,
                'mortgage' => ((string)$flat['tisa_ishypothec'] == 'True') ? true : false,
                'image' => $flat['tisa_imageurl']
            ];
        }*/

//        $flatsNew = Collection::make($flatsNew);
        return response()->json(['html' => view('flatpicker.filter', ['flats' => $flats])->render(), 'filters' => self::getFilters($flats), 'flats' => $flats]);
    }

    public function import()
    {

        $results = Excel::selectSheets('шахматка')->load('chess.xlsx', function ($reader) {
            $sheet = $reader->getSheetByName('шахматка');
            $reader->calculate();
            $floors = [16, 15, 14, 13, 12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2];
            $letters = ['C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA',
                'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH'
            ];

            $sqm_index = 3;
            $room_index = 3;
            $price_index = 4;
            $result = [];

            $flat_index = 1;
            $index_not_use = 1;
            $section = 1;
            foreach ($floors as $floor) {
                foreach ($letters as $index => $letter) {
                    if (isset($letters[$index + 1]) && $index != $index_not_use) {
                        $next_index = $index + 1;
                        $result[$floor][$flat_index]['sqm'] = $sheet->getCell($letter . $sqm_index)->getValue();
                        $result[$floor][$flat_index]['rooms'] = (int)$sheet->getCell($letters[$next_index] . $room_index)->getValue();
                        $result[$floor][$flat_index]['price'] = round($sheet->getCell($letters[$next_index] . $price_index)->getCalculatedValue());
                        $result[$floor][$flat_index]['section'] = $section;

                        if ($flat_index % 4 == 0) {
                            $section++;
                        }
                        $index_not_use = $next_index;
                        $flat_index++;
                    }

                }
            }

            dd($result);
        })->get();

        dd($results);
    }

    public function best_offer(Request $request)
    {
        $rooms = $request->input('rooms');
        $result = ['result' => false];

        $flat = DB::table('flats')
            /* ->select(DB::raw('*, min(price / sqm) as meter_costs')) */
            ->where('rooms', $rooms)
            ->orderBy('price', 'ASC')
            ->first();
        if ($flat->id) {
            $result = ['result' => true, 'link' => route('flat.card', ['corps' => $flat->building, 'section' => $flat->section, 'flat' => $flat->flatnumber])];
        }

        return response()->json($result);
    }

	public function test()
	{
		$ctx = stream_context_create(['http' => ['timeout' => 10]]);
		$xml_flats = storage_path('app/public/import_flats.xml');
		$insert_result = false;

		try {
			$xml_data = file_get_contents(config('app.flats_url'), false, $ctx);
			File::put($xml_flats, $xml_data);
		} catch (Exception $e) {
			$insert_result = $e;
		}

		$xml = XmlParser::load($xml_flats);

		$flats = $xml->getContent();
		$insert = [];

		$r_id = 1;
		$time = Carbon::now();
		foreach ($flats as $flat) {
			$sqm = floatval(str_replace(",", ".", $flat->tisa_quantity));
			$price = floatval(str_replace(",", ".", $flat->tisa_price));
			$insert[] = [
				'id' => $r_id,
				'rooms' => (int)$flat->tisa_rooms,
				'sqm' => $sqm,
				'floor' => (int)$flat->tisa_floor,
				'building' => (int)$flat->{'tisa_publicity.tisa_korpus'},
				'platformnumber' => (int)$flat->tisa_platformnumber,
				'section' => (int)$flat->tisa_sectionnumber,
				'flatnumber' => (int)$flat->tisa_beforebtinumber,
				'price' => $price,
				'sold' => false,
				'mortgage' => ((string)$flat->tisa_ishypothec == 'True') ? true : false,
				'image' => (string)$flat->tisa_imageurl,
				'created_at' => $time,
				'updated_at' => $time
			];

			$r_id++;
		}

		DB::table('flats')->delete();
		DB::table('flats')->insert($insert);

		dd($insert_result, $insert);
	}
}
