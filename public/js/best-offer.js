$(function() {
  show_best_offer = true,
  show_animation = false;
  
  $(".rooms + label").click(function() {
    var rooms = $(this).attr('data-room');
    getBestOffer(rooms);
  });
  
  function getBestOffer(rooms) {
    if(show_best_offer) {
      $.post("/flats/best-offer", { 
        rooms: rooms
      })
        .done(function(data) {
          if(data.result) {
            showBestOffer(data.link);
          }
        }
      , 'json');
    }  
    
    show_best_offer = false;
  }
  
  function showBestOffer(link) {
    $('html').append('<div class="best-offer-block" style="display: none;">' +
        '<a href="' + link + '" target="_blank"><img src="/static/images/hand-popup1@2x.png" border="0" height="200" /></a>' +
      '</div>'
    );
    show_animation = true;
  }
  
  $(document).on('scroll', function() {
    if($(this).scrollTop() + 400 >= $('#filtered').position().top && show_animation){
      $('.best-offer-block').animate({width:'toggle'},350);
      $('.best-offer-block').fadeIn('slow');
      show_animation = false;
    }
  });
  
  function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }
});