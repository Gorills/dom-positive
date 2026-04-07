<!DOCTYPE html>
<html class="nojs html" lang="ru-RU">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="description" content="{{ $description }}"/>
  <meta name="keywords" content="{{ $keywords }}"/>
  <meta name="generator" content="2017.1.0.379"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="yandex-verification" content="a441d3dd6a79d268" />

  <script src="https://code.jquery.com/jquery-latest.min.js"></script>

  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "require.js", "jquery.museresponsive.js", "flat-card.css"], "outOfDate":[]};
</script>

     <script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>

     <!-- Google Tag Manager -->
     <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
             j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
             'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-TTM4V77');</script>
     <!-- End Google Tag Manager -->


  <link rel="shortcut icon" href="images/favicon.ico?crc=238351894"/>
  <title>Квартира в ЖК Позитив {{$rooms}} {{$rooms_txt}} | {{$square}} м2</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4032550449"/>
  <link rel="stylesheet" type="text/css" href="css/master_top.css?crc=4079322621"/>
  <link rel="stylesheet" type="text/css" href="css/flat-card.css?crc=82598660" id="pagesheet"/>
  <link rel="stylesheet" href="css/header.css">

  <link rel="stylesheet" type="text/css" href="../css/book.css" />

  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_top.css?crc=4022659591"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_flat-card.css?crc=368852950" id="nomq_pagesheet"/>
  <![endif]-->
    <!--custom head HTML-->

  <!--HTML Widget code-->

            <script type="text/javascript">
                window.alert = function(){};
            </script>

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


  <div class="breakpoint active" id="bp_infinity" data-min-width="1176"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox" id="page"><!-- group -->
    <div class="Button SmartPopUp clearfix grpelem shared_content" id="buttonu395513" data-visibility="changed" style="visibility:hidden" data-sizePolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="buttonu395513_content"><!-- container box -->
     <div class="grpelem" id="u424427"><!-- custom html -->
       <iframe src="https://xn----dtbenfaypcj0b.xn--p1ai/callbackform.html" width="468" height="500" frameBorder="0">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>
     </div>
    </div>
    <div class="size_fixed grpelem shared_content" id="u108534" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u108534_content"><!-- custom html -->

			<div></div>

    </div>
    <div class="clearfix grpelem shared_content" id="u83069" data-content-guid="u83069_content"><!-- group -->
     <div class="clearfix grpelem" id="pu42909-4"><!-- column -->
      <!-- m_editable region-id="editable-static-tag-U42909-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="title-docs clearfix colelem shared_content" id="u42909-4" data-muse-uid="U42909" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u42909-4_content"><!-- content -->
       <p>{{$floor}}</p>
      </div>
      <!-- /m_editable -->
      <div class="clearfix colelem shared_content" id="u42954" data-content-guid="u42954_content"><!-- group -->
       <div class="clearfix grpelem" id="u42951"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U42924-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <div class="title-docs clearfix grpelem" id="u42924-4" data-muse-uid="U42924" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
         <p>этаж</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
    </div>
    <div class="browser_width" id="u178650-bw">
     <div id="u178650" class="shared_content" data-content-guid="u178650_content"><!-- simple frame --></div>
    </div>
    <div class="Button back-button-on-flat-card museBGSize shared_content" id="buttonu69498" data-content-guid="buttonu69498_content"><!-- container box --></div>
    <!-- m_editable region-id="editable-static-tag-U592729-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
    <div class="title-docs clearfix grpelem shared_content" id="u592729-6" data-muse-uid="U592729" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u592729-6_content"><!-- content -->
     <h1 id="u592729-2" class="shared_content" data-content-guid="u592729-2_content"><span id="u592729">{{ $rooms_x}}</span></h1>
     <h1 id="u592729-4" class="shared_content" data-content-guid="u592729-4_content"><span id="u592729-3">квартира в ЖК Позитив</span></h1>
    </div>
    <!-- /m_editable -->
    <a class="nonblock nontext shared_content" id="u183159" href="index.html" data-href="page:U10098" data-content-guid="u183159_content"><!-- simple frame --></a>
    <div class="clearfix grpelem shared_content" id="u83065" data-content-guid="u83065_content"><!-- group -->
     <div class="clearfix grpelem" id="pu42910-4"><!-- column -->
      <!-- m_editable region-id="editable-static-tag-U42910-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="title-docs clearfix colelem" id="u42910-4" data-muse-uid="U42910" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
       <p>{{$korpus}}</p>
      </div>
      <!-- /m_editable -->
      <div class="clearfix colelem" id="u42942"><!-- group -->
       <div class="clearfix grpelem" id="u42939"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U42918-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <div class="title-docs clearfix grpelem" id="u42918-4" data-muse-uid="U42918" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
         <p>корпус</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
    </div>
    <div class="size_fixed grpelem shared_content" id="u313674" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u313674_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="clearfix grpelem shared_content" id="u83061" data-content-guid="u83061_content"><!-- group -->
     <div class="clearfix grpelem" id="pu42915-4"><!-- column -->
      <!-- m_editable region-id="editable-static-tag-U42915-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="title-docs clearfix colelem" id="u42915-4" data-muse-uid="U42915" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
       <p>{{$section}}</p>
      </div>
      <!-- /m_editable -->
      <div class="clearfix colelem" id="u42948"><!-- group -->
       <div class="clearfix grpelem" id="u42945"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U42921-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <div class="title-docs clearfix grpelem" id="u42921-4" data-muse-uid="U42921" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
         <p>секция</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
    </div>
    <div class="size_fixed grpelem shared_content" id="u81075" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81075_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="size_fixed grpelem shared_content" id="u81092" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81092_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="grpelem shared_content" id="u36631" data-content-guid="u36631_content"><!-- custom html -->
     <img src="{{ $image }}" / width="500">
    </div>

    <div class="clearfix grpelem" id="pu42936"><!-- column -->
     <div class="clearfix colelem shared_content" id="u42936" data-content-guid="u42936_content"><!-- group -->
      <div class="clearfix grpelem" id="pu36618-4"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U36618-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
       <div class="title-docs clearfix colelem" id="u36618-4" data-muse-uid="U36618" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
        <p>{{$flatnumber}}</p>
       </div>
       <!-- /m_editable -->
       <div class="colelem" id="u41171" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
       <!-- m_editable region-id="editable-static-tag-U36619-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
       <div class="title-docs clearfix colelem" id="u36619-4" data-muse-uid="U36619" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
        <p>№ квартиры</p>
       </div>
       <!-- /m_editable -->
      </div>
     </div>
     <div class="clearfix colelem shared_content" id="u42930" data-content-guid="u42930_content"><!-- group -->
      <div class="clearfix grpelem" id="pu41183-4"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U41183-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
       <div class="title-docs clearfix colelem" id="u41183-4" data-muse-uid="U41183" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
        <p>{{$square}}</p>
       </div>
       <!-- /m_editable -->
       <div class="colelem" id="u41185" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
       <!-- m_editable region-id="editable-static-tag-U41184-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
       <div class="title-docs clearfix colelem" id="u41184-4" data-muse-uid="U41184" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
        <p>площадь, м2</p>
       </div>
       <!-- /m_editable -->
      </div>
     </div>
    </div>
    <div class="size_fixed grpelem shared_content" id="u81132" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81132_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="clearfix grpelem" id="pu42927"><!-- column -->
     <div class="clearfix colelem shared_content" id="u42927" data-content-guid="u42927_content"><!-- group -->
      <div class="clearfix grpelem" id="pu41192-4"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U41192-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
       <div class="title-docs clearfix colelem" id="u41192-4" data-muse-uid="U41192" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
        <p>{{$price}}</p>
       </div>
       <!-- /m_editable -->
       <div class="colelem" id="u41194" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
       <!-- m_editable region-id="editable-static-tag-U41193-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
       <div class="title-docs clearfix colelem" id="u41193-4" data-muse-uid="U41193" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
        <p>млн. рублей</p>
       </div>
       <!-- /m_editable -->
      </div>
     </div>
     <div class="clearfix colelem shared_content" id="u42933" data-content-guid="u42933_content"><!-- group -->
      <div class="clearfix grpelem" id="pu41174-4"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U41174-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
       <div class="title-docs clearfix colelem" id="u41174-4" data-muse-uid="U41174" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
        <p>{{$rooms}}</p>
       </div>
       <!-- /m_editable -->
       <div class="colelem" id="u41176" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
       <!-- m_editable region-id="editable-static-tag-U41175-BP_infinity" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
       <div class="title-docs clearfix colelem" id="u41175-4" data-muse-uid="U41175" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
        <p>{{$rooms_txt}}</p>
       </div>
       <!-- /m_editable -->
      </div>
     </div>
    </div>
    <div class="size_fixed grpelem shared_content" id="u81142" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81142_content"><!-- custom html -->

            <div></div>

    </div>
     {{--<a class="nonblock nontext Button callformtrigger transition shared_content" id="buttonu452239" href="http://#ck_callback_button" data-content-guid="buttonu452239_content"><!-- container box --></a>--}}
    </div>
    <div class="clearfix grpelem" id="pu564254"><!-- column -->
     <div class="size_fixed colelem shared_content" id="u564254" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u564254_content"><!-- custom html -->

            <div></div>

     </div>
     <div class="size_fixed colelem shared_content" id="u637416" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u637416_content"><!-- custom html -->

            <div></div>

     </div>
    </div>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/back-button-pressed%402x.jpg?crc=4100447038" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/back-button-pressed%402x_2x.jpg?crc=3778705664" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/back-button%402x.jpg?crc=154983964" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/back-button%402x_2x.jpg?crc=4192456788" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_1175" data-min-width="1025" data-max-width="1175"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <span class="Button SmartPopUp rounded-corners clearfix grpelem placeholder" data-placeholder-for="buttonu395513_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u108534_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem" id="pu592729-6"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U592729-BP_1175" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <div class="title-docs clearfix colelem temp_no_id" data-muse-uid="U592729" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter" data-leftAdjustmentDoneBy="pu592729-6" data-orig-id="u592729-6"><!-- content -->
      <span class="placeholder" data-placeholder-for="u592729-2_content"><!-- placeholder node --></span>
      <span class="placeholder" data-placeholder-for="u592729-4_content"><!-- placeholder node --></span>
     </div>
     <!-- /m_editable -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u83069_content"><!-- placeholder node --></span>
    </div>
    <div class="browser_width temp_no_id" data-orig-id="u178650-bw">
     <span class="shadow placeholder" data-placeholder-for="u178650_content"><!-- placeholder node --></span>
    </div>
    <span class="Button back-button-on-flat-card museBGSize placeholder" data-placeholder-for="buttonu69498_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u83065_content"><!-- placeholder node --></span>
    <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u183159_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u313674_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u83061_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u637416_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-o-proekte clearfix placeholder" data-placeholder-for="u78734-4_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81075_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-kvartiry clearfix placeholder" data-placeholder-for="u81071-4_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u36631_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-kak-kupit clearfix placeholder" data-placeholder-for="u81067-4_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81092_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-ipoteka clearfix placeholder" data-placeholder-for="u81055-4_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81102_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-dokumenti clearfix placeholder" data-placeholder-for="u637409-4_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81112_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu81059-4"><!-- group -->
     <span class="nonblock nontext menu-gallery clearfix placeholder" data-placeholder-for="u81059-4_content"><!-- placeholder node --></span>
     <span class="nonblock nontext menu-novosti clearfix placeholder" data-placeholder-for="u81063-4_content"><!-- placeholder node --></span>
    </div>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81122_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu42936"><!-- column -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u42936_content"><!-- placeholder node --></span>
     <span class="clearfix colelem placeholder" data-placeholder-for="u42930_content"><!-- placeholder node --></span>
     <span class="clearfix colelem placeholder" data-placeholder-for="u42933_content"><!-- placeholder node --></span>
    </div>
    <span class="nonblock nontext menu-kontakty clearfix placeholder" data-placeholder-for="u81039-4_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u42927_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81132_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu178651-4"><!-- group -->
     <span class="call_phone_1 clearfix placeholder" data-placeholder-for="u178651-4_content"><!-- placeholder node --></span>
     <span class="nonblock nontext Button rounded-corners callformtrigger transition museBGSize placeholder" data-placeholder-for="buttonu452239_content"><!-- placeholder node --></span>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu564254"><!-- column -->
     <span class="size_fixed colelem placeholder" data-placeholder-for="u564254_content"><!-- placeholder node --></span>
     <span class="size_fixed colelem placeholder" data-placeholder-for="u81142_content"><!-- placeholder node --></span>
    </div>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/back-button-pressed%402x.jpg?crc=4100447038" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/back-button-pressed%402x_2x.jpg?crc=3778705664" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/back-button%402x.jpg?crc=154983964" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/back-button%402x_2x.jpg?crc=4192456788" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok-pressed%402x.png?crc=4089351732" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok-pressed%402x_2x.png?crc=376901766" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok%402x.png?crc=375932546" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok%402x_2x.png?crc=4106184686" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_1024" data-max-width="1024"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <span class="Button SmartPopUp rounded-corners clearfix grpelem placeholder" data-placeholder-for="buttonu395513_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u108534_content"><!-- placeholder node --></span>
    <div class="browser_width temp_no_id" data-orig-id="u178650-bw">
     <span class="shadow placeholder" data-placeholder-for="u178650_content"><!-- placeholder node --></span>
    </div>
    <div class="clearfix grpelem" id="pbuttonu69498"><!-- group -->
     <span class="Button back-button-on-flat-card museBGSize placeholder" data-placeholder-for="buttonu69498_content"><!-- placeholder node --></span>
     <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u183159_content"><!-- placeholder node --></span>
    </div>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u313674_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-o-proekte clearfix placeholder" data-placeholder-for="u78734-4_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u637416_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem" id="pu36631"><!-- column -->
     <span class="colelem placeholder" data-placeholder-for="u36631_content"><!-- placeholder node --></span>
     <span class="clearfix colelem placeholder" data-placeholder-for="u42933_content"><!-- placeholder node --></span>
     <span class="clearfix colelem placeholder" data-placeholder-for="u83061_content"><!-- placeholder node --></span>
    </div>
    <span class="nonblock nontext menu-kvartiry clearfix placeholder" data-placeholder-for="u81071-4_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81075_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u42927_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-kak-kupit clearfix placeholder" data-placeholder-for="u81067-4_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u83065_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81092_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-ipoteka clearfix placeholder" data-placeholder-for="u81055-4_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81102_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u42936_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-dokumenti clearfix placeholder" data-placeholder-for="u637409-4_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem temp_no_id" data-orig-id="u83069"><!-- group -->
     <div class="clearfix grpelem temp_no_id" data-orig-id="pu42909-4"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U42909-BP_1024" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <span class="title-docs clearfix grpelem placeholder" data-placeholder-for="u42909-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
      <span class="clearfix grpelem placeholder" data-placeholder-for="u42954_content"><!-- placeholder node --></span>
     </div>
    </div>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81112_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u42930_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-gallery clearfix placeholder" data-placeholder-for="u81059-4_content"><!-- placeholder node --></span>
	<a class="nonblock nontext menu-ipoteka menu-hod clearfix shared_content shift" id="u81040-4" href="hod-stroitelstva.html" data-href="page:U5326" data-muse-temp-textcontainer-sizepolicy="true" data-muse-temp-textcontainer-pinning="true" data-ibe-flags="txtStyleSrc" data-content-guid="u81040-4_content"><!-- content --><p id="u81039-2">Ход строительства</p></a>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81122_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-novosti clearfix placeholder" data-placeholder-for="u81063-4_content"><!-- placeholder node --></span>
    <!-- m_editable region-id="editable-static-tag-U592729-BP_1024" template="flat-card.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
    <span class="title-docs clearfix grpelem placeholder" data-placeholder-for="u592729-6_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81132_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-kontakty clearfix placeholder" data-placeholder-for="u81039-4_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu178651-4"><!-- group -->
     <span class="call_phone_1 clearfix placeholder" data-placeholder-for="u178651-4_content"><!-- placeholder node --></span>
     <span class="nonblock nontext Button rounded-corners callformtrigger transition museBGSize placeholder" data-placeholder-for="buttonu452239_content"><!-- placeholder node --></span>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu564254"><!-- column -->
     <span class="size_fixed colelem placeholder" data-placeholder-for="u564254_content"><!-- placeholder node --></span>
     <span class="size_fixed colelem placeholder" data-placeholder-for="u81142_content"><!-- placeholder node --></span>
    </div>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/back-button-pressed%402x.jpg?crc=4100447038" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/back-button-pressed%402x_2x.jpg?crc=3778705664" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/back-button%402x.jpg?crc=154983964" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/back-button%402x_2x.jpg?crc=4192456788" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok-pressed%402x.png?crc=4089351732" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok-pressed%402x_2x.png?crc=376901766" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok%402x.png?crc=375932546" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/zakazat-zvonok%402x_2x.png?crc=4106184686" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>

  <div class="flat__book abs js-book">забронировать</div>

  <!-- Забронировать -->
  <div class="modal-book">
    <div class="book">
      <form class="book__form js-validate" action="/flat-reserve" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="linkPage" value="https://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>">
        <div class="book__close js-close"></div>
        <div class="book__title">Забронировать</div>
        <div class="book__input">
          <input type="text" name="name" value="" placeholder="Имя" required>
          <span class="book__placeholder">Имя</span>
        </div>
        <div class="book__input">
          <input type="tel" class="js-phone" name="phone" placeholder="Номер телефона" required>
          <span class="book__placeholder">Номер телефона</span>
        </div>
        <div class="book__agree">
          <label class="checkbox">Принимаю <a href="#">Политику конфиденциальности</a>
            <input type="checkbox" name="agree" required checked>
            <span class="checkmark"></span>
        </label>
        </div>
        <div class="book__but">
          <button class="book__submit js-go" type="submit" name="button">Отправить</button>
        </div>
      </form>
    </div>
  </div>

  <div class="modal-thanks">
    <div class="thanks">
      <div class="thanks__icon"></div>
      <div class="thanks__text">Спасибо, ваша заявка отправлена. Наш менеджер свяжется с вами в ближайшее время.</div>
      <div class="thanks__close js-clear">Понятно</div>
    </div>
  </div>




  {{--<script type="text/javascript" src="//callkeeper.ru/modules/widget/db/?callkeeper_code=174218fabd3b101b146e2b600fc43ffc" charset="UTF-8"></script>--}}
  {{--<script type="text/javascript" src="//callkeeper.ru/modules/widget/callkeeper.js" charset="UTF-8"></script>--}}

  <script type="text/javascript">
      /* <![CDATA[ */
      var google_conversion_id = 874344114;
      var google_custom_params = window.google_tag_params;
      var google_remarketing_only = true;
      /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
      <div style="display:inline;">
          <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/874344114/?value=0&amp;guid=ON&amp;script=0"/>
      </div>
  </noscript>
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
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),

