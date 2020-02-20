<?php 
/*
 * Plugin Name: Menu config
 * Description: Aﾃｱade un menu para las personas logueadas y para las que no, les muestra el menﾃｺ de ILC ACADEMY.
 * Version: 0.1
 * Author: Miguel ﾃ］gel
*/
  add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
  function my_wp_nav_menu_args( $args = '' ) {
    ( is_user_logged_in() ) ? $args['menu'] = 'main menu': $args['menu'] = 'Top menu ILC Academy'; 
    return $args;
  
  }