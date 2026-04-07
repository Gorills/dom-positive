<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/static/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8">
	<style>
  	@if($mode == 'dev')	
    	html, body {
      	background: #3c2846; 
      	background-color: #3c2846; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
    @else
      html, body {
      	background:none transparent;
      }
    @endif
	</style>

  	
		<title>{{ time() }}: Подбор квартиры</title>
	</head>
	<body>
<div class="container" style="margin-top: 140px;">
  <div class="param_title">Подберите квартиру</div><br />
  <div class="param_desc">Выберите корпус, желаемую площадь, количество комнат, вид из окна, чтобы найти «свою» квартиру в жилом комплексе «Позитив», пожалуй, лучшей новостройке в Румянцево. Посмотреть квартиры в продаже вы можете ниже.</div>
  <br /><br /><br /><br />
  
  <div class="annotation">Выберите количество комнат</div><br /><br />
  <div class="row rooms_block"> 
    <div class="col-md-12" align="center">
      <input class="rooms" type="checkbox" value="1"><label data-room="1"><p></p><span class="label_txt">1 комната</span></label>
      <input class="rooms" type="checkbox" value="2"><label data-room="2"><p></p><span class="label_txt">2 комнаты</span></label>
      <input class="rooms" type="checkbox" value="3"><label data-room="3"><p></p><span class="label_txt">3 комнаты</span></label>
    </div>
  </div>
  
  <br /><br /><br /><br /><br /><br />
  
  
  <img class="corps_map" src="/static/images/korpusa@2x.png" border="0" />	    
  <?xml version="1.0" encoding="utf-8"?>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="-18 -1 873 595" style="enable-background:new -18 -1 873 595;" xml:space="preserve" id="corps">
  <style type="text/css">
      .st0{fill-rule:evenodd;clip-rule:evenodd;}
  </style>
  
<!--   <image xlink:href="/images/dvor.png" x="120" y="230" height="70%" width="70%" /> -->
  
  <g id="k1"> 
      <polygon data-building="1" class="st0" points="-11.8,543.6 6,543.6 6,549.2 42,549.2 42,544.6 58.8,544.6 58.8,511.7 33.1,511.7 33,506.7 
          25.2,506.7 25.2,462 29,462 29,443.6 24.7,443.6 24.7,373.5 29,373.5 29,355.2 25.3,354.2 25.3,319.2 4.8,319.2 4.8,315.9 
          -5.5,315.9 -5.5,328.1 -12.5,328.3 -12.5,399.6 -8.9,399.4 -8.9,417.2 -12.7,417.2 -12.7,488 -8.7,488 -8.7,513.2 -11.8,513.2"/>
  </g>
  <g id="k2">
      <polygon data-building="2" class="st0" points="61.9,347.3 61.9,337.7 64.9,337.6 65.3,317.6 83,317.5 83,312.3 101.5,312.3 101.5,318.5 136.1,318.5 
          136.1,312.3 154.7,312.3 154.7,318.5 189.8,318.5 189.8,312.3 208.1,312.3 208.1,318 243.3,318 243.3,312.3 261,312.3 261,317.6 
          277.7,317.6 277.7,338.2 282.5,338.2 282.5,347.6 270.2,347.6 270.2,355 233.5,355 233.5,350.7 217,350.6 216.9,355.5 180.3,355 
          180.3,350.2 163.2,350.2 163.2,355 126.9,355 126.9,351.2 110.1,351.2 110.1,355 73.8,355 73.8,347.5"/>
  </g>
  <g id="k3">
      <polygon data-building="3" class="st0" points="329.7,336.9 329.7,318.7 355.7,317.9 355.7,312.9 372.9,312.9 372.9,318.5 424.4,318.5 424.4,312.9 
          442.1,312.7 441.8,318.2 493.4,318.2 493.2,313.1 511.5,313.8 511.5,318.3 536.7,319.1 536.7,337.3 539.8,337.3 539.8,345.9 
          530.2,345.9 530.2,354.5 474.3,354.5 474.3,350 460.6,350 460.6,354.5 405.6,354.5 404.5,350.5 391.5,350.5 390.6,353.9 
          337.3,353.4 337.3,346.5 326.2,346.5 326.2,336.4     "/>
  </g>
  <g id="k4">
      <polygon data-building="4" class="st0" points="566.7,347.1 566.7,337.5 569.6,337.4 570,317.3 587.7,317.3 587.7,312 606.2,312 606.2,318.3 
          640.8,318.3 640.8,312 659.4,312 659.4,318.3 694.5,318.3 694.5,312 712.8,312 712.8,317.8 748.1,317.8 748.1,312 765.7,312 
          765.7,317.3 782.4,317.3 782.4,338 787.2,338 787.2,347.3 774.9,347.3 774.9,354.8 738.2,354.8 738.2,350.4 721.8,350.3 
          721.6,355.2 685.1,354.8 685.1,350 667.9,350 667.9,354.8 631.6,354.8 631.6,350.9 614.9,350.9 614.9,354.8 578.6,354.8 
          578.6,347.3     "/>
  </g>
  <g id="k5">
      <polygon data-building="5" class="st0" points="849.5,548.2 831.7,548.2 831.7,553.7 795.7,553.7 795.7,549.2 778.9,549.2 778.9,516.3 804.6,516.3 
          804.7,511.3 812.5,511.3 812.5,466.6 808.7,466.6 808.7,448.1 813,448.1 813,378 808.7,378 808.7,359.8 812.4,358.8 812.4,323.8 
          832.9,323.8 832.9,320.4 843.2,320.4 843.2,332.7 850.2,332.9 850.2,404.2 846.6,404 846.6,421.7 850.4,421.7 850.4,492.5 
          846.4,492.5 846.4,517.7 849.5,517.7     "/>
  </g>
  <g id="k6">
      <polygon data-building="6" class="st0" points="340.3,534.8 340.3,524.7 343.7,524.7 343.7,504.8 361.4,504.8 361.4,500 379.7,500 379.7,504.5 
          422.9,504.5 422.9,499.5 441.3,499.5 441.3,504.5 484.1,504.5 484.1,500 502.5,500 502.5,504.5 520.5,504.5 520.5,524.7 
          523.4,524.7 523.4,534.8 511.4,534.8 511.4,541.7 474.9,541.7 474.9,538.1 459.1,538.1 459.1,541.7 405.1,541.7 405.1,538.6 
          389,538.6 388.9,541.6 352.5,541.6 352.5,535     "/>
  </g>
  </svg>
  
  <div class="street">
    Улица родниковая
  </div> <br />
</div>
    
    <div class="container">	
      
<!--
    	<nav class="navbar navbar-coffee">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Позитив</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../navbar/">Default</a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
-->
    </div>
		<br />
		<br />

    <div class="container">   
      
      <div class="annotation">Выберите корпуса в продаже</div><br /><br />
      <div class="row rooms_block"> 
        <div class="col-md-12" align="center">
          <input class="corpuses" type="checkbox" value="4"><label data-building="4"><p></p><span class="label_txt_buildings">4 корпус</span></label>
          <input class="corpuses" type="checkbox" value="5"><label data-building="5"><p></p><span class="label_txt_buildings">5 корпус</span></label>
          <input class="corpuses" type="checkbox" value="all"><label data-building="all"><p></p><span class="label_txt_other">все</span></label>
        </div>
      </div>
      
      <br /><br /><br /><br /><br /><br />
      
      <div class="row">
        <div class="col-lg-12 sliders">
          <div class="annotation">Укажите желаемую площадь, м<sup>2</sup></div><br />
          <div class="min_static"><div class="static_values sqm_min_static">1</div></div>
          <div id="sqm"></div>
          <div class="max_static"><div class="static_values sqm_max_static">50</div></div>
        </div>
      </div><br /><br />
      
      <div class="row">
        <div class="col-lg-12 sliders">
          <div class="annotation">Укажите подходящую стоимость, млн. руб.</div><br />
          <div class="min_static"><div class="static_values price_min_static"></div></div>
          <div id="price"></div>
          <div class="max_static"><div class="static_values price_max_static"></div></div>
        </div>
      </div>  <br /><br />
      
      <div class="row">
        <div class="col-lg-12 sliders">
          <div class="annotation">Выберите подходящий этаж</div><br />
          <div class="min_static"><div class="static_values floor_min_static"></div></div>
          <div id="floor">
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-even" style="left: 4.34783%;"><span class="slider_txt">3</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-odd" style="left: 8.69565%;"><span class="slider_txt">4</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-even" style="left: 13.0435%;"><span class="slider_txt">5</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-odd" style="left: 17.3913%;"><span class="slider_txt">6</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-even" style="left: 21.7391%;"><span class="slider_txt">7</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-odd" style="left: 26.087%;"><span class="slider_txt">8</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-even" style="left: 30.4348%;"><span class="slider_txt">9</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-odd" style="left: 34.7826%;"><span class="slider_txt">10</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-even" style="left: 39.1304%;"><span class="slider_txt">11</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-odd" style="left: 43.4783%;"><span class="slider_txt">12</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-even" style="left: 47.8261%;"><span class="slider_txt">13</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-odd" style="left: 52.1739%;"><span class="slider_txt">14</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-even" style="left: 56.5217%;"><span class="slider_txt">15</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-odd" style="left: 60.8696%;"><span class="slider_txt">16</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-even" style="left: 65.2174%;"><span class="slider_txt">17</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-odd" style="left: 69.5652%;"><span class="slider_txt">18</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-even" style="left: 73.913%;"><span class="slider_txt">19</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-odd" style="left: 78.2609%;"><span class="slider_txt">20</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-even" style="left: 82.6087%;"><span class="slider_txt">21</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-odd" style="left: 86.9565%"><span class="slider_txt">22</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-even" style="left: 91.3043%;"><span class="slider_txt">23</span></span>
            <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-odd" style="left: 95.6522%;"><span class="slider_txt">24</span></span>
            
          </div>
          <div class="max_static"><div class="static_values floor_max_static"></div></div>
        </div>
      </div>
      
      <br />
      <br />
      <br />
      <div id="filtered"> </div>
      <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
      <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    </div>
<!--     <link href="https://fonts.googleapis.com/css?family=Russo+One|Ubuntu" rel="stylesheet"> -->
<!--     <link rel="stylesheet" href="/static/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" lazyload> -->
    <link rel="stylesheet" href="/static/css/font-awesome.min.css" type="text/css" media="screen" charset="utf-8" lazyload>
    <link rel="stylesheet" href="/static/css/style.css" type="text/css" media="screen" charset="utf-8" lazyload>
    <link rel="stylesheet" href="/static/css/jquery-ui.min.css" type="text/css" media="screen" charset="utf-8" lazyload>
		<script src="/static/js/vendor/jquery-1.11.2.min.js"></script>
		<script src="/static/js/vendor/jquery-ui.min.js"></script>
		<script src="/static/js/vendor/bootstrap.min.js"></script>
		<script>
  	if (window!= window.top) { // inside iframe
      document.body.style.backgroundColor = 'transparent';
    }	
    $(function() {
      setDefaultSliderValues = true;
      ajaxSliderValues = false;
      rooms = [];
      buildings = [];
      
/*
      $('#corps polygon[data-building="4"], #corps polygon[data-building="5"]').click(function() {
        if($(this).attr("class") == "st0") {
          $(this).attr("class", "st0 active");
        } else $(this).attr("class", "st0");
        
        buildings = [];
        $("#corps polygon.active").each(function() {
          buildings.push($(this).attr("data-building"));
        });
        
        $(".corpuses + label.checked").each(function() {
          buildings.push($(this).attr("data-building"));
        });
        
        clearSliders();
        getSliders();
        applyFilters();
        return false;
      });
*/
      
      $(".rooms + label").click(function(){
        if(!$(this).hasClass("checked")) {
          $(this).addClass("checked");
        } else $(this).removeClass("checked");
        
        rooms = [];
        $(".rooms + label.checked").each(function() {
          rooms.push($(this).attr("data-room"));
        });
        
        clearSliders();
        getSliders();
        applyFilters();
        
        return false;
      });
      
      $(".corpuses + label").click(function(){
        if(!$(this).hasClass("checked")) {
          if($(this).attr("data-building") == 'all') $(".corpuses + label").removeClass("checked");
          $(this).addClass("checked");
        } else $(this).removeClass("checked");
        
        buildings = [];
        
        $("#corps polygon.active").each(function() {
          buildings.push($(this).attr("data-building"));
        });
        
        $(".corpuses + label.checked").each(function() {
          buildings.push($(this).attr("data-building"));
        });
        
        if($(this).attr("data-building") == 'all' && $(this).hasClass("checked")) buildings = [];
        
        clearSliders();
        getSliders();
        applyFilters();
        
        return false;
      });
      
      $("#building").change(function() {
        applyFilters();
      });
      
      $( "#floor" ).slider({
        range: true,
        min: 2,
        max: 25,
        values: [2, 25],
        slide: function( event, ui ) {  
          $(this).find(".ui-slider-handle:nth-child(even)").html("<span class='slider_txt'>" + ui.values[ 0 ] + "</span>");
          $(this).find(".ui-slider-handle:nth-child(odd)").html("<span class='slider_txt'>" + ui.values[ 1 ] + "</span>");
        },
        stop: function(event, ui) {
          applyFilters();
        }
      });
      
      $( "#sqm" ).slider({
        range: true,
        min: {{ $filters['sqm']['min'] }},
        max: {{ $filters['sqm']['max'] }},
        step: 0.1,
        values: [{{ $filters['sqm']['min'] }}, {{ $filters['sqm']['max'] }}],
        slide: function( event, ui ) {
          $(this).find(".ui-slider-handle:nth-child(even)").html("<span class='slider_txt'>" + ui.values[ 0 ] + "</span>");
          $(this).find(".ui-slider-handle:nth-child(odd)").html("<span class='slider_txt'>" + ui.values[ 1 ] + "</span>");
          getSliders('sqm');
/*
          $(this).find(".ui-slider-handle:nth-child(odd)").css('margin-left', '2px');
          if(ui.values[1] == {{ $filters['sqm']['max'] }}) { 
            console.info("{{ $filters['sqm']['max'] }}");
            $(this).find(".ui-slider-handle:nth-child(odd)").css('margin-left', '-44px');
          }  
          
          if(ui.values[1] == {{ $filters['sqm']['min'] }}) { 
            console.info("{{ $filters['sqm']['min'] }}");
            $(this).find(".ui-slider-handle:nth-child(odd)").css('margin-left', '2px');
          } 
*/
        },
        stop: function(event, ui) {
          applyFilters();
        }
      });
      
      $( "#rooms" ).slider({
        range: true,
        min: {{ $filters['rooms']['min'] }},
        max: {{ $filters['rooms']['max'] }},
        values: [{{ $filters['rooms']['min'] }}, {{ $filters['rooms']['max'] }}],
        slide: function( event, ui ) {
          $(this).find(".ui-slider-handle:nth-child(even)").html("<span class='slider_txt'>" + ui.values[ 0 ] + "</span>");
          $(this).find(".ui-slider-handle:nth-child(odd)").html("<span class='slider_txt'>" + ui.values[ 1 ] + "</span>");
        },
        stop: function(event, ui) {
          applyFilters();
        }
      });
      
      $( "#price" ).slider({
        range: true,
        min: {{ $filters['price']['min'] }},
        max: {{ $filters['price']['max'] }},
        step: 0.1,
        values: [{{ $filters['price']['min'] }}, {{ $filters['price']['max'] }}],
        slide: function( event, ui ) {
          $(this).find(".ui-slider-handle:nth-child(even)").html("<span class='slider_txt'>" + ui.values[ 0 ] + "</span>");
          $(this).find(".ui-slider-handle:nth-child(odd)").html("<span class='slider_txt'>" + ui.values[ 1 ] + "</span>");
          getSliders('price');
        },
        stop: function(event, ui) {
          applyFilters();
        }
      });
      
      //initSliderDefaultValues();
      function initSliderDefaultValues() { 
        if(setDefaultSliderValues) {
          $(".sqm_min_static").html($("#sqm").slider("values", 0));
          $(".sqm_max_static").html($("#sqm").slider("values", 1));
          
          $(".price_min_static").html($("#price").slider("values", 0));
          $(".price_max_static").html($("#price").slider("values", 1));
          
          $(".floor_min_static").html($("#floor").slider("values", 0));
          $(".floor_max_static").html($("#floor").slider("values", 1));
          
          setDefaultSliderValues = false;
        }
        
        
        
        $("#floor .ui-slider-handle:nth-child(even)").html("<span class='slider_txt'>" + $("#floor").slider("values", 0) + "</span>");
        $("#floor .ui-slider-handle:nth-child(odd)").html("<span class='slider_txt'>" + $("#floor").slider("values", 1) + "</span>");
        $("#sqm .ui-slider-handle:nth-child(even)").html("<span class='slider_txt'>" + $("#sqm").slider("values", 0) + "</span>");
        $("#sqm .ui-slider-handle:nth-child(odd)").html("<span class='slider_txt'>" + $("#sqm").slider("values", 1) + "</span>");
        $("#rooms .ui-slider-handle:nth-child(even)").html("<span class='slider_txt'>" + $("#rooms").slider("values", 0) + "</span>");
        $("#rooms .ui-slider-handle:nth-child(odd)").html("<span class='slider_txt'>" + $("#rooms").slider("values", 1) + "</span>");
        $("#price .ui-slider-handle:nth-child(even)").html("<span class='slider_txt'>" + $("#price").slider("values", 0) + "</span>");
        $("#price .ui-slider-handle:nth-child(odd)").html("<span class='slider_txt'>" + $("#price").slider("values", 1) + "</span>");
      }
      
      function getSliders(type) {
        if(ajaxSliderValues) ajaxSliderValues.abort();
        ajaxSliderValues = $.ajax({
          type: 'POST',
          url: "{{ route('flats.filter') }}",
          data: { 
            building: buildings.length ? buildings : "all",
            floor_min: $('#floor').slider("values", 0),
            floor_max: $('#floor').slider("values", 1),
            sqm_min: $('#sqm').slider("values", 0),
            sqm_max: $('#sqm').slider("values", 1),
            rooms: rooms.length ? rooms : "all",
            price_min: $('#price').slider("values", 0),
            price_max: $('#price').slider("values", 1),
          },
          success: function(data) {
              if(data.filters.sqm.min && type != 'sqm') $("#sqm").slider('values', 0, data.filters.sqm.min); 
              if(data.filters.sqm.max && type != 'sqm') $("#sqm").slider('values', 1, data.filters.sqm.max);

              if(data.filters.price.min && type != 'price') $("#price").slider("values", 0, data.filters.price.min);
              if(data.filters.price.max && type != 'price') $("#price").slider("values", 1, data.filters.price.max);
              
              if(type != 'sqm') {
                $("#sqm .ui-slider-handle:nth-child(even)").html("<span class='slider_txt'>" + $("#sqm").slider("values", 0) + "</span>");
                $("#sqm .ui-slider-handle:nth-child(odd)").html("<span class='slider_txt'>" + $("#sqm").slider("values", 1) + "</span>");
              }
              
              if(type != 'price') {
                $("#price .ui-slider-handle:nth-child(even)").html("<span class='slider_txt'>" + $("#price").slider("values", 0) + "</span>");
                $("#price .ui-slider-handle:nth-child(odd)").html("<span class='slider_txt'>" + $("#price").slider("values", 1) + "</span>");
              }
          },
          dataType: "json",
          async:false
        });
      }
      
      function clearSliders() {
        $("#sqm").slider('values', 0, {{ $filters['sqm']['min'] }}); 
        $("#sqm").slider('values', 1, {{ $filters['sqm']['max'] }}); 
        $("#floor").slider('values', 0, {{ $filters['floor']['min'] }}); 
        $("#floor").slider('values', 1, {{ $filters['floor']['max'] }}); 
        $("#price").slider('values', 0, {{ $filters['price']['min'] }}); 
        $("#price").slider('values', 1, {{ $filters['price']['max'] }}); 
      }
      
      function applyFilters() {
        $('.load_results').remove();
        $('#filtered').hide();
        $('#filtered').before('<center class="load_results"><br />'+
            '<div class="load-10">'+
                '<div class="bar"></div>'+
            '</div>'+
          '</center>');
        setTimeout(function() { 
          $.post("{{ route('flats.filter') }}", { 
            building: buildings.length ? buildings : "all",
            floor_min: $('#floor').slider("values", 0),
            floor_max: $('#floor').slider("values", 1),
            sqm_min: $('#sqm').slider("values", 0),
            sqm_max: $('#sqm').slider("values", 1),
            rooms: rooms.length ? rooms : "all",
            price_min: $('#price').slider("values", 0),
            price_max: $('#price').slider("values", 1),
          })
            .done(function(data) {
              $('.load_results').remove();
              $('#filtered').html(data.html);
              $('#filtered').fadeIn('slow');
              
              
              
              //initSliderDefaultValues();
                
/*
              console.log(data.filters.sqm.min + ' max: ' + data.filters.sqm.max);
              if(data.filters.sqm.min) $("#sqm").slider('values', 0, data.filters.sqm.min); 
              if(data.filters.sqm.max) $("#sqm").slider('values', 1, data.filters.sqm.max);
              
              console.log(data.filters.price.min + ' max: ' + data.filters.price.max);
              if(data.filters.price.min) $("#price").slider("values", 0, data.filters.price.min);
              if(data.filters.price.max) $("#price").slider("values", 1, data.filters.price.max);
*/
              initSliderDefaultValues();
              $('.corpuses + label[data-building!="all"]').hide();
              for(var key in data.filters.building) { console.log(data.filters.building[key]);
                
                $('.corpuses + [data-building="' + data.filters.building[key] + '"]').show();
              }
              
 
            }
          , 'json');
        }, 1000);
            
      }
      
      initSliderDefaultValues();
      applyFilters();
    });
  </script>
  
	</body>
</html>
