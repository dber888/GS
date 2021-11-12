var ScreenHeight, ScreenWidth, _this, mass_color, mass_logo, count_slider;



function SliderAnim(currentSlide){
	_this = $(".top_slider_time ul li").eq(currentSlide);
	$(_this).animate({width: "100%"}, 1000, function(){
		$(_this).find('span').animate({width: "100%"}, 3000, function(){
			$(".top_slider .slider_items").slick('slickNext');
		});
	});
}

function ResetSliderAnim(){
	$(_this).stop();
	$(_this).find('span').stop();

	$(_this).animate({width: "0%"}, 1000, function(){
		
	});
	$(_this).find('span').animate({width: "0%"}, 500, function(){
		// $(".top_slider .slider_items").slick('slickNext');
	});

	
}
function projects() {
    var projectRatio = 360/270;
    var projectHeight = $('.projects ul li').width()/projectRatio;

    $('.projects ul li').each(function() {
        $(this).css({
            'height': projectHeight+'px',
            'background': 'url("'+$(this).find('img').attr('src')+'") no-repeat center center',
            '-webkit-background-size': 'cover',
            '-moz-background-size': 'cover',
            '-o-background-size': 'cover',
            'background-size': 'cover',
            'filter': 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'+$(this).find('img').attr('src')+'", sizingMethod="scale")',
            '-ms-filter': 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'+$(this).find('img').attr('src')+'", sizingMethod="scale")'
        });
        $(this).children('div').css({
            'height': projectHeight+'px'
        });
        if($(window).width() > 768){
            $(this).hoverdir();
        }

    });
}

