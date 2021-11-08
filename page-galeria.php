<?php 
/*
* Template Name: Galeria
*/
?>

<?php get_header(); ?>
<?php while(have_posts()): the_post(); 
    get_template_part('template-parts/contenido', 'galeria');
endwhile; ?>
<?php get_footer(); ?>