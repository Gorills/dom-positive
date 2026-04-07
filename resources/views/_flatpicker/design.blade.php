<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="/static/css/best-offer.css" type="text/css" media="screen" charset="utf-8">
    <style>
        body {
            background-color: #3C2846 !important;
        }
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
            background: none transparent;
        }
        @endif

        @media only screen
        and (min-device-width: 768px)
        and (max-device-width: 1024px)
        and (orientation: portrait) {
            #filtered {
                max-width: 60%;
            }
        }

        .ui-slider-horizontal .ui-slider-handle:not(:active) {
            transition: left .2s linear;
        }
    </style>

    <title>{{ time() }}: Подбор квартиры</title>
</head>
<body>
<div class="container" style="margin-top: 140px;">
    <div class="param_title">Подберите квартиру</div>
    <br/>
    <div class="param_desc">Выберите корпус, желаемую площадь, количество комнат, вид из окна, чтобы найти «свою»
        квартиру в жилом комплексе «Позитив», пожалуй, лучшей новостройке в Румянцево. Посмотреть квартиры в продаже вы
        можете ниже.
    </div>
    <img class="corps_map" src="/static/images/korpusa@2x.png" border="0"/>
    <div class="street">Улица родниковая</div>
</div>

<br/><br/><br/>

<div class="container">

    <div class="annotation">Выберите количество комнат</div>
    <br/>
    <div class="row rooms_block">
        <div class="col-md-12" align="center">
            <input class="rooms" type="checkbox" value="1"><label data-room="1"><p></p><span class="label_txt">1 комната</span></label>
            <input class="rooms" type="checkbox" value="2"><label data-room="2"><p></p><span class="label_txt">2 комнаты</span></label>
            <input class="rooms" type="checkbox" value="3"><label data-room="3"><p></p><span class="label_txt">3 комнаты</span></label>
        </div>
    </div>
    <br/><br/><br/>

    <div class="annotation">Выберите корпуса в продаже</div>
    <br/>
    <div class="row rooms_block">
        <div class="col-md-12" align="center">
            @foreach($filters['building'] as $building)
                <input class="corpuses" type="checkbox" value="{{ $building }}"><label data-building="{{ $building }}">
                    <p></p><span class="label_txt_buildings">{{ $building }} корпус</span></label>
            @endforeach
        </div>
    </div>
    <br/><br/><br/>

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
    <br/><br/>

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
    <br/><br/>

    <div class="row">
        <div class="col-lg-12 sliders">
            <div class="annotation">Выберите подходящий этаж</div>
            <br/>
            <div class="min_static">
                <div class="static_values floor_min_static"></div>
            </div>
            <div id="floor">
                @for ($i = 2; $i <= 24; $i++ )
                    <span tabindex="0" class="ui-slider-static ui-corner-all ui-state-default ui-state-{{$i % 2 ? 'even' : 'odd'}}" style="left: {{ (100 / 22) * ($i - 2) }}%;">
                        <span class="slider_txt">{{ $i }}</span>
                    </span>
                @endfor
            </div>
            <div class="max_static">
                <div class="static_values floor_max_static"></div>
            </div>
        </div>
    </div>

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <center>
        <div id="filtered"></div>
    </center>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
