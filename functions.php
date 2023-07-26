<?php

// Функція для друку svg з url

function rmn_custom_mime_types($mimes)
{
    // Новый mime тип
    $mimes['jpg'] = 'image/jpg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'rmn_custom_mime_types');


// Підключення класичного редактора WP
add_filter('use_block_editor_for_post_type', '__return_false');

// Підключення css та js
add_action('wp_enqueue_scripts', 'auto_scripts');
function auto_scripts()
{



}
;

// Додаєм підтримку мініатюр

add_theme_support('post-thumbnails');
add_image_size('300-300', 300, 300, false);
add_image_size('161-234', 161, 234, false);

// Реєстрація меню
add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Меню шапка сайту',
        'footer_menu' => 'Меню підвал'
    ]);
});