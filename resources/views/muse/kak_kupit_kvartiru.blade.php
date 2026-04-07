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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "require.js", "jquery.museresponsive.js", "kak_kupit_kvartiru.css"], "outOfDate":[]};
</script>

  <link rel="shortcut icon" href="images/favicon.ico?crc=238351894"/>
  <title>{{ $title }}</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4032550449"/>
  <link rel="stylesheet" type="text/css" href="css/master_top.css?crc=4079322621"/>
  <link rel="stylesheet" type="text/css" href="css/kak_kupit_kvartiru.css?crc=440367629" id="pagesheet"/>
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_top.css?crc=4022659591"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_kak_kupit_kvartiru.css?crc=305105140" id="nomq_pagesheet"/>
  <![endif]-->
    <!--custom head HTML-->
  <!--HTML Widget code-->

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

            <style type="text/css">
                .overlay_u589620 {
                    position: fixed;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(244,244,244, 1) !important;
                    z-index: 1998 !important;
                }

                .chose-flat-method {
                    z-index: 2000 !important;
                }

                .chose-flat-method, .overlay_u589620 {
                    animation-duration: 0.5s !important;
                    -webkit-animation-duration: 0.5s !important;
                    -o-animation-duration: 0.5s !important;
                    -moz-animation-duration: 0.5s !important;
                }

                .hidden {
                    display: none;
                }

            </style>

	    <style>

			.btn-chose-by-plan{
				-webkit-transition: all .5s ease .0s;
				-moz-transition: all .5s ease .0s;
				-o-transition: all .5s ease .0s;
				transition: all .5s ease .0s;
				-ms-transform-origin: 50% 50%;
				-webkit-transform-origin: 50% 50%;
				transform-origin: 50% 50%;
			}

			.btn-chose-by-plan:hover{
				-webkit-transform: scale(1.1);
				-moz-transform: scale(1.1);
				-ms-transform: scale(1.1);
				transform: scale(1.1);
				-webkit-transition: all .5s ease .0s;
				-moz-transition: all .5s ease .0s;
				-o-transition: all .5s ease .0s;
				transition: all .5s ease .0s;
			}

		</style>

	    <style>

			.btn-chose-by-parameters{
				-webkit-transition: all .5s ease .0s;
				-moz-transition: all .5s ease .0s;
				-o-transition: all .5s ease .0s;
				transition: all .5s ease .0s;
				-ms-transform-origin: 50% 50%;
				-webkit-transform-origin: 50% 50%;
				transform-origin: 50% 50%;
			}

			.btn-chose-by-parameters:hover{
				-webkit-transform: scale(1.1);
				-moz-transform: scale(1.1);
				-ms-transform: scale(1.1);
				transform: scale(1.1);
				-webkit-transition: all .5s ease .0s;
				-moz-transition: all .5s ease .0s;
				-o-transition: all .5s ease .0s;
				transition: all .5s ease .0s;
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
  <!--HTML Widget code-->

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
                'menu' => 'kak-kupit active'
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
      <ul>
    </nav>
    <div class="phone-header">
        <a class="phone-header__tel call_phone_1" href="tel:+7 (495) 771-72-20" title="Позвонить">+7 (495) 771-72-20</a>
        <a class="phone-header__callback" href="#" onclick="Comagic.openSitePhonePanel();return false;">заказать звонок</a>
    </div>
  </header>


  <div class="breakpoint active" id="bp_infinity" data-min-width="1176"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox" id="page"><!-- group -->
    <div class="clearfix grpelem shared_content" id="pbuttonu395513" data-content-guid="pbuttonu395513_content"><!-- group -->
     <div class="Button SmartPopUp clearfix grpelem" id="buttonu395513" data-visibility="changed" style="visibility:hidden" data-sizePolicy="fixed" data-pintopage="page_fixedCenter" data-leftAdjustmentDoneBy="pbuttonu395513"><!-- container box -->
      <div class="grpelem" id="u424427"><!-- custom html -->
        <iframe src="https://xn----dtbenfaypcj0b.xn--p1ai/callbackform.html" width="468" height="500" frameBorder="0">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>
      </div>
     </div>
     <div class="Button rounded-corners chose-flat-method clearfix grpelem" id="buttonu589610" data-visibility="changed" style="visibility:hidden" data-sizePolicy="fixed" data-pintopage="page_fixedCenter" data-leftAdjustmentDoneBy="pbuttonu395513"><!-- container box -->
      <div class="clearfix grpelem" id="pu589612-4"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U589612-BP_infinity" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
       <div class="clearfix colelem" id="u589612-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U589612" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
        <p>Пора найти квартиру мечты</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U589617-BP_infinity" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
       <div class="clearfix colelem" id="u589617-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U589617" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content -->
        <p>Как будем искать?</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem" id="pbuttonu589615"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U589615" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
        <a class="nonblock nontext Button museBGSize rounded-corners btn-chose-by-parameters grpelem" id="buttonu589615" href="flats-parametrics.html" data-href="page:U4280" data-muse-uid="U589615"><!-- container box --></a>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U589611" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
        <a class="nonblock nontext Button museBGSize rounded-corners btn-chose-by-plan grpelem" id="buttonu589611" href="viberite_kvartiru_v_gk_pozitiv.html" data-href="page:U365924" data-muse-uid="U589611"><!-- container box --></a>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pbuttonu589618"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U589618" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
        <a class="nonblock nontext Button rounded-corners transition clearfix grpelem" id="buttonu589618" href="flats-parametrics.html" data-href="page:U4280" data-visibility="changed" style="visibility:hidden" data-muse-uid="U589618"><!-- container box --><!-- m_editable region-id="editable-static-tag-U589619-BP_infinity" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="clearfix grpelem" id="u589619-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U589619" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc"><!-- content --><p>по параметрам</p></div><!-- /m_editable --></a>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U589613" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
        <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu589613" href="viberite_kvartiru_v_gk_pozitiv.html" data-href="page:U365924" data-visibility="changed" style="visibility:hidden" data-muse-uid="U589613"><!-- container box --><!-- m_editable region-id="editable-static-tag-U589614-BP_infinity" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="transition clearfix grpelem" id="u589614-4" data-muse-temp-textContainer-sizePolicy="true" data-muse-temp-textContainer-pinning="true" data-muse-uid="U589614" data-muse-type="txt_frame"><!-- content --><p>по генплану</p></div><!-- /m_editable --></a>
        <!-- /m_editable -->
       </div>
       <div class="colelem" id="u589616"><!-- simple frame --></div>
      </div>
     </div>
    </div>
    <div class="clearfix grpelem shared_content" id="pu589620" data-content-guid="pu589620_content"><!-- column -->
     <div class="size_fixed colelem" id="u589620" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->

            <div></div>

     </div>
     <div class="size_fixed colelem" id="u589622" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->


     </div>
     <div class="size_fixed colelem" id="u589621" data-sizePolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->


     </div>
    </div>
    <div class="size_fixed grpelem shared_content" id="u676167" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u676167_content"><!-- custom html -->

		<div></div>

    </div>
    <div class="clearfix grpelem shared_content" id="pu36428-6" data-content-guid="pu36428-6_content"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U36428-BP_infinity" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <div class="clearfix colelem" id="u36428-6" data-muse-uid="U36428" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter" data-leftAdjustmentDoneBy="pu36428-6"><!-- content -->
      <h1 id="u36428-4"><span id="u36428">Почему лучше покупать квартиру в</span><span id="u36428-2"> </span><span id="u36428-3">ЖК Позитив</span></h1>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U33080-BP_infinity" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <div class="clearfix colelem" id="u33080-16" data-muse-uid="U33080" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter" data-leftAdjustmentDoneBy="pu36428-6"><!-- content -->
      <p>1. Московская прописка.</p>
      <p>&nbsp;</p>
      <p>2. Удобная транспортная доступность.</p>
      <p>&nbsp;</p>
      <p>3. При 100% единовременной оплате предоставляется скидка 3%.</p>
      <p>&nbsp;</p>
      <p>4. При покупке квартиры в рассрочку на 6 месяцев – дополнительная скидка. Сумма скидки зависит от графика платежей.</p>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="size_fixed grpelem shared_content" id="u313674" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u313674_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="size_fixed grpelem shared_content" id="u81075" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81075_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="grpelem shared_content" id="u657079" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u657079_content"><!-- simple frame --></div>
    <div class="size_fixed grpelem shared_content" id="u81092" data-sizePolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u81092_content"><!-- custom html -->

            <div></div>

    </div>
    <div class="clearfix grpelem shared_content" id="u33198" data-content-guid="u33198_content"><!-- group -->
     <div class="clearfix grpelem" id="pu33175"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U33175-BP_infinity" template="kak_kupit_kvartiru.html" data-type="image" -->
      <div class="clip_frame grpelem" id="u33175" data-muse-uid="U33175" data-muse-type="img_frame" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- image -->
       <img class="block temp_no_img_src" id="u33175_img" data-orig-src="images/business-card%402x.png?crc=457259703" data-hidpi-src="images/business-card%402x_2x.png?crc=3917583427" alt="" width="628" height="404" data-muse-src="images/business-card%402x.png?crc=457259703" src="images/blank.gif?crc=4208392903"/>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U33186-BP_infinity" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u33186-4" data-muse-uid="U33186" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
       <p>для бесплатной консультации звоните по телефону</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U36244-BP_infinity" template="kak_kupit_kvartiru.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="call_phone_1 clearfix grpelem" id="u36244-4" data-muse-uid="U36244" data-muse-type="txt_frame" data-IBE-flags="txtStyleSrc" data-sizePolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
       <p><span class="call_phone_11">+7 (495) 771-72-20</span></p>
      </div>
      <!-- /m_editable -->
     </div>
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
  </div>
  <div class="breakpoint" id="bp_1175" data-max-width="1175"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <span class="clearfix grpelem placeholder" data-placeholder-for="pbuttonu395513_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu589620_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u676167_content"><!-- placeholder node --></span>
    <span class="browser_width placeholder" data-placeholder-for="u178650-bw_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu36428-6_content"><!-- placeholder node --></span>
    <span class="nonblock nontext placeholder" data-placeholder-for="u183159_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u313674_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u637416_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-o-proekte clearfix placeholder" data-placeholder-for="u78734-4_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u657079_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81075_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu81067-4"><!-- group -->
     <span class="nonblock nontext MuseLinkActive menu-kak-kupit clearfix placeholder" data-placeholder-for="u81067-4_content"><!-- placeholder node --></span>
     <span class="nonblock nontext menu-kvartiry clearfix placeholder" data-placeholder-for="u81071-4_content"><!-- placeholder node --></span>
     <span class="placeholder" data-placeholder-for="u330894_content"><!-- placeholder node --></span>
    </div>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81092_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-ipoteka clearfix placeholder" data-placeholder-for="u81055-4_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="u33198_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81102_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-dokumenti clearfix placeholder" data-placeholder-for="u637409-4_content"><!-- placeholder node --></span>
    <span class="Button shadow rounded-corners chose-flat-btnn clearfix grpelem placeholder" data-placeholder-for="buttonu33109_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81112_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem" id="pu81059-4"><!-- group -->
     <span class="nonblock nontext menu-gallery clearfix placeholder" data-placeholder-for="u81059-4_content"><!-- placeholder node --></span>
     <span class="nonblock nontext menu-novosti clearfix placeholder" data-placeholder-for="u81063-4_content"><!-- placeholder node --></span>
    </div>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81122_content"><!-- placeholder node --></span>
    <span class="nonblock nontext menu-kontakty clearfix placeholder" data-placeholder-for="u81039-4_content"><!-- placeholder node --></span>
    <span class="size_fixed grpelem placeholder" data-placeholder-for="u81132_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu178651-4_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu564254"><!-- column -->
     <span class="size_fixed colelem placeholder" data-placeholder-for="u564254_content"><!-- placeholder node --></span>
     <span class="size_fixed colelem placeholder" data-placeholder-for="u81142_content"><!-- placeholder node --></span>
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







	}

	catch(e)

	{

		Muse.Assert.fail('Error with Widget:попUP ParamHTMLOnDocReady Handler ' + e.toString());

	}

})();/* Widget:попUP */
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



            <div class="overlay_u589620 hidden animated"></div>

            <script type="text/javascript">

                jQuery.fn.center = function () {
                    this.css("position","fixed");
                    var top = Math.max(0, $(window).height() / 2  - $(this).height() / 2) + "px";
                    var left = Math.max(0, $(window).width() / 2 - $(this).width() / 2) + "px";
                    console.log("top: " + top);
                    console.log("left: " + left);
                    console.log("window w: " + $(window).width());
                    console.log("window h: " + $(window).height());
                    console.log("el w: " + $(this).width());
                    console.log("el h: " + $(this).height());
                    console.log("-----------------");
                    this.css("top", top);
                    this.css("left", left);
                    this.css("margin", "0");
                    return this;
                }

                jQuery.fn.posInElement = function(el, pos, mx, my) {

                	var closeStyle = {
	                	position: "absolute",
	                	width: "55px",
	                	height: "55px",
	                	zIndex: 4000,
	                };
	        		var width = parseInt(el.width());
	        		var height = parseInt(el.height());
	                switch(pos) {
	                	case "topleft":
	                		closeStyle.top = 0 - my;
	                		closeStyle.left = 0 - mx;
	                		break;
	                	case "topright":
	                		closeStyle.top = 0 - my;
	                		closeStyle.left = width + mx;
	                		break;
	                	case "bottomleft":
	                		closeStyle.top = height + my;
	                		closeStyle.left = 0 - mx;
	                		break;
	                	case "bottomright":
	                		closeStyle.top = height + my;
	                		closeStyle.left = width + my;
	                		break;
	                	default:
	                		break;
	                }

	                this.css(closeStyle);

	                return this;

                }

                console.log("initialized");
                var modal = $(".breakpoint.active .chose-flat-method");
                var allModals = $(".chose-flat-method");
                var overlay = $(".overlay_u589620");
                var effect = "fadeIn";
                var effectClose = "fadeOut";
                var target = $(".chose-flat-btnn");
                var duration = 0.5;

                var animationEnd = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";

                allModals.addClass("hidden");
                allModals.addClass("animated");
                allModals.css("opacity", 1);
                allModals.center();


                var closeBtn = $("<div></div>");
                var closeImg = $("<img>");
                closeImg.attr("src", "assets/close-video-player-btn-prrsd%402x.png");
                closeImg.attr("width", 55);
                closeBtn.append(closeImg);
                closeBtn.addClass("topright_u589620");
                closeBtn.on("click", closeEvent);
                closeBtn.hover(function(){
                	closeImg.attr("src", "assets/close-video-player-btn%402x.png");
                }, function(){
                	closeImg.attr("src", "assets/close-video-player-btn-prrsd%402x.png");
                });

                var closePos = "topright";

                closeBtn.posInElement(modal, closePos, 32, 11)

                allModals.append(closeBtn);


                window.onresize = function(event) {
                	modal = $(".breakpoint.active .chose-flat-method");
                    setTimeout(function(){ modal.center(); closeBtn.posByElement(modal, closePos, 32, 11); }, 50);
                };

                target.on("click", function(){
                    modal.center();
                    closeBtn.posInElement(modal, closePos, 32, 11);
                    modal.css("opacity", 1).removeClass("hidden").addClass(effect).one(animationEnd, function(){
                        modal.removeClass(effect);
                    });
                    overlay.css("opacity", 1).removeClass("hidden").addClass("fadeIn").one(animationEnd, function(){
                        overlay.removeClass("fadeIn");
                    });;

                });

                overlay.on("click", closeEvent);

                function closeEvent() {
                    console.log("close");
                    modal.addClass(effectClose).one(animationEnd, function() {
                        modal.removeClass(effectClose);
                        modal.addClass("hidden");
                    });
                    overlay.addClass("fadeOut").one(animationEnd, function() {
                        overlay.addClass("hidden");
                        overlay.removeClass("fadeOut");
                    });
                }

            </script>

	<script>
		console.log("Interactive Scale - Version 1.0 - MuseThemes.com");
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
