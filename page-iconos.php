<?php 
/*
* Template Name: Paginas con Iconos
*/
?>
<?php get_header(); ?>
<?php while(have_posts()): the_post(); 
    get_template_part('template-parts/contenido', 'paginas');
    get_template_part('template-parts/contenido', 'iconos'); ?>
<?php endwhile; ?>
<?php get_footer(); ?>