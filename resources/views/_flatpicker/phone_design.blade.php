<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="/static/css/font-awesome.min.css" type="text/css" media="screen" charset="utf-8" lazyload>
    <link rel="stylesheet" href="/static/css/style.css" type="text/css" media="screen" charset="utf-8" lazyload>
    <link rel="stylesheet" href="/static/css/jquery-ui.min.css" type="text/css" media="screen" charset="utf-8" lazyload>
    <link rel="stylesheet" href="/phone/css/flats.css" type="text/css" media="screen" charset="utf-8">

    <link rel="stylesheet" href="/phone/css/nouislider.css" type="text/css" media="screen" charset="utf-8">

    <title>{{ time() }}: Подбор квартиры</title>
</head>
<body>

<header class="header header-custom">
 <div class="header__wrap">
  <a href="http://www.дом-позитив.рф" class="">
   <img class="block" id="u45002_img" src="../images/logo%402x227x48_2x.png?crc=3806410468" data-hidpi-src="../images/logo%402x227x48_2x.png?crc=3806410468" alt="" width="227" height="47" data-muse-src="../images/logo%402x227x48.png?crc=4014315840" data-src="../images/logo%402x227x48.png?crc=4014315840">
  </a>
  <button class="header-trigger">
   <span></span>
   <span></span>
   <span></span>
  </button>
 </div>
 <div class="menu">
  <span class="menu__close" aria-label="закрыть меню"></span>
  <div class="menu__wrap">
   <figure class="menu__logo">
    <img class="block"  src="../images/logo-centered%402x361x95.png?crc=21703650" data-hidpi-src="../images/logo-centered%402x_2x.png?crc=4089599094" alt="" data-muse-src="../images/logo-centered%402x361x95.png?crc=21703650" data-heightwidthratio="0.26141078838174275" data-image-width="241" data-image-height="63" data-widget-id="accordionu45018">
   </figure>
   <ul class="menu__list">
    <li class="menu__item">
     <a href="index.html#about" class="menu__link menu__link--pink">О проекте</a>
    </li>
    <li class="menu__item">
     <a href="flats-parametrics.html" class="menu__link menu__link--yellow">Квартиры</a>
    </li>
    <li class="menu__item">
     <a href="documents.html" class="menu__link menu__link--blue">Документы</a>
    </li>
    <li class="menu__item">
     <a href="index.html#contacts" class="menu__link menu__link--green">Контакты</a>
    </li>
   </ul>
  </div>
 </div>
</header>

<div class="flats">
  <div class="flats__choose">
    <div class="container">
        <div class="param_title">Подберите квартиру!</div>
        <br/>
        <div class="param_desc">Выберите корпус, желаемую площадь, количество комнат, вид из окна, чтобы найти «свою»
            квартиру в жилом комплексе «Позитив», пожалуй, лучшей новостройке в Румянцево. Посмотреть квартиры в продаже вы
            можете ниже.
        </div>
        <img class="corps_map" src="/static/images/korpusa@2x.png" border="0"/>
        <div class="street">Улица родниковая</div>
    </div>

  </div>

  <div class="flats__rooms">
    <div class="container">

        <div class="annotation">Выберите количество комнат</div>
        <div class="row rooms_block">
            <div class="col-md-12" align="center">
                <input class="rooms" type="checkbox" value="1"><label data-room="1"><p></p><span class="label_txt">1 комната</span></label>
                <input class="rooms" type="checkbox" value="2"><label data-room="2"><p></p><span class="label_txt">2 комнаты</span></label>
                <input class="rooms" type="checkbox" value="3"><label data-room="3"><p></p><span class="label_txt">3 комнаты</span></label>
            </div>
        </div>
        <div class="annotation">Выберите корпуса в продаже</div>
        <div class="row rooms_block">
            <div class="col-md-12" align="center">
                @foreach($filters['building'] as $building)
                    <input class="corpuses" type="checkbox" value="{{ $building }}"><label data-building="{{ $building }}">
                        <p></p><span class="label_txt_buildings">{{ $building }} корпус</span></label>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 sliders">
                <div class="annotation">Укажите желаемую площадь, м<sup>2</sup></div>
                <br/>
                <div class="min_static">
                    <div class="static_values sqm_min_static">1</div>
                </div>
                <div id="sqm"></div>
                <div class="max_static">
                    <div class="static_values sqm_max_static">50</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 sliders">
                <div class="annotation">Укажите подходящую стоимость, млн. руб.</div>
                <br/>
                <div class="min_static">
                    <div class="static_values price_min_static"></div>
                </div>
                <div id="price"></div>
                <div class="max_static">
                    <div class="static_values price_max_static"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 sliders">
                <div class="annotation">Выберите подходящий этаж</div>
                <br/>
                <div class="min_static">
                    <div class="static_values floor_min_static"></div>
                </div>
                <div id="floor">
                    <!-- @for ($i = 2; $i <= 24; $i++ )
                        <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-{{$i % 2 ? 'even' : 'odd'}}" style="left: {{ (100 / 22) * ($i - 2) }}%;">
                            <span class="slider_txt">{{ $i }}</span>
                        </span>
                    @endfor -->
                </div>
                <div class="max_static">
                    <div class="static_values floor_max_static"></div>
                </div>
            </div>
        </div>


        <div class="filter">
            <div id="filtered"></div>
        </div>
    </div>

  </div>

