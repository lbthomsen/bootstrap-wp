<?php 

/*
 *
 */


if( !defined( 'ABSPATH' ) ) {
        exit;
}
?>
<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'header-menu' => __( 'Header Menu' ), 
      'footer-menu' => __( 'Footer Menu' ), 
    )
  );
}

function register_my_widgets() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}

add_action( 'init', 'register_my_menus' );
add_action( 'init', 'register_my_widgets' );

?>
