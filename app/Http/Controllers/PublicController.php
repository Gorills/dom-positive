<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Flat;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Pages;

use Illuminate\Support\Facades\Auth;
Use Lang;
Use JavaScript;


class PublicController extends Controller
{
    public function show($slug = null)
    {
        if (!$slug || $slug == '/') {
            $slug = 'index';
        }

        if (!file_exists(resource_path('/views/muse/' . $slug . '.blade.php'))) {
            return abort(404);
        }

        $page = Pages::where('template', $slug)->first();
        $share_vars = [
            'title' => 'ЖК «Позитив» | Квартиры в Румянцево. Официальный сайт.',
            'keywords' => 'Квартиры в Румянцево, квартиры новая москва',
            'description' => 'Квартиры в Румянцево от 5,6 млн. рублей. От застройщика. Новая Москва. Рядом Киевское шоссе, метро Румянцево и метро Саларьево. Московская прописка.',
        ];
        if ($page) {
            $variables = $page->variables;
            if ($variables) {
                foreach ($variables as $variable) {
                    $share_vars[$variable->key] = $variable->value;
                }
            }
            $share_vars['title'] = $page->title;
            $share_vars['keywords'] = $page->keywords;
            $share_vars['description'] = $page->description;
            $gallery = Gallery::orderBy('order', 'asc')->get();
            $share_vars['gallery'] = ($gallery->count()) ? $gallery : [];
            $share_vars['js'] = '';
            $share_vars['svg'] = '<?xml version="1.0" encoding="UTF-8"?>';
        }

        return view('muse.' . $slug, $share_vars);
    }

    public function substrTextOnly($string, $limit, $end = '...')
    {
        $with_html_count = strlen($string);
        $without_html_count = strlen(strip_tags($string));
        $html_tags_length = $with_html_count - $without_html_count;

        return str_limit($string, $limit + $html_tags_length, $end);
    }

    public function news()
    {
        $page = Pages::where('template', 'novosti_kvartiry_v_rumyantsevo')->first();
        $share_vars = [];
        if ($page) {
            $variables = $page->variables;
            if ($variables) {
                foreach ($variables as $variable) {
                    $share_vars[$variable->key] = $variable->value;
                }
            }
            $share_vars['title'] = $page->title;
            $share_vars['keywords'] = $page->keywords;
            $share_vars['description'] = $page->description;
            $news = News::orderBy('published_at', 'DESC')->get();
            $news_arr = [];
            foreach ($news as $item) {
                $news_arr[] = [
                    'news_id' => $item->id,
                    'news_title' => '<a href="' . route('public.news.more', $item->id) . '">' . $item->title . '</a>',
                    'news_text' => self::substrTextOnly($item->text, 350),
                    'news_picture' => $item->picture,
                    'published_at' => $item->published_at->format('d.m.Y'),
                    'more_link' => '<a href="' . route('public.news.more', $item->id) . '">',
                    'link' => '</a>'
                ];
            }

            $share_vars['news'] = $news_arr;
        }

        return view('muse.novosti_kvartiry_v_rumyantsevo', $share_vars);
    }

    public function newsDetails($news_id)
    {
        $news = News::find($news_id);

        if (!$news || !$news->id) {
            return abort(404);
        }

        $page = Pages::where('template', 'novosti_kvartiry_v_rumyantsevo')->first();
        $share_vars = [];
        if ($page) {
            $variables = $page->variables;
            if ($variables) {
                foreach ($variables as $variable) {
                    $share_vars[$variable->key] = $variable->value;
                }
            }
            $share_vars['title'] = $page->title;
            $share_vars['keywords'] = $page->keywords;
            $share_vars['description'] = $page->description;
            $share_vars['news_title'] = $news->title;
            $share_vars['published_at'] = $news->published_at->format('d.m.Y');
            $share_vars['news_text'] = $news->text;
            $share_vars['news_picture'] = $news->picture;
            $share_vars['news'] = $news;

        }

        return view('muse.news-details', $share_vars);
    }

