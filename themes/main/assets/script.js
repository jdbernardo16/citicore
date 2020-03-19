webpackJsonp([1],{

/***/ 40:
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {$(document).ready(function () {
	app.init();
});

var app = {

	init: function () {
		var setup = this.setup;

		switch (pageID) {
			case 'HomePage':
				setup.homepage();
				break;
			case 'CompanyHistoryPage':
				setup.companyhistorypage();
				break;
			case 'InvestorCenterCategoryPage':
				setup.investorcentercategorypage();
				break;
			case 'Career':
				setup.career();
				break;
		}

		setup.menu();
	},

	setup: {

		menu: function () {

			$('.hdr__link').click(function () {
				$(this).toggleClass('activeSub');
				$(this).children(".hdr__subLinkCon").slideToggle(300);
			});

			$(document).on('mouseup', function (e) {
				if ($(e.target).closest(".hdr__link").length === 0) {
					$('.hdr__link.activeSub').children(".hdr__subLinkCon").slideUp(300);
					$('.hdr__link.activeSub').removeClass('activeSub');
				}
			});

			$('#nav-icon').click(function () {
				$(this).toggleClass('open');
				$(this).parent().toggleClass('active');
				$('.hdr__topCon').toggleClass('active');
			});

			$('.ftr__linkParent h6').on('click', function () {

				if ($(this).parent().hasClass('active')) {

					$(this).parent().removeClass('active');
					$(this).siblings('ul').slideUp(300);
					$(this).removeClass('active');
				} else {

					$(this).parent().addClass('active');
					$(this).siblings('ul').slideDown(300);
					$(this).addClass('active');
				}
			});

			// 
			// TABBING
			// 

			// Initialize tabbing
			$(".gen__sideNav li:first").addClass('active');
			var tab_target = $(".gen__sideNav li:first").data("tab-target");
			$(".gen__tabCon *[data-tab-list='" + tab_target + "']").slideDown(300);

			clickTab();

			// Tabbing on click
			function clickTab() {
				$(".gen__sideNav li").click(function () {
					var tab_target = $(this).data("tab-target");
					if ($(this).hasClass("active")) {
						selectTab(this);
					} else {
						// Resets tabs
						$(".gen__sideNav li").removeClass("active");
						setTimeout(function () {
							$(".gen__tabList").slideUp(300);
						}, 300);

						selectTab(this);
					}
				});
			}

			// Select tab
			function selectTab(e) {
				$(e).addClass("active");
				setTimeout(function () {
					$(".gen__tabCon *[data-tab-list='" + tab_target + "']").slideDown(300);
				}, 300);
			}

			$(".gen__tabCon select").on('change', function () {
				var tab_target = $(this).find(':selected').data("tab-target");
				setTimeout(function () {
					$(".gen__tabList").slideUp(300);
				}, 300);

				setTimeout(function () {
					$(".gen__tabCon *[data-tab-list='" + tab_target + "']").slideDown(300);
				}, 300);
			});
		},

		homepage: function () {

			//Calls the function on load to switch layout
			headerMobile();

			//Calls the function on resize to switch layout
			window.addEventListener("resize", headerMobile);
			function headerMobile() {
				var width = $(window).width();
				if (width <= 1024) {} else {
					function changeHeader() {
						var window_top = $(window).scrollTop();
						var trigger__top = $('.frame1').offset().top + 100;

						if (window_top > trigger__top) {
							$('.hdr-frame').addClass('changeHeader');
						} else {
							$('.hdr-frame').removeClass('changeHeader');
						}
					}

					$(function () {
						$(window).scroll(changeHeader);
						changeHeader();
					});
				}
			};

			$('.hm1__sliderCon').slick({
				dots: false,
				arrows: false,
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				speed: 300,
				autoplay: false,
				autoplaySpeed: 5000,
				responsive: [{
					breakpoint: 769,
					settings: {
						adaptiveHeight: true
					}
				}]
			});

			$('.hm1__sliderCon').on('afterChange init', function (event, slick, direction) {
				// console.log('afterChange/init', event, slick, slick.$slides);
				// remove all prev/next
				setTimeout(function () {
					$('.hm1__bgWhite').removeClass('active');
					$('.hm1__bgRed').removeClass('active');
					$('.hm1__sliderListCon .frm-cntnr').removeClass('active');
				}, 1200);
			}).on('beforeChange', function (event, slick) {
				// optional, but cleaner maybe
				// remove all prev/next
				setTimeout(function () {
					$('.hm1__bgWhite').addClass('active');
					$('.hm1__bgRed').addClass('active');
					$('.hm1__sliderListCon .frm-cntnr').addClass('active');
				}, 0);
			});

			/*SETS ID TO ALL SIDE TAB*/
			var numDetails = 0;
			$('.hm-frame1 .item span').each(function () {
				numDetails++;
				$(this).attr('data-slick-index', numDetails - 1);
			});

			//ticking machine
			var percentTime;
			var tick;
			var time = .1;
			var progressBarIndex = 0;

			$('.progressBarContainer .progressBar').each(function (index) {
				var progress = "<div class='inProgress inProgress" + index + "'></div>";
				$(this).html(progress);
			});

			function startProgressbar() {
				resetProgressbar();
				percentTime = 0;
				tick = setInterval(interval, 10);
			}

			function interval() {
				if ($('.hm1__sliderListCon[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden") === "true") {
					progressBarIndex = $('.hm1__sliderListCon[aria-hidden="false"]').data("slickIndex");
					startProgressbar();
				} else {
					percentTime += 1 / (time + 5);
					$('.inProgress' + progressBarIndex).css({
						width: percentTime + "%"
					});
					if (percentTime >= 100) {
						$('.hm1__sliderCon').slick('slickNext');
						progressBarIndex++;
						if (progressBarIndex > 2) {
							progressBarIndex = 0;
						}
						startProgressbar();
					}
				}
			}

			function resetProgressbar() {
				$('.inProgress').css({
					width: 0 + '%'
				});
				clearInterval(tick);
			}
			startProgressbar();
			// End ticking machine

			$('.item').click(function () {
				clearInterval(tick);
				var goToThisIndex = $(this).find("span").data("slickIndex");
				$('.hm1__sliderCon').slick('slickGoTo', goToThisIndex, false);
				startProgressbar();
			});

			$('.hm3__textInner').on('mouseenter', function () {
				$(this).parent().fadeOut(300);
				setTimeout(function () {
					$(this).parent().siblings('.hm3__textPrev').addClass('active');
				}.bind(this), 300);
			});

			$('.hm3__textPrev .hm3__arrow').on('click', function () {
				$(this).parent().removeClass('active');
				setTimeout(function () {
					$(this).parent().siblings('.hm3__textCon').fadeIn(300);
				}.bind(this), 300);
			});

			$('.hm5__sliderCon').slick({
				dots: true,
				arrows: false,
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				speed: 300,
				autoplay: false,
				autoplaySpeed: 5000
			});

			var hm6 = $('.hm-frame6 .width--45').height();
			$('.hm-frame6 .width--55').height(hm6);

			var controller = new ScrollMagic.Controller();

			$('.hm3__contentCon').each(function () {
				var tl = new TimelineMax({ repeat: 0, repeatDelay: 0.5 });
				tl.staggerFrom(".hm3__contentCon .page__gridChild", 1, { opacity: 0 }, 0.3).staggerTo(".hm3__contentCon .page__gridChild", 1, { opacity: 1 }, 0.3);

				var fadeScene = new ScrollMagic.Scene({
					triggerElement: this,
					triggerHook: .7,
					reverse: false
				}).setTween(tl).addTo(controller);
			});

			$('.hm4__contentCon').each(function () {
				var tl = new TimelineMax({ repeat: 0, repeatDelay: 0.5 });
				tl.staggerFrom(".hm4__listCon", 1, { opacity: 0 }, 0.3).staggerTo(".hm4__listCon", 1, { opacity: 1 }, 0.3);

				var fadeScene = new ScrollMagic.Scene({
					triggerElement: this,
					triggerHook: .7,
					reverse: false
				}).setTween(tl).addTo(controller);
			});

			$('.hm-frame6 .width--55').each(function () {
				var tl = new TimelineMax({ repeat: 0, repeatDelay: 0.5 });
				tl.staggerFrom(".hm6__contentList", 1, { opacity: 0 }, 0.3).staggerTo(".hm6__contentList", 1, { opacity: 1 }, 0.3);

				var fadeScene = new ScrollMagic.Scene({
					triggerElement: this,
					triggerHook: .7,
					reverse: false
				}).setTween(tl).addTo(controller);
			});
		},

		investorcentercategorypage: function () {
			$('.sidebar_category.current .sidebar_subcat:first').addClass('active');
			$('.article-cntnr').hide();
			$('.article-cntnr:first').show();
			$('.sidebar_category.current .sidebar_subcat').on('click', function () {
				$('.sidebar_category.current .sidebar_subcat').removeClass('active');
				$(this).addClass('active');
				$('.article-cntnr').hide();
				var yow = $(this).find('a').attr('value');
				$(yow).fadeIn();
				return false;
			});
		},

		career: function () {
			app.form.init($('#applyForm'), $('#applyBtn'), 'form/apply/send', false);

			$('.upload-hldr').fileupload({
				url: baseHref + 'form/apply/upload',
				dataType: 'json',
				submit: function (e, data) {},
				done: function (e, data) {
					switch (data.result.response) {
						case 0:
							break;
						case 1:

							$('#file-image').val(data.result.message);
							$('#maskfile-image').val(data.result.message);
							$('#file-selected').html(data.result.filename);

							break;
					}
				}
			});
		},

		companyhistorypage: function () {

			/*//Calls the function on load to switch layout
   tabbing();
   	//Calls the function on resize to switch layout
   window.addEventListener("resize", tabbing);
   function tabbing(){
   	var width = $(window).width(); 
   	if (width <= 1024){
   		$(".gen__sideNav li").click(function(){
   				if ($('gen__sideNav').hasClass("active")){
   				$('.gen__sideNav').removeClass('active');
   				$('.gen__sideNav ul').css('height', '40px');
   				console.log('test')
   			} else {
   				console.log('test2')
   				var sum = 0;
   					$('.gen__sideNav li').each(function() {
   					sum += $(this).outerHeight(true);
   				});
   				$('.gen__sideNav ul').css('height', sum);
   				$(".gen__sideNav").addClass("active");
   						$(".gen__sideNav li").click(function(){
   					var tab_target = $(this).data("tab-target");
   					if ($(this).hasClass("active")){
   						$(this).addClass("active");
   						setTimeout(function(){
   							$(".gen__tabList[data-tab-list='" + tab_target + "']").slideDown(300);
   						}, 300);
   						$('.gen__sideNav').removeClass('active');
   						$('.gen__sideNav ul').css('height', '40px');
   					} else {
   						// Resets tabs
   						$(".gen__sideNav li").removeClass("active");
   						setTimeout(function(){
   							$(".gen__tabList").slideUp(300);
   						}, 300);
   							$(this).addClass("active");
   						setTimeout(function(){
   							$(".gen__tabList[data-tab-list='" + tab_target + "']").slideDown(300);
   						}, 300);
   					}
   						$('.gen__sideNav').removeClass('active');
   						$('.gen__sideNav ul').css('height', '40px');
   				});
   			}
   		});
   			$(document).on('mouseup', function(e){
   			if ($(e.target).closest(".gen__sideNav").length === 0) { 
   				$('.gen__sideNav').removeClass('active');
   				$('.gen__sideNav ul').css('height', '40px');
   			}
   		})
   	} else {
   		console.log('1025')
   		clickTab();
   	}
   };*/

			$('.abtCH1__menu').on('click', function () {
				$(this).toggleClass('active');
				$(this).next().slideToggle(300);
			});
		}

	},

	/*accordion: {*/
	/**
 * ACCORDION: Slide down & up effect
 * - To take effect, must identify the button, holder/container, and element
 * - Add data-attribute to the button w/c is: data-collapse-id
 * - To execute (sample): app.accordion.init($('.faq__question'), 'faq__qa', 'faq__answer');
 **/
	/*init: function(button, elemHolder, hiddenElem) {
 	var btn = button,
 		holder = elemHolder,
 		hidden_element = hiddenElem;
 		btn.on('click', function() {
 		var id = $(this).data('accordion-id');
 		if($('#'+id).hasClass('is-active')) {
 			$('#'+id+' .'+hidden_element).slideUp(300);
 			$('.'+holder).removeClass('is-active');
 			
 		} else {
 			$('.'+holder).removeClass('is-active');
 			$('.'+holder+' .'+hidden_element).slideUp(300);
 			
 			$('#'+id).addClass('is-active');
 			$('#'+id+' .'+hidden_element).slideToggle(300);
 		}
 		
 	});
 }
 },*/

	form: {
		/**
  * SENDING FORM
  * - Identify the form name, button name, the url (controller route), and if you want to 'refresh' the page.	
  **/
		init: function (formName, btnName, routeVal, boolean) {
			var form = formName,
			    btn = btnName,
			    route = routeVal,
			    bool = boolean;

			form.validate({
				submitHandler: function (form) {
					swal({
						title: 'Sending ...',
						text: '',
						timer: 2000,
						onOpen: function () {
							swal.showLoading();
						}
					});
					var vars = $(form).serialize();
					$.post(baseHref + route, vars, function (data) {
						switch (data.status) {
							case 0:
								setMessage(false, data.message);
								break;
							case 1:
								setMessage(true, data.message);
								$(form).trigger('reset');
								if (bool == true) {

									window.location.reload(1);
								}

								break;
						}
					}, 'json');
				}
			});

			$(btn).on('click', function (e) {
				e.preventDefault();
				form.submit();

				//label error -- for mobile
				if ($(window).width() < 900) {
					$('label.error').empty();
					$('label.error').text("*");
				}
			});

			function setMessage(status, msg) {
				if (status) {
					swal('', msg, 'success');
				} else {
					swal('', msg, 'error');
				}
			}
		},

		/**
  * SENDING FORM W/ ATTACHMENTS
  * - Bind the uploaded file first, before sending.
  * - Identify where the file should be uploaded, button name, and the url (controller route).	
  * - Requirements: 
  			Javascript:
  				  jquery.fileupload.js
  				  jquery.iframe-transport.js
  				  jquery.ui.widget.js
  			Composer:
  				  "gargron/fileupload": "~1.4.0"
  			Silverstripe:
  				   Controller: Create UploadController
  				   ModelAdmin: Create an admin manager for back up purposes (list of emails received)
  				   Assets: Create folder inside, depends on what you declared
  				   Template Syntax: 
  				   		<label id="file-selected-permit" for="fileupload-permit" class="custom-file-upload">Business/Mayor Permit <i class="ion-paperclip"></i></label>
  						<input type="file" id="fileupload-permit" name="file" style="display: none;">
  						<input type="hidden" id="file-image-permit" name="permit" value="">
  	**/
		bindUploadField: function (fileUpload, fileImg, fileSelected, formBtn, url) {
			var $file_upload = fileUpload,
			    $file_img = fileImg,
			    $file_selected = fileSelected,
			    $form_btn = formBtn,
			    $url = url;

			$file_upload.fileupload({
				url: baseHref + $url,
				dataType: 'json',
				submit: function (e, data) {},
				done: function (e, data) {
					switch (data.result.status) {
						case 0:
							break;
						case 1:

							$file_img.val(data.result.message);
							$file_selected.html(data.result.filename);
							$form_btn.fadeIn();

							break;
					}
				}
			});
		}
	}
};
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(1)))

/***/ })

},[40]);