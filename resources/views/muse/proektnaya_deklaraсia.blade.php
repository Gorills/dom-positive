<!DOCTYPE html>
<html class="nojs html" lang="ru-RU">
<head>

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="description" content="{{ $description }}"/>
    <meta name="keywords" content="{{ $keywords }}"/>
    <meta name="generator" content="2017.1.0.379"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript">
        // Update the 'nojs'/'js' class on the html node
        document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

        // Check that all required assets are uploaded and up-to-date
        if (typeof Muse == "undefined") window.Muse = {};
        window.Muse.assets = {
            "required": ["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "require.js", "jquery.museresponsive.js", "proektnaya_deklara_ia.css"],
            "outOfDate": []
        };
    </script>

    <link rel="shortcut icon" href="images/favicon.ico?crc=238351894"/>
    <title>{{ $title }}</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4032550449"/>
    <link rel="stylesheet" type="text/css" href="css/master_top.css?crc=4079322621"/>
    <link rel="stylesheet" type="text/css" href="css/proektnaya_deklara_ia.css?crc=4273818487" id="pagesheet"/>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <!-- IE-only CSS -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_top.css?crc=4022659591"/>
    <link rel="stylesheet" type="text/css" href="css/nomq_proektnaya_deklara_ia.css?crc=309498184" id="nomq_pagesheet"/>
    <![endif]-->
    <!--custom head HTML-->

    <!--HTML Widget code-->

    <script type="text/javascript">
        window.alert = function () {
        };
    </script>

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
<body class="museBGSize">

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
              'menu' => 'dokumenti active'
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

<div class="breakpoint active" id="bp_infinity" data-min-width="1337"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox" id="page"><!-- group -->
        <div class="Button SmartPopUp rounded-corners clearfix grpelem shared_content" id="buttonu395513"
             data-visibility="changed" style="visibility:hidden" data-sizePolicy="fixed"
             data-pintopage="page_fixedCenter" data-content-guid="buttonu395513_content"><!-- container box -->
            <div class="grpelem" id="u424427"><!-- custom html -->
                <iframe src="https://xn----dtbenfaypcj0b.xn--p1ai/callbackform.html" width="468" height="500" frameBorder="0">
                    Ваш браузер не поддерживает плавающие фреймы!
                </iframe>
            </div>
        </div>
        <div class="size_fixed grpelem shared_content" id="u313674" data-sizePolicy="fixed" data-pintopage="page_fluidx"
             data-content-guid="u313674_content"><!-- custom html -->

            <div></div>

        </div>
        <div class="size_fixed grpelem shared_content" id="u81075" data-sizePolicy="fixed" data-pintopage="page_fluidx"
             data-content-guid="u81075_content"><!-- custom html -->

            <div></div>

        </div>
        <div class="size_fixed grpelem shared_content" id="u81092" data-sizePolicy="fixed" data-pintopage="page_fluidx"
             data-content-guid="u81092_content"><!-- custom html -->

            <div></div>

        </div>
        <div class="size_fixed grpelem shared_content" id="u81122" data-sizePolicy="fixed" data-pintopage="page_fluidx"
             data-content-guid="u81122_content"><!-- custom html -->

            <div></div>

        </div>
        <div class="clearfix grpelem shared_content" id="pu17989-4" data-content-guid="pu17989-4_content">
            <!-- column -->
            <!-- m_editable region-id="editable-static-tag-U17989-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->

            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/ИНСТРУКЦИЯ по объекту.docx" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            Инструкция по объекту</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/1PD.doc" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            Проектная декларация 25.09.2016</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/2PD.doc" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            Проектная декларация 30.09.2016</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/3PD.doc" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            Проектная декларация 13.12.2016</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/4PD.doc" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            Проектная декларация 31.12.2016</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/5PD.doc" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            Проектная декларация 31.03.2017</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/6PD.doc" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            Проектная декларация 30.06.2017</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/7PD.doc" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            Проектная декларация 30.09.2017</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/8PD.doc" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            Проектная декларация 31.12.2017</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/9PD.doc" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            Проектная декларация 31.03.2018</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/10pd_18jun2018_pd.doc" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Проектная декларация
                            18.07.2018 </p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/proektnaya-deklaracia-31.07.2018.doc" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Проектная декларация
                            31.07.2018 </p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/proektnaya-deklaracia-31.01.2019.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Проектная декларация
                            31.01.2019 </p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/proektnaya-deklaraсia-21.02.2019.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Проектная декларация
                            21.02.2019 </p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/proektnaya-deklaraсia-01.03.2019.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Проектная декларация
                            01.03.2019 </p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/240419ПД_ПОЗИТИВ.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Проектная декларация
                            24.04.2019 </p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/260719ПД_Жилой комплекс «ПОЗИТИВ».pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Проектная декларация
                            25.07.2019 </p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/ПД_03092019.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Проектная декларация
                            03.09.2019 </p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/250919ПД.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Проектная декларация
                            25.09.2019 </p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/PD18.02.2020.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Проектная декларация
                            18.02.2020 </p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/audit-zakluchenie.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            аудиторское заключение за 2017 год</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/auditorskoe-zaklyuchenie-za-2018-god.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            аудиторское заключение за 2018 год</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/Аудиторское_заключение_2019.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">
                            Аудиторское заключение за 2019 год</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u164295"><!-- group -->
                <div class="rounded-corners grpelem" id="u164298" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U164296" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu164296"
                   href="/static/documents/Разрешение на строительство Румянцево (корр.).pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U164296" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U164297-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u164297-4" data-muse-uid="U164297" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><h3 id="u164297-2">
                            разрешение на строительство</h3></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u156466"><!-- group -->
                <div class="rounded-corners grpelem" id="u156469" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U156467" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu156467"
                   href="/static/documents/polozhitelnoe-zakluchenie-ekspertizi.pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U156467"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U156468-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u156468-4" data-muse-uid="U156468" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u156468-2">
                            положительное заключение экспертизы 2016</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u156466"><!-- group -->
                <div class="rounded-corners grpelem" id="u156469" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U156467" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu156467"
                   href="/static/documents/Положительное заключение экспертизы (подписанное).pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U156467"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U156468-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u156468-4" data-muse-uid="U156468" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u156468-2">
                            положительное заключение экспертизы 2019</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <!--<div class="clearfix colelem" id="u156478"><!-- group
             <div class="rounded-corners grpelem" id="u156481" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame</div>
             <!-- m_editable region-id="editable-static-tag-U156479" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
            <!-- <div class="pointer_cursor Button clearfix grpelem" id="buttonu156479" data-visibility="changed" style="visibility:hidden" data-muse-uid="U156479" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box
             <a class="block" target="_blank" href="/static/pd.pdf"><!-- Block link tag </a>
             <!-- m_editable region-id="editable-static-tag-U156480-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link"
             <a class="nonblock nontext clearfix grpelem" id="u156480-4" href="/static/documents/dogovor-arendi-zemelynogo-uchastka.pdf" target="_blank" data-muse-uid="U156480" data-muse-type="txt_frame" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content <h4 id="u156480-2">договор аренды земельного участка</h4></a>
             <!-- /m_editable
            </div>
            <!-- /m_editable -->


            <!-- </div> -->


            <div class="clearfix colelem" id="u711298"><!-- group -->
                <div class="rounded-corners grpelem" id="u711301" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U711299" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu711299"
                   href="/static/documents/allgds.zip" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U711299" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U711300-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u711300-4" data-muse-uid="U711300" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u711300-2">
                            генеральные договоры страхования</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <!--<div class="clearfix colelem" id="u156586"><!-- group
             <div class="rounded-corners grpelem" id="u156589" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame </div>
             <!-- m_editable region-id="editable-static-tag-U156587" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link"
             <a class="nonblock nontext Button clearfix grpelem" id="buttonu156587" href="/static/documents/ds.pdf" target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U156587" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box --><!-- m_editable region-id="editable-static-tag-U156588-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" <div class="clearfix grpelem" id="u156588-4" data-muse-uid="U156588" data-muse-type="txt_frame" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content <p id="u156588-2">договор аренды земельного участка (доп. соглашение)</p></div><!-- /m_editable </a>
      <!-- /m_editable
     </div> -->
            <!--<div class="clearfix colelem" id="u156598"><!-- group
             <div class="rounded-corners grpelem" id="u156601" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame</div>
             <!-- m_editable region-id="editable-static-tag-U156599" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link"
             <a class="nonblock nontext Button clearfix grpelem" id="buttonu156599" href="/static/documents/ds-1.pdf" target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U156599" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box --><!-- m_editable region-id="editable-static-tag-U156600-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" <div class="clearfix grpelem" id="u156600-4" data-muse-uid="U156600" data-muse-type="txt_frame" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content <p id="u156600-2">договор аренды земельного участка (доп. соглашение №1)</p></div><!-- /m_editable </a>
      <!-- /m_editable
     </div>-->

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/1К_100__1УЧ (1).docx" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>ДОГОВОР УЧАСТИЯ В
                            ДОЛЕВОМ СТРОИТЕЛЬСТВЕ, корпус 1</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/2К_100__1УЧ.docx" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>ДОГОВОР УЧАСТИЯ В
                            ДОЛЕВОМ СТРОИТЕЛЬСТВЕ, корпус 2</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/7К_100__1УЧ_Румянцево.docx" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>ДОГОВОР УЧАСТИЯ В
                            ДОЛЕВОМ СТРОИТЕЛЬСТВЕ, корпус 7</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/zos4,5.pdf" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>ЗАКЛЮЧЕНИЕ О
                            СООТВЕТСТВИИ ПОСТРОЕННОГО ОБЪЕКТА. Корпус № 4, 5 – 2 этап</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/rnvove1k.pdf" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> РАЗРЕШЕНИЕ НА ВВОД
                            ОБЪЕКТА В ЭКСПЛУАТАЦИЮ (корпус 1)</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/РВ_корп.4_(корп.2-строит).pdf" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> РАЗРЕШЕНИЕ НА ВВОД
                            ОБЪЕКТА В ЭКСПЛУАТАЦИЮ (корпус 2)</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/РВ к.3.pdf" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> РАЗРЕШЕНИЕ НА ВВОД
                            ОБЪЕКТА В ЭКСПЛУАТАЦИЮ (корпус 3)</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/RV_Rumyantsevo_4k.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> РАЗРЕШЕНИЕ НА ВВОД
                            ОБЪЕКТА В ЭКСПЛУАТАЦИЮ (корпус 4)</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/RV_Rumyantsevo_5k.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> РАЗРЕШЕНИЕ НА ВВОД
                            ОБЪЕКТА В ЭКСПЛУАТАЦИЮ (корпус 5)</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/РВ к.6.pdf" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> РАЗРЕШЕНИЕ НА ВВОД
                            ОБЪЕКТА В ЭКСПЛУАТАЦИЮ (корпус 6)</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/rzrsh-7k.pdf" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> РАЗРЕШЕНИЕ НА ВВОД
                            ОБЪЕКТА В ЭКСПЛУАТАЦИЮ (корпус 7)</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/zos-3-6k.pdf" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> ЗАКЛЮЧЕНИЕ О
                            СООТВЕТСТВИИ 3 И 6 КОРПУСА</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/zos-7k.pdf" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> ЗАКЛЮЧЕНИЕ О СООТВЕТСВИИ 7 КОРПУСА</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/otchetnost-2017.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> БУХГАЛТЕРСКИЙ БАЛАНС
                            НА 31.12.2017</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/1-kvartal-otchetnost.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> БУХГАЛТЕРСКИЙ БАЛАНС
                            НА 31.03.2018</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/bb30jule2018.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> БУХГАЛТЕРСКИЙ БАЛАНС
                            НА 30.06.2018</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/Бухгалтерский баланс за 9 месяцев_2018 год.pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> БУХГАЛТЕРСКИЙ БАЛАНС
                            НА 30.09.2018</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/Buh_otch_2018.pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Бухгалтерский баланс на 31.12.2018</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/Balanse.pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Бухгалтерский баланс на 31.03.2019</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/buhgalterskii-balans-30.06.2019.pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Бухгалтерский баланс на 30.06.2019</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/Баланс-за-9-месяцев-2019.pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Бухгалтерский баланс на 30.09.2019</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/Бухгалтерская_отчетность_31.12.2019.pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Бухгалтерский баланс на 31.12.2019</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/Бухгалтерский_баланс_на_31_марта 2020г..pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Бухгалтерский баланс на 31.03.2020</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/Бухгалтерский_баланс_на_30_июня_2020г..pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Бухгалтерский баланс на 30.06.2020</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/Бухгалтерский_баланс_на_31_марта 2020г..pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Бухгалтерский баланс на 31.03.2020</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/Бухгалтерский_баланс_на_30_июня_2020г..pdf"
                   target="_blank" data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685"
                   data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Бухгалтерский баланс на 30.06.2020</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/vipiska-egrn.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> Выписка по ЕГРН</p>
                    </div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/dlya-ddu-1.09.2018.doc" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> РЕКВИЗИТЫ РАСЧЕТНОГО
                            СЧЕТА ЗАСТРОЙЩИКА ДЛЯ ДДУ</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/gpzu-rumyantsevo.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> ГРАДОСТРОИТЕЛЬНЫЙ ПЛАН
                            ЗЕМЕЛЬНОГО УЧАСТКА</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>

            <div class="clearfix colelem" id="u496683"><!-- group -->
                <div class="rounded-corners grpelem" id="u496684" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U496685" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu496685"
                   href="/static/documents/new-genplan-29.05.18.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U496685" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U496686-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u496686-4" data-muse-uid="U496686" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p> ГЕНПЛАН</p></div>
                    <!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>


            <!-- m_editable region-id="editable-static-tag-U177970" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
            <a class="nonblock nontext Button clearfix colelem" id="buttonu177970"
               href="http://www.dom-pozitiv.ru/static/documents/all_docs_Pozitiv.zip" target="_blank" data-visibility="changed"
               style="visibility:hidden" data-muse-uid="U177970" data-sizePolicy="fixed"
               data-pintopage="page_fixedCenter" data-leftAdjustmentDoneBy="pu17989-4"><!-- container box -->
                <!-- m_editable region-id="editable-static-tag-U177971-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                <div class="clearfix grpelem" id="u177971-4" data-muse-uid="U177971" data-muse-type="txt_frame"
                     data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>документы не открываются?
                        скачайте их одним файлом.</p></div><!-- /m_editable --></a>
            <!-- /m_editable -->
            <div class="clearfix colelem" id="u17989-4" data-muse-uid="U17989" data-muse-type="txt_frame"
                 style="margin-top:20px;" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed"
                 data-pintopage="page_fixedCenter" data-leftAdjustmentDoneBy="pu17989-4"><!-- content -->
                <h1 id="u17989-2">Архив</h1>
            </div>
            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/dogovor-arendi-zemelynogo-uchastka.pdf" target="_blank"
                   data-visibility="changed" style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">Договор
                            аренды земельного участка</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/ds.pdf" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">Договор
                            аренды земельного участка (доп. соглашение)</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u475202"><!-- group -->
                <div class="rounded-corners grpelem" id="u475203" data-sizePolicy="fixed"
                     data-pintopage="page_fixedCenter"><!-- simple frame --></div>
                <!-- m_editable region-id="editable-static-tag-U475204" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
                <a class="nonblock nontext Button clearfix grpelem" id="buttonu475204"
                   href="/static/documents/ds-1.pdf" target="_blank" data-visibility="changed"
                   style="visibility:hidden" data-muse-uid="U475204" data-sizePolicy="fixed"
                   data-pintopage="page_fixedCenter"><!-- container box -->
                    <!-- m_editable region-id="editable-static-tag-U475205-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link" -->
                    <div class="clearfix grpelem" id="u475205-4" data-muse-uid="U475205" data-muse-type="txt_frame"
                         data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p id="u475205-2">Договор
                            аренды земельного участка (доп. соглашение №1)</p></div><!-- /m_editable --></a>
                <!-- /m_editable -->
            </div>
            <!-- m_editable region-id="editable-static-tag-U156378-BP_infinity" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
            <div class="clearfix colelem" id="u156378-4" data-muse-uid="U156378" data-muse-type="txt_frame"
                 data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"
                 data-leftAdjustmentDoneBy="pu17989-4"><!-- content -->
                <p id="u156378-2">В обеспечение исполнения обязательств Застройщика (залогодателя) по Договорам долевого
                    участия с момента государственной регистрации каждого Договора долевого участия у Участника долевого
                    строительства (залогодержателя) считаются находящимися в залоге принадлежащее Застройщику право
                    аренды на Земельный участок общей площадью 58 713 (Пятьдесят восемь тысяч семьсот тринадцать) кв.м.
                    с кадастровым номером 50:21:0110504:280, категория земель – земли населенных пунктов, разрешенное
                    использование: многоэтажная жилая застройка (высотная застройка), расположенном по адресу: город
                    Москва, НАО, п. Московский, вблизи д. Румянцево, участок 3/2, что подтверждается Договором аренды
                    земельного участка от 28 февраля 2014 года, зарегистрированным в Едином государственном реестре прав
                    на недвижимое имущество и сделок с ним «03» июля 2014 г. за № 77-77-17/052/2014-087, заключенным
                    между Застройщиком и ЗАО «Технопарк Румянцево» (место нахождения: 127006, г. Москва, ул. Малая
                    Дмитровка, д. 7; зарегистрировано «19» мая 2006 г. Межрайонной инспекцией Федеральной налоговой
                    службы № 46 по г. Москве за Основным государственным регистрационным номером (ОГРН) 1067746609919;
                    ИНН 7720552872).. Участник долевого строительства извещен и согласен, что Земельный участок может
                    быть в любое время разделен в порядке, соответствующем действующему законодательству РФ по
                    инициативе Застройщика. При этом в обеспечение исполнения обязательств Застройщика переходит
                    исключительно право аренды земельного участка, сформированного непосредственно под Домом.</p>
            </div>
            <!-- /m_editable -->
        </div>
        <!-- m_editable region-id="editable-static-tag-U177991" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
        <a class="nonblock nontext Button museBGSize rounded-corners grpelem shared_content" id="buttonu177991"
           href="http://www.dom-pozitiv.ru/static/documents/all_docs_Pozitiv.zip" data-muse-uid="U177991"
           data-sizePolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="buttonu177991_content"
           style="top: 322px;"><!-- container box --></a>
        <!-- /m_editable -->
        <div class="size_fixed grpelem shared_content" id="u564254" data-sizePolicy="fixed" data-pintopage="page_fluidx"
             data-content-guid="u564254_content"><!-- custom html -->

            <div></div>

        </div>
        <div class="size_fixed grpelem shared_content" id="u637416" data-sizePolicy="fixed" data-pintopage="page_fluidx"
             data-content-guid="u637416_content"><!-- custom html -->

            <div></div>

        </div>
    </div>
    <div class="preload_images">
        <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok-pressed%402x.png?crc=4089351732"
             alt="" src="images/blank.gif?crc=4208392903"/>
        <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok-pressed%402x_2x.png?crc=376901766"
             alt="" src="images/blank.gif?crc=4208392903"/>
        <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok%402x.png?crc=375932546" alt=""
             src="images/blank.gif?crc=4208392903"/>
        <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok%402x_2x.png?crc=4106184686" alt=""
             src="images/blank.gif?crc=4208392903"/>
    </div>
</div>
<div class="breakpoint" id="bp_1336" data-min-width="1176" data-max-width="1336"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
        <span class="Button SmartPopUp rounded-corners clearfix grpelem placeholder"
              data-placeholder-for="buttonu395513_content"><!-- placeholder node --></span>
        <span class="browser_width placeholder"
              data-placeholder-for="u178650-bw_content"><!-- placeholder node --></span>
        <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u183159_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u313674_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81075_content"><!-- placeholder node --></span>
        <div class="clearfix grpelem" id="pu78734-4"><!-- group -->
            <span class="nonblock nontext menu-o-proekte clearfix placeholder" data-placeholder-for="u78734-4_content"><!-- placeholder node --></span>
            <span class="nonblock nontext menu-kvartiry clearfix placeholder" data-placeholder-for="u81071-4_content"><!-- placeholder node --></span>
        </div>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81092_content"><!-- placeholder node --></span>
        <span class="nonblock nontext menu-kak-kupit clearfix placeholder" data-placeholder-for="u81067-4_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81102_content"><!-- placeholder node --></span>
        <span class="nonblock nontext menu-ipoteka clearfix placeholder" data-placeholder-for="u81055-4_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81112_content"><!-- placeholder node --></span>
        <span class="clearfix grpelem placeholder"
              data-placeholder-for="pu81059-4_content"><!-- placeholder node --></span>
        <span class="clearfix grpelem placeholder"
              data-placeholder-for="pu17989-4_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81122_content"><!-- placeholder node --></span>
        <span class="nonblock nontext menu-novosti clearfix placeholder" data-placeholder-for="u81063-4_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81132_content"><!-- placeholder node --></span>
        <span class="nonblock nontext menu-kontakty clearfix placeholder" data-placeholder-for="u81039-4_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81142_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U177991" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
        <span class="nonblock nontext Button museBGSize rounded-corners grpelem placeholder"
              data-placeholder-for="buttonu177991_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <div class="clearfix grpelem" id="pu178651-4"><!-- group -->
            <span class="call_phone_1 clearfix placeholder" data-placeholder-for="u178651-4_content"><!-- placeholder node --></span>
            <span class="nonblock nontext Button rounded-corners callformtrigger transition museBGSize placeholder"
                  data-placeholder-for="buttonu452239_content"><!-- placeholder node --></span>
        </div>
        <div class="clearfix grpelem" id="pu564254"><!-- column -->
            <span class="size_fixed colelem placeholder" data-placeholder-for="u564254_content"><!-- placeholder node --></span>
            <span class="size_fixed colelem placeholder" data-placeholder-for="u637416_content"><!-- placeholder node --></span>
        </div>
    </div>
    <div class="preload_images">
        <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok-pressed%402x.png?crc=4089351732"
             alt="" src="images/blank.gif?crc=4208392903"/>
        <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok-pressed%402x_2x.png?crc=376901766"
             alt="" src="images/blank.gif?crc=4208392903"/>
        <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok%402x.png?crc=375932546" alt=""
             src="images/blank.gif?crc=4208392903"/>
        <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok%402x_2x.png?crc=4106184686" alt=""
             src="images/blank.gif?crc=4208392903"/>
    </div>
</div>
<div class="breakpoint" id="bp_1175" data-max-width="1175"><!-- responsive breakpoint node -->
    <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
        <span class="Button SmartPopUp clearfix grpelem placeholder" data-placeholder-for="buttonu395513_content"><!-- placeholder node --></span>
        <div class="browser_width temp_no_id" data-orig-id="u178650-bw">
            <span class="placeholder" data-placeholder-for="u178650_content"><!-- placeholder node --></span>
        </div>
        <span class="nonblock nontext placeholder"
              data-placeholder-for="u183159_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u313674_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u637416_content"><!-- placeholder node --></span>
        <span class="nonblock nontext menu-o-proekte clearfix placeholder" data-placeholder-for="u78734-4_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81075_content"><!-- placeholder node --></span>
        <span class="clearfix grpelem placeholder"
              data-placeholder-for="pu81067-4_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81092_content"><!-- placeholder node --></span>
        <span class="nonblock nontext menu-ipoteka clearfix placeholder" data-placeholder-for="u81055-4_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81102_content"><!-- placeholder node --></span>
        <div class="clearfix grpelem" id="pu637409-4"><!-- group -->
            <span class="nonblock nontext MuseLinkActive menu-dokumenti clearfix placeholder"
                  data-placeholder-for="u637409-4_content"><!-- placeholder node --></span>
            <span class="placeholder" data-placeholder-for="u649023_content"><!-- placeholder node --></span>
        </div>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81112_content"><!-- placeholder node --></span>
        <span class="nonblock nontext menu-gallery clearfix placeholder" data-placeholder-for="u81059-4_content"><!-- placeholder node --></span>
        <span class="clearfix grpelem placeholder"
              data-placeholder-for="pu17989-4_content"><!-- placeholder node --></span>
        <span class="nonblock nontext menu-novosti clearfix placeholder" data-placeholder-for="u81063-4_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81122_content"><!-- placeholder node --></span>
        <span class="nonblock nontext menu-kontakty clearfix placeholder" data-placeholder-for="u81039-4_content"><!-- placeholder node --></span>
        <span class="size_fixed grpelem placeholder"
              data-placeholder-for="u81132_content"><!-- placeholder node --></span>
        <span class="call_phone_1 clearfix placeholder" data-placeholder-for="u178651-4_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U177991" template="proektnaya_deklaraсia.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
        <span class="nonblock nontext Button museBGSize rounded-corners grpelem placeholder"
              data-placeholder-for="buttonu177991_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="nonblock nontext Button callformtrigger transition placeholder"
              data-placeholder-for="buttonu452239_content"><!-- placeholder node --></span>
        <div class="clearfix grpelem temp_no_id" data-orig-id="pu564254"><!-- column -->
            <span class="size_fixed colelem placeholder" data-placeholder-for="u564254_content"><!-- placeholder node --></span>
            <span class="size_fixed colelem placeholder"
                  data-placeholder-for="u81142_content"><!-- placeholder node --></span>
        </div>
    </div>
</div>
<!-- JS includes -->
<script type="text/javascript">
    if (document.location.protocol != 'https:') document.write('\x3Cscript src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript">\x3C/script>');
</script>
<script type="text/javascript">
    window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js?crc=209076791" type="text/javascript">\x3C/script>');
</script>
<!-- Other scripts -->
<script type="text/javascript">
    // Decide weather to suppress missing file error or not based on preference setting
    var suppressMissingFileError = false
</script>
<script type="text/javascript">
    window.Muse.assets.check = function (d) {
        if (!window.Muse.assets.checked) {
            window.Muse.assets.checked = !0;
            var b = {}, c = function (a, b) {
                if (window.getComputedStyle) {
                    var c = window.getComputedStyle(a, null);
                    return c && c.getPropertyValue(b) || c && c[b] || ""
                }
                if (document.documentElement.currentStyle) return (c = a.currentStyle) && c[b] || a.style && a.style[b] || "";
                return ""
            }, a = function (a) {
                if (a.match(/^rgb/)) return a = a.replace(/\s+/g, "").match(/([\d\,]+)/gi)[0].split(","), (parseInt(a[0]) << 16) + (parseInt(a[1]) << 8) + parseInt(a[2]);
                if (a.match(/^\#/)) return parseInt(a.substr(1),

                    16);
                return 0
            }, g = function (g) {
                for (var f = document.getElementsByTagName("link"), h = 0; h < f.length; h++) if ("text/css" == f[h].type) {
                    var i = (f[h].href || "").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);
                    if (!i || !i[1] || !i[2]) break;
                    b[i[1]] = i[2]
                }
                f = document.createElement("div");
                f.className = "version";
                f.style.cssText = "display:none; width:1px; height:1px;";
                document.getElementsByTagName("body")[0].appendChild(f);
                for (h = 0; h < Muse.assets.required.length;) {
                    var i = Muse.assets.required[h], l = i.match(/([\w\-\.]+)\.(\w+)$/), k = l && l[1] ?

                        l[1] : null, l = l && l[2] ? l[2] : null;
                    switch (l.toLowerCase()) {
                        case "css":
                            k = k.replace(/\W/gi, "_").replace(/^([^a-z])/gi, "_$1");
                            f.className += " " + k;
                            k = a(c(f, "color"));
                            l = a(c(f, "backgroundColor"));
                            k != 0 || l != 0 ? (Muse.assets.required.splice(h, 1), "undefined" != typeof b[i] && (k != b[i] >>> 24 || l != (b[i] & 16777215)) && Muse.assets.outOfDate.push(i)) : h++;
                            f.className = "version";
                            break;
                        case "js":
                            h++;
                            break;
                        default:
                            throw Error("Unsupported file type: " + l);
                    }
                }
                d ? d().jquery != "1.8.3" && Muse.assets.outOfDate.push("jquery-1.8.3.min.js") : Muse.assets.required.push("jquery-1.8.3.min.js");

                f.parentNode.removeChild(f);
                if (Muse.assets.outOfDate.length || Muse.assets.required.length) f = "Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.", g && Muse.assets.outOfDate.length && (f += "\nOut of date: " + Muse.assets.outOfDate.join(",")), g && Muse.assets.required.length && (f += "\nMissing: " + Muse.assets.required.join(",")), suppressMissingFileError ? (f += "\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.", console.log(f)) : alert(f)
            };
            location && location.search && location.search.match && location.search.match(/muse_debug/gi) ?

                setTimeout(function () {
                    g(!0)
                }, 5E3) : g()
        }
    };

    var muse_init = function () {
        require.config({baseUrl: ""});
        require(["jquery", "museutils", "whatinput", "jquery.musepolyfill.bgsize", "jquery.museresponsive"], function (d) {
            var $ = d;
            $(document).ready(function () {
                try {
                    window.Muse.assets.check($);/* body */
                    Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
                    Muse.Utils.detectScreenResolution();/* HiDPI screens */
                    Muse.Utils.prepHyperlinks(true);/* body */
                    (function () {

                        try {


                            $("[data-requiremodule]").removeAttr("data-requiremodule");


                        } catch (e) {

                            Muse.Assert.fail('Error with Widget:Блокиратор ParamHTMLOnDocReady Handler ' + e.toString());

                        }

                    })();/* Widget:Блокиратор */
                    (function () {

                        try {


                            $("[title='menu-o-proekte']").map(function () {

                                var el = $(this);

                                if (!el.hasClass("menu-o-proekte")) {
                                    el.addClass("menu-o-proekte");
                                }

                            });
                            $(".menu-o-proekte").addClass("shift");


                        } catch (e) {

                            Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

                        }

                    })();/* Widget:Ховер */
                    (function () {

                        try {


                            $("[title='menu-kvartiry']").map(function () {

                                var el = $(this);

                                if (!el.hasClass("menu-kvartiry")) {
                                    el.addClass("menu-kvartiry");
                                }

                            });
                            $(".menu-kvartiry").addClass("shift");


                        } catch (e) {

                            Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

                        }

                    })();/* Widget:Ховер */
                    (function () {

                        try {


                            $("[title='menu-kak-kupit']").map(function () {

                                var el = $(this);

                                if (!el.hasClass("menu-kak-kupit")) {
                                    el.addClass("menu-kak-kupit");
                                }

                            });
                            $(".menu-kak-kupit").addClass("shift");


                        } catch (e) {

                            Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

                        }

                    })();/* Widget:Ховер */
                    (function () {

                        try {


                            $("[title='menu-ipoteka']").map(function () {

                                var el = $(this);

                                if (!el.hasClass("menu-ipoteka")) {
                                    el.addClass("menu-ipoteka");
                                }

                            });
                            $(".menu-ipoteka").addClass("shift");


                        } catch (e) {

                            Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

                        }

                    })();/* Widget:Ховер */
                    (function () {

                        try {


                            $("[title='menu-gallery']").map(function () {

                                var el = $(this);

                                if (!el.hasClass("menu-gallery")) {
                                    el.addClass("menu-gallery");
                                }

                            });
                            $(".menu-gallery").addClass("shift");


                        } catch (e) {

                            Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

                        }

                    })();/* Widget:Ховер */
                    (function () {

                        try {


                            $("[title='menu-novosti']").map(function () {

                                var el = $(this);

                                if (!el.hasClass("menu-novosti")) {
                                    el.addClass("menu-novosti");
                                }

                            });
                            $(".menu-novosti").addClass("shift");


                        } catch (e) {

                            Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

                        }

                    })();/* Widget:Ховер */
                    (function () {

                        try {


                            $("[title='menu-kontakty']").map(function () {

                                var el = $(this);

                                if (!el.hasClass("menu-kontakty")) {
                                    el.addClass("menu-kontakty");
                                }

                            });
                            $(".menu-kontakty").addClass("shift");


                        } catch (e) {

                            Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

                        }

                    })();/* Widget:Ховер */
                    (function () {

                        try {


                            var el = $("a.callformtrigger");
                            var hash = el.attr("href");
                            hash = hash.replace("http://", "");
                            el.attr("href", hash);


                        } catch (e) {

                            Muse.Assert.fail('Error with Widget:Якорный управляющий ParamHTMLOnDocReady Handler ' + e.toString());

                        }

                    })();/* Widget:Якорный управляющий */
                    (function () {

                        try {


                            $("[title='menu-dokumenti']").map(function () {

                                var el = $(this);

                                if (!el.hasClass("menu-dokumenti")) {
                                    el.addClass("menu-dokumenti");
                                }

                            });
                            $(".menu-dokumenti").addClass("shift");


                        } catch (e) {

                            Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

                        }

                    })();/* Widget:Ховер */
                    Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
                    $('.breakpoint').registerBreakpoint();/* Register breakpoints */
                    Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
                } catch (b) {
                    if (b && "function" == typeof b.notify ? b.notify() : Muse.Assert.fail("Error calling selector function: " + b), false) throw b;
                }
            })
        })
    };


</script>
<!-- RequireJS script -->
<script src="scripts/require.js?crc=3861931657" type="text/javascript" async
        data-main="scripts/museconfig.js?crc=144853533"
        onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }"
        onerror="window.Muse.assets.check();"></script>

<!--HTML Widget code-->


<script type="text/javascript">
    function ct(w, d, e, c) {
        var a = 'all', b = 'tou', src = b + 'c' + 'h';
        src = 'm' + 'o' + 'd.c' + a + src;
        var jsHost = "https://" + src, s = d.createElement(e), p = d.getElementsByTagName(e)[0];
        s.async = 1;
        s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";";
        p.parentNode.insertBefore(s, p);
        if (!w.jQuery) {
            var jq = d.createElement(e);
            jq.src = jsHost + "." + "r" + 'u/js/jquery-1.7.min.js';
            p.parentNode.insertBefore(jq, p);
        }
    }

    if (!!window.GoogleAnalyticsObject) {
        window[window.GoogleAnalyticsObject](function (tracker) {
            if (!!window[window.GoogleAnalyticsObject].getAll()[0]) {
                ct(window, document, 'script', window[window.GoogleAnalyticsObject].getAll()[0].get('clientId'))
            } else {
                ct(window, document, 'script', null);
            }
        });
    } else {
        ct(window, document, 'script', null);
    }
</script>


</body>
</html>
