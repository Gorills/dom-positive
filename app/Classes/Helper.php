<?php
/**
 * Created by PhpStorm.
 * User: kodix
 * Date: 19.03.2018
 * Time: 16:44
 */

namespace App\Classes;

use Illuminate\Support\Facades\Cache;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

class Helper
{
/*    public static function getApartments()
    {
        $fileName = storage_path('app/public/') . 'import_flats';

        if (file_exists($fileName)) {
            $xml = simplexml_load_string(file_get_contents($fileName));
        } else {
            $ctx = stream_context_create(['http' => ['timeout' => 10]]);
            $xmlContent = file_get_contents(config('app.flats_url'), false, $ctx);
            file_put_contents($fileName, $xmlContent);
            $xml = simplexml_load_string(file_get_contents(config('app.flats_url'), false, $ctx));
        }

        $json = json_encode($xml);
        $flats = json_decode($json, TRUE)['tisa_article'];

        return $flats;
    }*/

/*    public static function getApartments_()
    {
        $ctx = stream_context_create(['http' => ['timeout' => 10]]);

        $fileName = storage_path('app/public/') . 'flats.xml';
        Cache::put('test', 123);
        if (Cache::has('flats')) {
            $flats = Cache::get('flats');
        } else {
            $xml = simplexml_load_string(file_get_contents(config('app.flats_url'), false, $ctx));
            $json = json_encode($xml);
            $flats = json_decode($json, TRUE)['tisa_article'];
            Cache::put('flats', $flats, 60 * 24);
        }

        return $flats;
    }*/

   /* public static function searchApartments($request)
    {
        return array_filter(static::getApartments(), function (&$value) use ($request) {
            foreach ($request as $k => $v) {
                if (is_array($v)) {
                    if (array_key_exists('from', $v) && array_key_exists('to', $v)) {
                        if (!($value[$k] >= $v['from'] && $value[$k] <= $v['to'])) {
                            return false;
                        }
                    } else {
                        if (!empty($v) && !in_array($value[$k], $v)) {
                            return false;
                        }
                    }
                } else {
                    if ($value[$k] != $v) {
                        return false;
                    }
                }
            }
            return true;
        });
    }*/


}