$(document).ready(function(){
    projects();

    $(window).resize(function() {
        projects();
    });

	$("select#choisegroup").change(function(){
		top.location.href=$(this).val();
	});



	// if(window.innerWidth>=361) {
    $('input.styled, textarea.styled').each(function () {
      $placeholder = $(this).attr('placeholder');
      if (typeof $placeholder === "undefined")
        $placeholder = '';
      $classes = $(this).attr('class');
      $el = $(this).clone().attr({placeholder: '', class: 'effect-21 ' + $classes});
      $elStyled = $('<div class="input-effect"><label>' + $placeholder + '</label><span class="focus-border"><i></i></span></div>');
      $elStyled.prepend($el);
      $(this).parent().append($elStyled);
      $(this).remove();
    });



    $(".effect-21, textarea").change(function () {
      if ($(this).val().length > 0) {
        $(this).addClass('has-content');
      } else {
        $(this).removeClass('has-content');
      }
    })
	$('textarea').focusin(function () {
    $(this).addClass('has-content');
  })
		.focusout(function () {
    if ($(this).val().length <= 0)
		 	$(this).removeClass('has-content');
  })
  // }

  // $('select').niceSelect();
  $('input[type=file], select').styler()
  //Mobile menu
	$('.top_menu--top-menu').on('click',function () {
		$('.top-menu').toggleClass('open');
		$('body').toggleClass('open-menu');
    $('.top_menu--top-menu').toggleClass('close');
  });
    if(window.innerWidth<=768)
			$(window).scroll(function () {
				if ($(window).scrollTop() > window.innerHeight) {
					$('header').addClass('fixed');
				} else {
					$('header').removeClass('fixed');
				}
				if($(window).scrollTop() > $('header').height() &&  $(window).scrollTop() < window.innerHeight )
          $('header').css({'opacity':'0'})
				else
          $('header').css({'opacity':'1'})
			}

			);
  //Mobile menu END

	// Открытие доп меню
	// начало блока
	var isCtrl = false;
	$(document).keyup(function (e) {
	 
		if(e.which == 17) isCtrl=false;

	}).keydown(function (e) {
	 
		if(e.which == 17) isCtrl=true;
		if(e.which == 81 && isCtrl == true) {
	 
			$("div.test").toggleClass("open");

			return false;
		}
	 
	});
	// конец блока


	$('.services_items .item').hover(function(){
		var attr = $(this).attr('data-svg');

		var perem;

		switch (attr) {
		case 'svg_projecting':
			perem = svg_projecting;
			break;
		case 'svg_design':
			perem = svg_design;
			break;
		case 'svg_development':
			perem = svg_development;
			break;
		case 'svg_support':
			perem = svg_support;
			break;
		}

		perem.selectAll("*").attr({stroke: "white"});
		// console.log(perem);
	},
	function(){
		var attr = $(this).attr('data-svg');

		var perem;

		switch (attr) {
		case 'svg_projecting':
			perem = svg_projecting;
			break;
		case 'svg_design':
			perem = svg_design;
			break;
		case 'svg_development':
			perem = svg_development;
			break;
		case 'svg_support':
			perem = svg_support;
			break;
		}

		perem.selectAll("*").attr({stroke: "#21b36c"});
	});





	if ($("#projecting").length>0){
		var s_projecting = Snap("#projecting");

		Snap.load("/local/templates/goodsystems/img/projecting_icon.svg", function (f) {
			g_projecting = f.select("g");

			svg_projecting = f.select("#projecting");
			if (!(svg_projecting == null))
					SetDraw(svg_projecting, 275);

			// draw(svg_projecting, 275);

			dotten = f.select(".dotten");
			dottenAll = dotten.selectAll("rect");
			// f.selectAll("rect").attr('stroke', 'red');


			Pr_anim(0);
			setInterval(function(){Pr_anim(0)}, 2500);

			s_projecting.append(f);
		});

    }


	 function Pr_in(n){
		if (n >= dottenAll.length) return;

		dottenAll[n].animate({ transform: 't0,0' }, 0, function(){
			dottenAll[n].animate({ transform: 't0,0' }, 200, function(){
			Pr_in(n+1);
		});
		});
	}
	function Pr_out(n){
		if (n >= dottenAll.length){
			Pr_in(0);
		} else{
			dottenAll[n].animate({ transform: 't200,0' }, 0, function(){
			dottenAll[n].animate({ transform: 't200,0' }, 200, function(){
			Pr_out(n+1);
			});
			});
		}

		
	}
	function Pr_anim(n){
		Pr_out(n);
	}

    if ($("#development").length>0) {

        var s_development = Snap("#development");
        Snap.load("/local/templates/goodsystems/img/development_icon.svg", function (f) {
            g_development = f.select("g");

            svg_development = f.select("#development");
            if (!(svg_development == null))
                SetDraw(svg_development, 275);

            // draw(svg_development, 275);
            // f.selectAll("*").attr({stroke: "red"});

            dots_development = f.select(".dots");
            dots_development1 = dots_development.selectAll("rect");

            Anit_1();
            setInterval(Anit_1, 5000);
            s_development.append(f);
        });

    }


    if ($("#design").length>0) {
        var s_design = Snap("#design");
        Snap.load("/local/templates/goodsystems/img/design_icon.svg", function (f) {
            line = f.select(".line");
            lineAll = line.selectAll("line");

            svg_design = f.select("#design");
            if (!(svg_design == null))
                SetDraw(svg_design, 275);

            // draw(svg_design, 275);


            Des_anim(0);
            setInterval(function () {
                Des_anim(0)
            }, 6500);

            s_design.append(f);
        });
    }
	function Des_in(n){
		if (n >= lineAll.length) return;

		lineAll[n].animate({ transform: 't0,0' }, 0, function(){
			lineAll[n].animate({ transform: 't0,0' }, 200, function(){
			Des_in(n+1);
		});
		});
	}
	function Des_out(n){
		if (n >= lineAll.length){
			Des_in(0);
		} else {
			lineAll[n].animate({ transform: 't200,0' }, 0, function(){
				lineAll[n].animate({ transform: 't200,0' }, 200, function(){
				Des_out(n+1);
			});
			});
		}

		
	}
	function Des_anim(n){
	Des_out(n);
	}


    if ($("#support").length>0) {
        var s_support = Snap("#support");
        Snap.load("/local/templates/goodsystems/img/support_icon.svg", function (f) {
            g_support = f.select(".main_1");

            svg_support = f.select("#support");
            if (!(svg_support == null))
                SetDraw(svg_support, 275);


            function rotateHead() {
                g_support.animate({transform: 'r5,65,65'}, 1000, function () {
                    g_support.animate({transform: 'r-5,65,65'}, 1000);
                });
            };

            setInterval(rotateHead, 2000);
            s_support.append(f);
        });
    }

	function Anit_1(){
		dots_development1[4].animate({ transform: 't8,0' }, 200, function(){
		dots_development1[3].animate({ transform: 't8,0' }, 200, function(){
		dots_development1[2].animate({ transform: 't8,0' }, 200, function(){
		dots_development1[1].animate({ transform: 't8,0' }, 200, function(){
		dots_development1[0].animate({ transform: 't8,0' }, 200, function(){

		dots_development1[4].animate({ transform: 't16,0' }, 200, function(){
		dots_development1[3].animate({ transform: 't16,0' }, 200, function(){
		dots_development1[2].animate({ transform: 't16,0' }, 200, function(){
		dots_development1[1].animate({ transform: 't16,0' }, 200, function(){
		dots_development1[0].animate({ transform: 't16,0' }, 200, function(){
		
		dots_development1[4].animate({ transform: 't24,0' }, 200, function(){
		dots_development1[3].animate({ transform: 't24,0' }, 200, function(){
		dots_development1[2].animate({ transform: 't24,0' }, 200, function(){
		dots_development1[1].animate({ transform: 't24,0' }, 200, function(){
		dots_development1[0].animate({ transform: 't24,0' }, 200, function(){
			Anit_2();
		
	});
	});
	});
	});
	});

	});
	});
	});
	});
	});

	});
	});
	});
	});
	});
	}

	function Anit_2(){

		$("body")
		.queue(function () {
		   dots_development1[0].attr({ transform: 't0,0' });
		   $(this).dequeue();
		 })
		.delay(200)
		.queue(function () {
		   dots_development1[1].attr({ transform: 't0,0' });
		   $(this).dequeue();
		 })
		.delay(200)
		.queue(function () {
		   dots_development1[2].attr({ transform: 't0,0' });
		   $(this).dequeue();
		 })
		.delay(200)
		.queue(function () {
		   dots_development1[3].attr({ transform: 't0,0' });
		   $(this).dequeue();
		 })
		.delay(200)
		.queue(function () {
		   dots_development1[4].attr({ transform: 't0,0' });
		   $(this).dequeue();
		 });	
	}

	// mass_color = ['#9ed553', '#5cc75b', '#1bb26b', '#1aa17f', '#1a968d', '#1a83a7', '#1a7bb2'];

	// $('.top_slider .slider_items .slider_item p.title').gradientText({
	// 	colors: mass_color
	// });

	

	// setInterval(function(){
	// // 	mass_color = ['#9ed553', '#5cc75b'];
	// // 	// $('.top_slider .slider_items .slider_item p.title').gradientText({
	// // 	// 	colors: mass_color
	// // 	// });
	// // 	// $(window).resize();

	// // 	// $('.top_slider .slider_items .slider_item p.title').test({
	// // 	// 	colors: mass_color
	// // 	// });


	// // 	console.log('update');

	// $(window).trigger('redraw');
	// }, 300);

	$(".top_slider .slider_items").on('init', function(event, slick){
		// SliderAnim(0);
	});
	$(".top_slider .slider_items").on('afterChange', function(event, slick, currentSlide){
		// SliderAnim(currentSlide);
	});
	$(".top_slider .slider_items").on('beforeChange', function(event, slick, currentSlide){
		// ResetSliderAnim();
	});




	$('.top_slider .slider_items').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  // arrows: false,
	  fade: true,
	  // nextArrow: $('.top_slider_arrow .right'),
	  // prevArrow: $('.top_slider_arrow .left')
	  appendArrows: $('.top_slider_arrow')
	});


	$('div.client_slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: false,
		dots: true
	});

	$('#scr_bottom').click(function(){
		$('html, body').animate({scrollTop:$('div.dreams').offset().top}, 600);
	});


	$("div.back_popup").on('click', function(){
		PopUpAllClose();
	  	return false;
	});

	$('a.popup_close').on('click', function(){
		PopUpAllClose();

	  return false;
	});


	$("* [popup]").on('click', function(){
		// alert($(this).attr('popup'));
		console.log($(this).attr('popup'));
		PopUpOpen($(this).attr('popup'));
		return false;
	});

	$('input[type="tel"][required]').attr('placeholder', '+_ (___) ___-__-__').mask("+9 (999) 999-99-99");

	$('input[type="checkbox"]').styler();



	// $('form').submit(function(){
    //
	// 	var submit = true;
	// 	var form = this;
    //
	// 	$(form).find("[required]").each(function(){
    //
	// 		var label = $(this).closest('label');
    //
	// 		if ($(this).val() == "") {
    //
	// 		    $(label).addClass('error');
	// 		    submit = false;
	// 		}
    //
	// 		if ($(this).attr("type") == 'email' &&  !(/.+@.+\../.test($(this).val()))) {
     //        	$(label).addClass('error');
     //    	    submit = false;
	// 	    }
    //
	// 		if ($(this).attr("type") == 'checkbox' &&  !$(this).prop("checked")) {
	// 	    	$(label).addClass('error');
	// 		    submit = false;
	// 	    }
    //
	// 	});
    //
    //
	//
    //
    //
    //
	// 	if (submit) {
	// 		alert('Форма отправлена');
	// 	}
    //
	// 	// debugger;
    //
	// 	return false;
    //
	// });



	$("input, textarea").focus(function(){
	    $(this).closest('label').removeClass("error");
	});

	$("div.work_item").hover(function(e){

		// var x = e.offsetX==undefined?e.layerX:e.offsetX;
		// var y = e.offsetY==undefined?e.layerY:e.offsetY;
		var x = getRandomArbitary(10, $(this).height() - 10);
		var y = getRandomArbitary(10, $(this).width() - 10);
		var _this = this;
		$(this).find('div.line').animate({top: "-"+$(this).find('div.line').height()}, 200, function(){

			// debugger;
			
			setTimeout(function(){
				$(_this).find('div.description').addClass('open');
			}, 4000);
			Ripple(x,y, _this);

			// console.log(x);
			// console.log(y);

			// $(this).mousemove();

		});
	},
	function(e){
		$(this).find('div.line').stop().animate({top: "-"+$(this).find('div.line').height()/2}, 200);
		$(this).find(".effekt").removeClass("replay");
	});


	
	// $(window).on('scroll',ScrollMain);

	

	$("div.new_project span.h_border").click(function(){
		$(this).closest("div.new_project").toggleClass("act");
		$(this).toggleClass('hidden');
	});

	$('.button-gray.button-green.btn.cancel').click(function(){
		$('div.new_project span.h_border').removeClass('hidden');
		$(this).closest("div.new_project").removeClass("act");
	})

	// debugger;
	ReposPopUp();

});

