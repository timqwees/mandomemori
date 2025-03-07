'use strict';
//MATCH MEDIA POINTS
/*
 * Функция получает значения matchMedia для соответствующих ширин экрана
 * @param {array} arr - массив со значениями match points
 * @return возвращается объект с булевыми значениями для матч поинтов
 */
function isMatchMediaArr(arr) {
  if ( !Array.isArray(arr) ) return [];
  var res = {};
  arr.forEach(function(el, i) {
    res[el] = {
    	min: window.matchMedia('(min-width:'+parseInt(el, 10)+'px)').matches,
    	max: window.matchMedia('(max-width:'+parseInt(el, 10)+'px)').matches
    }
  });
  return res;
} 
var matchMediaArr = isMatchMediaArr([430, 560, 780, 990, 1250]);
// console.log(matchMediaArr);

/*
 * Плавный скролл к элементу
 * @prarm {string|jq-object} scroll_el - элемент, к которому скролить
 * @param {number} speed - скорость анимации скрола, мс
 * @param {number} offset - отступ от верха экрана, рх
 */
function scrollTo(scroll_el, speed, offset){
	speed = speed || 800;
	offset = offset || 0;

	if ($(scroll_el).length != 0) {
		$('html, body').animate({ scrollTop: $(scroll_el).offset().top + offset }, speed);
	}
}

/**
 * Функция возвращает число с ведущим нулем, если число меньше 10
 * param {Number} num
 */
function getFirstZeroNumbers(num) {
	return ( num < 10 ) ? '0'+num : num;
}


