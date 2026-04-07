<!DOCTYPE html>
<html class="nojs html" lang="ru-RU">
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="description" content="Ход строительства"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <title>Ход строительства</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4032550449"/>
    <link rel="stylesheet" type="text/css" href="css/master_top.css?crc=4079322621"/>
    <link rel="stylesheet" href="css/hod-stroitelstva.css"/>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push(
                {'gtm.start': new Date().getTime(), event: 'gtm.js'}
            );
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TTM4V77');
    </script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>
</head>
<body class="hod_stroitelstva">
@include('muse.global.metrics')

<header class="header">
  <a class="logo-header" href="/">
      <img class="logo-header__img" src="images/logo@2x.png" alt="ЖК Позитив" title="На главную">
  </a>
  @php
      $menu = [
          [
              'title' => 'О проекте',
              'url'   => 'o_proekte_gk_pozitiv',
              'color' => 1,
              'menu' => 'o-proekte',
          ],
          [
              'title' => 'Как купить',
              'url'   => 'kak_kupit_kvartiru',
              'color' => 3,
              'menu' => 'kak-kupit'
          ],
          [
              'title' => 'Ипотека',
              'url'   => 'ipoteka',
              'color' => 4,
              'menu' => 'ipoteka'
          ],
          [
              'title' => 'Документы',
              'url'   => 'proektnaya_deklara%d1%81ia',
              'color' => 5,
              'menu' => 'dokumenti'
          ],
          [
              'title' => 'Галерея',
              'url'   => 'gallereya_dom_pozitiv',
              'color' => 6,
              'menu' => 'gallery'
          ],
          [
              'title' => 'Новости',
              'url'   => 'novosti_kvartiry_v_rumyantsevo',
              'color' => 7,
              'menu' => 'novosti'
          ],
          [
              'title' => 'Контакты',
              'url'   => 'kontakty',
              'color' => 8,
              'menu' => 'kontakty'
          ],
          [
              'title' => 'Ход строительства',
              'url'   => 'hod-stroitelstva',
              'color' => 4,
              'menu' => 'hod active'
          ],
      ]
  @endphp
  <nav class="menu">
    <ul class="menu-list">
      @foreach( $menu as $item )
      <li class="menu-item">
          <a class="menu-{{$item['menu']}} shift {{ isset($item['active'])  ? 'menu__item--active' : '' }}"
             href="/{{$item['url']}}.html">{{$item['title']}}
          </a>
      </li>
      @endforeach
    </ul>
  </nav>
  <div class="phone-header">
      <a class="phone-header__tel call_phone_1" href="tel:+7 (495) 771-72-20" title="Позвонить">+7 (495) 771-72-20</a>
      <a class="phone-header__callback" href="#" onclick="Comagic.openSitePhonePanel();return false;">заказать звонок</a>
  </div>
</header>

