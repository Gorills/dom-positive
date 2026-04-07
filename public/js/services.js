if (typeof floors !== "undefined") {
  var flats_count = parseInt($('.flatnumber').length);
  // floors = (flats_count - flats_count % 4 ) / 4,
  platformnumber = 1,
  floor = floors;
  
  $('.flat-details').hide();
  $('.floorplan-4flats').hide();
  
  $(function() {
    if(section && corps) {
      var image = '/static/images/sitplan/k' + corps + '-s' + section + '@2x.png';
      $('.sitplan > img').attr({
        'src': image,
        'data-hidpi-src': image,
        'data-muse-src': image,
        'data-src': image
      });
    }
  });
  console.log(flats);
  var default_free_color = '#c4e3ab';
  for(var i = 1; i <= flats_count; i++) { 
    for(var key in flats) {
      var flat = flats[key];
      if(flat.floor == floor && flat.platformnumber == platformnumber) { 
        $('.flat-' + i).addClass('active');
        $('.flat-' + i).css({'cursor': 'pointer'});
        $('.flat-' + i).find('p').html(flat.sqmround + ' м2');
        $('.flat-' + i).find('.flatnumber > p').attr({
          'data-link': flat.link, 
          'data-sqm': flat.sqmround, 
          'data-floor': flat.floor,
          'data-price': flat.priceformat,
          'data-number': flat.flatnumber,
          'data-onfloor': flat.platformnumber,
          'data-image': flat.image
        });
        
        if(!flat.sold) {
          $('.flat-' + i).css({'background-color': default_free_color});
          $('.flat-' + i).attr('data-sold', 'false');
        }
        else {
          $('.flat-' + i).css({'background-color': '#fde1b3'});
          $('.flat-' + i).attr('data-sold', 'true');
        }
      }  
    }
    
    platformnumber++;
    if(platformnumber > on_floor) {
      platformnumber = 1;
      floor--; 
    } 
  }
  
  
  $('.show-the-floorplan').hide();
  
  
  $('[class*="flat-"]').click(function() {
    $('.image_with_plan').remove();
    $('[class*="flat-"][data-sold="false"]').css('background-color', default_free_color);
    $(this).css('background-color', '#FFA522');
    
    $('[class*="floorflat"]').hide();
    $('.floorplan-4flats').hide();
    var current_flat = $(this).find('.flatnumber > p');
    if($(this).hasClass('active')) {
      if($('.flat-details').css('display') == 'none') $('.flat-details').fadeIn('slow');
      var sqm     = current_flat.attr('data-sqm'),
          floor   = current_flat.attr('data-floor'),
          price   = current_flat.attr('data-price'),
          number  = current_flat.attr('data-number'),
          link    = current_flat.attr('data-link'),
          onfloor = current_flat.attr('data-onfloor'),
          image = current_flat.attr('data-image');
      if($.browser.opera || $.browser.mozilla) $('.floorflat' + onfloor).show(); // Floor showing, works only on Opera and Mozilla, WHY?!
      else $('.floorflat' + onfloor).fadeIn("slow");    
      $('.sq-information > p > span').first().html(sqm + ' ');
      $('.floor-information > p').html(floor + ' этаж');
      $('.price-information > p').html(price + ' руб.');
      $('.flatnumber-information > p').html(number);
      $('.show-the-floorplan > p').attr({'data-link': link});
      $('.show-the-floorplan').fadeIn('slow');
      
      $('.flatplan-placeholder').html('<img class="image_with_plan" src="'+ image +'" border="0" style="display: none;width: 100%;" />');
      $('.flatplan-placeholder img').fadeIn('slow');
    }
    
    return false;
  });
  
  $('.show-the-floorplan > p').click(function() {
    var link = $(this).attr('data-link');
      
    if(link) window.open(link, '_blank');
    
    return false;
  });
} else {
  var defaultOpacity = $('[class*="highlight"]').first().css('opacity');
  $('[class*="highlight"]').css('cursor', 'pointer');
  $('[class*="highlight"]').fadeTo(1,0);
  
  function hideCorSec() {
    $('.korpus-number').hide();
    $('.korpus-number').next('div').hide();
    
    $('.section-number').hide();
    $('.section-number').next('div').hide(); 
  }
  
  hideCorSec();
  
  $('#u483723 path, #u483723 polygon').hover(function() {
    var arr = $(this).attr('id').split('-'),
        cor = arr[0].substring(1),
        sec = arr[1].substring(1);
        
    if(cor && sec) {
      $('.korpus-number').html('<h1>' + cor + '</h1>');
      $('.section-number').html('<h1>' + sec + '</h1>');
      
      $('.korpus-number').fadeIn('slow');
      $('.korpus-number').next('div').fadeIn('slow');
      
      $('.section-number').fadeIn('slow');
      $('.section-number').next('div').fadeIn('slow');
    }
  }, function() {
    hideCorSec();
  });
  
  $('#u483723 path, #u483723 polygon').click(function() {
    var arr = $(this).attr('id').split('-'),
        cor = arr[0].substring(1),
        sec = arr[1].substring(1);
        
    if(cor && sec) {
      $('.korpus-number').html('<h1>' + cor + '</h1>');
      $('.section-number').html('<h1>' + sec + '</h1>');
      
      $('.korpus-number').fadeIn('slow');
      $('.korpus-number').next('div').fadeIn('slow');
      
      $('.section-number').fadeIn('slow');
      $('.section-number').next('div').fadeIn('slow');
      
      window.location.href = '/k' + cor + '-s' + sec + '.html';
    }
  });
}