<?php
//Agregar Post Types Instructores y Clases
require_once dirname(__FILE__) . '/inc/post-type.php';
//Agregar CMB2
require_once dirname(__FILE__) . '/cmb2.php';
//Cargar Campos Personalizados de CMB2
require_once dirname(__FILE__) . '/inc/custom-fields.php';
//Queries
require_once dirname(__FILE__) . '/inc/queries.php';
//Widget
require_once dirname(__FILE__) . '/inc/widget.php';
//Opciones
require_once dirname(__FILE__) . '/inc/opciones.php';
//Personalizar Imagenes Destacadas
//if(!function_exists('imagen_destacada_instituto')):
//    function imagen_destacada_instituto($id) {
//        $imagen = get_post_thumbnail_id($id, 'full');
//        $html = '';
//        if($imagen) {
//            $html .= "<div class='row'>";
//            $html .= '<div class="col-12 imagen-destacada nosotros-bg">';
//            $html .= '</div>';
//            $html .= '</div>';
//            //Agregar Estilos Linealmente
//            wp_register_style('custom', false);
//            wp_enqueue_style('custom');
//            //Se crea el CSS para el Custom
//            $imagen_destacada_css = "
//                .imagen-destacada {
//                    height: 24em;
//                    background-size: cover;
//                }
//                .nosotros-bg {
//                  background-image: url($imagen);
//                  background-repeat: no-repeat;
//                  background-position: center center;
//                }
//            ";
//            wp_add_inline_style('custom', $imagen_destacada_css);
//        } 
//        return $html;
//    }
//endif;
//add_action('init', 'imagen_destacada_instituto');
//Funciones que Cargan al Iniciar Tema
if(!function_exists('setup_instituto')):
    function setup_instituto() {
        //Sizes for Images
        add_image_size( 'mediano', 510, 340, true);
        add_image_size('cuadrada_mediana', 450, 450, true);
        add_theme_support('post-thumbnails');
        register_nav_menus(array(
            'main_menu' => esc_html__('Menu Principal', 'Instituto')
        ));
        add_theme_support('custom-logo');
        add_theme_support('title-tag');
    }
endif;
add_action('after_setup_theme', 'setup_instituto');
//Agregar la clase nav_link a los enlaces del Menu principal
if(!function_exists(('enlace_class_instituto'))) {
    function enlace_class_instituto($atts, $item, $args) {
        if($args->theme_location == 'main_menu') {
            $atts['class'] = 'nav-link';
        }
        return $atts;
    }
}
add_filter('nav_menu_link_attributes', 'enlace_class_instituto', 10, 3 );
if(!function_exists('scripts_instituto')):
function scripts_instituto() {
    wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css', false, '4.1.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap.css') );
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap.js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '4.1.0', true);
    wp_enqueue_script('popper.js', get_template_directory_uri() . '/js/popper.js', array('jquery'), '4.1.0', true);
    if(is_page('contacto')):
    wp_enqueue_script('js.js', get_template_directory_uri() . '/js/js.js', array('jquery'), '1.0.0', true);
    endif;
}
endif;
add_action('wp_enqueue_scripts', 'scripts_instituto');
//Agregar mensaje Personalizado a Paginas en Admin
if(!function_exists('titular_pagina_instituto')):
    function titular_pagina_instituto($states, $post) {
        if('page' === get_post_type($post->ID) && 'page-clases.php' == get_page_template_slug($post->ID)) {
            $states[] = __('Pagina de Cursos <a href="post-new.php?post_type=clases">Agregar Clase Nueva</a>');
        }
        return $states;
    }
endif;
add_filter( 'display_post_states', 'titular_pagina_instituto', 10, 2);
//Widgets
if(!function_exists('widgets_instituto')):
    function widgets_instituto() {
        register_sidebar([
            'name' => 'Barra Lateral',
            'id' => 'sidebar_widget',
            'before_widget' => '<div class="proximos-cursos">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="text-center text-light separador inverso">',
            'after_title' => '</h2>'
        ]);
    }
endif;
add_action('widgets_init', 'widgets_instituto');