$(function(){

	//FIX_MENU
	const winH = $(window).height(),
				fixMenu = $('#fix-menu'),
				asideWrap = $('#aside'),
				widget = $('#widget'),
				header = $('#header');
	
	let isShowedLabelsWidget = false
				
	// $(fixMenu).css('display', 'block');
	$(asideWrap).css('display', 'block');

	$(window).on('load scroll', function() {
		const top = $(this).scrollTop();
		if ( top > 0 ) {
			$(header).addClass('active');
		} else {
			$(header).removeClass('active');
		}

		if(top > winH){
			$(widget).fadeIn(500)

			if(!isShowedLabelsWidget){
				setTimeout(() => {
					$(widget).find('.widget__hover').eq(0).fadeIn(1000)
				}, 7000);
				setTimeout(() => {
					$(widget).find('.widget__hover').eq(1).fadeIn(1000)
				}, 7300);

				isShowedLabelsWidget = true
			}
		}else{
			$(widget).fadeOut(500)
		}
	});

	$('.js-aside-toggle').on('click', function() {
		$(asideWrap).toggleClass('active');
	});

	//scroll menu
	$('.js-scroll-to').click( function(){
		var href = $(this).attr('href');
		scrollTo(href, 800, -($(fixMenu).height()));
		$(asideWrap).removeClass('active');
		return false;
	});


	$(widget).on('click', '.js-widget-close', function(){
		$(this).closest('.widget__hover').fadeOut(300)
	})



	//Запрет на ввод букв в телефонах
	$('input[type="tel"]').on('keypress', function(e){
		if(/[0-9]/.test(e.key) === false) return false;
	});
	$('input[name="username"]').on('keypress', function(e){
		if(/[a-zA-Zа-яА-Я\s]/.test(e.key) === false) return false;
	});


	//POPUP LITY
	// документация https://sorgalla.com/lity/
	let modalLity;
	$('body').on('click', '.js-modal-open', function(event) {
		event.preventDefault();
		const href = $(this).attr('href');

		const title = $(this).attr('data-title') || false
		if(title){
			$(href).find('input[name="title"]').val(title)
		}

		if (modalLity) modalLity.close();
		modalLity = lity(href);

	});

	
	const modalOrder = $('#modal-order')
	if(modalOrder.length){
		setTimeout(function(){ modalLity = lity(); }, 90000);
	}
	

	//SLIDER TOP ADVANTS
	const $sliderTopAdvamts = $('#slider-top-advants');
	if($sliderTopAdvamts.length  && matchMediaArr[1250].max){
		
		const swiper = new Swiper($sliderTopAdvamts[0], {
      slidesPerView: "auto",
      spaceBetween: 0,
    });
	}


	//BEFORE AFTER
	const $befAfter = $('#before-after')
	if($befAfter.length){
		const slider = $($befAfter).find('.js-slider')
		// const items = $($befAfter).find('.js-before-after')

		// $($befAfter).imagesLoaded( function() {
			// $(items).twentytwenty({
			// 	before_label: 'До',
			// 	after_label: 'После',
			// 	no_overlay: false,
			// 	default_offset_pct: 0.85
			// });

			const swiper = new Swiper(slider[0], {
				// navigation: {
				// 	nextEl: $($befAfter).find('.js-slider-next')[0],
				// 	prevEl: $($befAfter).find('.js-slider-prev')[0],
				// },
				// loop: true,
				// allowTouchMove: false,
				// effect: 'fade',
				// fadeEffect: {
				// 	crossFade: true
				// },
				breakpoints: {
					1200: {
						slidesPerView: 3
					}
				},
				scrollbar: {
					el: $($befAfter).find('.swiper-scrollbar')[0],
					draggable: true,
				},
			});
		// });

		
	}


	//CASES SLIDER
	const $cases = $('#cases')
	if($cases.length){
		const slider = $($cases).find('.js-slider')
		const tabs = $($cases).find('.js-cases-tabs')

		const swiper = new Swiper(slider[0], {
			allowTouchMove: false,
			autoHeight: true,
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			on: {
				init: function(){
					$(tabs).eq(0).addClass('active')
				},
				slideChange: function(swiper){
					$(tabs).removeClass('active')
					$(tabs).eq(swiper.activeIndex).addClass('active')
				}
			}
    });

		$(tabs).on('click', function(e){
			e.preventDefault()

			if($(this).hasClass('active')) return;

			const idx = +$(this).data('index')

			swiper.slideTo(idx)
		})
	}
	

	//DOP
	const $dop = $('#dop')
	if($dop.length){
		const slider = $($dop).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			slidesPerView: "auto",
      spaceBetween: 0,
    });
	}


	//DEMO
	const $demo = $('#demo')
	if($demo.length){

		$($demo).imagesLoaded( function() {
			$($demo).find('.js-demo-before-after').twentytwenty({
				before_label: 'До',
				after_label: 'После',
				no_overlay: false,
			});
		})
		

		const faq = $($demo).find('.js-demo-faq')
		$(faq).on('click', '.demo__head', function(e){
			e.preventDefault()

			if($(this).hasClass('active')){
				$(this).removeClass('active').next('.demo__txt').slideUp(300)
			}else{
				$(faq).find('.demo__head.active').removeClass('active').next('.demo__txt').slideUp(300)
				$(this).addClass('active').next('.demo__txt').slideDown(300)
			}
		})
	}


	//FEEDBACK
	const $feedback = $('#feedback')
	if($feedback.length){
		const slider = $($feedback).find('.js-slider')

		const swiper = new Swiper(slider[0], {
			slidesPerView: "auto",
      spaceBetween: 0,
			scrollbar: {
				el: $($feedback).find('.swiper-scrollbar')[0],
				draggable: true,
			},
    });
	}


	//COMPLEX
	const $complex = $('#complex')
	if($complex.length){

		const swiper = new Swiper($complex[0], {
			slidesPerView: "auto",
      spaceBetween: 0,
			scrollbar: {
				el: $($complex).find('.swiper-scrollbar')[0],
				draggable: true,
			},
    });
	}


	//FAQ
	const $faq = $('#faq')
	if($faq.length){
		const slider = $($faq).find('.js-slider')

		const swiper = new Swiper(slider[0], {
      navigation: {
				nextEl: $($faq).find('.js-slider-next')[0],
				prevEl: $($faq).find('.js-slider-prev')[0],
			},
			slidesPerView: 1,
			breakpoints: {
				780: {
					slidesPerView: 2
				},
				1250: {
					slidesPerView: 3
				}
			}
    });
	}


	//VIEWS
	const $views = $('#views')
	if($views.length){
		const slider = $($views).find('.js-slider')

		const swiper = new Swiper(slider[0], {
      navigation: {
				nextEl: $($views).find('.js-slider-next')[0],
				prevEl: $($views).find('.js-slider-prev')[0],
			},
			slidesPerView: 1,
    });
	}


	//MODAL MORE
	const $modalMore = $('#modal-more')
	if($modalMore.length){
		const slider = $($modalMore).find('.js-slider')

		const swiper = new Swiper(slider[0], {
      scrollbar: {
				el: $($modalMore).find('.swiper-scrollbar')[0],
				draggable: true,
			},
    });
	}
			

	if(matchMediaArr[1250].min){
		const $movedWrappers = document.querySelectorAll('.js-mouse-move')
	
		for(let $item of $movedWrappers){
			moveElement($item)
		}
	
		function moveElement($wrap){
			const $targets = $wrap.querySelectorAll('.js-mouse-move-target')
			const winH = window.innerHeight
			const winW = window.innerWidth
	
			// for(let i = 1; i <= $targets.length; i++){
			//   $targets[i-1].style.transition = '0.1s transform '
			// }
		
			$wrap.addEventListener('mousemove', function(e){
				// console.log(e);
				let x = e.x/winW*10
				let y = e.y/winH*3
				
				for(let i = 1; i <= $targets.length; i++){
					$targets[i-1].style.transform = `translate(${x*i}px, ${y*i}%)`
				}
			})
		}
	}


	const scrollbarTables = $('.js-table-scrollbar')
	if(matchMediaArr[1250].max){
		$.each(scrollbarTables, function(i, scrollbar){
			var swiper = new Swiper(scrollbar, {
				direction: "horizontal",
				slidesPerView: "auto",
				freeMode: true,
				scrollbar: {
					el: ".swiper-scrollbar",
				},
				mousewheel: true,
			});
		})
	}

	


	$('.js-messengers').on('click', '.js-messengers-btn', function(e){
		e.preventDefault();
		let parent = $(this).closest('.js-messengers');
		let input = $(parent).find('.js-messengers-input');
		let title = $(this).attr('title');
		$(input).val(title);

		$(parent).find('.js-messengers-btn').removeClass('active');
		$(this).addClass('active');
	});


	//Отправка заявок
	$('input[name="agree"]').on('change', function() {
		if ( $(this).prop('checked') ) {
			$(this).closest('form').find('.form__submit').removeAttr('disabled');
		} else {
			$(this).closest('form').find('.form__submit').attr('disabled', 'disabled');
		}
	});

	
	//uploads
	const typesImages = ['image/png', 'image/jpeg', 'image/jpg']
	$.each($('.js-upload'), function(i, item){
		const input = $(item).find('input[type="file"]')
		const atten = $(item).find('.js-upload-atten')
		const txt = $(item).find('.js-upload-txt')
		
		$(input).on('change', function(e){
			const file = e.target.files[0];

			if(!$.inArray(file.type, typesImages)){
				$(atten).text('Неверный формат файла')
				return;
			}

			if(file.size / 1024 / 1024 > 10){
				$(atten).text('Слишком большой размер файла')
				return;
			}

			$(atten).text('')
			$(txt).text('Файл прикреплен')
		})
	})

	$('.form').on('submit', function(e){
		const sbmt = $(this).find('.form__submit')
		$(sbmt).attr('disabled', 'disabled')
		setTimeout(() => {
			$(sbmt).removeAttr('disabled')
		}, 3000);
	})



	//LIBS
	svg4everybody();//supports svg-sprites in IE/edge

	//ленивая загрузка с viewport-ом   https://github.com/verlok/lazyload
	var lazyLoadInstance = new LazyLoad({
	    elements_selector: ".lazy",
			callback_loaded: function(){
				AOS.refresh()
			}
	});


	$('.js-select').selectmenu()

	//
	const dateNow = new Date()
	$('.js-calendar').attr('placeholder', [getFirstZeroNumbers(dateNow.getDate()), getFirstZeroNumbers(dateNow.getMonth()), dateNow.getFullYear()].join('.') )
	$('.js-calendar').datepicker({
		dateFormat: "dd.mm.yy",
		minDate: dateNow
	})


