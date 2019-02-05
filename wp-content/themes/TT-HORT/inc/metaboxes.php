<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = THEME_OPT;

if ( !function_exists( "redux_add_metaboxes" ) ):
	function redux_add_metaboxes($metaboxes) {
	

        $home_page_options[] = array(

            'title'		 	=> __('home page sector', THEME_OPT ),
            'icon_class'    => 'icon-large',
            'icon' 			=> 'el-icon-website',
            'fields'		=> array(

                array(
                    'title' => __('Background image',  THEME_OPT),
                    'type' => 'media',
                    'id' =>'home-background'
                )
            )
        );
        $services_page_options[] = array(

            'title'		 	=> __('Services page sector', THEME_OPT ),
            'icon_class'    => 'icon-large',
            'icon' 			=> 'el-icon-website',
            'fields'		=> array(
                array(
                    'id'       => 'coach-select',
                    'type'     => 'select',
                    'title'    => __('Select Coach', 'redux-framework-demo'),
                    'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
                       // Must provide key => value pairs for select options
                    'options'  => array(
                        '1' => 'Opt 1',
                        '2' => 'Opt 2',
                        '3' => 'Opt 3'
                    ),
                    'default'  => '2',
                )
            )
        );
        $contact_page_options[] = array(

            'title'		 	=> __('Contact page sector', THEME_OPT ),
            'icon_class'    => 'icon-large',
            'icon' 			=> 'el-icon-website',
            'fields'		=> array(

                array(
                    'title' => __('Background of contact page',  THEME_OPT),
                    'type' => 'media',
                    'id' =>'contact-background'
                ),
                array(
                    'title' => __('Iframe input resource for MAP',  THEME_OPT),
                    'type' => 'text',
                    'id' =>'iframe-maps-src'
                )
            )
        );
        $gallery_page_options[] = array(

            'title'		 	=> __('Галлерея фото/картинок', THEME_OPT ),
            'icon_class'    => 'icon-large',
            'icon' 			=> 'el-icon-website',
            'fields'		=> array(

                array(
                    'type' => 'gallery',
                    'id' =>'gallery-id'
                )
            )
        );
        $video_gallery_page_options[] = array(

            'title'		 	=> __('Секция видео-галлереи', THEME_OPT ),
            'icon_class'    => 'icon-large',
            'icon' 			=> 'el-icon-website',
            'fields'		=> array(

                array(
                    'title' => __('Yotube ссылки',  THEME_OPT),
                    'type' => 'multi_text',
                    'style' => 'warning',
                    'desc' => 'укажите код URL ролика после \'https://www.youtube.com/watch?v=\'',
                    'validate' => 'url',
                    'id' =>'video-yutube-url'
                )
            )
        );

	    $metaboxes[] = array(
		'id'            => 'page-options',
		'title'         => __( 'Опции страницы', THEME_OPT ),
		'post_types'    => array( 'page' ),
		'page_template' => array('front-page.php'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $home_page_options,
	    );
	    $metaboxes[] = array(
		'id'            => 'services-page-options',
		'title'         => __( 'Опции страницы услуги', THEME_OPT ),
		'post_types'    => array( 'page' ),
		'page_template' => array('services-page.php'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $services_page_options,
	    );

        $metaboxes[] = array(
            'id'            => 'photo-gallery-options',
            'title'         => __( 'Опции страницы', THEME_OPT ),
            'post_types'    => array( 'page' ),
            'page_template' => array('photo-gallery-page.php'),
            'position'      => 'normal', // normal, advanced, side
            'priority'      => 'high', // high, core, default, low
            'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
            'sections'      => $gallery_page_options,
        );
        $metaboxes[] = array(
            'id'            => 'video-gallery-options',
            'title'         => __( 'Опции страницы', THEME_OPT ),
            'post_types'    => array( 'page' ),
            'page_template' => array('videos-page.php'),
            'position'      => 'normal', // normal, advanced, side
            'priority'      => 'high', // high, core, default, low
            'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
            'sections'      => $video_gallery_page_options,
        );
        $metaboxes[] = array(
            'id'            => 'contact-options',
            'title'         => __( 'Опции страницы', THEME_OPT ),
            'post_types'    => array( 'page' ),
            'page_template' => array('contact.php'),
            'position'      => 'normal', // normal, advanced, side
            'priority'      => 'high', // high, core, default, low
            'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
            'sections'      => $contact_page_options
        );
	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_metaboxes');
endif;

