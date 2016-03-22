<?php 
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

add_action( 'init', 'register_my_menus' );

?>
<!--+
    | vim: ts=4 et nowrap autoindent
    +-->