// 	$('input[type="tel"]').mask('+ 7 (999) 999-99-99')
    const intlInstances = new Map();
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    
    phoneInputs.forEach((input) => {
        const iti = window.intlTelInput(input, {
          initialCountry: "ru",
          autoPlaceholder: "aggressive",
          i18n: {
            searchPlaceholder: "Поиск",
          },
          countryOrder: ["ru"],
          loadUtils: () =>
            import(
              "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.0/build/js/utils.js"
            ),
        });
        intlInstances.set(input, iti);
    })
    
    const forms = document.querySelectorAll("form");

    forms.forEach((form) => {
        form.addEventListener("submit", (e) => {
          e.preventDefault();
          const input = form.querySelector('input[type="tel"]');
          const iti = intlInstances.get(input);
          const container = input.closest(".iti");
          const fullNumber = iti.getNumber();
        
          if (!iti.isValidNumber()) {
            input.classList.add("invalid");
            container.classList.add("error");
          } else {
            input.value = fullNumber;
            input.classList.remove("invalid");
            container.classList.remove("error");
            form.submit();
          }
        });
    });
    
	$('.js-tooltip').tooltipster({
		theme: 'tooltipster-shadow',
		trigger: matchMediaArr[1250].min ? 'hover' : 'click',
		arrow: false
	});
	$('.js-tooltip-2').tooltipster({
		theme: 'tooltipster-shadow',
		trigger: matchMediaArr[1250].min ? 'hover' : 'click',
		arrow: false
	});


	const $top = $('#top')
	if($top.length){
		$($top).imagesLoaded( function() {
			AOS.init({
				once: true
			});
		})
	}else{
		AOS.init({
			once: true
		});
	}
	

	const jqUiSlider = $("#slider-range")
	if(jqUiSlider.length){
		const slider = $(jqUiSlider).find('.js-ui-slider')
		const input = $(jqUiSlider).find('.js-ui-input')


		$( slider ).slider({
			range: true,
			min: 11,
			max: 20,
			values: [ 11, 14 ],
			slide: function( event, ui ) {
				$(input).val( ui.values[ 0 ] + ":00 - " + ui.values[ 1 ] + ":00" );
			}
		});
		$( input ).val( $( slider ).slider( "values", 0 ) +
			":00 - " + $( slider ).slider( "values", 1 ) + ":00" );
	}



	//form
	const orderForm = $('#order-form')
	if(orderForm.length){

		const jqUiSlider = $("#slider-order-form-range")
		const uiSlider = $(jqUiSlider).find('.js-ui-order-form-slider')
		const uiInput = $(jqUiSlider).find('.js-ui-order-form-input')

		//
		let minHour = 11
		let maxHour = 20
		const diff = 3
		const dateNow = new Date()
		const hourNow = dateNow.getHours()

		const strDateNow = [getFirstZeroNumbers(dateNow.getDate()), getFirstZeroNumbers(dateNow.getMonth()), dateNow.getFullYear()].join('.')

		$('.js-order-form-calendar').attr('placeholder', strDateNow )


		if(hourNow < (maxHour - diff)){

			
			$('.js-order-form-calendar').datepicker({
				dateFormat: "dd.mm.yy",
				minDate: dateNow,
				onSelect: (instance, date) => {

					const selectedDate = [getFirstZeroNumbers(date.currentDay), getFirstZeroNumbers(date.currentMonth), date.currentYear].join('.')

					$( uiSlider ).slider( "destroy" );

					if(strDateNow == selectedDate){
						setUiSlider((hourNow+diff < minHour) ? minHour : hourNow+diff, maxHour)
					}else{
						setUiSlider(minHour, maxHour)
					}
					
				}
			})

			setUiSlider((hourNow+diff < minHour) ? minHour : hourNow+diff, maxHour)
				

		}else{

			//если время больше 17:00, то переносим на следующий день
			dateNow.setDate(dateNow.getDate() + 1);

			$('.js-order-form-calendar').datepicker({
				dateFormat: "dd.mm.yy",
				minDate: dateNow
			})

			//slider
			$(uiSlider).attr('data-max', maxHour+':00')
			$(uiSlider).attr('data-min', minHour+':00')
			$( uiSlider ).slider({
				range: true,
				min: minHour,
				max: maxHour,
				values: [ minHour, (minHour + 3) ],
				slide: function( event, ui ) {
					$(uiInput).val( ui.values[ 0 ] + ":00 - " + ui.values[ 1 ] + ":00" );
				}
			});
			$( uiInput ).val( $( uiSlider ).slider( "values", 0 ) +
				":00 - " + $( uiSlider ).slider( "values", 1 ) + ":00" );
		}


		function setUiSlider(min,max){
			//slider
			$(uiSlider).attr('data-max', max+':00')
			$(uiSlider).attr('data-min', min+':00' )
			$( uiSlider ).slider({
				range: true,
				min: min,
				max: max,
				values: [ min , (min + 3) ],
				slide: function( event, ui ) {
					$(uiInput).val( ui.values[ 0 ] + ":00 - " + ui.values[ 1 ] + ":00" );
				}
			});
			$( uiInput ).val( $( uiSlider ).slider( "values", 0 ) +
				":00 - " + $( uiSlider ).slider( "values", 1 ) + ":00" );
		}
			
	}
		

		
	

	
});



