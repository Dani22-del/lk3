(function () {
    "use strict";
    $(document).ready(function () {

        // Thumbnail slider
        var galleryTop = new Swiper('.cs-gallery-top', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 15
        });
        var galleryThumbs = new Swiper('.cs-gallery-thumbs', {
            spaceBetween: 10,
            centeredSlides: true,
            slidesPerView: 'auto',
            slideToClickedSlide: true
        });
        galleryTop.params.control = galleryThumbs;
        galleryThumbs.params.control = galleryTop;

        // Breaking news slider
        var mySwiper = new Swiper ("#cs-breaking-news .swiper-container", {
            autoplayDisableOnInteraction: false,
            grabCursor: true,
            autoplay: 3000,
            loop: true
        });

        // Post overlay slider
        var mySwiper = new Swiper (".cs-post-block-overlay.swiper-container", {
            slidesPerView: 3,
            setWrapperSize: true,
            nextButton: '.cpbo-swiper-button-next',
            prevButton: '.cpbo-swiper-button-prev',
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            }
        });

        // Post carousel slider
        var mySwiper = new Swiper (".cs-post-carousel-layout .swiper-container", {
            slidesPerView: 3,
            setWrapperSize: true,
            nextButton: '.cpcl-swiper-button-next',
            prevButton: '.cpcl-swiper-button-prev',
            spaceBetween: 2,
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 15
                }
            }
        });

        // Post slider
        var mySwiper = new Swiper (".cs-post-slider-layout.swiper-container", {
            autoplayDisableOnInteraction: false,
            grabCursor: true,
            loop: true,
            nextButton: '.cpsl-swiper-button-prev',
            prevButton: '.cpsl-swiper-button-next'
        });

        // Widget gallery slider
        var mySwiper = new Swiper (".cs-widget_gallery_post .swiper-container", {
            autoplayDisableOnInteraction: false,
            grabCursor: true,
            nextButton: '.wgp-swiper-button-prev',
            prevButton: '.wgp-swiper-button-next'
        });

    	// Top mobile navigation
        jQuery(".cs-toggle-top-navigation").on("click", function () {
        	jQuery("#cs-top-navigation").toggle();
        });

        // Main mobile navigation
        jQuery(".cs-toggle-main-navigation").on("click", function () {
            jQuery("#cs-main-navigation").toggle();
        });

        // Footer mobile navigation
        jQuery(".cs-toggle-footer-navigation").on("click", function () {
            jQuery("#cs-footer-navigation").toggle();
        });

    	// Sticky sidebar
	    jQuery(".cs-sticky-sidebar").theiaStickySidebar({
            additionalMarginTop: 25
        });

        // Sticky social
        jQuery(".cs-single-post-share").theiaStickySidebar({
            additionalMarginTop: 25
        });

        // Header menu search form

        jQuery("#cs-header-menu-search-button-show").on("click", function () {
            jQuery("#cs-header-menu-search-form").show();
        });
        jQuery("#cs-header-menu-search-button-hide").on("click", function () {
            jQuery("#cs-header-menu-search-form").hide();
        });

        // Viewportchecker
        jQuery(".cs-post-item, .cs-single-post-media").addClass("hidden").viewportChecker({
            classToAdd: "visible cs-animate-element",
            offset: 100
        });

	    // Fitvids
	    jQuery("body").fitVids();

        // Tabs
        jQuery(".cs-tab-group").tabs();

        // Accordions
        jQuery(".cs-accordion-group").accordion({
            heightStyle: "content",
            collapsible: true,
            icons: false
        });

        // Lightbox - image
        jQuery(".cs-lightbox-image").magnificPopup({
            type: "image",
            mainClass: "mfp-with-zoom",
            zoom: {
                enabled: true,
                duration: 300,
                easing: "ease-in-out",
            }
        });

        // Lightbox - gallery
        jQuery(".cs-lightbox-gallery").each(function () {
            jQuery(this).magnificPopup({
                delegate: "a",
                type: "image",
                gallery: {
                    enabled: true
                },
                mainClass: "mfp-with-zoom",
                zoom: {
                    enabled: true,
                    duration: 300,
                    easing: "ease-in-out",
                }
            });
        });

        // Lightbox - iframe
        jQuery(".cs-lightbox-iframe").magnificPopup({
            type: "iframe",
            mainClass: "mfp-with-zoom",
            zoom: {
                enabled: true,
                duration: 300,
                easing: "ease-in-out",
            }
        });

        // Countdown
        jQuery(".cs-countdown").countdown("2016/12/31", function(event) {
            jQuery(this).html(event.strftime(''
                + '<div class="cs-countdown-block">'
                    + '<div class="cs-countdown-number">%-m</div>'
                    + '<div class="cs-countdown-label">month%!m</div>'
                + '</div>'
                + '<div class="cs-countdown-block">'
                    + '<div class="cs-countdown-number">%-w</div>'
                    + '<div class="cs-countdown-label">week%!w</div>'
                + '</div>'
                + '<div class="cs-countdown-block">'
                    + '<div class="cs-countdown-number">%-d</div>'
                    + '<div class="cs-countdown-label">day%!d</div>'
                + '</div>'
                + '<div class="cs-countdown-block">'
                    + '<div class="cs-countdown-number">%H</div>'
                    + '<div class="cs-countdown-label">hour%!H</div>'
                + '</div>'
                + '<div class="cs-countdown-block">'
                    + '<div class="cs-countdown-number">%M</div>'
                    + '<div class="cs-countdown-label">minute%!M</div>'
                + '</div>'
                + '<div class="cs-countdown-block">'
                    + '<div class="cs-countdown-number">%S</div>'
                    + '<div class="cs-countdown-label">seconds</div>'
                + '</div>'));
        });

    });
})(jQuery);
