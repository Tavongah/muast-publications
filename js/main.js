!function(e){"use strict";e(".icon-cart , .search-toggle").on("click",(function(){e(this).parent().find(".shopping-cart-content , .search-content").slideToggle("medium")})),e(".slider-active").owlCarousel({loop:!0,nav:!1,autoplay:!1,autoplayTimeout:5e3,animateOut:"fadeOut",animateIn:"fadeIn",item:1,dots:!1,responsive:{0:{items:1},768:{items:1},1e3:{items:1}}}),e(".slider-active-2").owlCarousel({loop:!0,nav:!0,autoplay:!1,navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],autoplayTimeout:5e3,animateOut:"fadeOut",animateIn:"fadeIn",item:1,dots:!1,responsive:{0:{items:1},768:{items:1},1e3:{items:1}}}),e(".course-slider-active").owlCarousel({loop:!0,navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],nav:!0,autoplay:!1,autoplayTimeout:5e3,animateOut:"fadeOut",animateIn:"fadeIn",item:4,dots:!1,responsive:{0:{items:1},768:{items:2},992:{items:3},1e3:{items:4}}}),e(".event-active").owlCarousel({loop:!0,navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],nav:!0,autoplay:!1,autoplayTimeout:5e3,animateOut:"fadeOut",animateIn:"fadeIn",margin:30,item:3,dots:!1,responsive:{0:{items:1},768:{items:2},992:{items:3},1e3:{items:3}}}),e(".course-slider-active-2").owlCarousel({loop:!0,navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],nav:!0,autoplay:!1,autoplayTimeout:5e3,animateOut:"fadeOut",animateIn:"fadeIn",margin:30,item:4,dots:!1,responsive:{0:{items:1},576:{items:2},768:{items:2},992:{items:3},1e3:{items:4}}}),e(".event-gallery-active").owlCarousel({loop:!0,navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],nav:!0,autoplay:!1,autoplayTimeout:5e3,animateOut:"fadeOut",animateIn:"fadeIn",margin:30,item:1,dots:!1,responsive:{0:{items:1},576:{items:1},768:{items:1},992:{items:1},1e3:{items:1}}}),e(".producta-active").slick({infinite:!0,slidesToShow:4,slidesToScroll:1,prevArrow:'<span class="b-navigation b-navigation-prev "><i class="fa fa-angle-left"></i></span>',nextArrow:'<span class="b-navigation b-navigation-next active"><i class="fa fa-angle-right"></i></span>',responsive:[{breakpoint:992,settings:{slidesToShow:4}},{breakpoint:991,settings:{slidesToShow:3}},{breakpoint:767,settings:{slidesToShow:2}},{breakpoint:420,settings:{slidesToShow:1}}]}),e(".related-slider-active").slick({infinite:!0,slidesToShow:3,slidesToScroll:1,prevArrow:'<span class="b-navigation b-navigation-prev "><i class="fa fa-angle-left"></i></span>',nextArrow:'<span class="b-navigation b-navigation-next active"><i class="fa fa-angle-right"></i></span>',responsive:[{breakpoint:1199,settings:{slidesToShow:2}},{breakpoint:991,settings:{slidesToShow:2}},{breakpoint:767,settings:{slidesToShow:2}},{breakpoint:420,settings:{slidesToShow:1}}]}),e(".course-slider-active-3").slick({infinite:!0,slidesToShow:4,slidesToScroll:1,prevArrow:'<span class="b-navigation b-navigation-prev "><i class="fa fa-angle-left"></i></span>',nextArrow:'<span class="b-navigation b-navigation-next active"><i class="fa fa-angle-right"></i></span>',responsive:[{breakpoint:1200,settings:{slidesToShow:4}},{breakpoint:1199,settings:{slidesToShow:3}},{breakpoint:991,settings:{slidesToShow:2}},{breakpoint:767,settings:{slidesToShow:2}},{breakpoint:420,settings:{slidesToShow:1}}]}),e(".course-slider-active-4").slick({infinite:!0,slidesToShow:4,slidesToScroll:1,prevArrow:'<span class="b-navigation2 b-navigation-prev2 "><i class="fa fa-angle-left"></i></span>',nextArrow:'<span class="b-navigation2 b-navigation-next2 active2"><i class="fa fa-angle-right"></i></span>',responsive:[{breakpoint:1200,settings:{slidesToShow:4}},{breakpoint:1199,settings:{slidesToShow:3}},{breakpoint:991,settings:{slidesToShow:2}},{breakpoint:767,settings:{slidesToShow:2}},{breakpoint:420,settings:{slidesToShow:1}}]}),e(".course-slider-active-5").slick({infinite:!0,slidesToShow:4,slidesToScroll:1,prevArrow:'<span class="b-navigation3 b-navigation-prev3 "><i class="fa fa-angle-left"></i></span>',nextArrow:'<span class="b-navigation3 b-navigation-next3 active3"><i class="fa fa-angle-right"></i></span>',responsive:[{breakpoint:1200,settings:{slidesToShow:4}},{breakpoint:1199,settings:{slidesToShow:3}},{breakpoint:991,settings:{slidesToShow:2}},{breakpoint:767,settings:{slidesToShow:2}},{breakpoint:420,settings:{slidesToShow:1}}]}),e(".brand-logo-active").owlCarousel({loop:!0,nav:!1,autoplay:!1,autoplayTimeout:5e3,animateOut:"fadeOut",animateIn:"fadeIn",margin:30,item:6,dots:!1,responsive:{0:{items:2},576:{items:3},768:{items:4},992:{items:4},1e3:{items:6}}}),e(".blog-active").slick({infinite:!0,slidesToShow:2,slidesToScroll:1,prevArrow:'<span class="b-navigation b-navigation-prev "><i class="fa fa-angle-left"></i></span>',nextArrow:'<span class="b-navigation b-navigation-next active"><i class="fa fa-angle-right"></i></span>',responsive:[{breakpoint:420,settings:{slidesToShow:1}}]}),e(".event-active-2").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,prevArrow:'<span class="e-navigation e-navigation-prev "><i class="fa fa-angle-left"></i></span>',nextArrow:'<span class="e-navigation e-navigation-next active"><i class="fa fa-angle-right"></i></span>',responsive:[{breakpoint:992,settings:{}},{breakpoint:768,settings:{}},{breakpoint:767,settings:{}},{breakpoint:420,settings:{}}]}),e(".b-navigation ").click((function(){e(".b-navigation").removeClass("active"),e(this).addClass("active")})),e(".b-navigation3 ").click((function(){e(".b-navigation3").removeClass("active3"),e(this).addClass("active3")})),e(".b-navigation2 ").click((function(){e(".b-navigation2").removeClass("active2"),e(this).addClass("active2")})),e(".producta-active .owl-nav div").click((function(){e(".producta-active .owl-nav div").removeClass("active"),e(this).addClass("active")})),e(".video-popup").magnificPopup({type:"iframe"}),e(".count").counterUp({delay:10,time:1e3}),e("#register-1").mouseParallax({moveFactor:2}),e("#register-2").mouseParallax({moveFactor:2}),e("#register-3").mouseParallax({moveFactor:1}),e(".testimonial-text-slider").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,draggable:!1,fade:!0,asNavFor:".testimonial-image-slider"}),e(".testimonial-image-slider").slick({slidesToShow:3,slidesToScroll:1,asNavFor:".testimonial-text-slider",dots:!1,arrows:!1,centerMode:!0,focusOnSelect:!0,centerPadding:"0px",responsive:[{breakpoint:992,settings:{dots:!1,centerPadding:"0px"}},{breakpoint:768,settings:{autoplay:!0,dots:!1,slidesToShow:1,centerMode:!1}},{breakpoint:767,settings:{autoplay:!0,dots:!1,slidesToShow:3,centerMode:!1}},{breakpoint:420,settings:{autoplay:!0,dots:!1,slidesToShow:2,centerMode:!1}}]});var i=e(".sticky-bar"),a=e(window);a.on("scroll",(function(){a.scrollTop()<200?i.removeClass("stick"):i.addClass("stick")})),e("#mobile-menu-active").meanmenu({meanScreenWidth:"991",meanMenuContainer:".mobile-menu-area .mobile-menu"}),e(".commrnt-toggle a").on("click",(function(i){i.preventDefault(),e(".blog-comment-content-wrap").slideToggle(1e3)})),e(".zoompro").elevateZoom({gallery:"gallery",galleryActiveClass:"active",zoomWindowWidth:300,zoomWindowHeight:100,scrollZoom:!1,zoomType:"inner",cursor:"crosshair"}),e(".product-dec-slider").slick({infinite:!0,slidesToShow:3,slidesToScroll:1,prevArrow:'<span class="product-dec-icon product-dec-prev"><i class="fa fa-angle-left"></i></span>',nextArrow:'<span class="product-dec-icon product-dec-next"><i class="fa fa-angle-right"></i></span>',responsive:[{breakpoint:768,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:479,settings:{slidesToShow:2,slidesToScroll:1}}]}),e(".pro-details-color2-content ul li").on("click",(function(){e(".pro-details-color2-content ul li").removeClass("active"),e(this).addClass("active")}));var s=e(".cart-plus-minus");s.prepend('<div class="dec qtybutton">-</div>'),s.append('<div class="inc qtybutton">+</div>'),e(".qtybutton").on("click",(function(){var i=e(this),a=i.parent().find("input").val();if("+"===i.text())var s=parseFloat(a)+1;else if(a>0)s=parseFloat(a)-1;else s=1;i.parent().find("input").val(s)})),e(".checkout-toggle2").on("click",(function(){e(".open-toggle2").slideToggle(1e3)})),e(".checkout-toggle").on("click",(function(){e(".open-toggle").slideToggle(1e3)})),e(".thumb-menu").owlCarousel({loop:!0,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],margin:15,smartSpeed:1e3,nav:!0,dots:!1,responsive:{0:{items:3,autoplay:!0,smartSpeed:300},576:{items:3},768:{items:3},1e3:{items:3}}}),e(".thumb-menu a").on("click",(function(){e(".thumb-menu a").removeClass("active")})),e.scrollUp({scrollText:'<i class="fa fa-angle-double-up"></i>',easingType:"linear",scrollSpeed:900,animation:"fade"})}(jQuery);