/** QUIZ */
$(function(){
	const $quiz = $('#quiz')
	if($quiz.length){

		const $slider = $($quiz).find('.js-slider')
		const $btnsNext = $($quiz).find('.js-next')
		const $btnsBack = $($quiz).find('.js-back')
		const $progress = $($quiz).find('.js-progress')
		const $scale = $($quiz).find('.js-quiz-scale')
		const $steps = $($quiz).find('.js-steps')

		const $radios = $($quiz).find('.quiz__radio')

		let currSlide = 0
		let countSlides = 5
		let radio1 = false

		const swiper = new Swiper($slider[0], {
			allowTouchMove: false,
			autoHeight: true,
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			on: {
				init: function(swiper){
					countSlides = swiper.slides.length
				},
				slideChange: function(swiper){
					currSlide = swiper.activeIndex
					// console.log(currSlide);
					_moveProgress(currSlide)
					_moveScale(currSlide)
					_setSteps(currSlide)
				}
			}
    });

		$($btnsNext).on('click',function(){

			// if(radio1=="Сумки"){
			// 	swiper.slideTo(countSlides-1)
			// 	if(matchMediaArr[1250].max) scrollTo($quiz)
			// 	return;
			// }

			if(currSlide+1 < countSlides) {
				swiper.slideNext()
				if(matchMediaArr[1250].max) scrollTo($quiz)
			}
			
			$($btnsNext).trigger('blur')
		})
		$($btnsBack).on('click',function(){

			// if(radio1=="Сумки"){
			// 	swiper.slideTo(0)
			// 	if(matchMediaArr[1250].max) scrollTo($quiz)
			// 	return;
			// }

			if(currSlide > 0) {
				swiper.slidePrev()
				if(matchMediaArr[1250].max) scrollTo($quiz)
			}
		})

		$($radios).on('change', function(){
			if($(this).prop('checked')){
				$(this).closest('.swiper-slide').find('.js-next').removeAttr('disabled')

				if(currSlide == 0){
					_moveProgress(currSlide)
					_moveScale(currSlide)
					_setSteps(currSlide)
				}
				
				if($(this).closest('.quiz__step-1').length > 0){
					radio1 = $(this).val()
				}
			}
		})

		function _moveProgress(index){
			$($progress).text( parseInt( 100 * (index+1) / countSlides ) +'%' )
		}
		function _moveScale(index){
			$($scale).css({ width: parseInt( 100 * (index+1) / countSlides ) +'%'})
		}
		function _setSteps(index){
			$($steps).html( '<strong>Шаг '+ (index+1) +'</strong> из '+ countSlides )
		}
	}
})