<!--     <link href="https://fonts.googleapis.com/css?family=Russo+One|Ubuntu" rel="stylesheet"> -->
<!--     <link rel="stylesheet" href="/static/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" lazyload> -->
<link rel="stylesheet" href="/static/css/font-awesome.min.css" type="text/css" media="screen" charset="utf-8" lazyload>
<link rel="stylesheet" href="/static/css/style.css" type="text/css" media="screen" charset="utf-8" lazyload>
<link rel="stylesheet" href="/static/css/jquery-ui.min.css" type="text/css" media="screen" charset="utf-8" lazyload>
<script src="/static/js/vendor/jquery-1.11.2.min.js"></script>
<script src="/static/js/vendor/jquery-ui.min.js"></script>
<script src="/static/js/vendor/bootstrap.min.js"></script>
<script src="/static/js/best-offer.js"></script>
<script>
    /*! js-cookie v3.0.0-beta.3 | MIT */
    !function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self,function(){var n=e.Cookies,r=e.Cookies=t();r.noConflict=function(){return e.Cookies=n,r}}())}(this,function(){"use strict";var e={read:function(e){return e.replace(/(%[\dA-F]{2})+/gi,decodeURIComponent)},write:function(e){return encodeURIComponent(e).replace(/%(2[346BF]|3[AC-F]|40|5[BDE]|60|7[BCD])/g,decodeURIComponent)}};function t(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)e[r]=n[r]}return e}return function n(r,o){function i(e,n,i){if("undefined"!=typeof document){"number"==typeof(i=t({},o,i)).expires&&(i.expires=new Date(Date.now()+864e5*i.expires)),i.expires&&(i.expires=i.expires.toUTCString()),n=r.write(n,e),e=encodeURIComponent(e).replace(/%(2[346B]|5E|60|7C)/g,decodeURIComponent).replace(/[()]/g,escape);var c="";for(var u in i)i[u]&&(c+="; "+u,!0!==i[u]&&(c+="="+i[u].split(";")[0]));return document.cookie=e+"="+n+c}}return Object.create({set:i,get:function(t){if("undefined"!=typeof document&&(!arguments.length||t)){for(var n=document.cookie?document.cookie.split("; "):[],o={},i=0;i<n.length;i++){var c=n[i].split("="),u=c.slice(1).join("=");'"'===u[0]&&(u=u.slice(1,-1));try{var f=e.read(c[0]);if(o[f]=r.read(u,f),t===f)break}catch(e){}}return t?o[t]:o}},remove:function(e,n){i(e,"",t({},n,{expires:-1}))},withAttributes:function(e){return n(this.converter,t({},this.attributes,e))},withConverter:function(e){return n(t({},this.converter,e),this.attributes)}},{attributes:{value:Object.freeze(o)},converter:{value:Object.freeze(r)}})}(e,{path:"/"})});
    