<main class="main">

    <h1 class="title-page">Ход строительства ЖК Позитив</h1>

    @php
        $gallery = [
     [
                'title' => 'Декабрь 2021',
                'images' => [
                    'images/december_2021/1.jpg',
                    'images/december_2021/2.jpg',
                    'images/december_2021/3.jpg',
                    'images/december_2021/4.jpg',
                    'images/december_2021/5.jpg',
                    'images/december_2021/6.jpg',
                    'images/december_2021/7.jpg',
                ]
             ],
             [
                'title' => 'Ноябрь 2021',
                'images' => [
                    'images/november_2021/1.jpg',
                    'images/november_2021/2.jpg',
                    'images/november_2021/3.jpg',
                    'images/november_2021/4.jpg',
                    'images/november_2021/5.jpg',
                    'images/november_2021/6.jpg',
                    'images/november_2021/7.jpg',
                    'images/november_2021/8.jpg',
                    'images/november_2021/9.jpg',
                    'images/november_2021/10.jpg',
                ]
             ],
             [
                'title' => 'Октябрь 2021',
                'images' => [
                    'images/october_2021/1.jpg',
                    'images/october_2021/2.jpg',
                    'images/october_2021/3.jpg',
                    'images/october_2021/4.jpg',
                    'images/october_2021/5.jpg',
                    'images/october_2021/6.jpg',
                    'images/october_2021/7.jpg',
                    'images/october_2021/8.jpg',
                ]
             ],
             [
                'title' => 'Сентябрь 2021',
                'images' => [
                    'images/september_2021/1.jpg',
                    'images/september_2021/2.jpg',
                    'images/september_2021/3.jpg',
                    'images/september_2021/4.jpg',
                    'images/september_2021/5.jpg',
                    'images/september_2021/6.jpg',
                    'images/september_2021/7.jpg',
                    'images/september_2021/8.jpg',
                    'images/september_2021/9.jpg',
                ]
             ],

             [
                'title' => 'Август 2021',
                'images' => [
                    'images/august_2021/1.jpg',
                    'images/august_2021/2.jpg',
                    'images/august_2021/3.jpg',
                    'images/august_2021/4.jpg',
                    'images/august_2021/5.jpg',
                    'images/august_2021/6.jpg',
                    'images/august_2021/7.jpg',
                    'images/august_2021/8.jpg',
                ]
            ],
            [
                'title' => 'Июль 2021',
                'images' => [
                    'images/july_2021/1.jpg',
                    'images/july_2021/2.jpg',
                    'images/july_2021/3.jpg',
                    'images/july_2021/4.jpg',
                    'images/july_2021/5.jpg',
                    'images/july_2021/6.jpg',
                    'images/july_2021/7.jpg',
                    'images/july_2021/8.jpg',
                ]
            ],
            [
                'title' => 'Июнь 2021',
                'images' => [
                    'images/june_2021/1.jpg',
                    'images/june_2021/2.jpg',
                    'images/june_2021/3.jpg',
                    'images/june_2021/4.jpg',
                    'images/june_2021/5.jpg',
                    'images/june_2021/6.jpg',
                ]
            ],

            [
                'title' => 'Май 2021',
                'images' => [
                    'images/may_2021/1.jpg',
                    'images/may_2021/2.jpg',
                    'images/may_2021/3.jpg',
                    'images/may_2021/4.jpg',
                    'images/may_2021/5.jpg',
                    'images/may_2021/6.jpg',
                    'images/may_2021/7.jpg',
                ]
            ],
            [
                'title' => 'Апрель 2021',
                'images' => [
                    'images/april_2021/april1.jpg',
                    'images/april_2021/april2.jpg',
                    'images/april_2021/april3.jpg',
                    'images/april_2021/april4.jpg',
                    'images/april_2021/april5.jpg',
                    'images/april_2021/april6.jpg',
                    'images/april_2021/april7.jpg',
                ]
            ],
            [
                'title' => 'Март 2021',
                'images' => [
                    'images/march_2021/march1.jpg',
                    'images/march_2021/march2.jpg',
                    'images/march_2021/march3.jpg',
                    'images/march_2021/march4.jpg',
                    'images/march_2021/march5.jpg',
                ]
             ],
            [
                'title' => 'Февраль 2021',
                'images' => [
                    'images/february_2021/february1.jpg',
                    'images/february_2021/february2.jpg',
                    'images/february_2021/february3.jpg',
                    'images/february_2021/february4.jpg',
                    'images/february_2021/february5.jpg',
                ]
             ],
             [
                'title' => 'Январь 2021',
                'images' => [
                    'images/january_2021/january1.jpg',
                    'images/january_2021/january2.jpg',
                    'images/january_2021/january3.jpg',
                    'images/january_2021/january4.jpg',
                    'images/january_2021/january5.jpg',
                ]
             ],
                     [
                'title' => 'Декабрь 2020',
                'images' => [
                    'images/december_2020/dec1.jpg',
                    'images/december_2020/dec2.jpg',
                    'images/december_2020/dec3.jpg',
                    'images/december_2020/dec4.jpg',
                    'images/december_2020/dec5.jpg',
                ]
             ],
                 [
                'title' => 'Ноябрь 2020',
                'images' => [
                    'images/november_2020/DJI_0349-HDR.jpg',
                    'images/november_2020/DJI_0350-HDR.jpg',
                    'images/november_2020/DJI_0365-HDR.jpg',
                    'images/november_2020/DSC_4627.jpg',
                    'images/november_2020/DSC_4630.jpg',
                    'images/november_2020/DSC_4633.jpg',
                ]
             ],
             [
                'title' => 'Октябрь 2020',
                'images' => [
                    'images/october_2020/STR06707_result.jpg',
                    'images/october_2020/STR06738_result.jpg',
                    'images/october_2020/STR06745_result.jpg',
                    'images/october_2020/STR06747_result.jpg',
                    'images/october_2020/STR06762_result.jpg',
                    'images/october_2020/STR06798_result.jpg',
                ]
             ],
             [
                'title' => 'Сентябрь 2020',
                'images' => [
                    'images/september_2020/STR02321_result.jpg',
                    'images/september_2020/STR02337_result.jpg',
                    'images/september_2020/STR02343_result.jpg',
                    'images/september_2020/STR02452_result.jpg',
                    'images/september_2020/STR02501_result.jpg',
                    'images/september_2020/1_september_2020.jpg',
                    'images/september_2020/2_september_2020.jpg',
                    'images/september_2020/3_september_2020.jpg',
                    'images/september_2020/4_september_2020.jpg',
                    'images/september_2020/5_september_2020.jpg',
                    'images/september_2020/6_september_2020.jpg',
                    'images/september_2020/7_september_2020.jpg',
                    'images/september_2020/8_september_2020.jpg',
                    'images/september_2020/9_september_2020.jpg',
                ]
             ],
             [
                'title' => 'Август 2020',
                'images' => [
                    'images/august_2020/34.jpg',
                    'images/august_2020/9.jpg',
                    'images/august_2020/12.jpg',
                    'images/august_2020/18.jpg',
                    'images/august_2020/30.jpg',
                    'images/august_2020/31.jpg',
                    'images/august_2020/33.jpg',
                    'images/august_2020/4.jpg',
                    'images/august_2020/35.jpg',
                    'images/august_2020/36.jpg',
                ]
             ],
             [
                'title' => 'Июль 2020',
                'images' => [
                    'images/july_2020/28.jpg',
                    'images/july_2020/7.jpg',
                    'images/july_2020/30.jpg',
                    'images/july_2020/6.jpg',
                    'images/july_2020/21.jpg',
                    'images/july_2020/12.jpg',
                    'images/july_2020/31.jpg',
                    'images/july_2020/22.jpg',
                    'images/july_2020/36.jpg',
                ]
             ],
             [
                'title' => 'Июнь 2020',
                'images' => [
                    'images/june_2020/27.jpg',
                    'images/june_2020/4.jpg',
                    'images/june_2020/6.jpg',
                    'images/june_2020/21.jpg',
                    'images/june_2020/12.jpg',
                    'images/june_2020/32.jpg',
                    'images/june_2020/33.jpg',
                    'images/june_2020/36.jpg',
                    'images/june_2020/37.jpg',
                ]
            ],
            [
                'title' => 'Май 2020',
                'images' => [
                    'images/may_2020/4.jpg',
                    'images/may_2020/2.jpg',
                    'images/may_2020/3.jpg',
                    'images/may_2020/1.jpg',
                    'images/may_2020/5.jpg',
                    'images/may_2020/6.jpg',
                ]
            ],
            [
                'title' => 'Апрель 2020',
                'images' => [
                    'images/april_2020/1-01-04-2020.jpg',
                    'images/april_2020/6-01-04-2020.jpg',
                    'images/april_2020/7-01-04-2020.jpg',
                    'images/april_2020/8-01-04-2020.jpg',
                    'images/april_2020/13-01-04-2020.jpg',
                    'images/april_2020/15-01-04-2020.jpg',
                    'images/april_2020/18-01-04-2020.jpg',
                    'images/april_2020/28-01-04-2020.jpg',
                    'images/april_2020/30-01-04-2020.jpg',
                    'images/april_2020/33-01-04-2020.jpg',
                ]
            ],
            [
                'title' => 'Март 2020',
                'images' => [
                    'images/march_2020/1.jpg',
                    'images/march_2020/2.jpg',
                    'images/march_2020/3.jpg',
                    'images/march_2020/4.jpg',
                    'images/march_2020/5.jpg',
                    'images/march_2020/6.jpg',
                    'images/march_2020/7.jpg',
                    'images/march_2020/8.jpg',
                    'images/march_2020/9.jpg',
                    'images/march_2020/10.jpg',
                    'images/march_2020/11.jpg',
                    'images/march_2020/12.jpg',
                    'images/march_2020/13.jpg',
                    'images/march_2020/14.jpg',
                ]
            ],
            [
                'title' => 'Февраль 2020',
                'images' => [
                    'images/february_2020/1_1.jpg',
                    'images/february_2020/7_1.jpg',
                    'images/february_2020/7_2.jpg',
                    'images/february_2020/7_3.jpg',
                    'images/february_2020/4_2020.jpg',
                    'images/february_2020/5_2020.jpg',
                    'images/february_2020/7_2020.jpg',
                    'images/february_2020/12_2020.jpg',
                    'images/february_2020/21_2020.jpg',
                    'images/february_2020/23_2020.jpg',
                    'images/february_2020/24_2020.jpg',
                    'images/february_2020/33_2020.jpg',
                ]
            ],
            [
                'title' => 'Январь 2020',
                'images' => [
                    'images/january_2020/2-january_2020.jpg',
                    'images/january_2020/3-january_2020.jpg',
                    'images/january_2020/9-january_2020.jpg',
                    'images/january_2020/10-january_2020.jpg',
                    'images/january_2020/13-january_2020.jpg',
                    'images/january_2020/20-january_2020.jpg',
                    'images/january_2020/21-january_2020.jpg',
                    'images/january_2020/24-january_2020.jpg',
                    'images/january_2020/25-january_2020.jpg',
                    'images/january_2020/26-january_2020.jpg',
                    'images/january_2020/28-january_2020.jpg',
                    'images/january_2020/36-january_2020.jpg',
                ]
            ],
            [
                'title' => 'Декабрь 2019',
                'images' => [
                    'images/december_2019/4_december_2019.jpg',
                    'images/december_2019/5_december_2019.jpg',
                    'images/december_2019/8_december_2019.jpg',
                    'images/december_2019/9_december_2019.jpg',
                    'images/december_2019/10_december_2019.jpg',
                    'images/december_2019/15_december_2019.jpg',
                    'images/december_2019/16_december_2019.jpg',
                    'images/december_2019/19_december_2019.jpg',
                    'images/december_2019/26_december_2019.jpg',
                    'images/december_2019/27_december_2019.jpg',
                    'images/december_2019/28_december_2019.jpg',
                    'images/december_2019/31_december_2019.jpg',
                    'images/december_2019/34_december_2019.jpg',
                    'images/december_2019/35_december_2019.jpg',
                ]
            ],
            [
                'title' => 'Ноябрь 2019',
                'images' => [
                    'images/november_2019/1_november_2019.jpg',
                    'images/november_2019/4_november_2019.jpg',
                    'images/november_2019/12_november_2019.jpg',
                    'images/november_2019/13_november_2019.jpg',
                    'images/november_2019/19_november_2019.jpg',
                    'images/november_2019/22_november_2019.jpg',
                    'images/november_2019/23_november_2019.jpg',
                    'images/november_2019/24_november_2019.jpg',
                    'images/november_2019/26_november_2019.jpg',
                    'images/november_2019/27_november_2019.jpg',
                    'images/november_2019/28_november_2019.jpg',
                    'images/november_2019/30_november_2019.jpg',
                    'images/november_2019/31_november_2019.jpg',
                    'images/november_2019/32_november_2019.jpg',
                    'images/november_2019/34_november_2019.jpg',
                    'images/november_2019/36_november_2019.jpg',
                    'images/november_2019/37_november_2019.jpg',
                    'images/november_2019/38_november_2019.jpg',
                ]
            ],
            [
                'title' => 'Октябрь 2019',
                'images' => [
                    'images/october_2019/02-October-2019.jpg',
                    'images/october_2019/09-October-2019.jpg',
                    'images/october_2019/17-October-2019.jpg',
                    'images/october_2019/23-October-2019.jpg',
                    'images/october_2019/27-October-2019.jpg',
                    'images/october_2019/28-October-2019.jpg',
                    'images/october_2019/30-October-2019.jpg',
                ]
            ],
            [
                'title' => 'Сентябрь 2019',
                'images' => [
                    'images/september_2019/5september.jpg',
                    'images/september_2019/7september.jpg',
                    'images/september_2019/9september.jpg',
                    'images/september_2019/11september.jpg',
                    'images/september_2019/14september.jpg',
                    'images/september_2019/15september.jpg',
                    'images/september_2019/16september.jpg',
                    'images/september_2019/17september.jpg',
                    'images/september_2019/18september.jpg',
                    'images/september_2019/20september.jpg',
                    'images/september_2019/21september.jpg',
                    'images/september_2019/22september.jpg',
                    'images/september_2019/30september.jpg',
                    'images/september_2019/32september.jpg',
                    'images/september_2019/33september.jpg',
                ]
            ],
		    [
                'title' => 'Август 2019',
                'images' => [
                    'images/august_2019/09-ЖКПозитив-август2019.jpg',
                    'images/august_2019/12-ЖКПозитив-август2019.jpg',
                    'images/august_2019/14-ЖКПозитив-август2019.jpg',
                    'images/august_2019/16-ЖКПозитив-август2019.jpg',
                    'images/august_2019/17-ЖКПозитив-август2019.jpg',
                    'images/august_2019/28-ЖКПозитив-август2019.jpg',
                    'images/august_2019/31-ЖКПозитив-август2019.jpg',
                    'images/august_2019/33-ЖКПозитив-август2019.jpg',
                    'images/august_2019/34-ЖКПозитив-август2019.jpg',
                    'images/august_2019/35-ЖКПозитив-август2019.jpg',
                ]
            ],
		    [
                'title' => 'Июль 2019',
                'images' => [
                    'images/july_2019/11 - ЖК Позитив - июль 2019.jpg',
                    'images/july_2019/14 - ЖК Позитив - июль 2019.jpg',
                    'images/july_2019/20 - ЖК Позитив - июль 2019.jpg',
                    'images/july_2019/29 - ЖК Позитив - июль 2019.jpg',
                    'images/july_2019/31 - ЖК Позитив - июль 2019.jpg',
                    'images/july_2019/32 - ЖК Позитив - июль 2019.jpg',
                    'images/july_2019/35 - ЖК Позитив - июль 2019.jpg',
                    'images/july_2019/38 - ЖК Позитив - июль 2019.jpg',
                    'images/july_2019/42 - ЖК Позитив - июль 2019.jpg',
                ]
            ],
		    [
                'title' => 'Июнь 2019',
                'images' => [
                    'images/june_2019/06.jpg',
                    'images/june_2019/08.jpg',
                    'images/june_2019/12.jpg',
                    'images/june_2019/13.jpg',
                    'images/june_2019/16.jpg',
                    'images/june_2019/18.jpg',
                    'images/june_2019/20.jpg',
                    'images/june_2019/26.jpg',
                    'images/june_2019/27.jpg',
                    'images/june_2019/29.jpg',
                ]
            ],
		    [
                'title' => 'Май 2019',
                'images' => [
                    'images/may_2019/03 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/04 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/21 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/24 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/26 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/27 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/28 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/29 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/31 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/33 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/35 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/38 - ЖК Позитив - Май 2019.jpg',
                    'images/may_2019/39 - ЖК Позитив - Май 2019.jpg',
                ]
            ],
            [
                'title' => 'Апрель 2019',
                'images' => [
                    'images/april_2019/13 - ЖК Позитив - апрель 2019.jpg',
                    'images/april_2019/14 - ЖК Позитив - апрель 2019.jpg',
                    'images/april_2019/15 - ЖК Позитив - апрель 2019.jpg',
                    'images/april_2019/22 - ЖК Позитив - апрель 2019.jpg',
                    'images/april_2019/24 - ЖК Позитив - апрель 2019.jpg',
                    'images/april_2019/25 - ЖК Позитив - апрель 2019.jpg',
                    'images/april_2019/26 - ЖК Позитив - апрель 2019.jpg',
                    'images/april_2019/28 - ЖК Позитив - апрель 2019.jpg',
                    'images/april_2019/31 - ЖК Позитив - апрель 2019.jpg',
                    'images/april_2019/34 - ЖК Позитив - апрель 2019.jpg',
                ]
            ],
            [
                'title' => 'Март 2019',
                'images' => [
                    'images/2Март2019.jpg',
					'images/3Март2019.jpg',
					'images/6Март2019.jpg',
					'images/8Март2019.jpg',
					'images/11Март2019.jpg',
					'images/14Март2019.jpg',
					'images/17Март2019.jpg',
					'images/18Март2019.jpg',
                    'images/19Март2019.jpg',
					'images/20Март2019.jpg',
					'images/27Март2019.jpg',
					'images/28Март2019.jpg',
					'images/30Март2019.jpg',
					'images/30Март2019.jpg',
					'images/38Март2019.jpg',
					'images/40Март2019.jpg',
                ]
            ],

		[
                'title' => 'Февраль 2019',
                'images' => [
                    'images/1-February-2019.jpg',
					'images/2-February-2019.jpg',
					'images/3-February-2019.jpg',
					'images/4-February-2019.jpg',
					'images/5-February-2019.jpg',
					'images/6-February-2019.jpg',
					'images/7-February-2019.jpg',
					'images/8-February-2019.jpg',
                ]
            ],
		[
                'title' => 'Январь 2019',
                'images' => [
                    'images/1-january-2019.jpg',
					'images/2-january-2019.jpg',
					'images/3-january-2019.jpg',
					'images/4-january-2019.jpg',
					'images/5-january-2019.jpg',
					'images/6-january-2019.jpg',
                ]
            ],
		[
                'title' => 'Декабрь 2018',
                'images' => [
                    'images/1-december-2018.jpg',
					'images/2-december-2018.jpg',
					'images/3-december-2018.jpg',
					'images/4-december-2018.jpg',
					'images/5-december-2018.jpg',
					'images/6-december-2018.jpg',
					'images/7-december-2018.jpg',
					'images/8-december-2018.jpg',
					'images/9-december-2018.jpg',
					'images/10-december-2018.jpg',
					'images/11-december-2018.jpg',
                ]
            ],
		[
                'title' => 'Ноябрь 2018',
                'images' => [
                    'images/1-november-2018.jpg',
					'images/2-november-2018.jpg',
					'images/3-november-2018.jpg',
					'images/4-november-2018.jpg',
					'images/5-november-2018.jpg',
					'images/6-november-2018.jpg',
					'images/7-november-2018.jpg',
                ]
            ],
		[
                'title' => 'Октябрь 2018',
                'images' => [
                    'images/1-october-2018.jpg',
					'images/2-october-2018.jpg',
					'images/3-october-2018.jpg',
					'images/4-october-2018.jpg',
					'images/5-october-2018.jpg',
					'images/6-october-2018.jpg',
					'images/7-october-2018.jpg',
					'images/8-october-2018.jpg',
					'images/9-october-2018.jpg',
					'images/10-october-2018.jpg',
					'images/11-october-2018.jpg',
					'images/12-october-2018.jpg',
                ]
            ],
		[
                'title' => 'Сентябрь 2018',
                'images' => [
                    'images/1-september-2018.jpg',
					'images/2-september-2018.jpg',
					'images/3-september-2018.jpg',
					'images/4-september-2018.jpg',
					'images/5-september-2018.jpg',
					'images/6-september-2018.jpg',
					'images/7-september-2018.jpg',
					'images/8-september-2018.jpg',
                ]
            ],
		    [
                'title' => 'Август 2018',
                'images' => [
                    'images/1-august-2018.jpg',
					'images/2-august-2018.jpg',
					'images/3-august-2018.jpg',
					'images/4-august-2018.jpg',
					'images/5-august-2018.jpg',
					'images/6-august-2018.jpg',
					'images/7-august-2018.jpg',
					'images/8-august-2018.jpg',
					'images/9-august-2018.jpg',
					'images/10-august-2018.jpg',
                ]
            ],
            [
                'title' => 'Июль 2018',
                'images' => [
                    'images/jule-2018-photo@2x.jpg',
					'images/6801.jpg',
					'images/6802.jpg',
					'images/6803.jpg',
					'images/6804.jpg',
					'images/6805.jpg',
					'images/6806.jpg',
					'images/6807.jpg',
					'images/6808.jpg',
                ]
            ],
            [
                'title' => 'Июнь 2018',
                'images' => [
                    'images/june-2018-photo@2x.jpg',
					'images/0604.jpg',
					'images/0602.jpg',
					'images/0603.jpg',
					'images/0601.jpg',
					'images/0605.jpg',
					'images/0606.jpg',
					'images/0607.jpg',
					'images/0608.jpg',
					'images/0609.jpg',
					'images/0610.jpg',
					'images/0611.jpg',
					'images/0612.jpg',
					'images/0613.jpg',
					'images/0614.jpg',
					'images/0615.jpg',
					'images/0616.jpg',
					'images/0617.jpg',
					'images/0618.jpg',
					'images/0619.jpg',
					'images/0620.jpg',
					'images/0621.jpg',
					'images/0622.jpg',
                ]
            ],
            [
                'title' => 'Май 2018',
                'images' => [
                    'images/may-photo-2018@2x.jpg',
                ]
            ],
            [
                'title' => 'Апрель 2018',
                'images' => [
                    'images/april-photo-2018@2x.jpg',
					'images/0701.jpg',
					'images/0702.jpg',
					'images/0703.jpg',
					'images/0704.jpg',
					'images/0705.jpg',
					'images/0706.jpg',
					'images/0707.jpg',
					'images/0708.jpg',
					'images/0709.jpg',
					'images/0710.jpg',
					'images/0711.jpg',
					'images/0712.jpg',
					'images/0713.jpg',
					'images/0714.jpg',
					'images/0715.jpg',
					'images/0716.jpg',
					'images/0717.jpg',
                ]
            ],
			[
                'title' => 'Март 2018',
                'images' => [
                    'images/march_2018_photo@2.jpg',
                ]
            ],
			[
                'title' => 'Февраль 2018',
                'images' => [
                    'images/february-photo-2018@2x.jpg',
                ]
            ],
			[
                'title' => 'Январь 2018',
                'images' => [
                    'images/january-photo-2018@2x.jpg',
                ]
            ],
			[
                'title' => 'Декабрь 2017',
                'images' => [
                    'images/december-photo@2x.jpg',
                ]
            ],
			[
                'title' => 'Ноябрь 2017',
                'images' => [
                    'images/november-photo@2x.jpg',
                ]
            ],
			[
                'title' => 'Октябрь 2017',
                'images' => [
                    'images/october-photo@2x.jpg',
                ]
            ],
			[
                'title' => 'Сентябрь 2017',
                'images' => [
                    'images/september-photo@2x.jpg',
                ]
            ],
			/*[
                'title' => 'Август 2017',
                'images' => [
                    'images/.jpg',
                ]
            ],*/
			[
                'title' => 'Июль 2017',
                'images' => [
                    'images/july-photo@2x.jpg',
                ]
            ],
            [
                'title' => 'Июнь 2017',
                'images' => [
                    'images/june-photo@2x.jpg',
                ]
            ],
            [
                'title' => 'Май 2017',
                'images' => [
                    'images/may-photo@2x.jpg',
                ]
            ],
            [
                'title' => 'Апрель 2017',
                'images' => [
                    'images/april-photo@2x.jpg',
                ]
            ],
			[
                'title' => 'Март 2017',
                'images' => [
                    'images/march-photo%402x.jpg',
                ]
            ],
			[
                'title' => 'Февраль 2017',
                'images' => [
                    'images/february-photo%402x.jpg',
                ]
            ],
			[
                'title' => 'Январь 2017',
                'images' => [
                    'images/january-photo%402x.jpg',
                ]
            ],
        ]
    @endphp

    <div class="gallery-wrapper">

        @foreach( $gallery as $block )
            <div class="gallery">
                @php
                    foreach ($block['images'] as $key => $image) {
                        if (!$key) {
                @endphp
                <a class="gallery__link" href="{{ $image }}" data-fancybox="{{ $block['title'] }}"
                   data-thumbs='{"autoStart":true}'>
                    <img class="gallery__photo-preview" data-object-fit="cover" src="{{ $image }}" alt="{{ $block['title'] }}">
                    <div class="gallery__overlay">
                        <div class="gallery__title">{{ $block['title'] }}</div>
                    </div>
                </a>
                @php
                    } else {
                @endphp
                <a class="gallery__link" href="{{ $image }}" data-fancybox="{{ $block['title'] }}"
                   data-thumb="{{ $image }}"></a>
                @php
                    }
                }
                @endphp
            </div>
        @endforeach

    </div>

</main>

<!-- JS -->
@include('muse.global.scripts')

<!-- Custom JS -->


</body>
</html>
