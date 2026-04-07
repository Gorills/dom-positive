<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<style></style>
		<title>Выбиратор</title>
	</head>
	<body>
		
		<div class="jumbotron">
  		<div class="container">
        <h1>Подбор по параметрам</h1>
        <p>Выберите корпус, желаемую площадь квартиры, количество комнат, вид из окна, чтобы найти «свою» квартиру в жилом комплексе «Румянцево»</p>
  		</div>
    </div>
    <div class="container">
@if(count($filters['building']))     
      <div class="row">
        <div class="col-lg-6">
          Корпус
          <select class="form-control" name="building" id="building"> 
            <option value="all">Все</option>
  @foreach($filters['building'] as $building)
            <option>{{ $building }}</option>
  @endforeach
          </select>
        </div>
      </div>  <br />
@endif      
      
      <div class="row">
        <div class="col-lg-6">
          Выберите подходящий этаж <span id="floor_amount"></span>
          <div id="floor"></div>
        </div>
        
        <div class="col-lg-6">
          Укажите желаемую площадь, м<sup>2</sup> <span id="sqm_amount"></span>
          <div id="sqm"></div>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-lg-6">
          Выберите количество комнат <span id="rooms_amount"></span>
          <div id="rooms"></div>
        </div>
        
        <div class="col-lg-6">
          Укажите подходящую стоимость, млн. руб. <span id="price_amount"></span>
          <div id="price"></div>
        </div>
      </div> <br />
      
      <div id="filtered"> </div>
    </div>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" lazyload>
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css" media="screen" charset="utf-8" lazyload>
		<script src="/js/vendor/jquery-1.11.2.min.js"></script>
		<script src="/js/vendor/jquery-ui.min.js"></script>
		<script src="/js/vendor/bootstrap.min.js"></script>
		<script>
    $(function() {
      $("#building").change(function() {
        applyFilters();
      });
      
      $( "#floor" ).slider({
        range: true,
        min: {{ $filters['floor']['min'] }},
        max: {{ $filters['floor']['max'] }},
        values: [{{ $filters['floor']['min'] }}, {{ $filters['floor']['max'] }}],
        slide: function( event, ui ) {
          $( "#floor_amount" ).text(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
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
          $( "#sqm_amount" ).text(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
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
          $( "#rooms_amount" ).text(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
        },
        stop: function(event, ui) {
          applyFilters();
        }
      });
      
      $( "#price" ).slider({
        range: true,
        min: {{ $filters['price']['min'] }},
        max: {{ $filters['price']['max'] }},
        values: [{{ $filters['price']['min'] }}, {{ $filters['price']['max'] }}],
        slide: function( event, ui ) {
          $( "#price_amount" ).text(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
        },
        stop: function(event, ui) {
          applyFilters();
        }
      });
      
      $( "#floor_amount" ).text($( "#floor" ).slider("values", 0 ) + " - " + $( "#floor" ).slider( "values", 1 ) );
      $( "#sqm_amount" ).text($( "#sqm" ).slider("values", 0 ) + " - " + $( "#sqm" ).slider( "values", 1 ) );
      $( "#rooms_amount" ).text($( "#rooms" ).slider("values", 0 ) + " - " + $( "#rooms" ).slider( "values", 1 ) );
      $( "#price_amount" ).text($( "#price" ).slider("values", 0 ) + " - " + $( "#price" ).slider( "values", 1 ) );
      
      function applyFilters() {
        $('#filtered').html('<div class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div>');
        $.post("{{ route('flats.filter') }}", { 
          building: $('#building').val(),
          floor_min: $('#floor').slider("values", 0),
          floor_max: $('#floor').slider("values", 1),
          sqm_min: $('#sqm').slider("values", 0),
          sqm_max: $('#sqm').slider("values", 1),
          rooms_min: $('#rooms').slider("values", 0),
          rooms_max: $('#rooms').slider("values", 1),
          price_min: $('#price').slider("values", 0),
          price_max: $('#price').slider("values", 1),
        })
          .done(function( data ) {
            console.log(data);
            $('#filtered').html(data);
          }
        );
      }
      
      applyFilters();
    });
  </script>
  
	</body>
</html>