function LogoSlider() {
	// console.log("!!!!");

	var xx = getRandomArbitary(0, count_slider);
	// debugger
	// $("div.logotip_slider_item:not(.hidd)").addClass('hidd');

	$("div.logotip_slider_item.dis_active:not(.hidd)").eq(~~xx).queue(function () {
        $(this).addClass('hidd');
        $(this).dequeue();
      })
	 .delay(2000)

      .queue(function () {
      	$(this).find('img').attr('src', mass_logo[~~getRandomArbitary(0, mass_logo.length-1)]);
        $(this).removeClass("hidd");
        $(this).dequeue(); 
      });

	timerId_2 = setTimeout(function(){
		LogoSlider();
	}, 3000);
}

function Ripple(x,y, _this){
// debugger;
var ripple = $(_this).find('div.img');

var v = ripple.width();
var h = ripple.height();
var size_m = v>h?v:h;
// визуальный элемент эффекта
if(ripple.find(".effekt").length == 0) {
	ripple.append("<span class='effekt'></span>");
}
var efekt = ripple.find(".effekt");
efekt.removeClass("replay");
if(!efekt.height() && !efekt.width())
{
	var d = Math.max(ripple.outerWidth(), ripple.outerHeight());
	efekt.css({height: size_m*1.5, width: size_m*1.5});// Определяем размеры элемента эффекта 
}
var x = x - efekt.width()/2;
var y = y - efekt.height()/2;

efekt.css({
	top: y+'px',
	left:x+'px'
}).addClass("replay");

}

