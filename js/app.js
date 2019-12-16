$(function () {
    // bgSwitcher
    function bgS(sliderId, sliderImg) {
        $(sliderId).bgSwitcher({
            images: sliderImg, // 切替背景画像を指定
            interval: 5000, // 背景画像を切り替える間隔を指定 3000=3秒
            loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
            shuffle: false, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
            effect: "fade", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
            duration: 1000, // エフェクトの時間を指定します。
            easing: "swing" // エフェクトのイージングをlinear,swingから指定
        });
    }

    bgS('#index_top_img',
        ['https://test.sntsz20.com/wp-content/themes/Izakaya-theme/img/pub_counter.jpg',
            'https://test.sntsz20.com/wp-content/themes/Izakaya-theme/img/izakaya_gaikan.jpg',
            'https://test.sntsz20.com/wp-content/themes/Izakaya-theme/img/sushi.jpg']
    );
    bgS('#about_top_img',
        ['https://test.sntsz20.com/wp-content/themes/Izakaya-theme/img/beer.jpg',
            'https://test.sntsz20.com/wp-content/themes/Izakaya-theme/img/room.jpg',
            'https://test.sntsz20.com/wp-content/themes/Izakaya-theme/img/bottle.jpg']
    );
    bgS('#appetizer_menuslider',
        ['https://test.sntsz20.com/wp-content/themes/Izakaya-theme/img/chips.jpg',
            'https://test.sntsz20.com/wp-content/themes/Izakaya-theme/img/meat.jpg']
    );

    // メニューボタン
    $('.menu_panel').click(function () {
        if ($('.menu_window_inner').css('top') == '-200px') {
            $('.menu_window_inner').css('top', '60px');
            $('.menu_panel_icon').css('transform', 'rotateZ(180deg)');
        } else {
            $('.menu_window_inner').css('top', '-200px');
            $('.menu_panel_icon').css('transform', 'rotateZ(360deg)');
        }
    });

    // スクロールボタン
    var scrollBtn = $('#scroll_dir');
    if ($(this).scrollTop() > 0) {
        scrollBtn.hide();
    }
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            scrollBtn.fadeOut();
        } else {
            scrollBtn.fadeIn();
        }
    });
    scrollBtn.click(function (event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: $('.scroll_to').offset().top
        }, 500);
    });

    // トップに戻るボタン
    var topBtn = $('#scroll_top');
    topBtn.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    topBtn.click(function (event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });

    // post_imgの幅、高さ調整
    function post_img_resize() {
        var frame_width = $('.post_info').width();
        $('.post_img').width(frame_width);
        $('.post_img').height(frame_width);
        $('.post_img img').width(frame_width);
        $('.post_img img').height(frame_width);
    }
    post_img_resize();
    $(window).resize(function () {
        post_img_resize();
    });

    // 高さ調整
    function height_adjuctment(outer, inner, mgn) {
        var inH = $(inner).height();
        inH += mgn;
        if (window.innerHeight <= inH) {
            $(outer).height(inH);
        } else {
            $(outer).css('height', '100vh');
        }
    }
    var target_adjuctment = [
        ['#about', '#about_lead_area', 80],
        ['#food_menu', '#food_menu_lead_area', 80],
        ['#news', '#news_inner', 120],
        ['#concept', '#concept_lead_area', 80],
        ['#message', '#message_lead_area', 80],
        ['#vision', '#vision_lead_area', 80],
        ['#company', '#company_lead_area', 80]
    ];
    for (var i = 0; i < target_adjuctment.length; i++) {
        height_adjuctment(target_adjuctment[i][0], target_adjuctment[i][1], target_adjuctment[i][2]);
    }
    $(window).resize(function () {
        for (var i = 0; i < target_adjuctment.length; i++) {
            height_adjuctment(target_adjuctment[i][0], target_adjuctment[i][1], target_adjuctment[i][2]);
        }
    });

    // .bg_menuの高さ調整
    function bg_menuH_adjuctment() {
        if ($(window).width() < 751) {
            $('.bg_menu').height($('#menubook').height());
        } else {
            $('.bg_menu').height($('#menubook').height() + 120);
        }
    }
    bg_menuH_adjuctment();
    $(window).resize(function () {
        bg_menuH_adjuctment();
    });

    // menu navの操作
    var menu_nav = ['appetizer', 'lunch', 'dinner', 'drink', 'dessert'];
    var nav_id;
    var content_id;
    for (var i = 0; i < menu_nav.length; i++) {
        nav_id = '#' + menu_nav[i] + '_nav';
        (function (nav_id) {
            $(nav_id).click(function (event) {
                for (var i = 0; i < menu_nav.length; i++) {
                    var old_nav_id = '#' + menu_nav[i] + '_nav';
                    if (old_nav_id != nav_id && $(old_nav_id).hasClass('active_nav')) {
                        $(old_nav_id).removeClass('active_nav');
                        var old_content_id = '#' + menu_nav[i] + '_content';
                        $(old_content_id).removeClass('active_content');
                    }
                }
                $(nav_id).addClass('active_nav');
                var content_id = nav_id.replace('nav', 'content');
                $(content_id).addClass('active_content');
                bg_menuH_adjuctment();
            });
        }(nav_id));
        // content_idの高さを図るために一度全部disply: block;とする
        content_id = nav_id.replace('nav', 'content');
        $(content_id).addClass('start_content');
    }

    // menu barの操作
    var menu_bar = ['appetizer', 'salad', 'side_menu', 'dinner', 'drink', 'dessert'];
    var bar;
    for (var i = 0; i < menu_bar.length; i++) {
        bar = menu_bar[i];
        var boxH = $('#' + bar + '_box').height();
        (function (bar, boxH) {
            var bar_and_box_id = '#' + bar + '_bar_and_box';
            var bar_id = '#' + bar + '_bar';
            var box_id = '#' + bar + '_box';
            $(bar_id).click(function (event) {
                var bg_menuH = $('#menubook').height();
                if ($(window).width() < 751) {
                    var addH = 0;
                } else {
                    var addH = 120;
                }
                if ($(bar_and_box_id).hasClass('cls') == false) {
                    $(box_id).animate({
                        height: 0
                    }, 200);
                    $(box_id + ' div').animate({
                        height: 0
                    }, 500);
                    $('.bg_menu').animate({
                        height: bg_menuH - boxH + addH
                    }, 700);
                    $(bar_and_box_id).addClass('cls');
                } else {
                    $(box_id).animate({
                        height: boxH
                    }, 200);
                    $(box_id + ' div').animate({
                        height: 300
                    }, 500);
                    $('.bg_menu').animate({
                        height: bg_menuH + boxH + addH
                    }, 700);
                    $(bar_and_box_id).removeClass('cls');
                }
            });
        }(bar, boxH));
    }

    // content_idをdisply: none;の戻す
    for (var i = 0; i < menu_nav.length; i++) {
        nav_id = '#' + menu_nav[i] + '_nav';
        content_id = nav_id.replace('nav', 'content');
        $(content_id).removeClass('start_content');
    }

    // news_imgの幅、高さ調整
    function news_img_resize() {
        var frame_width = $('.news_img_link').width();
        $('.news_img').width(frame_width);
        $('.news_img').height(frame_width);
        $('.news_img img').width(frame_width);
        $('.news_img img').height(frame_width);
    }
    news_img_resize();
    $(window).resize(function () {
        news_img_resize();
    });

    // #google_mapsの幅、高さ調整
    function google_maps_adjuctment() {
        if ($('.access_left_area').width() > 500 && $(window).width() < 975) {
            $('#google_maps').css('width', '500px');
        } else {
            $('#google_maps').css('width', '100%');
        }
        $('#google_maps').height($('#google_maps').width());
    }
    google_maps_adjuctment();
    $(window).resize(function () {
        google_maps_adjuctment();
    });

    // wp-pagenavi
    if ($('#php_page_navi a:first').hasClass('prev')) {
        $('.wp-pagenavi_link_prev').attr('href', $('#php_page_navi a:first').attr('href'));
    } else {
        $('.nav-previous').css('display', 'none');
        $('.nav-next a').css('border-left', '2px #000000 solid');
    }
    if ($('#php_page_navi a:last').hasClass('next')) {
        $('.wp-pagenavi_link_next').attr('href', $('#php_page_navi a:last').attr('href'));
    } else {
        $('.nav-next').css('display', 'none');
        $('.nav-previous a').css('border-right', '2px #000000 solid');
    }

    // single-navi
    if ($('#prev_single_navigation a').length == 1) {
        $('.single-nav-next a').attr('href', $('#prev_single_navigation a').attr('href'));
    } else {
        $('.single-nav-next').css('visibility', 'hidden');
    }
    if ($('#next_single_navigation a').length == 1) {
        $('.single-nav-previous a').attr('href', $('#next_single_navigation a').attr('href'));
    } else {
        $('.single-nav-previous').css('visibility', 'hidden');
    }
});