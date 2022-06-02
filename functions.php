<?php

//Funktion um Stylesheets korrekt mit dem Theme zu verknüpfen.
function myCustomTheme_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); 
}
add_action( 'wp_enqueue_scripts', 'myCustomTheme_stylesheets' );

//Funktion um Navigationsmenüs zu registrieren.
//Ohne diese Funktion gibt es noch nicht einmal einen Backendbereich für Menüs
function register_my_menus() {
  register_nav_menus(
    array(
        'header-menu' => __( 'Main Menu' ),
        'mobile-menu' => __( 'Mobile Menu' ),
        'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );


//Funktion um Widgetbereiche zu initialisieren
function my_widgets_init() {
    
        register_sidebar( array(
		'name'          => 'Header Sidebar',
		'id'            => 'header-widget',
        'before_widget' => '<div id="%1$s" class="slab-widget %2$s">',
        'after_widget'  => '</div>',    
	) );
    
        register_sidebar( array(
		'name'          => 'Footer Sidebar',
		'id'            => 'footer-widget',
        'before_widget' => '<div id="%1$s" class="slab-widget %2$s">',
        'after_widget'  => '</div>',    
	) );
    
            register_sidebar( array(
		'name'          => 'Main Sidebar',
		'id'            => 'sidebar-widget',
        'before_widget' => '<div id="%1$s" class="slab-widget %2$s">',
        'after_widget'  => '</div>',    
	) );


}
add_action( 'widgets_init', 'my_widgets_init' );


add_theme_support( 'post-thumbnails' );