    public function card($corps, $section, $flat, $isPhone = false)
    {
        if (!$corps || !$section || !$flat) {
            return abort(404);
        }

        $slug = $isPhone ? config('settings.phone_flat_card_template') : config('settings.flat_card_template');

        if (!file_exists(resource_path('/views/muse/' . $slug . '.blade.php'))) {
            return abort(404);
        }

        $page = Pages::where('template', config('settings.flat_card_template'))->first();
        $flatNumber = $flat;

        $flat = Flat::where('building', $corps)
            ->where('section', $section)
            ->where('flatnumber', $flatNumber)
            ->first();

        if (null === $flat) {
            return abort(404);
        }
        $share_vars = [];
        if ($page) {
            $variables = $page->variables;
            if ($variables) {
                foreach ($variables as $variable) {
                    $share_vars[$variable->key] = $variable->value;
                }
            }
            $share_vars['title'] = $page->title;
            $share_vars['keywords'] = $page->keywords;
            $share_vars['description'] = $page->description;
        }

        $share_vars['flatnumber'] = $flat->flatnumber;
        $share_vars['square'] = round($flat->sqm);
        $share_vars['korpus'] = $flat->building;
        $share_vars['section'] = $flat->section;
        $share_vars['price'] = str_replace('.', ',', round($flat->price / 1000000, 1));
        $share_vars['floor'] = $flat->floor;
        $share_vars['image'] = $flat->image;
        $share_vars['rooms'] = $flat->rooms;
        $share_vars['rooms_txt'] = Lang::choice('комната|комнаты|комнат', $flat->rooms, [], 'ru');
        $share_vars['rooms_x'] = $flat->rooms . Lang::choice(' &nbsp;комнатная|-х комнатная|-ти комнатная', $flat->rooms, [], 'ru');

        $randomFlat = Flat::where('building', $corps)
            ->where('flatnumber', '!=', $flatNumber)
            ->inRandomOrder()
            ->first();
        $routeName = $isPhone ? 'phone_flat.card' : 'flat.card';
        if ($randomFlat) {
            JavaScript::put([
                'randomFlatLink' => route($routeName, ['corps' => $randomFlat->building, 'section' => $randomFlat->section, 'flat' => $randomFlat->flatnumber])
            ]);
        }

        return view('muse.' . $slug, $share_vars);
    }

	public function phone_card($corps, $section, $flat) {
    	return $this->card($corps, $section, $flat, true);
	}

    public function section($corps, $section)
    {
        if (!$corps || !$section) {
            return abort(404);
        }

        $floors = 16;
        $flats_on_floor = 4;

        if ($corps == 3) {
            $flats_on_floor = 5;
        }

        if ($corps == 5 || $corps == 1) {
            if ($section != 1) {
                $flats_on_floor = 8;
                $floors = 25;
            } else {
                $flats_on_floor = 5;
                $floors = 24;
            }
        }

        if ($corps == 6) {
            if ($section == 2) {
                $flats_on_floor = 5;
            }
        }

	    if ($corps == 7) {
		    $flats_on_floor = 5;
		    $floors = 24;
	    }

        $slug = $flats_on_floor . '-flat-section';

        if (!file_exists(resource_path('/views/muse/' . $slug . '.blade.php'))) {
            return abort(404);
        }
        $page = Pages::where('template', $slug)->first();
        $flats = Flat::where('building', $corps)
            ->where('section', $section)
            ->orderBy('flatnumber', 'desc')
            ->get();

        foreach ($flats as &$flat) {
            $flat->id = $flat->ext_id;
            $flat->sqmround = round($flat->sqm);
            $flat->priceformat = number_format($flat->price, 0, ',', ' ');
            $flat->link = route(
                'flat.card',
                [
                    'corps' => $flat->building,
                    'section' => $flat->section,
                    'flat' => $flat->flatnumber
                ]
            );
        }

        $share_vars = [];
        if ($page) {
            $variables = $page->variables;
            if ($variables) {
                foreach ($variables as $variable) {
                    $share_vars[$variable->key] = $variable->value;
                }
            }
            $share_vars['title'] = $page->title;
            $share_vars['keywords'] = $page->keywords;
            $share_vars['description'] = $page->description;
        }

        $share_vars['korpus'] = $corps;
        $share_vars['section'] = $section;
        $share_vars['js'] = '';

        JavaScript::put([
            'floors' => $floors,
            'on_floor' => $flats_on_floor,
            'flats' => $flats,
            'corps' => $corps,
            'section' => $section
        ]);

        return view('muse.' . $slug, $share_vars);
    }


    public function mortgageTerms()
    {
        $url = env('MORTGAGE_API_URL', 'https://api.capitalgroup.ru/api/1.0.0/objects/pozitiv/mortgage_terms');
        $referer = env('MORTGAGE_API_REFERER', 'https://xn----dtbenfaypcj0b.xn--p1ai/');

        if (!function_exists('curl_init')) {
            return response()->json(['message' => 'curl is not available'], 500);
        }

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_HTTPHEADER => [
                'Referer: ' . $referer,
                'Accept: application/json',
                'User-Agent: Mozilla/5.0 (compatible; DomPozitivMortgageProxy/1.0)',
            ],
        ]);
        $body = curl_exec($ch);
        $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($body === false || $code !== 200) {
            return response()->json(['message' => 'Mortgage API unavailable'], 502);
        }

        return response($body, 200)->header('Content-Type', 'application/json');
    }
}
