<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = THEME_OPT;

if ( !function_exists( "redux_add_metaboxes" ) ):
	function redux_add_metaboxes($metaboxes) {
	
//	$page_options = array();
//
//	$metaSection = array(
//		'title' => 'Page meta',
//		'icon_class'    => 'icon-large',
//		'icon'          => 'el-icon-list-alt',
//		'fields' => array(
//			array(
//				'id'     => 'meta',
//				'type'   => 'text',
//				'title'  => __( 'Metafield')
//			),
//		)
//	);
//	$page_options[] = $metaSection;
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
        $product_page_options[] = array(

            'title'		 	=> __('Products sector', THEME_OPT ),
            'icon_class'    => 'icon-large',
            'icon' 			=> 'el-icon-website',
            'fields'		=> array(

                array(
                    'title' => __('Location inner text',  THEME_OPT),
                    'type' => 'slides',
                    'id' =>'products-slides',
                    'placeholders'=> array(
                        'title' => __('This is a title',THEME_OPT),
                        'description' => __('Descripton here',THEME_OPT),
                        'url' => __('give a link',THEME_OPT)
                    )
                )
            )
        );

	    $metaboxes[] = array(
		'id'            => 'page-options',
		'title'         => __( 'Page options', THEME_OPT ),
		'post_types'    => array( 'page' ),
		'page_template' => array('front-page.php'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $home_page_options,
	);

        $metaboxes[] = array(
            'id'            => 'products-options',
            'title'         => __( 'Page options', THEME_OPT ),
            'post_types'    => array( 'page' ),
            'page_template' => array('products-page.php'),
            'position'      => 'normal', // normal, advanced, side
            'priority'      => 'high', // high, core, default, low
            'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
            'sections'      => $product_page_options,
        );
        $metaboxes[] = array(
            'id'            => 'contact-options',
            'title'         => __( 'Page options', THEME_OPT ),
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

