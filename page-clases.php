<?php 
/*
* Template Name: Clases
*/
get_header();
while(have_posts()): the_post();
?>
<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <blockquote class="subtitulo text-center pl-3">
                <?php the_content(); ?>
            </blockquote>
        </div>
    </div>
</div>
<section class="clases mt-5 py5">
    <h1 class="separador text-center mb-4"><?php the_title(); ?></h1>
    <div class="container">
        <div class="row">
            <?php query_cursos_instituto(); ?>
        </div>
    </div>
    <!--container-->
</section>
<?php endwhile; ?>
<?php get_footer(); ?>