</script>
<script>
    var startBool = true;
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

        var cook_room_gl, cook_building_gl ;

        function createFlatFilters( data ) {
            flats = flatsFiltered = data.filters.flats;

            filter.rooms = createUniqueArrayFrom(flats, 'rooms');
            filter.building = createUniqueArrayFrom(flats, 'building');
            

            var room_cook_v = Cookies.get("rooms_val");
            var building_cook_v = Cookies.get("building_val");

            if(room_cook_v !== undefined)  {
                if(filter.rooms != room_cook_v){
                    var cook_room = room_cook_v.split(",");
                    cook_room_gl = cook_room;
                }
            }
            if(building_cook_v !== undefined)  {
                if(filter.building != building_cook_v){
                    var cook_building = building_cook_v.split(",");
                    cook_building_gl = cook_building;
                }
            }

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
                var hasCheckedClass = $(this).hasClass("checked");
                var numberRoom = $(this).data("room");
                rooms = [];
                Cookies.set('room'+numberRoom, hasCheckedClass, { expires: 1});
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
            if(!startBool){
                sqm.slider( "values", [ round10( Math.min.apply( null, sqmArray ) ), round10( Math.max.apply( null, sqmArray ), 1 ) ] );
                price.slider( "values", [ round10( Math.min.apply( null, priceArray ) ), round10( Math.max.apply( null, priceArray ), 1 ) ] );
                floor.slider( "values", [ Math.min.apply( null, floorArray ), Math.max.apply( null, floorArray ) ] );
            }
                applyFilters();
                return false;
            } );

            $( ".corpuses + label" ).click( function () {
                !$( this ).hasClass( "checked" ) ? $( this ).addClass( "checked" ) : $( this ).removeClass( "checked" );

                var hasCheckedClass = $(this).hasClass("checked");
                var numberBuilding = $(this).data("building");
                Cookies.set('building'+numberBuilding, hasCheckedClass, { expires: 1});

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
            if(!startBool){
                sqm.slider( "values", [ round10( Math.min.apply( null, sqmArray ) ), round10( Math.max.apply( null, sqmArray ), 1 ) ] );
                price.slider( "values", [ round10( Math.min.apply( null, priceArray ) ), round10( Math.max.apply( null, priceArray ), 1 ) ] );
                /*floor.slider( "values", [ Math.min.apply( null, floorArray ), Math.max.apply( null, floorArray ) ] );*/
            }
                applyFilters();
                return false;
            } );


            var sqm_min_cook_v = Cookies.get("sqm_min_val");
            var sqm_max_cook_v = Cookies.get("sqm_max_val");
            var sqm_start_min_val = round10( filter.sqm_min );
            var sqm_start_max_val = round10( filter.sqm_max, 1 );
            if (sqm_min_cook_v !== undefined&&(+sqm_min_cook_v >= sqm_start_min_val)){
                sqm_min_cook_v = +sqm_min_cook_v;
                sqm_start_min_val = sqm_min_cook_v;
            }
            if (sqm_max_cook_v !== undefined&&(+sqm_max_cook_v <= sqm_start_max_val)){
                sqm_max_cook_v = +sqm_max_cook_v;
                sqm_start_max_val = sqm_max_cook_v;
            }

            sqm.slider( {
                range: true,
                min: round10( filter.sqm_min ),
                max: round10( filter.sqm_max ),
                step: 0.1,
                /* values: [ round10( filter.sqm_min ), round10( filter.sqm_max, 1 ) ], */
                values: [ sqm_start_min_val, sqm_start_max_val ],
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


            var price_min_cook_v = Cookies.get("price_min_val");
            var price_max_cook_v = Cookies.get("price_max_val");
            var price_start_min_val = roundMil( filter.price_min );
            var price_start_max_val = roundMil( filter.price_max, 1 ) + 1;
            if (price_min_cook_v !== undefined){
                price_min_cook_v = +price_min_cook_v;
                price_min_cook_v = price_min_cook_v/1000000;
            }
            if (price_max_cook_v !== undefined){
                price_max_cook_v = +price_max_cook_v;
                price_max_cook_v = price_max_cook_v/1000000;
            }

            if (price_min_cook_v !== undefined&&(price_min_cook_v >= price_start_min_val)){
                price_start_min_val = price_min_cook_v;
            }
            if (price_max_cook_v !== undefined&&(price_max_cook_v <= price_start_max_val)){
                price_start_max_val = price_max_cook_v;
            }

            price.slider( {
                range: true,
                min: roundMil( filter.price_min ),
                max: roundMil( filter.price_max, 1 ) + 1,
                step: 0.1,
                /* values: [ roundMil( filter.price_min ), roundMil( filter.price_max, 1 ) + 1 ], */
                values: [ price_start_min_val, price_start_max_val ],
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


            var floor_min_cook_v = Cookies.get("floor_min_val");
            var floor_max_cook_v = Cookies.get("floor_max_val");
            var floor_start_min_val = filter.floor_min;
            var floor_start_max_val = filter.floor_max;
            if (floor_min_cook_v !== undefined&&(+floor_min_cook_v >= floor_start_min_val)){
                floor_min_cook_v = +floor_min_cook_v;
                floor_start_min_val = floor_min_cook_v;
            }
            if (floor_max_cook_v !== undefined&&(+floor_max_cook_v <= floor_start_max_val)){
                floor_max_cook_v = +floor_max_cook_v;
                floor_start_max_val = floor_max_cook_v;
            }

            floor.slider( {
                range: true,
                min: filter.floor_min,
                max: filter.floor_max,
                /* values: [ filter.floor_min, filter.floor_max ], */
                values: [ floor_start_min_val, floor_start_max_val ],
                slide: function ( event, ui ) {
                    $( this ).find( ".ui-slider-handle:nth-child(25)" ).html( "<span class='slider_txt'>" + ui.values[ 0 ] + "</span>" );
                    $( this ).find( ".ui-slider-handle:nth-child(26)" ).html( "<span class='slider_txt'>" + ui.values[ 1 ] + "</span>" );
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
                    $( this ).find( ".ui-slider-handle:nth-child(25)" ).html( "<span class='slider_txt'>" + ui.values[ 0 ] + "</span>" );
                    $( this ).find( ".ui-slider-handle:nth-child(26)" ).html( "<span class='slider_txt'>" + ui.values[ 1 ] + "</span>" );
                },
                stop: function ( event, ui ) {
                    applyFilters();
                }
            } );


            $( ".sqm_min_static" ).html( sqm.slider("option", "min") );
            $( ".sqm_max_static" ).html( sqm.slider("option", "max") );
            $( ".price_min_static" ).html( price.slider("option", "min") );
            $( ".price_max_static" ).html( price.slider("option", "max") );
            $( ".floor_min_static" ).html( floor.slider("option", "min") );
            $( ".floor_max_static" ).html( floor.slider("option", "max") );

            $( "#sqm .ui-slider-handle:nth-child(even)" ).html( "<span class='slider_txt'>" + sqm.slider( "values", 0 ) + "</span>" );
            $( "#sqm .ui-slider-handle:nth-child(odd)" ).html( "<span class='slider_txt'>" + sqm.slider( "values", 1 ) + "</span>" );
            $( "#price .ui-slider-handle:nth-child(even)" ).html( "<span class='slider_txt'>" + price.slider( "values", 0 ) + "</span>" );
            $( "#price .ui-slider-handle:nth-child(odd)" ).html( "<span class='slider_txt'>" + price.slider( "values", 1 ) + "</span>" );
            $( "#floor .ui-slider-handle:nth-child(25)" ).html( "<span class='slider_txt'>" + floor.slider( "values", 0 ) + "</span>" );
            $( "#floor .ui-slider-handle:nth-child(26)" ).html( "<span class='slider_txt'>" + floor.slider( "values", 1 ) + "</span>" );

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

                Cookies.set('building_val', conditions.building, { expires: 1});
                Cookies.set('rooms_val', conditions.rooms, { expires: 1});

                Cookies.set('sqm_min_val', conditions.sqm_min, { expires: 1});
                Cookies.set('sqm_max_val', conditions.sqm_max, { expires: 1});

                Cookies.set('price_min_val', conditions.price_min, { expires: 1});
                Cookies.set('price_max_val', conditions.price_max, { expires: 1});

                Cookies.set('floor_min_val', conditions.floor_min, { expires: 1});
                Cookies.set('floor_max_val', conditions.floor_max, { expires: 1});

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
                        if ( col === 1 ) newHtml += "<div class='row' style='display:flex;justify-content:space-around;align-items:center;'>";
                        // " + (col > 1 ? " col-md-offset-1" : "" ) + "
                        newHtml +=
                            "<div class='col-md-3 picker' style='width:30%;'>" +
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
                            "            <td colspan='3'><a class='viewflat' href='" + flat.link + "' target='_blank'><span class='viewflat_txt'>посмотреть квартиру</span> <i class='fa fa-chevron-circle-right' style='margin-top:-1px;'></i></a></td>" +
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

                if(cook_room_gl !== undefined)  {
                    for (var prop in cook_room_gl) {
                        /* $('[data-room="'+ cook_room_gl[prop] +'"]').css("background-color","orange"); */
                        $('[data-room="'+ cook_room_gl[prop] +'"]').trigger("click");
                    }
                }
                if(cook_building_gl !== undefined)  {
                    for (var prop in cook_building_gl) {
                        /* $('[data-building="'+ cook_building_gl[prop] +'"]').css("background-color","red"); */
                        $('[data-building="'+ cook_building_gl[prop] +'"]').trigger("click");
                    }
                }
                startBool = false;
            },
            dataType: "json",
            async: true
        } );

    } );
</script>

</body>
</html>
