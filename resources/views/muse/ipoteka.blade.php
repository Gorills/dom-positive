<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <title>
        ЖК «Позитив» | Квартиры в Румянцево. Официальный сайт.
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4032550449"/>
    <link rel="stylesheet" type="text/css" href="css/master_top.css?crc=4079322621"/>
    <link rel="stylesheet" href="/static/mortgage_calc/css/main.9b6f510b.css" attr="attr"/>
    <link rel="stylesheet" href="/static/mortgage_calc/css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="css/header.css">

    <link rel="shortcut icon" href="/images/favicon.ico">

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

<body class="page-">
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
              'menu' => 'ipoteka active'
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
              'menu' => 'hod'
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


<div class="l-wrapper">
    <div class="page-overlay js-menuClose"></div>
    <div class="l-content">
        <div class="section banner">
            <div class="banner__inner">
                <div class="banner__grid">
                    <div class="banner__content">
                        <div class="banner__title">удобные условия</div>
                            <div class="banner__subtitle">ипотечного кредитования</div>
                    </div>
                    <div class="banner__image">
                        <img class="fadeInDown animated1" src="/static/mortgage_calc/img/ipoteka.jpg" alt="alt" />
                    </div>
                </div>
            </div>
        </div>
        <section class="section heading">
            <div class="section__inner">
                <h2 class="heading__title">Квартиры в ипотеку от застройщика</h2>
                <div class="heading__text">Компания Capital Group предлагает своим клиентам специальные условия
                    приобретения квартир в рамках программ ипотечного кредитования от банков-партнеров
                </div>
                {{--<div class="clients-list">
                    <div class="clients-list__item">
                        <img src="/static/mortgage_calc/img/vtb-24.png" alt="alt"/>
                    </div>
                    <div class="clients-list__item">
                        <img src="/static/mortgage_calc/img/sberbank.png" alt="alt"/>
                    </div>
                    <div class="clients-list__item">
                        <img src="/static/mortgage_calc/img/uralsib.png" alt="alt"/>
                    </div>
                    <div class="clients-list__item">
                        <img src="/static/mortgage_calc/img/promsvyazbank.png" alt="alt"/>
                    </div>
                </div>--}}
            </div>
        </section>
        <section class="section calc">
            <div id="root" data-api-url="{{ url('api/mortgage-terms') }}"></div>

        </section>
        <div class="section bottom-note">
            <div class="section__inner">
                <div class="bottom-note__text">
                    <!-- *Процентная ставка в рублях РФ в размере 7,3% действует в течение всего
                    срока кредитования с даты заключения кредитного договора в случае оформления комплексного
                    страхования. Ставка обеспечивается за счет субсидирования из средств
                    застройщика ООО «ЭлитСтройГруп» с учетом дисконта 0,3% к базовой ставке в размере 9,6% годовых. -->
                </div>
            </div>
        </div>
        <div class="section order-button">
            <div class="section__inner">
                <div class="order-button__title">
                    Вы можете заказать звонок и наш оператор перезвонит вам в течение 26 секунд.
                </div>
                <a href="#ck_callback_button" style="text-decoration: none">
                    <div class="btn">
                        Заказать звонок
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="/static/mortgage_calc/js/main.95d1bf14.js"></script>
{{--<script type="text/javascript" src="//callkeeper.ru/modules/widget/db/?callkeeper_code=174218fabd3b101b146e2b600fc43ffc" charset="UTF-8"></script>--}}
{{--<script type="text/javascript" src="//callkeeper.ru/modules/widget/callkeeper.js" charset="UTF-8"></script>--}}
{{--<script type="text/javascript">--}}
    {{--function ct(w,d,e,c){--}}
        {{--var a='all',b='tou',src=b+'c'+'h';src='m'+'o'+'d.c'+a+src;--}}
        {{--var jsHost="https://"+src,s=d.createElement(e),p=d.getElementsByTagName(e)[0];--}}
        {{--s.async=1;s.src=jsHost+"."+"r"+"u/d_client.js?param;"+(c?"client_id"+c+";":"")+"ref"+escape(d.referrer)+";url"+escape(d.URL)+";cook"+escape(d.cookie)+";";--}}
        {{--p.parentNode.insertBefore(s,p);--}}
        {{--if(!w.jQuery){var jq=d.createElement(e);--}}
            {{--jq.src=jsHost+"."+"r"+'u/js/jquery-1.7.min.js';--}}
            {{--p.parentNode.insertBefore(jq,p);}}--}}
    {{--if(!!window.GoogleAnalyticsObject){window[window.GoogleAnalyticsObject](function(tracker){--}}
        {{--if (!!window[window.GoogleAnalyticsObject].getAll()[0])--}}
        {{--{ct(window,document,'script', window[window.GoogleAnalyticsObject].getAll()[0].get('clientId'))}--}}
        {{--else{ct(window,document,'script', null);}});--}}
    {{--}else{ct(window,document,'script', null);}--}}
{{--</script>--}}
</body>
</html>
