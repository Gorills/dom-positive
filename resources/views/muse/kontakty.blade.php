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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "require.js", "jquery.museresponsive.js", "kontakty.css"], "outOfDate":[]};
</script>

  <link rel="shortcut icon" href="images/favicon.ico?crc=238351894"/>
  <title>{{ $title }}</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4032550449"/>
  <link rel="stylesheet" type="text/css" href="css/master_top.css?crc=4079322621"/>
  <link rel="stylesheet" type="text/css" href="css/kontakty.css?crc=4181741481" id="pagesheet"/>
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_top.css?crc=4022659591"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_kontakty.css?crc=4087578342" id="nomq_pagesheet"/>
  <![endif]-->
    <!--custom head HTML-->

  <!--HTML Widget code-->


        <script type="application/javascript">

        if (document.widgets == undefined) {
            document.widgets = {};
        }
        </script>

        <style type="text/css">

            .fullscreen-map {

                position: absolute;
                top: 0px;
                left: 0px;

                min-height: 100%;
                min-width: 100%;

                height: 100%;
                width: 100%;
            }

        </style>

            <script type="text/javascript">
                window.alert = function(){};
            </script>

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
               'menu' => 'kontakty active'
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

  <div class="breakpoint active" id="bp_infinity" data-min-width="1176"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox" id="page"><!-- group -->
    <div class="Button SmartPopUp clearfix grpelem shared_content" id="buttonu395513" data-visibility="changed" style="visibility:hidden" data-sizePolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="buttonu395513_content"><!-- container box -->
     <div class="grpelem" id="u424427"><!-- custom html -->
       <iframe src="https://xn----dtbenfaypcj0b.xn--p1ai/callbackform.html" width="468" height="500" frameBorder="0">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>
     </div>
    </div>
    <div class="clearfix grpelem shared_content" id="pu71377" data-content-guid="pu71377_content"><!-- column -->
     <div class="size_fixed colelem" id="u71377" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->

            <div></div>

     </div>
     <div class="size_fixed colelem" id="u71383" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->

            <div></div>

     </div>
     <div class="size_fixed colelem" id="u71382" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->

            <div></div>

     </div>
     <div class="clearfix colelem" id="pu71378"><!-- group -->
      <div class="size_fixed grpelem" id="u71378" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->

            <div></div>

      </div>
      <div class="size_fixed grpelem" id="u71381" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->

            <div></div>

      </div>
      <div class="size_fixed grpelem" id="u676222" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->

		<div></div>

      </div>
     </div>
    </div>
    <div class="map grpelem shared_content" id="u71368" data-content-guid="u71368_content"><!-- simple frame --></div>
    <div class="clearfix grpelem shared_content" id="u71369" data-content-guid="u71369_content"><!-- group -->
     <div class="shadow grpelem" id="u71371" data-sizePolicy="fixed" data-pintopage="page_fixedLeft"><!-- simple frame --></div>
    </div>
    <div class="clearfix grpelem" id="pu71444-4"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U71444-BP_infinity" template="kontakty.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <div class="clearfix colelem shared_content" id="u71444-4" data-muse-uid="U71444" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="u71444-4_content"><!-- content -->
      <h1>Как добраться в ЖК Позитив</h1>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U71441-BP_infinity" template="kontakty.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <!-- /m_editable -->
    </div>
    <div class="clearfix shared_content" id="u216193" data-content-guid="u216193_content"><!-- group -->
     <div class="clearfix" id="u71450"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U71453-BP_infinity" template="kontakty.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix" id="u71453-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U71453" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
       <p>вы можете добраться до нас:</p>
      </div>
      <!-- /m_editable -->
     </div>
     <div class="clearfix" id="u71260"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U71479-BP_infinity" template="kontakty.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix" id="u71479-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U71479" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
       <p>Из центра: по Ленинскому проспекту до пересечения со МКАД. Далее по Киевскому шоссе прямо до съезда направо на Родниковую улицу. После поворота прямо 620 метров. От МКАД: съезд на Киевское шоссе. Далее двигаетесь прямо до съезда направо на Родниковую улицу. После поворота прямо 620 метров.</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U71480-BP_infinity" template="kontakty.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix" id="u71480-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U71480" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
       <p>На автомобиле:</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U71537-BP_infinity" template="kontakty.html" data-type="image" -->
      <div class="clip_frame" id="u71537" data-muse-uid="U71537" data-muse-type="img_frame"><!-- image -->
       <img class="block temp_no_img_src" id="u71537_img" data-orig-src="images/icon-car%402x.png?crc=45071996" data-hidpi-src="images/icon-car%402x_2x.png?crc=110705251" alt="" width="44" height="44" data-muse-src="images/icon-car%402x.png?crc=45071996" src="images/blank.gif?crc=4208392903"/>
      </div>
      <!-- /m_editable -->
     </div>
     <div class="clearfix" id="u71263"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U71485-BP_infinity" template="kontakty.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix" id="u71485-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U71485" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
       <p>От метро Саларьево на автобусе 707 и 734 до остановки Румянцево-2 либо от метро Румянцево на автобусе 707, 734, 343 до остановки &quot;Румянцево-2&quot;</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U71507-BP_infinity" template="kontakty.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix" id="u71507-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U71507" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
       <p>На автобусе:</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U71497-BP_infinity" template="kontakty.html" data-type="image" -->
      <div class="clip_frame" id="u71497" data-muse-uid="U71497" data-muse-type="img_frame"><!-- image -->
       <img class="block temp_no_img_src" id="u71497_img" data-orig-src="images/bus-icon%402x.png?crc=486920819" data-hidpi-src="images/bus-icon%402x_2x.png?crc=3973281130" alt="" width="44" height="44" data-muse-src="images/bus-icon%402x.png?crc=486920819" src="images/blank.gif?crc=4208392903"/>
      </div>
      <!-- /m_editable -->
     </div>
     <div class="clearfix" id="u71266"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U71491-BP_infinity" template="kontakty.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix" id="u71491-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U71491" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
       <p>Станция Новопеределкино, далее на автобусе 707 и 734 до остановки Румянцево-2</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U71492-BP_infinity" template="kontakty.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix" id="u71492-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U71492" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
       <p>На электричке:</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U71527-BP_infinity" template="kontakty.html" data-type="image" -->
      <div class="clip_frame" id="u71527" data-muse-uid="U71527" data-muse-type="img_frame"><!-- image -->
       <img class="block temp_no_img_src" id="u71527_img" data-orig-src="images/icon-train%402x.png?crc=25876904" data-hidpi-src="images/icon-train%402x_2x.png?crc=4246745642" alt="" width="50" height="50" data-muse-src="images/icon-train%402x.png?crc=25876904" src="images/blank.gif?crc=4208392903"/>
      </div>
      <!-- /m_editable -->
     </div>
    </div>
    <div class="size_fixed grpelem shared_content" id="u313674" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u313674_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="size_fixed grpelem shared_content" id="u81075" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81075_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="size_fixed grpelem shared_content" id="u81092" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81092_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="size_fixed grpelem shared_content" id="u81102" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81102_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="size_fixed grpelem shared_content" id="u81112" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81112_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="size_fixed grpelem shared_content" id="u81122" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81122_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="size_fixed grpelem shared_content" id="u81132" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81132_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="size_fixed grpelem shared_content" id="u81142" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81142_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="size_fixed grpelem shared_content" id="u564254" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u564254_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="size_fixed grpelem shared_content" id="u637416" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u637416_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="clearfix grpelem shared_content" id="u114736" data-content-guid="u114736_content"><!-- group -->
     <div class="clearfix grpelem" id="pbuttonu71379"><!-- column -->
      <div class="Button plus-map-control museBGSize colelem" id="buttonu71379" title="VP10" data-sizePolicy="fixed" data-pintopage="page_fixedRight"><!-- container box --></div>
      <div class="Button museBGSize minus-map-control colelem" id="buttonu71380" title="VP10" data-sizePolicy="fixed" data-pintopage="page_fixedRight"><!-- container box --></div>
     </div>
    </div>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/map-minus-button%402x.jpg?crc=4180271365" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/map-minus-button%402x_2x.jpg?crc=4252196735" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_1175" data-max-width="1175"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <span class="Button SmartPopUp clearfix grpelem placeholder" data-placeholder-for="buttonu395513_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu71377_content"><!-- placeholder node --></span>
    <span class="clearfix placeholder" data-placeholder-for="u216193_content"><!-- placeholder node --></span>
    <span class="map grpelem placeholder" data-placeholder-for="u71368_content"><!-- placeholder node --></span>
    <span class="browser_width placeholder" data-placeholder-for="u178650-bw_content"><!-- placeholder node --></span>
    <span class="nonblock nontext placeholder" data-placeholder-for="u183159_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem" id="pu71369"><!-- group -->
     <span class="clearfix grpelem placeholder" data-placeholder-for="u71369_content"><!-- placeholder node --></span>
     <!-- m_editable region-id="editable-static-tag-U71441-BP_1175" template="kontakty.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <span class="o-proekte clearfix grpelem placeholder" data-placeholder-for="u71441-11_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U71444-BP_1175" template="kontakty.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <span class="clearfix grpelem placeholder" data-placeholder-for="u71444-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
    </div>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u313674_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u637416_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-o-proekte clearfix placeholder" data-placeholder-for="u78734-4_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81075_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu81067-4_content"><!-- placeholder node --></span>
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
    <span class="nonblock nontext MuseLinkActive menu-kontakty clearfix placeholder" data-placeholder-for="u81039-4_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81132_content"><!-- placeholder node --></span>
    <span class="placeholder" data-placeholder-for="u328491_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem" id="pu178651-4"><!-- group -->
     <span class="call_phone_1 clearfix placeholder" data-placeholder-for="u178651-4_content"><!-- placeholder node --></span>
     <span class="nonblock nontext Button callformtrigger transition placeholder" data-placeholder-for="buttonu452239_content"><!-- placeholder node --></span>
    </div>
    <div class="clearfix grpelem" id="pu564254"><!-- column -->
     <span class="size_fixed colelem placeholder" data-placeholder-for="u564254_content"><!-- placeholder node --></span>
     <span class="size_fixed colelem placeholder" data-placeholder-for="u81142_content"><!-- placeholder node --></span>
    </div>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u114736_content"><!-- placeholder node --></span>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/map-minus-button%402x.jpg?crc=4180271365" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/map-minus-button%402x_2x.jpg?crc=4252196735" alt="" src="images/blank.gif?crc=4208392903"/>
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

            var s = document.createElement("script");
            s.type = "text/javascript";
            s.assync = "";
            s.defer = "";

    		if ("yes" == "yes") {
                s.src = "https://maps.googleapis.com/maps/api/js?callback=initMap&key={{ env('GOOGLE_MAPS_API_KEY') }}";
            } else {
                s.src = "https://maps.googleapis.com/maps/api/js?callback=initMap";
            }

            $("body").append(s);

			function initMap() {

                var scr = '<script>function inherits(a,b){function c(){}c.prototype=b.prototype,a.superClass_=b.prototype,a.prototype=new c,a.prototype.constructor=a}function MarkerLabel_(a,b,c){this.marker_=a,this.handCursorURL_=a.handCursorURL,this.labelDiv_=document.createElement("div"),this.labelDiv_.style.cssText="position: absolute; overflow: hidden;",this.crossDiv_=MarkerLabel_.getSharedCross(b)}function MarkerWithLabel(a){a=a||{},a.labelContent=a.labelContent||"",a.labelAnchor=a.labelAnchor||new google.maps.Point(0,0),a.labelClass=a.labelClass||"markerLabels",a.labelStyle=a.labelStyle||{},a.labelInBackground=a.labelInBackground||!1,"undefined"==typeof a.labelVisible&&(a.labelVisible=!0),"undefined"==typeof a.raiseOnDrag&&(a.raiseOnDrag=!0),"undefined"==typeof a.clickable&&(a.clickable=!0),"undefined"==typeof a.draggable&&(a.draggable=!1),"undefined"==typeof a.optimized&&(a.optimized=!1),a.crossImage=a.crossImage||"http"+("https:"===document.location.protocol?"s":"")+"://maps.gstatic.com/intl/en_us/mapfiles/drag_cross_67_16.png",a.handCursor=a.handCursor||"http"+("https:"===document.location.protocol?"s":"")+"://maps.gstatic.com/intl/en_us/mapfiles/closedhand_8_8.cur",a.optimized=!1,this.label=new MarkerLabel_(this,a.crossImage,a.handCursor),google.maps.Marker.apply(this,arguments)}inherits(MarkerLabel_,google.maps.OverlayView),MarkerLabel_.getSharedCross=function(a){var b;return"undefined"==typeof MarkerLabel_.getSharedCross.crossDiv&&(b=document.createElement("img"),b.style.cssText="position: absolute; z-index: 1000002; display: none;",b.style.marginLeft="-8px",b.style.marginTop="-9px",b.src=a,MarkerLabel_.getSharedCross.crossDiv=b),MarkerLabel_.getSharedCross.crossDiv},MarkerLabel_.prototype.onAdd=function(){var d,e,f,g,h,i,j,a=this,b=!1,c=!1,k=20,l="url("+this.handCursorURL_+")",m=function(a){a.preventDefault&&a.preventDefault(),a.cancelBubble=!0,a.stopPropagation&&a.stopPropagation()},n=function(){a.marker_.setAnimation(null)};this.getPanes().markerLayer.appendChild(this.labelDiv_),"undefined"==typeof MarkerLabel_.getSharedCross.processed&&(this.getPanes().markerLayer.appendChild(this.crossDiv_),MarkerLabel_.getSharedCross.processed=!0),this.listeners_=[google.maps.event.addDomListener(this.labelDiv_,"mouseover",function(b){(a.marker_.getDraggable()||a.marker_.getClickable())&&(this.style.cursor="pointer",google.maps.event.trigger(a.marker_,"mouseover",b))}),google.maps.event.addDomListener(this.labelDiv_,"mouseout",function(b){!a.marker_.getDraggable()&&!a.marker_.getClickable()||c||(this.style.cursor=a.marker_.getCursor(),google.maps.event.trigger(a.marker_,"mouseout",b))}),google.maps.event.addDomListener(this.labelDiv_,"mousedown",function(d){c=!1,a.marker_.getDraggable()&&(b=!0,this.style.cursor=l),(a.marker_.getDraggable()||a.marker_.getClickable())&&(google.maps.event.trigger(a.marker_,"mousedown",d),m(d))}),google.maps.event.addDomListener(document,"mouseup",function(e){var f;if(b&&(b=!1,a.eventDiv_.style.cursor="pointer",google.maps.event.trigger(a.marker_,"mouseup",e)),c){if(h){f=a.getProjection().fromLatLngToDivPixel(a.marker_.getPosition()),f.y+=k,a.marker_.setPosition(a.getProjection().fromDivPixelToLatLng(f));try{a.marker_.setAnimation(google.maps.Animation.BOUNCE),setTimeout(n,1406)}catch(a){}}a.crossDiv_.style.display="none",a.marker_.setZIndex(d),g=!0,c=!1,e.latLng=a.marker_.getPosition(),google.maps.event.trigger(a.marker_,"dragend",e)}}),google.maps.event.addListener(a.marker_.getMap(),"mousemove",function(g){var l;b&&(c?(g.latLng=new google.maps.LatLng(g.latLng.lat()-e,g.latLng.lng()-f),l=a.getProjection().fromLatLngToDivPixel(g.latLng),h&&(a.crossDiv_.style.left=l.x+"px",a.crossDiv_.style.top=l.y+"px",a.crossDiv_.style.display="",l.y-=k),a.marker_.setPosition(a.getProjection().fromDivPixelToLatLng(l)),h&&(a.eventDiv_.style.top=l.y+k+"px"),google.maps.event.trigger(a.marker_,"drag",g)):(e=g.latLng.lat()-a.marker_.getPosition().lat(),f=g.latLng.lng()-a.marker_.getPosition().lng(),d=a.marker_.getZIndex(),i=a.marker_.getPosition(),j=a.marker_.getMap().getCenter(),h=a.marker_.get("raiseOnDrag"),c=!0,a.marker_.setZIndex(1e6),g.latLng=a.marker_.getPosition(),google.maps.event.trigger(a.marker_,"dragstart",g)))}),google.maps.event.addDomListener(document,"keydown",function(b){c&&27===b.keyCode&&(h=!1,a.marker_.setPosition(i),a.marker_.getMap().setCenter(j),google.maps.event.trigger(document,"mouseup",b))}),google.maps.event.addDomListener(this.labelDiv_,"click",function(b){(a.marker_.getDraggable()||a.marker_.getClickable())&&(g?g=!1:(google.maps.event.trigger(a.marker_,"click",b),m(b)))}),google.maps.event.addDomListener(this.labelDiv_,"dblclick",function(b){(a.marker_.getDraggable()||a.marker_.getClickable())&&(google.maps.event.trigger(a.marker_,"dblclick",b),m(b))}),google.maps.event.addListener(this.marker_,"dragstart",function(a){c||(h=this.get("raiseOnDrag"))}),google.maps.event.addListener(this.marker_,"drag",function(b){c||h&&(a.setPosition(k),a.labelDiv_.style.zIndex=1e6+(this.get("labelInBackground")?-1:1))}),google.maps.event.addListener(this.marker_,"dragend",function(b){c||h&&a.setPosition(0)}),google.maps.event.addListener(this.marker_,"position_changed",function(){a.setPosition()}),google.maps.event.addListener(this.marker_,"zindex_changed",function(){a.setZIndex()}),google.maps.event.addListener(this.marker_,"visible_changed",function(){a.setVisible()}),google.maps.event.addListener(this.marker_,"labelvisible_changed",function(){a.setVisible()}),google.maps.event.addListener(this.marker_,"title_changed",function(){a.setTitle()}),google.maps.event.addListener(this.marker_,"labelcontent_changed",function(){a.setContent()}),google.maps.event.addListener(this.marker_,"labelanchor_changed",function(){a.setAnchor()}),google.maps.event.addListener(this.marker_,"labelclass_changed",function(){a.setStyles()}),google.maps.event.addListener(this.marker_,"labelstyle_changed",function(){a.setStyles()})]},MarkerLabel_.prototype.onRemove=function(){var a;for(this.labelDiv_.parentNode.removeChild(this.labelDiv_),a=0;a<this.listeners_.length;a++)google.maps.event.removeListener(this.listeners_[a])},MarkerLabel_.prototype.draw=function(){this.setContent(),this.setTitle(),this.setStyles()},MarkerLabel_.prototype.setContent=function(){var a=this.marker_.get("labelContent");"undefined"==typeof a.nodeType?this.labelDiv_.innerHTML=a:(this.labelDiv_.innerHTML="",this.labelDiv_.appendChild(a))},MarkerLabel_.prototype.setTitle=function(){this.labelDiv_.title=this.marker_.getTitle()||""},MarkerLabel_.prototype.setStyles=function(){var a,b;this.labelDiv_.className=this.marker_.get("labelClass"),this.labelDiv_.style.cssText="",b=this.marker_.get("labelStyle");for(a in b)b.hasOwnProperty(a)&&(this.labelDiv_.style[a]=b[a]);this.setMandatoryStyles()},MarkerLabel_.prototype.setMandatoryStyles=function(){this.labelDiv_.style.position="absolute",this.labelDiv_.style.overflow="hidden","undefined"!=typeof this.labelDiv_.style.opacity&&""!==this.labelDiv_.style.opacity&&(this.labelDiv_.style.MsFilter=\'"progid:DXImageTransform.Microsoft.Alpha(opacity=\'+100*this.labelDiv_.style.opacity+\')"\',this.labelDiv_.style.filter="alpha(opacity="+100*this.labelDiv_.style.opacity+")"),this.setAnchor(),this.setPosition(),this.setVisible()},MarkerLabel_.prototype.setAnchor=function(){var a=this.marker_.get("labelAnchor");this.labelDiv_.style.marginLeft=-a.x+"px",this.labelDiv_.style.marginTop=-a.y+"px"},MarkerLabel_.prototype.setPosition=function(a){var b=this.getProjection().fromLatLngToDivPixel(this.marker_.getPosition());"undefined"==typeof a&&(a=0),this.labelDiv_.style.left=Math.round(b.x)+"px",this.labelDiv_.style.top=Math.round(b.y-a)+"px",this.setZIndex()},MarkerLabel_.prototype.setZIndex=function(){var a=this.marker_.get("labelInBackground")?-1:1;"undefined"==typeof this.marker_.getZIndex()?this.labelDiv_.style.zIndex=parseInt(this.labelDiv_.style.top,10)+a:this.labelDiv_.style.zIndex=this.marker_.getZIndex()+a},MarkerLabel_.prototype.setVisible=function(){this.marker_.get("labelVisible")?this.labelDiv_.style.display=this.marker_.getVisible()?"block":"none":this.labelDiv_.style.display="none"},inherits(MarkerWithLabel,google.maps.Marker),MarkerWithLabel.prototype.setMap=function(a){google.maps.Marker.prototype.setMap.apply(this,arguments),this.label.setMap(a)};<\/script>';

                $("head").append($(scr));

                var mapElem = $(".map").get(0);

                if (mapElem == undefined) return;

                /*var mapElemJ = mapElem.parent();

                var parentHeight = mapElemJ.css("min-height");

                mapElemJ.css("min-height", "100%");
                mapElemJ.css("height", parentHeight);*/

				var mapOptions = {
			    	center: {lat: 55.635000, lng: 37.413705},
			    	zoom: 15,
			    	mapTypeId: google.maps.MapTypeId.ROADMAP
				}

				var toggleCustomStyle = "yes";

				var customStyle = null;

				if (toggleCustomStyle == "yes") {

					customStyle = [{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.highway.controlled_access","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.station","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}];

					mapOptions.styles = customStyle
				}

                if ("yes" == "yes") {
                    mapOptions.mapTypeControl = false;
                    mapOptions.scaleControl = false;
                    mapOptions.zoomControl = false;
                }

                if ("yes" == "yes") {
                    mapOptions.panControl = false;
                    mapOptions.rotateControl = false;
                    mapOptions.scrollwheel = false;
                }

                if ("yes" == "no") {
                    mapOptions.draggable = false;
                }
                var map = new google.maps.Map(mapElem, mapOptions);
			  	document.widgets.map = map;

                if ("yes" == "yes") {
                    var screen = screenSize();

                    var styles = {

                        position: "absolute",
                        top: "0px",
                        left: "0px",
                        width: screen.width + "px",
                        height: screen.height + "px",
                        margin: 0,
                        padding: 0

                    };

                    $(mapElem).css(styles);
                }

                var plusBtn = $(".plus-map-control");
                var minusBtn = $(".minus-map-control");

                if (plusBtn) {
                    plusBtn.on("click", function(){
                        map.setZoom(map.getZoom() + 1);
                    });

                    minusBtn.on("click", function(){
                        map.setZoom(map.getZoom() - 1);
                    });
                }
			}

            function screenSize() {
                var myWidth = 0, myHeight = 0;
                if( typeof( window.innerWidth ) == 'number' ) {
                    myWidth = window.innerWidth;
                    myHeight = window.innerHeight;
                } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
                    myWidth = document.documentElement.clientWidth;
                    myHeight = document.documentElement.clientHeight;
                    int1=2;
                } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
                    myWidth = document.body.clientWidth;
                    myHeight = document.body.clientHeight;
                }
                return {width: myWidth, height: myHeight};
            }

            window.onresize = function(){

                if ("yes" == "yes") {
                    var screen = screenSize();

                    var styles = {

                        position: "absolute",
                        top: "0px",
                        left: "0px",
                        width: screen.width + "px",
                        height: screen.height + "px",
                        margin: 0,
                        padding: 0

                    };

                    $(".map").css(styles);
                }



            };

    	</script>





    	<script type="application/javascript">

            function showu71383() {
                var map = document.widgets.map;

                var overlayBounds = {
                    north: 55.636190,
                    south: 55.632300,
                    east: 37.420000,
                    west: 37.410740

                };

                var overlay = new google.maps.GroundOverlay(
                    'assets/canvas-pozitiv.png',
                    overlayBounds
                );
                overlay.setMap(map);

            }

            function startu71383() {
                if (document.widgets.map != undefined) {
                    showu71383();
                } else {
                    setTimeout(startu71383, 500);
                }
            }

            setTimeout(startu71383, 500);

    	</script>





    	<script type="application/javascript">

            function showu71382() {
                var markers = {};
                var map = document.widgets.map;
                if ("off" == "on") {

                    var marker = createMarkeru71382(55.633968, 37.415174, "", 72, 70, "assets/pozitiv-canvas.png", map, "off", "off", "Поликлиника", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 50, 70);
                }

                if ("on" == "on") {
                    var marker = createMarkeru71382(55.643219, 37.404992, "", 0, 0, "assets/map-icon-hospital%402x.png", map, "on", "on", "Поликлиника", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 50, 70);
                }

                if ("on" == "on") {
                    var marker = createMarkeru71382(55.633208, 37.411976, "", 180, 125, "assets/map-icon-office%402x.png", map, "off", "off", "Текст", "FFFFFF", "000000", "Arial", 15, 0, 0, 0, 0, 0);
                }

                if ("off" == "on") {
                    var marker = createMarkeru71382(-34.397, 150.644, "Заголовок", 0, 0, " ", map, "off", "off", "Текст", "FFFFFF", "000000", "Arial", 15, 0, 0, 0, 0, 0);
                }

                if ("off" == "on") {
                    var marker = createMarkeru71382(-34.397, 150.644, "Заголовок", 0, 0, " ", map, "off", "off", "Текст", "FFFFFF", "000000", "Arial", 15, 0, 0, 0, 0, 0);
                }

                if ("off" == "on") {
                    var marker = createMarkeru71382(-34.397, 150.644, "Заголовок", 0, 0, " ", map, "off", "off", "Текст", "FFFFFF", "000000", "Arial", 15, 0, 0, 0, 0, 0);
                }

                if ("off" == "on") {
                    var marker = createMarkeru71382(-34.397, 150.644, "Заголовок", 0, 0, " ", map, "off", "off", "Текст", "FFFFFF", "000000", "Arial", 15, 0, 0, 0, 0, 0);
                }

                if ("off" == "on") {
                    var marker = createMarkeru71382(-34.397, 150.644, "Заголовок", 0, 0, " ", map, "off", "off", "Текст", "FFFFFF", "000000", "Arial", 15, 0, 0, 0, 0, 0);
                }

                if ("off" == "on") {
                    var marker = createMarkeru71382(-34.397, 150.644, "Заголовок", 0, 0, " ", map, "off", "off", "Текст", "FFFFFF", "000000", "Arial", 15, 0, 0, 0, 0, 0);
                }

                if ("off" == "on") {
                    var marker = createMarkeru71382(-34.397, 150.644, "Заголовок", 0, 0, " ", map, "off", "off", "Текст", "FFFFFF", "000000", "Arial", 15, 0, 0, 0, 0, 0);
                }
            }

            function createMarkeru71382(lat, lng, title, iconHor, iconVert, icon, map, toogleInfoWindow, hover, desc, bg, textColor, font, fontSize, radius, vert, hor, baloonx, baloony) {

                var contentString = '<div style="border-radius: ' + radius + 'px; padding: ' + vert + 'px ' + hor + 'px; background-color: #' + bg + '; color: #' + textColor + '; font-family: ' + font + '; font-size: ' + fontSize + 'px;">'+
                    desc +
                    '</div>';

                var markerOptions = {
                    position: {lat: lat, lng: lng},
                    map: map,
                    title: title,
                    labelContent: contentString,
                    labelVisible: false,
                    labelAnchor: new google.maps.Point(baloonx, baloony)
                };

                if (icon !== 'Add File') {
                    var iconObj = {
                        url: icon,
                        anchor: new google.maps.Point(iconHor, iconVert)
                    };
                    markerOptions.icon = iconObj;
                }

                var marker = new MarkerWithLabel(markerOptions);

                if (toogleInfoWindow == "on") {

                    if (hover == "on") {
                        marker.addListener('mouseover', function(){
                            this.set("labelVisible", true);
                        });
                        marker.addListener('mouseout', function(){
                            this.set("labelVisible", false);
                        });
                    } else {

                        marker.addListener('click', function() {
                            if (this.labelVisible) {
                                this.set("labelVisible", false);
                            } else {
                                this.set("labelVisible", true);
                            }
                        });
                    }
                }
                return marker;
            }

            function startu71382() {
                if (document.widgets.map) {
                    showu71382();
                } else {
                    setTimeout(startu71382, 500);
                }
            }

            setTimeout(startu71382, 500);

    	</script>



    	<script type="application/javascript">

            function show() {
                var markers = {};
                var map = document.widgets.map;
                if ("on" == "on") {

                    var marker = createMarker(55.632863, 37.441439, "", 50, 70, "assets/map-icon-metro%402x.png", map, "on", "on", "Метро Румянцево", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 119, 140);
                }

                if ("on" == "on") {
                    var marker = createMarker(55.621485, 37.424449, "", 50, 70, "assets/map-icon-metro%402x.png", map, "on", "on", "Метро Саларьево", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 119, 140);
                }

                if ("on" == "on") {
                    var marker = createMarker(55.630194, 37.426212, "", 15, 50, "assets/map-icon-prud%402x.png", map, "on", "on", "Румянцевский пруд", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 90, 120);
                }

                if ("on" == "on") {
                    var marker = createMarker(55.630219, 37.423444, "", 50, 60, "assets/map-icon-rio%402x.png", map, "on", "on", "ТК РИО", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 77, 130);
                }

                if ("on" == "on") {
                    var marker = createMarker(55.627704, 37.374581, "", 0, 0, "assets/map-icon-lk%402x.png", map, "on", "on", "Горнолыжный курорт Ново-Переделкино", "FFFFFF", "F89900", "Panton", 15, 4, 20, 25, 140, 70);
                }

                if ("on" == "on") {
                    var marker = createMarker(55.636000, 37.419394, "", 0, 0, "assets/map-icon-detsad%402x.png", map, "on", "on", "Детский сад", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 47, 66);
                }

                if ("on" == "on") {
                    var marker = createMarker(55.640677, 37.406512, "", 0, 0, "assets/map-icon-detsad%402x.png", map, "on", "on", "Детский сад", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 47, 66);
                }

                if ("on" == "on") {
                    var marker = createMarker(55.641293, 37.403406, "", 0, 0, "assets/map-icon-detsad%402x.png", map, "on", "on", "Детский сад", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 47, 66);
                }

                if ("on" == "on") {
                    var marker = createMarker(55.635265, 37.382795, "", 0, 0, "assets/map-icon-detsad%402x.png", map, "on", "on", "Детский сад", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 47, 66);
                }

                if ("on" == "on") {
                    var marker = createMarker(55.636651, 37.378915, "", 0, 0, "assets/map-icon-swimmingpool%402x.png", map, "on", "on", "Бассейн", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 30, 66);
                }
            }

            function createMarker(lat, lng, title, iconHor, iconVert, icon, map, toogleInfoWindow, hover, desc, bg, textColor, font, fontSize, radius, vert, hor, baloonx, baloony) {

                var contentString = '<div style="border-radius: ' + radius + 'px; padding: ' + vert + 'px ' + hor + 'px; background-color: #' + bg + '; color: #' + textColor + '; font-family: ' + font + '; font-size: ' + fontSize + 'px;">'+
                    desc +
                    '</div>';

                var markerOptions = {
                    position: {lat: lat, lng: lng},
                    map: map,
                    title: title,
                    labelContent: contentString,
                    labelVisible: false,
                    labelAnchor: new google.maps.Point(baloonx, baloony)
                };

                if (icon !== 'Add File') {
                    var iconObj = {
                        url: icon,
                        anchor: new google.maps.Point(iconHor, iconVert)
                    };
                    markerOptions.icon = iconObj;
                }

                var marker = new MarkerWithLabel(markerOptions);

                if (toogleInfoWindow == "on") {

                    if (hover == "on") {
                        marker.addListener('mouseover', function(){
                            this.set("labelVisible", true);
                        });
                        marker.addListener('mouseout', function(){
                            this.set("labelVisible", false);
                        });
                    } else {

                        marker.addListener('click', function() {
                            if (this.labelVisible) {
                                this.set("labelVisible", false);
                            } else {
                                this.set("labelVisible", true);
                            }
                        });
                    }
                }
                return marker;
            }

            function start() {
                if (document.widgets.map) {
                    show();
                } else {
                    setTimeout(start, 500);
                }
            }

            setTimeout(start, 500);

    	</script>



    	<script type="application/javascript">

            function showu71381() {
                var markers = {};
                var map = document.widgets.map;
                if ("on" == "on") {

                    var marker = createMarkeru71381(55.637563, 37.376708, "", 0, 0, "assets/map-icon-hospital%402x.png", map, "on", "on", "Поликлиника", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 50, 70);
                }

                if ("on" == "on") {
                    var marker = createMarkeru71381(55.643219, 37.404992, "", 0, 0, "assets/map-icon-hospital%402x.png", map, "on", "on", "Поликлиника", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 50, 70);
                }

                if ("on" == "on") {
                    var marker = createMarkeru71381(55.646579, 37.40299, "", 0, 0, "assets/map-icon-swimmingpool%402x.png", map, "on", "on", "Бассейн", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 33, 70);
                }

                if ("on" == "on") {
                    var marker = createMarkeru71381(55.650319, 37.387967, "", 0, 0, "assets/map-icon-swimmingpool%402x.png", map, "on", "on", "Бассейн", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 37, 70);
                }

                if ("on" == "on") {
                    var marker = createMarkeru71381(55.63984, 37.407615, "", 0, 0, "assets/map-icon-education%402x.png", map, "on", "on", "Школа", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 28, 70);
                }

                if ("on" == "on") {
                    var marker = createMarkeru71381(55.642352, 37.40798, "", 0, 0, "assets/map-icon-education%402x.png", map, "on", "on", "Школа", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 28, 70);
                }

                if ("on" == "on") {
                    var marker = createMarkeru71381(55.642622, 37.371271, "", 0, 0, "assets/map-icon-education%402x.png", map, "on", "on", "Школа", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 28, 70);
                }

                if ("on" == "on") {
                    var marker = createMarkeru71381(55.641675, 37.371726, "", 0, 0, "assets/map-icon-education%402x.png", map, "on", "on", "Школа", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 28, 70);
                }

                if ("on" == "on") {
                    var marker = createMarkeru71381(55.629606, 37.424806, "", -15, 5, "assets/map-icon-cinema%402x.png", map, "on", "on", "Кинотеатр", "FFFFFF", "F89900", "Panton", 17, 4, 20, 25, 28, 70);
                }

                if ("off" == "on") {
                    var marker = createMarkeru71381(-34.397, 150.644, "Заголовок", 0, 0, " ", map, "off", "off", "Текст", "FFFFFF", "000000", "Arial", 15, 0, 0, 0, 0, 0);
                }
            }

            function createMarkeru71381(lat, lng, title, iconHor, iconVert, icon, map, toogleInfoWindow, hover, desc, bg, textColor, font, fontSize, radius, vert, hor, baloonx, baloony) {

                var contentString = '<div style="border-radius: ' + radius + 'px; padding: ' + vert + 'px ' + hor + 'px; background-color: #' + bg + '; color: #' + textColor + '; font-family: ' + font + '; font-size: ' + fontSize + 'px;">'+
                    desc +
                    '</div>';

                var markerOptions = {
                    position: {lat: lat, lng: lng},
                    map: map,
                    title: title,
                    labelContent: contentString,
                    labelVisible: false,
                    labelAnchor: new google.maps.Point(baloonx, baloony)
                };

                if (icon !== 'Add File') {
                    var iconObj = {
                        url: icon,
                        anchor: new google.maps.Point(iconHor, iconVert)
                    };
                    markerOptions.icon = iconObj;
                }

                var marker = new MarkerWithLabel(markerOptions);

                if (toogleInfoWindow == "on") {

                    if (hover == "on") {
                        marker.addListener('mouseover', function(){
                            this.set("labelVisible", true);
                        });
                        marker.addListener('mouseout', function(){
                            this.set("labelVisible", false);
                        });
                    } else {

                        marker.addListener('click', function() {
                            if (this.labelVisible) {
                                this.set("labelVisible", false);
                            } else {
                                this.set("labelVisible", true);
                            }
                        });
                    }
                }
                return marker;
            }

            function startu71381() {
                if (document.widgets.map) {
                    showu71381();
                } else {
                    setTimeout(startu71381, 500);
                }
            }

            setTimeout(startu71381, 500);

    	</script>



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

            <script type="text/javascript">



            </script>




    	<script type="application/javascript">



    	</script>






   </body>
</html>
