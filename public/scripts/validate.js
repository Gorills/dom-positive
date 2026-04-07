/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: RU (Russian; русский язык)
 */

$.extend( $.validator.messages, {
	required: "Заполните поле.",
	remote: "Пожалуйста, введите правильное значение.",
	email: "Введите корректный email.",
	url: "Пожалуйста, введите корректный URL.",
	date: "Пожалуйста, введите корректную дату.",
	dateISO: "Пожалуйста, введите корректную дату в формате ISO.",
	number: "Пожалуйста, введите число.",
	digits: "Пожалуйста, вводите только цифры.",
	creditcard: "Пожалуйста, введите правильный номер кредитной карты.",
	equalTo: "Пожалуйста, введите такой же пароль ещё раз.",
	extension: "Пожалуйста, выберите файл с правильным расширением.",
	maxlength: $.validator.format( "Пожалуйста, введите не больше {0} символов." ),
	minlength: $.validator.format( "Пожалуйста, введите не меньше {0} символов." ),
	rangelength: $.validator.format( "Пожалуйста, введите значение длиной от {0} до {1} символов." ),
	range: $.validator.format( "Пожалуйста, введите число от {0} до {1}." ),
	max: $.validator.format( "Пожалуйста, введите число, меньшее или равное {0}." ),
	min: $.validator.format( "Пожалуйста, введите число, большее или равное {0}." ),
});

$(function(){
	var form = $('.js-validate');

	form.each(function(){
		$(this).validate({
			ignore: [],
		    errorElement: 'span',
		    errorClass: 'label-error',
			rules : {
                password_confirm : {
                    equalTo : '.js-password'
                }
            },
			highlight: function(element) {
				setTimeout(function() {
					$(element).parent().removeClass('is-success');
					$(element).parent().addClass('is-error');
					if($(element).closest(".form-field").length){
						$(element).closest(".form-field").addClass('is-error');
					}

					if($(element).attr('type') == 'checkbox' || $(element).hasClass('select') || $(element).attr('type') == 'radio'){
						var parent = $(element).parent();

						parent.append(parent.find('.label-error'));
					}
				});
	        },
	        unhighlight: function(element) {
				setTimeout(function() {
					if($(element).val() != '') $(element).parent().addClass('is-success');
					$(element).parent().removeClass('is-error');
					if($(element).closest(".form-field").length){
						$(element).closest(".form-field").removeClass('is-error');
					}
				});
	        }
		});
	});

	$(document).on('change input blur', '.form-input', function(event) {
		const _this = $(event.currentTarget);
		if(_this.val() == '') _this.parent().removeClass('is-success');
	});


	/*
	 * Валидация телефона
	 */

	$.validator.addMethod('phonecustom', function(value, element) {
		if(value == '+7 (___) ___-__-__') return true;
		return value.match(/^\+7\s\([0-9]{3}\)\s[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/);
	}, 'Пожалуйста, введите корректный телефон.');

	$.validator.addClassRules('js-phone', {
		phonecustom: true
	});


	/*
	 * Валидация ИНН
	 */

	$.validator.addMethod('validateINN', function(value, element) {
		const val = value.replace(/[^0-9]/g, '');
		return val.length == 10 || val.length == 12 || val.length == 0;
	}, 'Поле должно содержать 10 или 12 цифр.');

	$.validator.addClassRules('js-validateInn', {
		validateINN: true
	});

});
