(function ($) {
    "use strict";
    
    // This is for the main slider
    jQuery("#layerslider_1").layerSlider({
        responsiveUnder: 1920,
        pauseOnHover: false,
        skin: 'amber',
        hoverPrevNext: false,
        navStartStop: false,
        navButtons: false,
        showCircleTimer: false,
        slideDelay              : 100,
        durationIn              : 100,
        durationOut             : 100,
        skinsPath: 'http://cdn.amber.stylemixthemes.com/wp-content/themes/amber/inc/ls-skins/'
    });

    
    'use strict';
    var map_map_563bc65e35a5c = null;
    var coordinate_map_563bc65e35a5c;
    var isDraggable = jQuery(document).width() > 641 ? true : true;
    try {
        var map_map_563bc65e35a5c = null;
        var coordinate_map_563bc65e35a5c;
        coordinate_map_563bc65e35a5c = new google.maps.LatLng(20.618230, -87.083811);
        var mapOptions = {
            zoom: 16,
            center: coordinate_map_563bc65e35a5c,
            scaleControl: true,
            streetViewControl: false,
            mapTypeControl: false,
            panControl: false,
            zoomControl: false,
            scrollwheel: false,
            draggable: isDraggable,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        };
        var map_map_563bc65e35a5c = new google.maps.Map(document.getElementById('map_563bc65e35a5c'), mapOptions);
        var marker_map_563bc65e35a5c = new google.maps.Marker({
            position: new google.maps.LatLng(20.618230, -87.083811),
            animation: google.maps.Animation.DROP,
            map: map_map_563bc65e35a5c,
            icon: ''
        });
        google.maps.event.addListener(marker_map_563bc65e35a5c, 'click', toggleBounce);
    } catch (e) {};

    function toggleBounce() {
        if (marker_map_563bc65e35a5c.getAnimation() != null) {
            marker_map_563bc65e35a5c.setAnimation(null);
        } else {
            marker_map_563bc65e35a5c.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
    
    
 // Like testimonials
    jQuery('.ult-carousel-slide').slick({
        dots: true,
        autoplaySpeed: 5000,
        autoplay: true,
        speed: 900,
        infinite: false,
        arrows: false,
        slidesToScroll: 1,
        slidesToShow: 1,
        swipe: true,
        draggable: true,
        touchMove: true,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        pauseOnHover: true,
        pauseOnDotsHover: true,
        customPaging: function (slider, i) {
            return '<i type="button " style="color:#22BCB8; " class="ultsl-record " data-role="none "></i>';
        },
    });
    
    // Like testimonials
    jQuery('.ult-carousel').slick({
        dots: true,
        autoplaySpeed: 5000,
        autoplay: true,
        speed: 900,
        infinite: false,
        arrows: false,
        slidesToScroll: 1,
        slidesToShow: 1,
        swipe: true,
        draggable: true,
        touchMove: true,
        fade: true,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        pauseOnHover: true,
        pauseOnDotsHover: true,
        customPaging: function (slider, i) {
            return '<i type="button " style="color:#22BCB8; " class="ultsl-record " data-role="none "></i>';
        },
    });

    if (top.location != location) {
       top.location.href = document.location.href;
    }
    
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('body').addClass('touch-device');

        $('.rental-service_item').on('click', function() {
           $('.rental-service_item').removeClass("active");
           $(this).addClass("active");
        });

        $(document).click(function(event) {
            if($(event.target).closest(".rental-service_item").length) return;
            $('.rental-service_item').removeClass("active");
            event.stopPropagation();
        });

    } else {
        $('body').addClass('no-touch-device');
    }

    $(".main-navbar .navbar-nav > li.menu-item-language").on('click', function() {
       $(this).toggleClass('show-dropdown');
    });

    // Staff members
    if ($('.stm_details_more').length) {
        $('.stm_details_more').hover(function () {
            $(this).closest('.stm_member-data').addClass('state-hover');
        }, function () {
            $(this).closest('.stm_member-data').removeClass('state-hover');
        });
    }

    // Scroll Top
    function scrollingTop(elem, height) {
        var offset = elem.offset();
        var offsetTop = offset.top;
        var totalScroll = offsetTop - height;

        $('body,html').animate({
            scrollTop: totalScroll
        }, 1500);
    }

    $('.move-top, .post-start, .to-section').click(function () {
        var el = $(this).attr('href');
        var elWrapper = $(el);
        var offsetTop = 90;
        scrollingTop(elWrapper, offsetTop);

        return false;
    });

    // on the index - included -  not included - events
    // Project carousel
    if ($(".js-carousel").length) {
        $(".js-carousel").owlCarousel({
            margin: 30,
            pagination: false,
            //nav: true,
            //navText: ['<i class="icon icomoon-arrowleft"></i>', '<i class="icon icomoon-arrowright"></i>'],
            nav: false,
            smartSpeed: 750,
            responsive: {
                1024: {
                    items: 3
                },
                768: {
                    items: 3
                },
                667: {
                    items: 1
                },
                640: {
                    items: 1
                },
                480: {
                    items: 1
                },
                375: {
                    items: 1
                },
                320: {
                    items: 1
                }
            }
        });
    }

    if ($(".js-carousel-single").length) {
        $(".js-carousel-single").owlCarousel({
            pagination: false,
            nav: true,
            navText: ['<i class="icon icomoon-arrowleft"></i>', '<i class="icon icomoon-arrowright"></i>'],
            smartSpeed: 750,
            items: 1,
            autoHeight: true,
            singleItem : true
        });
    }

    // Fancy Box
    if ($(".js-fancybox").length) {
        $(".js-fancybox").fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic'
        });
    }

    if ($(".js-fancybox_form").length) {
        $(".js-fancybox_form").fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            maxWidth: 590,
            maxHeight: 593,
            wrapCSS: "stm-contact-form_fancybox",
            padding: [43, 15, 60, 15],
            afterShow: function () {
                $("#rental-service-subject").attr("value", postTitle);
            }
        });
    }

    // Projects filter
    if ($('.rental-services_filter').length) {
        var projectsList = $('.rental-services-grid'),
            projectsListItem = projectsList.find('.rental-service_item'),
            projectsFilter = $('.rental-services_filter'),
            projectsFilterItem = projectsFilter.find('a');

        projectsFilterItem.live('click', function () {
            $(this).addClass('active').siblings().removeClass('active');
            var projectActiveFilterAttr = $(this).attr('data-filter');

            if (projectActiveFilterAttr != 'all') {
                projectsListItem.each(function () {
                    if (!$(this).parent().hasClass(projectActiveFilterAttr)) {
                        $(this).parent().addClass('hide');
                    } else {
                        $(this).parent().removeClass('hide');
                    }
                });
            } else {
                projectsListItem.parent().removeClass('hide');
            }

            return false;
        });
    }



    $(".main-navbar .navbar-nav > li .caret").on('click', function() {
        $(this).parent('.dropdown').toggleClass('open').siblings('.dropdown').removeClass('open');
    })

})(jQuery);

