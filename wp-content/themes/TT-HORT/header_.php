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
            <div class="col-sm-2 logo-general"><a class="logo-link" href="<?php echo get_home_url(); ?>">1111<img src="<?php
                    if($locale=='en_US'){
                        echo $mytheme['logo-header-en']['url'];
                    }
                    else {
                        echo $mytheme['logo-header-general']['url'];
                    }
                    ;?>" class="logo"></a></div>
            <div class="col-sm-8 text-center head-title"><h1><?php echo $mytheme['head-title'];?></h1></div>
            <div class="col-sm-2 text-right language-labels">
                <?php qtranxf_generateLanguageSelectCode('image'); ?>
            </div>

        </div>
        <div class="row"><?php my_nav(); ?></div>
    </div>
</div>
<!-- wrapper -->
<div class="wrapper">

    <header class="header" role="banner">
        <div id="navigation"  class="">

            <div class="main-nav-wrap">
                <nav class="navbar custom-nav" role="navigation">
                    <div class="container">
                        <div class="col-sm-2 logo-general"><a class="logo-link" href="<?php echo get_home_url(); ?>">2222<img src="<?php
                                if($locale=='en_US'){
                                    echo $mytheme['logo-header-en']['url'];
                                }
                                else {
                                    echo $mytheme['logo-header-general']['url'];
                                }
                                ;?>" class="logo"></a></div>
                        <div class="navbar-header col-sm-8">
                            <button type="button" class="navbar-toggle" id="clicked-show-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?php my_nav(); ?>
                        </div>
                        <?php qtranxf_generateLanguageSelectCode('image'); ?>
                        <div class="mobile"><?php //my_nav(); ?> </div>
                    </div>
                </nav>
            </div>


        </div>
    </header>


<!--    <header class="header" role="banner">-->
<!--        <div id="navigation"  class="">-->
<!--            <div class="main-nav-wrap">-->
<!--                <nav class="navbar custom-nav" role="navigation">-->
<!--                    <div class="container">-->
<!---->
<!--                        <div class="navbar-header">-->
<!--                            <button type="button" class="navbar-toggle" id="clicked-show-menu">-->
<!--                                <span class="sr-only">Toggle navigation</span>-->
<!--                                <span class="icon-bar"></span>-->
<!--                                <span class="icon-bar"></span>-->
<!--                                <span class="icon-bar"></span>-->
<!--                            </button>-->
<!--                            --><?php //my_nav(); ?>
<!--                        </div>-->
<!---->
<!--                            --><?php //qtranxf_generateLanguageSelectCode('image'); ?>
<!---->
<!--                        <div class="mobile">--><?php //my_nav(); ?><!--</div>-->
<!--                    </div>-->
<!--                </nav>-->
<!--            </div>-->
<!---->
<!---->
<!--    </header>-->
    <script>
        jQuery(document).ready(function() {
            jQuery('.preloader').removeClass("load");
        });
    </script>