$(window).on('scroll ready',ScrollMain);
$(window).on('resize ready',ResizeScreen);

// function ScrollMain(){

// 	var st = $(window).scrollTop();

// 	// if ($('*').is('.animated_block')) {

// 	// 	// if (ScreenWidth >= 1024) {

// 	// 	$('.animated_block').each(function(){
// 	// 		var tek = this;

// 	// 		if(st+(ScreenHeight*3/4) >= $(tek).offset().top){

// 	// 			if ($(this).hasClass('anim_h')) {
// 	// 				setTimeout(function(){
// 	// 					$(tek).addClass('anim_final');
// 	// 				}, 300);
// 	// 			} else{
// 	// 				setTimeout(function(){
// 	// 					$(tek).addClass('anim_final');
// 	// 				}, getRandomArbitary(100, 1000));
// 	// 			}
				
				

// 	// 		}
// 	// 	});

// 	// 	// }

// 	// }
// }

function getRandomArbitary(min, max)
{
  return Math.random() * (max - min) + min;
}


function ResizeScreen(){
	ScreenHeight = $(window).height();
	ScreenWidth = $(window).width();
	// ScreenWidth = $('body').width();
	// count_slider
	// console.log(ScreenWidth);

	count_slider = 9;
	if (window.matchMedia('(max-width: 1023px)').matches) count_slider = 7;
	if (window.matchMedia('(max-width: 767px)').matches) count_slider = 5;

// debugger;
	if (window.matchMedia('(max-width: 767px)').matches) {

		if ($("div.index_block .work_items").hasClass('col_lists')) {
            $("div.index_block .work_items").removeClass('col_lists');
            $("div.index_block .work_items").find("div.work_item").unwrap();
            $("div.index_block .work_items").find("div.col").remove();
		}

		$('div.index_block .work_items').autocolumnlistMain({
		    columns: 1,
		    classname: 'col'
		});

		$('.services_items').each(function(){

			if (!$(this).hasClass('slick-slider')) {

				$('div.services_items').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					fade: true,
					dots: true,
					adaptiveHeight: true
				});
			}
		});

	} else {

		if ($("div.index_block .work_items").hasClass('col_lists')) {
            $("div.index_block .work_items").removeClass('col_lists');
            $("div.index_block .work_items").find("div.work_item").unwrap();
            $("div.index_block .work_items").find("div.col").remove();
		}

		$('div.index_block .work_items').autocolumnlistMain({
		    columns: 2,
		    classname: 'col'
		});

		$('.slider_320').each(function(){
			if ($(this).hasClass('slick-slider')) {
				$(this).slick('unslick');
			}
		});
	}

	// debugger;
	// switch (ScreenWidth) {
	// 	case ScreenWidth>320:
	// 		count_slider = 7;
	// 		break;
	// 	case ScreenWidth>768:
	// 		count_slider = 9;
	// 		break;
	// 	case ScreenWidth>768:
	// 		count_slider = 9;
	// 		break;
	// 	case 'svg_support':
	// 		perem = svg_support;
	// 		break;
	// 	}


	// else
	//   alert("Not undefined");
	// clearTimeout(timerId_1);
	// clearTimeout(timerId_2);

	var objectSize = $("div.new_project div.title h2").closest("div");
 	$(".white_back_new_project").width($(objectSize).width());

 	if(typeof timerId_1 != "undefined"){	
		// alert("123123");
	  	clearTimeout(timerId_1);
	}

    if(typeof timerId_2 != "undefined"){
        // alert("123123");
        clearTimeout(timerId_2);
    }
 	mass_logo = [];
 	// debugger;
 	$("div.logotip_slider img").each(function(index, elem) {
 		mass_logo.push($(this).attr('src'));
 		$(this).closest('div').removeClass('dis_active');
 		if (index <= count_slider) {
 			$(this).closest('div').addClass('dis_active');
 		}
 	});

 	timerId_1 = setTimeout(function(){
 		LogoSlider();
 	}, 2000);
}

