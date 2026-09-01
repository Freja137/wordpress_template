<?php 
function car_post_type (){
    register_post_type('car', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor','excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'cars'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Cars',
            'add_new_item' => 'Add New Car',
            'edit_item' => 'Edit Car',
            'all_items' => 'All Cars',
            'singular_name' => 'Car'
        ),
        'menu_icon' => 'dashicons-smiley'
    ));
}

add_action('init', 'car_post_type');

function university_features() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'university_features');

?>