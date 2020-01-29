//отступ на высоту шапки
$(document).ready(function () {
    //анимация меню каталога товаров
    if ($(window).width() < 992) {

        //высота шапки,моб.
        let headerHeightMobile = $(".login-top-bar-wrap").height();
        $(".mobile-menu").css("top", headerHeightMobile);
        $('#nav-icon1').click(function(){
            $(this).toggleClass('open');
            $('.mobile-menu').toggleClass('open-menu');
            $('body').toggleClass('scroll-disable');
            $(".search-mobile").slideUp (300);
        });

        $(".catalog-button-mobile-wrap").click(function () {
            $('.catalog-button').toggleClass('catalog-button-wrap-open');     //анимация кнопки каталога,моб.
            $('.catalog-button-mobile-wrap').toggleClass('catalog-mobile-menu-open');     //анимация кнопки каталога,моб.
        });
        $(".icon-search").click(function () {
            $(".search-mobile").slideToggle (300);
        });

        //ios menu scroll
        var FenixUI = {
            overlayModalIos : function($block) {
                var _overlay = document.getElementById($block);
                var _clientY = null; // remember Y position on touch start

                if(!_overlay) {
                    return '';
                }

                _overlay.addEventListener('touchstart', function(event) {
                    if(event.targetTouches.length === 1) {
                        // detect single touch
                        _clientY = event.targetTouches[0].clientY;
                    }
                }, false);

                _overlay.addEventListener('touchmove', function(event) {
                    if(event.targetTouches.length === 1) {
                        // detect single touch
                        disableRubberBand(event);
                    }
                }, false);

                function disableRubberBand(event) {
                    var clientY = event.targetTouches[0].clientY - _clientY;

                    if(_overlay.scrollTop === 0 && clientY > 0) {
                        // element is at the top of its scroll
                        event.preventDefault();
                    }

                    if(isOverlayTotallyScrolled() && clientY < 0) {
                        //element is at the top of its scroll
                        event.preventDefault();
                    }
                }

                function isOverlayTotallyScrolled() {
                    // https://developer.mozilla.org/en-US/docs/Web/API/Element/scrollHeight#Problems_and_solutions
                    return _overlay.scrollHeight - _overlay.scrollTop <= _overlay.clientHeight;
                }
            }
        };

        FenixUI.overlayModalIos('mobile-menu-overlay');
    }
});


//скрытие шапки при скролле
$(document).ready(function($) {
    let g_top = 0;
    $(window).scroll(function() {
        //высота шапки
        let headerHeight = $(".header-wrap").height(),
            top = $(this).scrollTop(),
            scrolled = $(window).scrollTop();

        if ( top > g_top && scrolled > headerHeight && scroll) {
            $(".header-wrap").not(":animated").slideUp(300);
        } else {
            $(".header-wrap").slideDown(300);
        }
        g_top = top;

        if (scrolled) {
            $(".search-mobile").slideUp (300);
        }
    });
});

$(document).ready(function(){
    $(".first-slider").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        nav: true,
        navText : ["",""],
        autoplay: true,
        autoplaySpeed: 3500
    });

    $(".second-slider").owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        dots: false,
        navText : ["",""],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            992:{
                items:4
            }
        }
    });

    $(".third-slider").owlCarousel({
        merge: true,
        video: true,
        items: 4,
        margin: 30,
        nav:true,
        dots: false,
        loop: true,
        navText : ["",""],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            992:{
                items:4
            }
        }
    });

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    });

    //валидация форм
    let pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i,
        mailForSubscribe = $('#exampleInputEmail1'),
        mailForLogin = $('#login-input');

    $('#submit-btn').on('click', function(event){
        if(mailForSubscribe.val() != ''){
            if(mailForSubscribe.val().search(pattern) == 0){
                //alert("алё");

            }else{
                //alert("не алё");
                $('#subscribe-form').addClass('invalid-mail');
                setTimeout(function () {
                    $('#subscribe-form').removeClass('invalid-mail');
                },2000);
            }
        }else{
            //alert("пусто");
            $('#subscribe-form').addClass('empty-mail');
            setTimeout(function () {
                $('#subscribe-form').removeClass('empty-mail');
            },2000);
        }
        event.preventDefault();
    });
    $('#login-btn').on('click', function(event){
        if(mailForLogin.val() != ''){
            if(mailForLogin.val().search(pattern) == 0){
                //alert("алё");

            }else{
                //alert("не алё");
                $('#login-form').addClass('invalid-mail');
                setTimeout(function () {
                    $('#login-form').removeClass('invalid-mail');
                },2000);
            }
        }else{
            //alert("пусто");
            $('#login-form').addClass('empty-mail');
            setTimeout(function () {
                $('#login-form').removeClass('empty-mail');
            },2000);
        }
        event.preventDefault();
    });
});



$('[data-fancybox="video"]').fancybox({
    // Options will go here
});

//одинаковая высота блоков описания товара в карусели
$(window).on("load", function(){
    let elementHeights = $('.product-item-title').map(function() {
        return $(this).height();
    }).get(),
        maxHeight = Math.max.apply(null, elementHeights);
    $('.product-item-title').height(maxHeight);
});
