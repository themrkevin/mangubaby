<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 10]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?><?php wp_title( '| ', true); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class('mangubaby'); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
        <div class="wrapper padding3">

        <header id="header">
            <div class="row-fluid">
                <div class="span8">
                    <div class="header-junk row-fluid">
                        <div class="brand span6"><a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" /></a></div>
                        <div class="week-status counter invisible span6"><?php echo do_shortcode('[countup date=2012/11/11][dtimer][/countup]'); ?></div>
                    </div>
                    <nav class="main-menu row-fluid">
                        <ul class="nav nav-pills">
                            <?php get_menu('main-menu'); ?>
                        </ul>
                    </nav>
                </div>
                <div class="counter span3">
                    <?php echo do_shortcode('[countdown date=2013/08/18][dtimer][/countdown]'); ?>
                    <p class="tcountdown">days left!</p>
                </div>
            </div>
        </header>

        <div id="mid">	
	
	
	<!-- END header.php -->
	
	
	
	