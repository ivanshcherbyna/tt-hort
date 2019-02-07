<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <?php wp_head(); ?>
    <?php global $mytheme;
    $locale = get_locale();

    //$telephone=redux_post_meta(THEME_OPT,$post->ID,'telephone-text');?>
</head>
<body <?php body_class(); ?>>
<div class="preloader load"></div>
<div id="custom-my-overlay"></div>
<div class="contact-stripe" style="background:<?php echo $mytheme['header-background-color']['background-color'];?>">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 text-left contacts">
                <!--                <div class="phone"><i class="fa fa-phone"></i><a href="tel:--><?php //echo $mytheme['telephone-text'];?><!--">--><?php //echo $mytheme['telephone-text'];?><!--</a> </div>-->
                <!--                <div class="address"><i class="fa fa-map-marker"></i>--><?php //echo $mytheme['adress-city-text'].$mytheme['adress-street-text'];?><!--</div>-->
            </div>
            <div class="col-sm-3 text-right language-labels">
                <?php qtranxf_generateLanguageSelectCode('image'); ?>
            </div>

        </div>
    </div>
</div>
<!-- wrapper -->
<div class="wrapper">
    <header class="header" role="banner">
        <div id="navigation"  class="">
            <div class="main-nav-wrap">
                <div class="col-sm-12 text-center head-title"><h1><?php echo $mytheme['head-title'];?></h1></div>
                <nav class="navbar custom-nav" role="navigation">
                    <div class="container" id="adaptive">
                        <a class="header-logo" href="<?php echo get_home_url(); ?>"><img src="<?php
                            if($locale=='en_US'){
                                echo $mytheme['logo-header-en']['url'];
                            }
                            else {
                                echo $mytheme['logo-header-general']['url'];
                            }
                            ;?>"></a>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" id="clicked-show-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?php my_nav(); ?>
                        </div>
                        <div class="mobile"><?php my_nav(); ?></div>
                        <?php qtranxf_generateLanguageSelectCode('image'); ?>


                    </div>
                </nav>
            </div>


    </header>