16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?

l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");

f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(f+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(f)):alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?

setTimeout(function(){g(!0)},5E3):g()}};

var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.detectScreenResolution();/* HiDPI screens */
Muse.Utils.prepHyperlinks(true);/* body */
(function(){

	try{



        		$(".back-button-on-flat-card").on("click", function(){

        			window.close();

        		});



	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Нажал, и ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Нажал, и */
(function(){

	try{



            $("[data-requiremodule]").removeAttr("data-requiremodule");



	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Блокиратор ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Блокиратор */
(function(){

	try{



        $("[title='menu-o-proekte']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-o-proekte")) {
                el.addClass("menu-o-proekte");
            }

        });
        $(".menu-o-proekte").addClass("shift");



	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-kvartiry']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-kvartiry")) {
                el.addClass("menu-kvartiry");
            }

        });
        $(".menu-kvartiry").addClass("shift");



	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-kak-kupit']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-kak-kupit")) {
                el.addClass("menu-kak-kupit");
            }

        });
        $(".menu-kak-kupit").addClass("shift");



	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-ipoteka']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-ipoteka")) {
                el.addClass("menu-ipoteka");
            }

        });
        $(".menu-ipoteka").addClass("shift");



	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-gallery']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-gallery")) {
                el.addClass("menu-gallery");
            }

        });
        $(".menu-gallery").addClass("shift");



	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-novosti']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-novosti")) {
                el.addClass("menu-novosti");
            }

        });
        $(".menu-novosti").addClass("shift");



	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



        $("[title='menu-kontakty']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-kontakty")) {
                el.addClass("menu-kontakty");
            }

        });
        $(".menu-kontakty").addClass("shift");



	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
(function(){

	try{



            var el = $("a.callformtrigger");
            var hash = el.attr("href");
            hash = hash.replace("http://", "");
            el.attr("href", hash);



	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Якорный управляющий ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Якорный управляющий */
(function(){

	try{



        $("[title='menu-dokumenti']").map(function(){

            var el = $(this);

            if (!el.hasClass("menu-dokumenti")) {
                el.addClass("menu-dokumenti");
            }

        });
        $(".menu-dokumenti").addClass("shift");



	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:Ховер ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:Ховер */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};


</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=3861931657" type="text/javascript" async data-main="scripts/museconfig.js?crc=144853533" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>

  <!--HTML Widget code-->

    	<script type="application/javascript">
    	</script>

      <!-- book form-->
      <script src="../scripts/masked-input.js"></script>
      <script src="../scripts/jquery-validation.js"></script>
      <script src="../scripts/validate.js"></script>
      <script src="../scripts/book.js"></script>

   </body>
</html>
