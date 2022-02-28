<?php

//! Consultas reutilizables
require get_template_directory() . '/inc/queries.php';

//! Cuando el tema es activado
function gym_setup() {

    //? Habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    //? Titulos SEO
    add_theme_support('title-tag');

    //? Agg img con tamaño personalizado
    add_image_size('sqare', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
}
add_action('after_setup_theme', 'gym_setup');

//! Menus de nav, agg mas con el arreglo
function gym_menus() {
    register_nav_menus(array(
        'menu-principal'=> __('Menu Principal', 'gym')
    ));
}
add_action('init', 'gym_menus');

//! Scripts y Styles
function gym_scripts_styles () {
    //? Fuentes
    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Kanit:wght@100;400;900&family=PT+Sans+Caption:wght@400;700&family=Poppins:wght@100;400;900&display=swap', array(), '1.0.0');

    //? SlickNav
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

    //? LightBox
    if(is_page('galeria')):
        wp_enqueue_style('lightBox', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.0');
    endif;
    //? Hoja de estilos
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

    //? Scripts
    wp_enqueue_script('sticknavJS', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), '1.0.10', true);
    if(is_page('galeria')):
        wp_enqueue_script('lightBox', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.0', true);
    endif;
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'sticknavJS'), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'gym_scripts_styles');

//! Definir zona de Widgets
function gym_widget() {
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title'=> '<h3>',
        'after_ttle' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title'=> '<h3>',
        'after_ttle' => '</h3>'
    ));
}
add_action('widgets_init', 'gym_widget')

?>