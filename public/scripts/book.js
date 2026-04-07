var html = $('html');

$('.js-book').on('click', function() {
  $('.modal-book').addClass('opened');
  html.addClass('freeze');
});

$('.js-close').on('click', function() {
  $('.modal-book').removeClass('opened');
  html.removeClass('freeze');
});

$('.js-clear').on('click', function() {
  $('.modal-thanks').removeClass('opened');
  html.removeClass('freeze');
});

$(".modal-book").on("submit", function(){
  var $form = $(this).find('form');
  console.log('submit begin');

  console.log($form.attr('method'));
  $('.modal-book').removeClass('opened');
  $.ajax({
    type: $form.attr('method'),
    url: $form.attr('action'),
    dataType: 'html',
    data: $form.serialize(),
    success: function(data){
      console.log('submit success');
    }
  });
  setTimeout(function () {
    $('.modal-thanks').addClass('opened');
    html.addClass('freeze');

  }, 350);
  return false;
})

$('.js-phone').mask('+7 (999) 999-99-99');