</div>


<script src="https://code.jquery.com/jquery-latest.min.js"></script>

<script src="/static/js/vendor/jquery-ui.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script>
    if ( window != window.top ) { // inside iframe
        document.body.style.backgroundColor = 'transparent';
    }
    $( function () {
        let rooms = [];
        let building = [];
        let sqm = $( "#sqm" );
        let price = $( "#price" );
        let floor = $( "#floor" );
        let filter = {
            rooms: "all",
            building: "all",
            sqm_min: 0,
            sqm_max: 1000,
            price_min: 0,
            price_max: 1000000000,
            floor_min: 0,
            floor_max: 1000
        };
        let flats = [];
        let flatsFiltered = [];

        function createUniqueArrayFrom(arr, key) {
            let obj = {};
            for (let i = 0; i < arr.length; i++) {
                obj[arr[i][key]] = true;
            }
            return Object.keys(obj);
        }

        function round10( num, isMax ) {
            let multi = 10;
            return isMax ? Math.ceil( num * multi ) / 10 : Math.floor( num * multi ) / 10;
        }

        function roundMil( num, isMax ) {
            let multi = 100000;
            return isMax ? Math.ceil( num / multi ) / 10 : Math.floor( num / multi ) / 10;
        }

        function createFlatFilters( data ) {
            flats = flatsFiltered = data.filters.flats;

            filter.rooms = createUniqueArrayFrom(flats, 'rooms');
            filter.building = createUniqueArrayFrom(flats, 'building');

	        /*
            let sqmUnique = createUniqueArrayFrom(flats, 'sqm');
            filter.sqm_min = Math.min.apply(null, sqmUnique);
            filter.sqm_max = Math.max.apply(null, sqmUnique);
            */

	        filter.sqm_min = data.filters.sqm.min;
	        filter.sqm_max = data.filters.sqm.max;

            let priceUnique = createUniqueArrayFrom(flats, 'price');
            filter.price_min = Math.min.apply(null, priceUnique);
            filter.price_max = Math.max.apply(null, priceUnique);

            let floorUnique = createUniqueArrayFrom(flats, 'floor');
            filter.floor_min = Math.min.apply(null, floorUnique);
            filter.floor_max = Math.max.apply(null, floorUnique);

            $( ".rooms + label" ).click( function () {
                !$( this ).hasClass( "checked" ) ? $( this ).addClass( "checked" ) : $( this ).removeClass( "checked" );
                rooms = [];
                $( ".rooms + label.checked" ).each( function () {
                    rooms.push( $( this ).attr( "data-room" ) );
                } );
                let conditions = {
                    rooms: rooms.length ? rooms : filter.rooms,
                    building: building.length ? building : filter.building
                };
                flatsFiltered = flats.filter( function ( flat ) {
                    return (conditions.rooms.indexOf( "" + flat.rooms ) !== -1 && conditions.building.indexOf( flat.building ) !== -1);
                } );
                let sqmArray = flatsFiltered.map( function ( flat ) {
                    return flat.sqm;
                } );
                let priceArray = flatsFiltered.map( function ( flat ) {
                    return flat.price / 1000000;
                } );
                let floorArray = flatsFiltered.map( function ( flat ) {
                    return flat.floor;
                } );
                sqm.slider( "values", [ round10( Math.min.apply( null, sqmArray ) ), round10( Math.max.apply( null, sqmArray ), 1 ) ] );
                price.slider( "values", [ round10( Math.min.apply( null, priceArray ) ), round10( Math.max.apply( null, priceArray ), 1 ) ] );
                floor.slider( "values", [ Math.min.apply( null, floorArray ), Math.max.apply( null, floorArray ) ] );
                applyFilters();
                return false;
            } );

            $( ".corpuses + label" ).click( function () {
                !$( this ).hasClass( "checked" ) ? $( this ).addClass( "checked" ) : $( this ).removeClass( "checked" );
                building = [];
                $( ".corpuses + label.checked" ).each( function () {
                    building.push( $( this ).attr( "data-building" ) );
                } );
                let conditions = {
                    rooms: rooms.length ? rooms : filter.rooms,
                    building: building.length ? building : filter.building
                };
                flatsFiltered = flats.filter( function ( flat ) {
                    return (conditions.rooms.indexOf( "" + flat.rooms ) !== -1 && conditions.building.indexOf( flat.building ) !== -1);
                } );
                let sqmArray = flatsFiltered.map( function ( flat ) {
                    return flat.sqm;
                } );
                let priceArray = flatsFiltered.map( function ( flat ) {
                    return flat.price / 1000000;
                } );
                /*let floorArray = flatsFiltered.map( function ( flat ) {
                    return flat.floor;
                } );*/
                sqm.slider( "values", [ round10( Math.min.apply( null, sqmArray ) ), round10( Math.max.apply( null, sqmArray ), 1 ) ] );
                price.slider( "values", [ round10( Math.min.apply( null, priceArray ) ), round10( Math.max.apply( null, priceArray ), 1 ) ] );
                /*floor.slider( "values", [ Math.min.apply( null, floorArray ), Math.max.apply( null, floorArray ) ] );*/
                applyFilters();
                return false;
            } );

            sqm.slider( {
                range: true,
                min: round10( filter.sqm_min ),
                max: round10( filter.sqm_max ),
                step: 0.1,
                values: [ round10( filter.sqm_min ), round10( filter.sqm_max, 1 ) ],
                slide: function ( event, ui ) {
                    $( this ).find( ".ui-slider-handle:nth-child(even)" ).html( "<span class='slider_txt'>" + ui.values[ 0 ] + "</span>" );
                    $( this ).find( ".ui-slider-handle:nth-child(odd)" ).html( "<span class='slider_txt'>" + ui.values[ 1 ] + "</span>" );
                    let slidersFiltered = flatsFiltered.filter( function ( flat ) {
                        return flat.sqm >= ui.values[ 0 ] && flat.sqm <= ui.values[ 1 ];
                    } );
                    let priceArray = slidersFiltered.map( function ( flat ) {
                        return flat.price / 1000000;
                    } );
                    /*let floorArray = slidersFiltered.map( function ( flat ) {
                        return flat.floor;
                    } );*/
                    price.slider( "values", [ round10( Math.min.apply( null, priceArray ) ), round10( Math.max.apply( null, priceArray ), 1 ) ] );
                    /*floor.slider( "values", [ Math.min.apply( null, floorArray ), Math.max.apply( null, floorArray ) ] );*/
                },
                change: function ( event, ui ) {
                    $( this ).find( ".ui-slider-handle:nth-child(even)" ).html( "<span class='slider_txt'>" + ui.values[ 0 ] + "</span>" );
                    $( this ).find( ".ui-slider-handle:nth-child(odd)" ).html( "<span class='slider_txt'>" + ui.values[ 1 ] + "</span>" );
                },
                stop: function ( event, ui ) {
                    applyFilters();
                }
            } );

            price.slider( {
                range: true,
                min: roundMil( filter.price_min ),
                max: roundMil( filter.price_max, 1 ) + 1,
                step: 0.1,
                values: [ roundMil( filter.price_min ), roundMil( filter.price_max, 1 ) + 1 ],
                slide: function ( event, ui ) {
                    $( this ).find( ".ui-slider-handle:nth-child(even)" ).html( "<span class='slider_txt'>" + ui.values[ 0 ] + "</span>" );
                    $( this ).find( ".ui-slider-handle:nth-child(odd)" ).html( "<span class='slider_txt'>" + ui.values[ 1 ] + "</span>" );
                    let slidersFiltered = flatsFiltered.filter( function ( flat ) {
                        return flat.price >= ui.values[ 0 ] * 1000000 && flat.price <= ui.values[ 1 ] * 1000000;
                    } );
                    /*let sqmArray = slidersFiltered.map( function ( flat ) {
                        return flat.sqm;
                    } );*/
                    /*let floorArray = slidersFiltered.map( function ( flat ) {
                        return flat.floor;
                    } );*/
                    /*sqm.slider( "values", [ round10( Math.min.apply( null, sqmArray ) ), round10( Math.max.apply( null, sqmArray ), 1 ) ] );*/
	                sqm.slider( "values", [ filter.sqm_min, filter.sqm_max ] );
                    /*floor.slider( "values", [ Math.min.apply( null, floorArray ), Math.max.apply( null, floorArray ) ] );*/
                },
                change: function ( event, ui ) {
                    $( this ).find( ".ui-slider-handle:nth-child(even)" ).html( "<span class='slider_txt'>" + ui.values[ 0 ] + "</span>" );
                    $( this ).find( ".ui-slider-handle:nth-child(odd)" ).html( "<span class='slider_txt'>" + ui.values[ 1 ] + "</span>" );
                },
                stop: function ( event, ui ) {
                    applyFilters();
                }
            } );

            floor.slider( {
                range: true,
                min: filter.floor_min,
                max: filter.floor_max,
                values: [ filter.floor_min, filter.floor_max ],
                slide: function ( event, ui ) {
                    $( this ).find( ".ui-slider-handle:nth-child(even)" ).html( "<span class='slider_txt'>" + ui.values[ 0 ] + "</span>" );
                    $( this ).find( ".ui-slider-handle:nth-child(odd)" ).html( "<span class='slider_txt'>" + ui.values[ 1 ] + "</span>" );
                    /*let slidersFiltered = flatsFiltered.filter( function ( flat ) {
                        return flat.floor >= ui.values[ 0 ] && flat.floor <= ui.values[ 1 ];
                    } );
                    let sqmArray = slidersFiltered.map( function ( flat ) {
                        return flat.sqm;
                    } );
                    let priceArray = slidersFiltered.map( function ( flat ) {
                        return flat.price / 1000000;
                    } );
                    sqm.slider( "values", [ round10( Math.min.apply( null, sqmArray ) ), round10( Math.max.apply( null, sqmArray ), 1 ) ] );
                    price.slider( "values", [ round10( Math.min.apply( null, priceArray ) ), round10( Math.max.apply( null, priceArray ), 1 ) ] );*/
                },
                change: function ( event, ui ) {
                    $( this ).find( ".ui-slider-handle:nth-child(even)" ).html( "<span class='slider_txt'>" + ui.values[ 0 ] + "</span>" );
                    $( this ).find( ".ui-slider-handle:nth-child(odd)" ).html( "<span class='slider_txt'>" + ui.values[ 1 ] + "</span>" );
                },
                stop: function ( event, ui ) {
                    applyFilters();
                }
            } );

            $( ".sqm_min_static" ).html( sqm.slider( "values", 0 ) );
            $( ".sqm_max_static" ).html( sqm.slider( "values", 1 ) );
            $( ".price_min_static" ).html( price.slider( "values", 0 ) );
            $( ".price_max_static" ).html( price.slider( "values", 1 ) );
            $( ".floor_min_static" ).html( floor.slider( "values", 0 ) );
            $( ".floor_max_static" ).html( floor.slider( "values", 1 ) );
            $( "#sqm .ui-slider-handle:nth-child(even)" ).html( "<span class='slider_txt'>" + sqm.slider( "values", 0 ) + "</span>" );
            $( "#sqm .ui-slider-handle:nth-child(odd)" ).html( "<span class='slider_txt'>" + sqm.slider( "values", 1 ) + "</span>" );
            $( "#price .ui-slider-handle:nth-child(even)" ).html( "<span class='slider_txt'>" + price.slider( "values", 0 ) + "</span>" );
            $( "#price .ui-slider-handle:nth-child(odd)" ).html( "<span class='slider_txt'>" + price.slider( "values", 1 ) + "</span>" );
            $( "#floor .ui-slider-handle:nth-child(even)" ).html( "<span class='slider_txt'>" + floor.slider( "values", 0 ) + "</span>" );
            $( "#floor .ui-slider-handle:nth-child(odd)" ).html( "<span class='slider_txt'>" + floor.slider( "values", 1 ) + "</span>" );

            applyFilters();
        }

        function applyFilters() {
            $( '.load_results' ).remove();
            $( '#filtered' ).hide().before( '<center class="load_results"><br /><div class="load-10"><div class="bar"></div></div></center>' );
            setTimeout( function () {
                $( '.load_results' ).remove();
                let conditions = {
                    rooms: rooms.length ? rooms : filter.rooms,
                    building: building.length ? building : filter.building,
                    sqm_min: sqm.slider( "values", 0 ),
                    sqm_max: sqm.slider( "values", 1 ),
                    price_min: price.slider( "values", 0 ) * 1000000,
                    price_max: price.slider( "values", 1 ) * 1000000,
                    floor_min: floor.slider( "values", 0 ),
                    floor_max: floor.slider( "values", 1 )
                };
                let newHtml = '';
                let col = 1;
                for ( let i = 0; i < flats.length; i++ ) {
                    let flat = flats[ i ];
                    if (
                        conditions.rooms.indexOf( "" + flat.rooms ) !== -1
                        && conditions.building.indexOf( flat.building ) !== -1
                        && flat.sqm >= conditions.sqm_min
                        && flat.sqm <= conditions.sqm_max
                        && flat.price >= conditions.price_min
                        && flat.price <= conditions.price_max
                        && flat.floor >= conditions.floor_min
                        && flat.floor <= conditions.floor_max
                    ) {
                        if ( col === 1 ) newHtml += "<div class='row'>";
                        // " + (col > 1 ? " col-md-offset-1" : "" ) + "
                        newHtml +=
                            "<div class='col-md-6 picker'>" +
                            "   <table class='table info_x'>" +
                            "       <tr>" +
                            "           <td class='nowrap corps'><span class='big'>" + flat.building + "</span> <span class='desctext'>корпус</span></td>" +
                            "           <td class='section' colspan='2'><span class='big'>" + flat.section + "</span> <span class='desctext'>секция</span></td>" +
                            "       </tr>" +
                            "       <tr>" +
                            "           <td class='nowrap floor'><span class='big'>" + flat.floor + "</span> <span class='desctext'>этаж</td>" +
                            "           <td class='nowrap sqm'><span class='big'>" + flat.sqm + "</span> <span class='desctext'>м<sup>2</sup></span></td>" +
                            "           <td rowspan='2' class='rooms_txt room'>" + (flat.rooms ? "<span class='big'>" + flat.rooms + (flat.rooms > 1 && flat.rooms < 5 ? "х" : "") + "</span><br />комнатная квартира" : "студия") + " </td>" +
                            "       </tr>" +
                            "       <tr>" +
                            "            <td class='nowrap price' valign='middle' colspan='2'><span class='big'>" + flat.priceformat + "</span> <span class='desctext'>руб.</span></td>" +
                            "       </tr>" +
                            "       <tr class='orange_tone'>" +
                            "            <td colspan='3'><a class='viewflat' href='" + flat.linkPhone + "' target='_blank'><span class='viewflat_txt'>посмотреть квартиру</span> <i class='fa fa-chevron-circle-right' style='margin-top:-1px;'></i></a></td>" +
                            "       </tr>" +
                            "   </table><br />" +
                            "</div>"
                        ;
                        if ( col === 3 ) newHtml += "</div>";
                        col++;
                        if ( col > 3 ) col = 1;
                    }
                }
                if ( !newHtml ) {
                    newHtml = "<div class='row noresults'><div class='col-md-6 col-md-offset-3'>К сожалению таких квартир нет.<br /> Попробуйте изменить условия поиска.</div></div>";
                }
                $( '#filtered' ).html( newHtml ).fadeIn( 'slow' );
            }, 1000 );
        }

        $.ajax( {
            type: 'POST',
            url: "{{ route('flats.filter') }}",
            data: filter,
            success: function ( data ) {
                createFlatFilters( data );
            },
            dataType: "json",
            async: true
        } );

    } );


</script>

<script>

  var menuOpen = document.querySelector(".header-trigger");
  var menu = document.querySelector(".menu");
  var menuClose = document.querySelector(".menu__close");

  menuOpen.addEventListener("click", function(){
   menu.classList.add("opened");
  });

  menuClose.addEventListener("click", function(evt){
   evt.preventDefault();
   menu.classList.remove("opened");
  });

</script>


<script>
  $( document ).ready(function() {
    $('.ui-slider-handle').draggable()
  });
</script>


</body>
</html>
