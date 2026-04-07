<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Выберите квартиру в ЖК Позитив">
    <title>Визуальный подборщик</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4032550449"/>
    <link rel="stylesheet" type="text/css" href="css/master_top.css?crc=4079322621"/>
    <link rel="stylesheet" href="css/new/viberite_kvartiru_v_gk_pozitiv.css">
    <link rel="stylesheet" href="css/header.css">

<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
        {'gtm.start': new Date().getTime(),event:'gtm.js'}
    );var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TTM4V77');
	</script>
<!-- End Google Tag Manager -->

    <script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>

</head>

<body>
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
               'menu' => 'hod '
           ],
       ]
   @endphp
   <nav class="menu">
     <ul class="menu-list">
       @foreach( $menu as $item )
       <li class="menu-item">
           <a class="menu-{{$item['menu']}} shift"
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

    <h1 class="page-title">Квартиры в&nbsp;ЖК&nbsp;Позитив</h1>

    <div class="page-subtitle">выберите секцию на&nbsp;плане</div>

    <div class="details js-details">
        <div class="details__block">
            <div class="details__number js-building">1</div>
            <div class="details__description">корпус</div>
        </div>
        <div class="details__block details__block--section">
            <div class="details__number js-section">1</div>
            <div class="details__description details__description--section">секция</div>
        </div>
    </div>

    <div class="genplan">
        <img class="genplan__image" src="images/genplan.jpg" alt="Генеральный план ЖК Позитив">

        <img class="genplan__railway" src="images/zhd-station@2x.png" alt="3 км до ж/д станции Новопеределкино">
        <img class="genplan__metro" src="images/5-min-to metro@2x.png" alt="5 минут до метро">

        @php
            $buildings = [
                [
                    "M180 363.4l2.5-2.5h36.4l1.7 2.5 4.1.8 1.7 5.8 24 .8 46.3 115.9-13.2 30.6h-61.3l-.8-3.3h-7.5L156 396.5l14.9-25.7 3.7.4z",
                    "M180 363.4c.8-.6 1.7-1.1 2.5-1.7h37.3c.3.6.6 1.1.8 1.7l4.1.8 1.7 5.8 24 .8 32.3 80.3 19.9-47.2-56.3-128.3h-34.8c-4.4 6.6-8.8 13.2-13.2 19.9h-7.5c-2.8 4.4-5.5 8.8-8.3 13.2.7 2.6 1.4 5.2 2.1 7.9l-12 18.6c.1 1.5.3 3 .4 4.6-.7 1.2-1.4 2.5-2.1 3.7 3 6.6 6.1 13.2 9.1 19.9z",
                    "M211.5 275.6l10.7-17.4-2.5-5.8 6.7-10.7h6.6l11.6-17.4h19l.8-1.7h10l3.3 8.3 43 132.5-18.2 40.5L246.6 276z",
                ],
                [
                    "M335.6 255.7h13.3l2.5-4.9h17.4l.8 5.8H379.5l-4.1 18.2 17.4 86.1H358l-2.5-5h-6.6l-24-83.6 2.9-6.2h3.3z",
                    "M421.7 274l14.9 86.9h-43.8L375.4 274l4.1-17.4h15.7l1.7-5.8h17.4l.4 5.4h10.8z",
                    "M471.4 256.6l-2.5 17.4 8.3 86.9h-40.6L421.7 274l3.3-17.4h15.7l1.2-5.4h18.2c-.1 1.8-.3 3.6-.4 5.4h11.7z",
                    "M471.4 256.6h14.9l1.7-5h16.5l.9 5h14.9l.8 9.9.8.8 8.3 71.2-.8 17.4h-10.8v5h-41.4l-8.3-86.9z",
                ],
                [
                    "M547.6 268.2h4.1v-11.6h21.5l.8-5h16.6v5h21.5l.8 106-51.3-.8v-4.1h-8.3c-2.3-28-4.7-56-7-84h.8l.5-5.5z",
                    "M612.1 255.7h20.7l.9-4.1h16.5v4.1h21.6v106H613z",
                    "M671.8 256.6l-.8 103.5v1.7h49.7v-4.1l1.7-.8h7.5l7.5-83.6v-6.6l-3.7-.4c-.4-3.7-.8-7.5-1.2-11.2h-22.4v-5h-17.4c-.1 1.8-.3 3.6-.4 5.4h-19.9l-.6 1.1z",
                ],
                [
                    "M761.2 267.3l-8.3 71.2.8 18.2h10.8v4.2h39.7l10.8-86.1-5.8-19.1h-13.3l-.8-4.1h-17.4l-.4 4.6h-14.1l-.8 10.7z",
                    "M803.4 360.9h42l15.9-86.8-6.7-18.3H842l-1.7-5h-17.6l-.4 4.6h-13.5l5.9 19.1z",
                    "M854.7 255.7h14.1v-4.1H887l.8 5h15.7c1.4 6.1 2.8 12.1 4.1 18.2l-19 86.1h-43l15.3-86.5-6.2-18.7z",
                    "M903.6 256.6h9.9l.8-5h18.2l1.7 5 13.2-.9 5 11.6h3.3l2.5 5.8-24 83.6h-7.5v4.2h-38l18.6-85.7z",
                ],
                [
                    "M1026.9 372.5h24l2.5-5.8h6.6v-5h36.4l7.5 10.8h3.3l15.7 27.3-58.7 115.9h-14.1l-3.3 3.3-53-.8-12.4-30.7z",
                    "M981.4 409.7l49.6-133.3h35.6l4.2 5.8h4.1l32.3 48.9-1.7 4.1 1.7 1.7 4.1.8-12.3 27.8-3-3.4h-36.4l-1.7 4.2h-4.1l-3.3 6.6h-23.8l-31.2 79-7.9-16.1 2.5-5z",
                    "M996.3 232.6h3.3l1.6-7.5h17.4v-1.6h10.8l5 7.4h6.6l26.9 41.8-3.3.8 2.5 3.4h-34.8L981 411l-8.3-19.1h-5l-5-13.2 1.7-5-7.5-19.9z",
                ],
                [
                    "M668.2 376.5l-.8 114.2v1.8h50c.2-1.5.4-3 .5-4.6l.3-1.2h9.8c2.2-29.7 4.8-59.5 7.8-89.5l.6-5.7c-1.7-.3-3.3-.6-5-.8 0-1.1 0-2.2-.1-3.3-.1-4.3-.4-8.4-.8-12.4-5.9-.3-11.8-.6-17.7-.8-.3-1.4-.6-2.8-.8-4.1h-20.1c-.3 1.7-.6 3.3-.8 5-7.5.3-15.1.6-22.6.8-.1.1-.2.3-.3.6z",
                    "M608.3 375.6h20.8l.8-4.6c6.2-.1 12.4-.1 18.7-.2.3 1.7.6 3.3.8 5 6.3-.1 12.5-.2 18.8-.2v117h-59l-.9-117z",
                    "M543.4 388.3h4.2c.3-4.2.5-8.4.8-12.6h18.2c.3-1.7.6-3.3.8-5h18.2c.3 1.6.7 3.2 1 4.7h21.6l.8 117h-47.5v-5.8h-11.6c-2.6-30.8-5.2-61.6-7.9-92.4h.8l.6-5.9z",
                ],
                [
                    "M71.5 246.9l11.4-17.2h50.5l-11.9 18.7L169.1 367l-11.8.1-1.6-1.5-21.9.7-.8-2.1-9-.2-.2.9h-1.3l-51-118z",
                    "M121.6 248.4l11.9-18.7H182l21.6 62.9-1.8 2.7-7.7.2-8.4 11.4 1.7 7.6-11.3 16.7-.6 6.1.7 1.5 8.9 20.2-5.5 7.8-10.6.1-47.4-118.5z",
                ],
            ]
        @endphp

        <svg class="genplan__hover-wrapper" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1280 720">
            @foreach( $buildings as $building => $sections )
                @foreach( $sections as $section => $path )
                    @if(
                        (1 == $building+1 && 3 == $section+1) ||
                        (5 == $building+1 && 1 == $section+1) ||
                        (5 == $building+1 && 2 == $section+1) ||
                        (2 == $building+1) ||
                        (3 == $building+1) ||
                        (4 == $building+1) ||
                        (6 == $building+1)
                        )
                        <a xlink:href="k{{$building+1}}-s{{$section+1}}.html" style="pointer-events: none; opacity: 0;">
                            <path data-building="{{$building+1}}" data-section="{{$section+1}}" d="{{$path}}"/>
                        </a>
                    @else
                        <a xlink:href="k{{$building+1}}-s{{$section+1}}.html">
                            <path class="genplan__hover" data-building="{{$building+1}}" data-section="{{$section+1}}" d="{{$path}}"/>
                        </a>
                    @endif
                @endforeach
            @endforeach
        </svg>
    </div>

</main>

<!-- JS -->
@include('muse.global.scripts')

<!-- Custom JS -->

<!-- Section hover engine -->
<script>
    $(function () {
        $('.genplan__hover')
            .mouseover(function () {
                $('.js-building').text($(this).data('building'));
                $('.js-section').text($(this).data('section'));
                $('.js-details').addClass('visible');
            })
            .mouseout(function () {
                $('.js-details').removeClass('visible');
            });
    });
</script>

</body>
</html>
