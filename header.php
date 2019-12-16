<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- font famiry -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
    <!-- animate -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <!-- style.css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- jquery -->
    <?php wp_enqueue_script('jquery'); ?>
</head>

<body>
    <div id="wrapper">
        <header class="sticky-top">
            <div class="header_top text-center">
                <div id="logo">
                    <a href="<?php echo home_url(); ?>" class="text-white"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"></a> </div>
                <div class="menu_panel y-center px-4">
                    <div>
                        <p class="menu_name cursive mb-0"><span class="d-none d-md-inline">SITE </span>MENU</p>
                        <i class="fas fa-chevron-down menu_panel_icon"></i>
                    </div>
                </div>
            </div>
            <div class="menu_window">
                <div class="menu_window_inner">
                    <nav>
                        <ul class="menu_list list-unstyled row text-center m-0">
                            <li class="menu_button col-1-2 col-sm-1-5">
                                <div class="eff"></div>
                                <a href="<?php echo home_url(); ?>" class="py-4">
                                    <span class="quicksand">HOME</span>
                                </a>
                            </li>
                            <li class="menu_button col-1-2 col-sm-1-5">
                                <div class="eff"></div>
                                <a href="<?php echo home_url(); ?>/about" class="py-4">
                                    <span class="quicksand">ABOUT</span>
                                </a>
                            </li>
                            <li class="menu_button col-1-2 col-sm-1-5">
                                <div class="eff"></div>
                                <a href="<?php echo home_url(); ?>/menu" class="py-4">
                                    <span class="quicksand">MENU</span>
                                </a>
                            </li>
                            <li class="menu_button col-1-2 col-sm-1-5">
                                <div class="eff"></div>
                                <a href="<?php echo home_url(); ?>/news" class="py-4">
                                    <span class="quicksand">NEWS</span>
                                </a>
                            </li>
                            <li class="menu_button col-1-1 col-sm-1-5">
                                <div class="eff"></div>
                                <a href="<?php echo home_url(); ?>/access" class="py-4">
                                    <span class="quicksand">ACCESS</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>