function ReposPopUp(){

	$("div#popups div.popup").each(function(){
		var popups = $(this).closest("div#popups");
		var _this = this;
		$(_this).css("left", $(popups).width()/2 - $(_this).outerWidth()/2);

		if ($(_this).outerHeight() > $(window).height()) {
			$(_this).css("bottom", "0px").css("top", "initial");

			// $(_this).css("top", "initial");
		} else{
			$(_this).css("top", $(popups).height()/2 - $(_this).outerHeight()/2).css("bottom", "initial");
		}
	});
}

function PopUpOpen(id){
	// debugger;
	$("body").css("overflow-y",  "hidden");
	$("div#popups").css("display", "block");
	$("div#popups div.back_popup").css("display", "block");
	$(".popup").css("display", "none");
	$("div#popups .popup#"+id).css("display", "block");
	ReposPopUp();
}

function PopUpAllClose(){
	$("body").css("overflow-y",  "auto");
	$(".popup").css("display", "none");
	$("div#popups").css("display", "none");
	$("div.back_popup").css("display", "none");
}


(function($) {
    var defaults = {
        columns: 4,
        classname: 'column',
        min: 1
    };

    $.fn.autocolumnlistMain = function(params){
        var options = $.extend({}, defaults, params);
        return this.each(function() {

        	// debugger;
            var els = $(this).addClass('col_lists').find('> div');
            var dimension = els.size();

            for (i=1; i<options.columns+1; i++) {
            	$(this).append('<div class="'+options.classname+' '+ i +'" />');
            }


            var ind = 0;
            els.each(function(indx, element){
            	ind++;

            	if ($(element).hasClass('all_works')) {
        			var mass_m = $(element).closest('div.work_items').find('div.col');

        			var h_blocks = 999999;
        			var index;

    				mass_m.each(function(indx, element){
						if ($(this).height() < h_blocks) {
							h_blocks = $(this).height();
							index = indx;
    					}
    				});

    				
    				$(mass_m[index]).append($(element));

            		return;
            	}
            	// console.log(ind);
            	if (ind > options.columns) {ind = 1;}
            	// console.log(".col." + ind);
            	$(".col." + ind).append($(element));
            });
        });
    };
})(jQuery);



