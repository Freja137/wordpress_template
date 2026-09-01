<?php get_header(); ?>

<?php
while (have_posts()){
    the_post(); 
    echo '<h1>' . get_the_title() . '</h1>';
    echo '<div>' . get_the_content() . '</div>';
    echo '<div>';
        the_post_thumbnail('car-size');
    echo '</div>';
};

?>

