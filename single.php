<?php get_header(); ?>
<?php while(have_posts()): the_post(); 
    get_template_part('template-parts/contenido', 'posts'); ?>
<div class="comentarios container">
    <?php
            if(comments_open() || get_comments_number()) {
                comments_template();
            } else {
                echo '<p class="text-center comentarios-cerrados alert alert-danger">Los Comentarios no estan Habilitados en esta Sección</p>';
            }
        ?>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>