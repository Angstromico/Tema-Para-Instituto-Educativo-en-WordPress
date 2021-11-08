<?php

function instituto_posttype_clases() {
     $labels = array(
         'name'                  => _x( 'Nombre Cursos', 'instituto' ),
         'singular_name'         => _x( 'Nombre Curso',  'instituto' ),
         'menu_name'             => _x( 'Editar Clases', 'Admin Menu text', 'instituto' ),
         'name_admin_bar'        => _x( 'Nombre Curso', 'Add New on Toolbar', 'instituto' ),
         'add_new'               => __( 'Agregar Nuevo Curso', 'instituto' ),
         'add_new_item'          => __( 'Agregar Nueva Clase', 'instituto' ),
         'new_item'              => __( 'Nueva Clase', 'instituto' ),
         'edit_item'             => __( 'Editar Clase', 'instituto' ),
         'view_item'             => __( 'Ver Clase', 'instituto' ),
         'all_items'             => __( 'Todas las Clases', 'instituto' ),
         'search_items'          => __( 'Buscar Clases', 'instituto' ),
         'parent_item_colon'     => __( 'Padre Clases:', 'instituto' ),
         'not_found'             => __( 'No se encontraron Clases.', 'instituto' ),
         'not_found_in_trash'    => __( 'No se encontrar clases en la Papelera', 'instituto' ),
         'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'instituto' ),
         'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'instituto' ),
         'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'instituto' ),
         'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'instituto' ),
         'archives'              => _x( 'Archivo de Clases', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'instituto' ),
         'insert_into_item'      => _x( 'Insertar en Clases', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'instituto' ),
         'uploaded_to_this_item' => _x( 'Cargadas En Clase', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'instituto' ),
         'filter_items_list'     => _x( 'Filtrar Lista de Clases', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'instituto' ),
         'items_list_navigation' => _x( 'Editar Clases navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'instituto' ),
         'items_list'            => _x( 'Editar Clases lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'instituto' ),
     );
  
     $args = array(
         'labels'             => $labels,
         'public'             => true,
         'publicly_queryable' => true,
         'show_ui'            => true,
         'show_in_menu'       => true,
         'query_var'          => true,
         'rewrite'            => array( 'slug' => 'clases' ),
         'capability_type'    => 'post',
         'has_archive'        => true,
         'menu_icon'          => 'dashicons-welcome-learn-more',
         // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
         'hierarchical'       => false,
         'menu_position'      => 6,
         'supports'           => array( 'title', 'editor',  'thumbnail' ),
         'show_in_rest'       => true,
         'rest_base'          => 'clases'
     );
  
     register_post_type( 'clases', $args );
 }
  
 add_action( 'init', 'instituto_posttype_clases' );


 /* Agrega el post type de Profesores Instructores */
function instituto_posttype_profesores() {
     $labels = array(
         'name'                  => _x( 'Profesores / Instructores', 'instituto' ),
         'singular_name'         => _x( 'Profesores / Instructor',  'instituto' ),
         'menu_name'             => _x( 'Profesores / Instructores', 'Admin Menu text', 'instituto' ),
         'name_admin_bar'        => _x( 'Profesores / Instructores', 'Add New on Toolbar', 'instituto' ),
         'add_new'               => __( 'Agregar ', 'instituto' ),
         'add_new_item'          => __( 'Agregar Nuevo Profesores', 'instituto' ),
         'new_item'              => __( 'Nueva Profesores', 'instituto' ),
         'edit_item'             => __( 'Editar Profesores', 'instituto' ),
         'view_item'             => __( 'Ver Profesores', 'instituto' ),
         'all_items'             => __( 'Todos los Profesores', 'instituto' ),
         'search_items'          => __( 'Buscar Profesores / Instructores', 'instituto' ),
         'parent_item_colon'     => __( 'Padre Profesores / Instructores:', 'instituto' ),
         'not_found'             => __( 'No se encontraron Profesores.', 'instituto' ),
         'not_found_in_trash'    => __( 'No se encontrar Profesores en la Papelera', 'instituto' ),
         'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'instituto' ),
         'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'instituto' ),
         'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'instituto' ),
         'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'instituto' ),
         'archives'              => _x( 'Archivo de Profesores', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'instituto' ),
         'insert_into_item'      => _x( 'Insertar en Profesores', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'instituto' ),
         'uploaded_to_this_item' => _x( 'Cargadas En Profesores', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'instituto' ),
         'filter_items_list'     => _x( 'Filtrar Lista de Profesores', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'instituto' ),
         'items_list_navigation' => _x( 'Profesores navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'instituto' ),
         'items_list'            => _x( 'Profesores lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'instituto' ),
     );
  
     $args = array(
         'labels'             => $labels,
         'public'             => true,
         'publicly_queryable' => true,
         'show_ui'            => true,
         'show_in_menu'       => true,
         'query_var'          => true,
         'rewrite'            => array( 'slug' => 'Profesores-instructores' ),
         'capability_type'    => 'post',
         'has_archive'        => true,
         'menu_icon'          => 'dashicons-admin-users',
         // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
         'hierarchical'       => false,
         'menu_position'      => 7,
         'supports'           => array( 'title', 'editor',  'thumbnail' ),
         'show_in_rest'       => true,
         'rest_base'          => 'Profesores-instructores'
     );
  
     register_post_type( 'Profesores', $args );
 }
  
 add_action( 'init', 'instituto_posttype_profesores' );