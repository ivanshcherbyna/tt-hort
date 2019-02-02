<?php
add_action('init', 'services_init_post_types');
function services_init_post_types()
{
    $labels = array(
        'name' => _x('Услуги', 'post type general name', THEME_OPT),
        'singular_name' => _x('Услуга', 'post type singular name', THEME_OPT),
        'menu_name' => _x('Услуги', 'admin menu', THEME_OPT),
        'name_admin_bar' => _x('Услуга', 'add new on admin bar', THEME_OPT),
        'add_new' => _x('Добавить новую', 'book', THEME_OPT),
        'add_new_item' => __('Добавить новую услугу', '', THEME_OPT),
        'new_item' => __('Новая услуга', '', THEME_OPT),
        'edit_item' => __('Редактировать услугу', '', THEME_OPT),
        'view_item' => __('Просмотреть услугу', '', THEME_OPT),
        'all_items' => __('Все услуги', '', THEME_OPT),
        'search_items' => __('Поиск услуг', '', THEME_OPT),
        'not_found' => __('Услуга не найдена.', '', THEME_OPT),
        'not_found_in_trash' => __('Услуг в корзине не найдено.', '', THEME_OPT)
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-cart',
        'taxonomies' => array('category', 'post_tag'),
        'supports' => array('title', 'thumbnail', 'editor')
    );

    register_post_type('services', $args);
}

add_action('init', 'gallery_init_post_types');

function gallery_init_post_types()
{
    $labels = array(
        'name' => _x('Фотогалереи', 'post type general name', THEME_OPT),
        'singular_name' => _x('Фотогалерея', 'post type singular name', THEME_OPT),
        'menu_name' => _x('Фотогалереи', 'admin menu', THEME_OPT),
        'name_admin_bar' => _x('Фотогалерея', 'add new on admin bar', THEME_OPT),
        'add_new' => _x('Добавить новую', 'book', THEME_OPT),
        'add_new_item' => __('Добавить новую галерею', '', THEME_OPT),
        'new_item' => __('Новая галерея', '', THEME_OPT),
        'edit_item' => __('Редактировать галерею', '', THEME_OPT),
        'view_item' => __('Просмотреть галерею', '', THEME_OPT),
        'all_items' => __('Все галереи', '', THEME_OPT),
        'search_items' => __('Поиск галерей', '', THEME_OPT),
        'not_found' => __('Галерей не найдено.', '', THEME_OPT),
        'not_found_in_trash' => __('Галерей в корзине не найдено.', '', THEME_OPT)
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-format-gallery',
        'taxonomies' => array('category', 'post_tag'),
        'supports' => array('title', 'thumbnail')
    );

    register_post_type('photogallery', $args);
}