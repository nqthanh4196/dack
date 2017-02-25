var teslaThemes = {
	body: jQuery('body'),

	init: function () {
		this.module();
	},

	module: function () {
		this.placeholderInit();
		this.scrollTop();
		this.smoothScrolltoAnchor();
		this.stickyHeader();
		this.bxSliderInit();
		this.owlCarouselInit();
		this.customSelect();
		this.customCategoriesBox();
		this.quickView();
		this.productCoverSlider();
		this.easyParallax();
		this.countDownInit();
		this.priceSlider();
		this.inputHasValue();
		this.tabs();
		this.accordionIconToggle();
		this.shoppingBag();
		this.contactMap();
		this.shippingAddres();
		this.paymentType();
		this.mobileNavigation();
		this.masonrySidebar();
		this.audioPlayer();
	},

	placeholderInit: function () {
		jQuery('input[placeholder], textarea[placeholder]').placeholder();
	},

	scrollTop: function () {
		jQuery('.scroll-up').on('click', function () {
			jQuery('body, html').animate({
				scrollTop: 0
			}, 1000, 'swing');

			return false;
		});
	},

	smoothScrolltoAnchor: function () {
		jQuery('.smooth-link').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = jQuery(this.hash);
				target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					jQuery('html,body').animate({
					scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	},

	stickyHeader: function () {
		jQuery(window).on('scroll', function () {

			if (jQuery(window).scrollTop() > 15) {
				jQuery('header').addClass('sticky');
			} else {
				jQuery('header').removeClass('sticky');
			}

		});
	},

	bxSliderInit: function () {

		/* Home Page 1 Slider */
		jQuery('.main-slider.style-1 .slider-wrapper ul').bxSlider({
			mode: 'vertical',
			pager: false,
			useCSS: false,
			easing: 'easeOutCubic',
			speed: 900,
			touchEnabled: false,
			nextSelector: '.slider-wrapper .slider-controls .next',
			prevSelector: '.slider-wrapper .slider-controls .prev',
			prevText: '<i class="icon-chevron-thin-up"></i>',
  			nextText: '<i class="icon-chevron-thin-down"></i>'
		});

		/* Home Page 2 Slider */
		jQuery('.main-slider.style-2 .slider-wrapper ul').bxSlider({
			mode: 'fade',
			easing: 'swing',
			pager: false,
			touchEnabled: false,
			nextSelector: '.slider-wrapper .slider-controls .next',
			prevSelector: '.slider-wrapper .slider-controls .prev',
			prevText: '<i class="icon-chevron-thin-up"></i>',
  			nextText: '<i class="icon-chevron-thin-down"></i>'
		});

		/* Home Page 3 Slider */
		jQuery('.collection-slider ul').bxSlider({
			mode: 'fade',
			easing: 'swing',
			pager: false,
			touchEnabled: false,
			nextSelector: '.collection-slider .next',
			prevSelector: '.collection-slider .prev',
			prevText: '<i class="fa fa-long-arrow-left"></i>',
  			nextText: '<i class="fa fa-long-arrow-right"></i>'
		});

		/* Blogpost Body Iamge Slider */
		jQuery('.blog-post .post-body ul').bxSlider({
			mode: 'fade',
			easing: 'swing',
			pager: false,
			touchEnabled: false,
			prevText: '<i class="icon-chevron-thin-left"></i>',
  			nextText: '<i class="icon-chevron-thin-right"></i>'
		});

		/* Sidebar - Top Seller Slider */
		jQuery('.widget.top-seller .top-seller-boxes').bxSlider({
			mode: 'horizontal',
			pager: false,
			touchEnabled: false,
			nextSelector: '.top-seller .controls .next',
			prevSelector: '.top-seller .controls .prev',
			prevText: '<i class="fa fa-angle-left"></i>',
  			nextText: '<i class="fa fa-angle-right"></i>'
		});

		/* Sidebar - New Arrivals Slider */
		jQuery('.widget.new-arrival .new-arrival-boxes').bxSlider({
			mode: 'horizontal',
			pager: false,
			touchEnabled: false,
			nextSelector: '.new-arrival .controls .next',
			prevSelector: '.new-arrival .controls .prev',
			prevText: '<i class="fa fa-angle-left"></i>',
  			nextText: '<i class="fa fa-angle-right"></i>'
		});
	},

	owlCarouselInit: function () {
		function customPager() {
		    jQuery.each(this.owl.userItems, function (i) {
		        var titleData = jQuery(this).find('img').attr('title');
		        var paginationLinks = jQuery('.owl-controls .owl-pagination .owl-page span');
		    jQuery(paginationLinks[i]).append(titleData);
		    });
		}

		jQuery('.tabs-slider .tabs-slider-items').owlCarousel({
			singleItem: true,
			afterInit: customPager,
        	afterUpdate: customPager
		});


		jQuery('.main-tabs .tabs-items').owlCarousel({
			items: 3,
			itemsDesktop: [1199, 3],
			itemsTablet: [991, 2],
			itemsMobile: [768, 1],
			pagination: false,
			navigation: true,
			navigationText: [
		    	"<i class='icon icon-arrow-left'></i>",
		    	"<i class='icon icon-arrow-right'></i>"
		    ]
		});

		jQuery('.shop-category .shop-category-slider').owlCarousel({
			items: 3,
			itemsTablet: [991, 2],
			itemsMobile: [768, 1],
			pagination: false,
			navigation: true,
			navigationText: [
		    	"<i class='fa fa-angle-left'></i>",
		    	"<i class='fa fa-angle-right'></i>"
		    ]
		});
	},

	customSelect: function () {
		var customSelect = jQuery('.custom-select');

		customSelect.find('.input').on('click', function (e) {
			e.stopPropagation();
			customSelect.find('.select-options').toggleClass('visible');
			customSelect.find('.input span').toggleClass('open');
		});

		jQuery(document).on('click', function () {
			customSelect.find('.select-options').removeClass('visible');
			customSelect.find('.input span').removeClass('open');
		});

		customSelect.find('.select-options li').on('click', function () {
			customSelect.find('.input span').attr('data-select', jQuery(this).text());
			customSelect.find('.input span').text(jQuery(this).text());
		});
	},

	customCategoriesBox: function () {
		var resizeCategoryBox = function () {
			jQuery('.select-category-box ul').each(function () {
				var categoryBox = jQuery(this);
				categoryBox.children('.caption').css('height', categoryBox.children('.thumb').height());
			});
		};

		jQuery(window).load(function () {
			resizeCategoryBox();
		});

		jQuery(window).on('resize', function () {
			resizeCategoryBox();
		});
	},

	quickView: function () {
		jQuery('.product .quick-view-product a, .quick-view-btn').on('click', function (event) {
			event.preventDefault();
			jQuery('.quick-view').addClass('open');
			jQuery('html').addClass('quick-view-visible');
		});

		jQuery('.quick-view .close-box, .close-mobile-quick-view').on('click', function () {
			jQuery('.quick-view').removeClass('open').addClass('closed');
			jQuery('html').removeClass('quick-view-visible');
		});
	},

	productCoverSlider: function () {
		jQuery(window).load(function() {

			/* Quick View Slider */
			jQuery('.quick-view .photo-preview .controls').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				itemWidth: 100,
				itemMargin: 5,
				prevText: '<i class="icon icon-chevron-thin-left"></i>',
				nextText: '<i class="icon icon-chevron-thin-right"></i>',
				asNavFor: '.quick-view .photo-preview .main-photo-slider'
			});

			jQuery('.quick-view .photo-preview .main-photo-slider').flexslider({
				animation: "slide",
				controlNav: false,
				directionNav: false,
				animationLoop: false,
				slideshow: false,
				sync: '.quick-view .photo-preview .controls'
			});

			/* Single Product Cover */
			jQuery('.single-product .single-product-cover .controls').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				itemWidth: 85,
				itemMargin: 5,
				prevText: '<i class="icon icon-chevron-thin-left"></i>',
				nextText: '<i class="icon icon-chevron-thin-right"></i>',
				asNavFor: '.single-product .single-product-cover .cover-slider'
			});

			jQuery('.single-product .single-product-cover .cover-slider').flexslider({
				animation: "slide",
				controlNav: false,
				directionNav: false,
				animationLoop: false,
				slideshow: false,
				sync: '.single-product .single-product-cover .controls'
			});

		});
	},

	easyParallax: function () {
		jQuery(window).on('scroll', function () {

			var scroll = jQuery(this).scrollTop();

			jQuery('.main-slider.style-2 .product-info').css({
				'transform' : 'translate(0px, '+ scroll /6 +'%)'
			});

			jQuery('.main-slider.style-2 .slider-controls').css({
				'transform' : 'translate(0px, '+ scroll /3 +'%)'
			});

		});
	},

	countDownInit: function () {
		var cd_duedate = jQuery('.count-down').attr('data-duedate');
	    var cd_start = new Date().getTime();
	    var cd_end = new Date(cd_duedate).getTime();

	    jQuery('.count-down').countdown(cd_duedate, function(event) {
	        // Total days
	        var days = Math.round(Math.abs((cd_start - cd_end))/(24*60*60*1000));

	        var divider = {
	            'seconds':60,
	            'minutes':60,
	            'hours':24
	        };

	        var progress = null;

	        switch (event.type) {

	            case "seconds":
	            case "minutes":
	            case "hours":
	            case "days":
	            case "weeks":
	            case "daysLeft":

	                jQuery(this).find('#' + event.type).html(event.value);

	                if(event.type === 'days'){

	                    progress = ((days - event.value) * 100) / (days);

	                } else {                    

	                    progress = (100 / divider[event.type]) * (divider[event.type] - event.value);

	                }

	                break;

	            case "finished":

	                jQuery(this).hide();

	                break;
	        }
	    });
	},

	priceSlider: function () {
		var price_slider = jQuery('.sidebar .filter-price .price-slider'),
			data_step = Number(price_slider.attr('data-step')),
			data_min = Number(price_slider.attr('data-min')),
			data_max = Number(price_slider.attr('data-max')),
			data_start = Number(price_slider.attr('data-start')),
			data_stop = Number(price_slider.attr('data-stop')),
			price_box = jQuery('.sidebar .filter-price .price-box');

		if (price_slider.length) {
			price_slider.noUiSlider({
				start: [data_start, data_stop],
				connect: true,
				step: data_step,	
				range: {
					'min': data_min,
					'max': data_max
				},
				format: wNumb({
					decimals: 0
				})
			});

			/* Set Default Limits */
			price_box.find('.min').text(data_start);
			price_box.find('.max').text(data_stop);

			/* Update Limits */
			price_slider.on('slide', function (event, value) {
				price_box.find('.min').text(value[0]);
				price_box.find('.max').text(value[1]);

			});
		}
	},

	inputHasValue: function() {
		jQuery('.review-box .review-form input, textarea').focusout(function () {
			var text_val = jQuery(this).val();
			if (text_val === "") {
				jQuery(this).removeClass('has-value');
			} else {
				jQuery(this).addClass('has-value');
			}
		});
	},

	tabs: function () {
		if (jQuery('.tabs').length) {
			jQuery('.tabs').tabs({
				show: {
		            opacity:'toggle',
		            duration: 800
		        }
			});
		}
	},

	accordionIconToggle: function () {
		jQuery('.collapse').on('shown.bs.collapse', function () {
			jQuery(this).prev().find('a i').removeClass('icon-plus').addClass('icon-minus open');
		}).on('hidden.bs.collapse', function () {
			jQuery(this).prev().find('a i').removeClass('icon-minus open').addClass('icon-plus');
		});
	},

	shoppingBag: function () {
		jQuery('.bag-container').on('click', function (event) {
			event.stopPropagation();
			jQuery(this).toggleClass('active');
			jQuery('.cart-items-wrapper').toggleClass('visible');
		});

		jQuery('body').on('click', function (e) {
			var target = e.target;
			if (!jQuery(target).is('.cart-items-wrapper *')) {
				jQuery('.cart-items-wrapper').removeClass('visible');
				jQuery('.bag-container').removeClass('active');
			}
		});
	},

	contactMap: function () {
		if (jQuery('#map-wrapper').length) {
			function initialize_contact_map() {
			    var mapOptions = {
			              center: new google.maps.LatLng(42.8396434, -71.3617201),
			              zoom: 15,
			              mapTypeId: google.maps.MapTypeId.ROADMAP
			            };
			    var contact_map = new google.maps.Map(document.getElementById('map-wrapper'),mapOptions);
			    var marker = new google.maps.Marker({
			              map: contact_map,
			              position: new google.maps.LatLng(42.8402816, -71.3489417),
			              icon: 'img/map-pin.png'
			            });
		    }
		    google.maps.event.addDomListener(window, 'load', initialize_contact_map);
		}
	},

	shippingAddres: function () {
		var shippingAddres = jQuery('.shipping-addres'),
			checkbox = jQuery('.shipping-addres .box-heading input');

		function hideShippingBox () {
			if (checkbox.prop('checked')) {
				shippingAddres.find('.box').show();
			} else {
				shippingAddres.find('.box').hide();
			}
		}

		// Action on Input Checked
		checkbox.on('click', function () {
			hideShippingBox();
		});
	},

	paymentType: function () {
		var paymentType = jQuery('.payment-type'),
			paymentInput = jQuery('.payment-type .type-header input');

		paymentInput.each(function (index) {
			var inputIndex = index;

			jQuery(this).on('click', function () {

				paymentType.each(function (index) {
					if (index === inputIndex) {
						jQuery(this).find('.type-body').show();
					} else {
						jQuery(this).find('.type-body').hide();
					}
				});

			});
		});
	},

	mobileNavigation: function () {

		// Close all submenus
		function closeMenus() {
			jQuery('nav li.has-children').each(function () {
				jQuery(this).find('.children').removeClass('visible');
			});
		}

		// Launch
		jQuery('.navigation .icon-menu, .open-mobile-nav').on('click', function () {
			jQuery('.navigation nav').addClass('visible');
			jQuery('html').addClass('mobile-menu-visible');
		});

		// Close
		jQuery('.navigation nav .close-menu').on('click', function () {
			jQuery('.navigation nav').removeClass('visible');
			closeMenus();
			jQuery('html').removeClass('mobile-menu-visible');
		});


		// Nav script
		jQuery('nav li.has-children').on('click', function () {

			var parent = jQuery(this);

			// Tablet
			if (jQuery(window).width() > 767 && jQuery(window).width() < 991) {

				closeMenus();
				
				jQuery(this).find('.children').addClass('visible');
			} else if (jQuery(window).width() < 767) {

				// Mobile
				var ulParent = jQuery(this).parent();

				// Hide all ul children excent children of parent clicked
				jQuery('nav li.has-children').not(parent).each(function () {
					jQuery(this).find('.children').css('visibility', 'hidden');
				});

				jQuery('nav .go-back-icon').show().on('click', function () {
					ulParent.animate ({
						left: '0'
					}, 500);

					// Hide back icon
					jQuery(this).hide();

					// Show all ul children
					setTimeout(function () {
						jQuery('nav li.has-children').each(function () {
							jQuery(this).find('.children').css('visibility', 'visible');
						});
					}, 500);
				});

				ulParent.animate ({
					left: '-100%'
				}, 500);
			}

			// Position Fix
			jQuery(window).on('resize', function () {
				if (jQuery(window).width() > 767 && jQuery(window).width() < 991) {
					jQuery('nav ul').first().css('left', '20%');
				} else if (jQuery(window).width() < 767) {
					jQuery('nav ul').first().css('left', '0');
				}
			});
		});

	},

	masonrySidebar: function () {
		var masonryContainer = jQuery('.sidebar .row').first();

		// Masonry function
		function initMasonry() {
			if(jQuery(window).width() < 991 && jQuery(window).width() > 768) {
				
				masonryContainer.addClass('masonry-initialized');

				masonryContainer.imagesLoaded(function () {
					masonryContainer.masonry({
						itemSelector: '.col-sm-6'
					});
					masonryContainer.masonry('reloadItems');
				});
			} else {
				if(masonryContainer.hasClass('masonry-initialized')) {
					masonryContainer.masonry('destroy');
					masonryContainer.removeClass('masonry-initialized');
				}
			}
		}

		// Call Masonry on Page Load
		initMasonry();

		// Call Masonry on Viewport resize
		jQuery(window).on('resize', function () {
			initMasonry();
		});
	},

	audioPlayer: function () {
		if (jQuery('.tt-audio-player').length) {
			// Player variables 
			var songsList = jQuery('.tt-audio-player ul.songs'),
				play = jQuery('.tt-audio-player .main-controls .play'),
				repeat = jQuery('.tt-audio-player .main-controls .queue-preferences .repeat'),
				random = jQuery('.tt-audio-player .main-controls .queue-preferences .random'),
				songCover = jQuery('.tt-audio-player .player-body .image img'),
				songArtist = jQuery('.tt-audio-player .player-body .artist'),
				songName = jQuery('.tt-audio-player .player-body .song-name'),
				progressBar = jQuery('.tt-audio-player .player-body .progress-bar'),
				progress = jQuery('.tt-audio-player .player-body .actual-progress'),
				currentTime = jQuery('.tt-audio-player .player-body .current-time'),
				playPause = jQuery('.tt-audio-player .player-body .queue-controls .play-pause'),
				prev = jQuery('.tt-audio-player .player-body .queue-controls .prev'),
				next = jQuery('.tt-audio-player .player-body .queue-controls .next'),
				volume = jQuery('.tt-audio-player .player-body .queue-controls .volume .volume-icon'),
				volumeControls = jQuery('.tt-audio-player .player-body .queue-controls .volume .volume-controls'),

				currentSongIndex = 0,
				totalSongs = 0,

				paused = true,
				loop = false,
				muted = false,
				playsRandom = false,
				mouseOnProgressBar = false,

				songsArray = [],

				song = new Audio,
				songSrc = document.createElement('source');
				songSrc.type = "audio/mpeg";
				songSrc.src = "";

			// Player functions
			function countSongs() {
				songsList.find('li').each(function(){
					totalSongs ++;
				});
			}

			function shuffle() {
				song.onended = function () {
					var oldCurrentSongIndex = currentSongIndex;
					do {
						currentSongIndex = Math.floor(Math.random() * totalSongs);
					} while (oldCurrentSongIndex == currentSongIndex);
					
					song.pause();
					song = new Audio;
					startPlayer();
				}
			}

			function formatSecondsAsTime(secs, format) {
				var hr  = Math.floor(secs / 3600);
				var min = Math.floor((secs - (hr * 3600))/60);
				var sec = Math.floor(secs - (hr * 3600) -  (min * 60));

				if (min < 10){ 
				min = "0" + min; 
				}
				if (sec < 10){ 
				sec  = "0" + sec;
				}

				return min + ':' + sec;
			}

			function extractProgress() {
				time = parseInt(song.currentTime, 10);
				currentTime.text(formatSecondsAsTime(time));

				var widthUnit = 100 / song.duration;

				if (!mouseOnProgressBar) {
					progress.css('width', widthUnit * song.currentTime + '%');
				}
			}

			function startPlayer () {
				paused = false;

				songSrc.src = jQuery(songsList.find('li')[currentSongIndex]).attr('data-song-src');
				song.appendChild(songSrc);
				song.play();

				if (playsRandom) {
					shuffle();
				}

				// Replace button icons
				play.find('i').removeClass('fa-play').addClass('fa-stop');
				playPause.find('i').removeClass('fa-play').addClass('fa-pause');

				// Set current Time
				song.addEventListener('timeupdate', function () {
					extractProgress();
				});

				// Set Song Cover
				songCover.attr('src', jQuery(songsList.find('li')[currentSongIndex]).attr('data-song-cover')).css('opacity', '1');
				
				// Set Song Name
				songName.text(jQuery(songsList.find('li')[currentSongIndex]).attr('data-song-name'));

				//Set Song Artist
				songArtist.text(jQuery(songsList.find('li')[currentSongIndex]).attr('data-song-artist'));
			}

			function initPlayer() {
				songSrc.src = jQuery(songsList.find('li')[currentSongIndex]).attr('data-song-src');
				song.appendChild(songSrc);

				progress.css('width', '0');
				extractProgress();

				// Set Song Cover
				songCover.attr('src', jQuery(songsList.find('li')[currentSongIndex]).attr('data-song-cover')).css('opacity', '1');
				
				// Set Song Name
				songName.text(jQuery(songsList.find('li')[currentSongIndex]).attr('data-song-name'));

				//Set Song Artist
				songArtist.text(jQuery(songsList.find('li')[currentSongIndex]).attr('data-song-artist'));
			}

			// Count songs
			countSongs();

			// Init Player
			jQuery(window).load(function () {
				initPlayer();
			});

			// Play/Stop Btn Action
			play.on('click', function () {
				if (paused) {
					startPlayer();
				} else {
					paused = true;
					song.pause();
					song.currentTime = 0;

					// Replace button icons
					play.find('i').removeClass('fa-stop').addClass('fa-play');
					playPause.find('i').removeClass('fa-pause').addClass('fa-play');
				}
			});

			// Play/Pause Btn Action
			playPause.on('click', function () {
				if (paused) {
					startPlayer();
				} else {
					paused = true;
					song.pause();

					// Replace button icons
					play.find('i').removeClass('fa-stop').addClass('fa-play');
					playPause.find('i').removeClass('fa-pause').addClass('fa-play');
				}
			});

			// Next Btn Action
			next.on('click', function () {
				currentSongIndex ++;
				extractProgress();

				if (currentSongIndex < totalSongs) {
					song.pause();
					song = new Audio;
					startPlayer();
				} else {
					currentSongIndex = 0;
					song.pause();
					song = new Audio;
					startPlayer();
				}

				song.onended = function () {
					next.trigger('click');
				}
			});

			// Prev Btn Action
			prev.on('click', function () {
				currentSongIndex --;

				if (currentSongIndex > -1) {
					song.pause();
					song = new Audio;
					startPlayer();
				} else {
					currentSongIndex = totalSongs - 1;
					song.pause();
					song = new Audio;
					startPlayer();
				}
			});

			// Mute Volume
			volume.on('click', function () {
				if (!muted) {
					muted = true;

					song.muted = true;
					volume.addClass('active');

					volumeControls.find('span').each(function () {
						jQuery(this).removeClass('active');
					});
				} else {
					muted = false;

					song.muted = false;
					volume.removeClass('active');

					volumeControls.find('span').each(function () {
						jQuery(this).addClass('active');
					});
				}
			});

			// Loop song
			repeat.on('click', function () {
				if (!loop) {
					loop = true;

					song.loop = true;
					repeat.addClass('active');

					if (playsRandom) {
						playsRandom = false;

						random.removeClass('active');
					}
				} else {
					loop = false;

					song.loop = false;
					repeat.removeClass('active');
				}
			});

			// Random 
			random.on('click', function () {
				if (!playsRandom) {
					playsRandom = true;

					random.addClass('active');
					shuffle();

					if (loop) {
						loop = false;

						repeat.removeClass('active');
					}
				} else {
					playsRandom = false;

					random.removeClass('active');
					song.onended = function () {
						next.trigger('click');
					}
				}
			});

			// Default on song end
			song.onended = function () {
				next.trigger('click');
			}

			// Set current time
			progressBar.mousemove(function(e) {
			    var offset = jQuery(this).offset();

			    mouseOnProgressBar = true;
			    progress.css('width', (e.pageX - offset.left) + 'px');
			});

			progressBar.mouseout(function () {
				mouseOnProgressBar = false;

				extractProgress();
			});

			progressBar.on('click', function (e) {
				var offset = jQuery(this).offset(),
					currentMousePosition = (e.pageX - offset.left),
					currentMousePositionPercentage = (currentMousePosition * 100)/progressBar.width(),
					newCurrentSongTime = (currentMousePositionPercentage * song.duration) / 100;

				song.currentTime = newCurrentSongTime;
				if (paused) {
					play.trigger('click');
				}
			});
		}
	}
};

(function () {
	'use strict';
	jQuery(document).ready(function(){
		teslaThemes.init();

		setTimeout(function(){
			jQuery('body').addClass('domready');
		}, 300);
	});
}());