function SetDraw(svg, num){
  if (svg == null)
  	return	;
	svg.attr( 'strokeDasharray', num);//strokeDasharray
	svg.attr( 'strokeDashoffset', num);//strokeDasharray
}


function draw(svg, num){
Snap.animate(num,0, function( value ){
	svg.attr({ 'strokeDashoffset': value })//strokeDashoffset

},2000);
}




function degToRad (deg) { return deg / 180 * Math.PI; }
function radToDeg (rad) { return rad / Math.PI * 180; }






function ScrollMain(){

	var st = $(window).scrollTop();

	// $("p.animNum").each(function(){
	// 	var tek = this;

	// 	var num = $(tek).attr("data-num");

	// 	if(st+(h*3/4) >= $(tek).offset().top && num){
	// 		// console.log("start");
	// 		$(tek).removeAttr("data-num");

			
	// 		$(tek).animateNumber(
	// 		  {
	// 		    number: num
	// 		  },
	// 		  2000
	// 		);
	// 	}
	// });


	$(".svg_draw").each(function(){
		var tek = this;

		if(st+(ScreenHeight*3/4) >= $(tek).offset().top && $(tek).hasClass("hidd")){
			switch ($(tek).find('svg').attr("id")) {
			  case "projecting":
			    if (!(typeof svg_projecting == "undefined")) {
			    	draw(svg_projecting, 275);
			    	$(this).removeClass("hidd");
			    }
			    break;
	    	case "design":
			    if (!(typeof svg_design == "undefined")) {
			    	draw(svg_design, 275);
			    	$(this).removeClass("hidd");
			    }
			    break;
		    case "development":
			    if (!(typeof svg_development == "undefined")) {
			    	draw(svg_development, 275);
			    	$(this).removeClass("hidd");
			    }
			    break;
		    case "support":
			    if (!(typeof svg_support == "undefined")) {
			    	draw(svg_support, 275);
			    	$(this).removeClass("hidd");
			    }
			    break;
			  default:
			    console.log( 'Я таких значений не знаю' );
			}
		}


				if(st+ScreenHeight < $(tek).offset().top || st >= ($(tek).offset().top + $(tek).height())){
			$(this).addClass("hidd");

			switch ($(tek).find('svg').attr("id")) {
			  case "projecting":
			    if (!(typeof svg_projecting == "undefined")) {
			    	SetDraw(svg_projecting, 275);
			    }
			    break;
	    	case "design":
			    if (!(typeof svg_design == "undefined")) {
			    	SetDraw(svg_design, 275);
			    }
			    break;
		    case "development":
			    if (!(typeof svg_development == "undefined")) {
			    	SetDraw(svg_development, 275);
			    }
			    break;
		    case "support":
			    if (!(typeof svg_support == "undefined")) {
			    	SetDraw(svg_support, 275);
			    }
			    break;
			  default:
			    console.log( 'Я таких значений не знаю' );
			}
		}
	});

}

/*Слайдер с портфолио*/
    $(".js-portfolio-slider").slick({
		dots: false,
		arrows: true,
		infinite: true,
		speed: 700,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: $('.portfolio-slider').find('.portfolio-slider__arrow--prev'),
		nextArrow: $('.portfolio-slider').find('.portfolio-slider__arrow--next')
	});