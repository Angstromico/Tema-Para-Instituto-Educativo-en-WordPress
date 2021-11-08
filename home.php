<?php get_header(); ?>
<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <blockquote class="subtitulo text-center pl-3">
                <?php 
                $id_blog = get_option('page_for_posts');
                echo get_post_meta($id_blog, 'edc_blog_slogan_blog', true);
                ?>
            </blockquote>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <main class="col-lg-9 col-md-8">
            <h1 class="separador text-center mb-3">Nuestro Blog</h1>
            <?php while(have_posts()): the_post(); ?>
            <div class="row mb-4 entrada">
                <div class="col-md-4">
                    <?php $url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                    <img src="<?php echo $url ?>" alt="Administración" class="img-fluid" />
                </div>
                <div class="col-md-8">
                    <div class="contenido-entrada pt-4 pt-md-0">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <!--Información Meta Entrada-->
                        <?php get_template_part('template-parts/meta', 'posts'); ?>
                        <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary text-light">Ver Entrada</a>
                    </div>
                </div>
            </div>
            <!--contenido-entrada-->
            <?php endwhile; ?>
            <ul class="pagination justify-content-center  mt-5">
                <li class="page-item">
                    <?php previous_posts_link('
                        <span class="page-link" aria-hidden="true">&laquo; Anteriores</span>
                        <span class="sr-only">Anteriores</span>
                    '); ?>
                </li>
                <li class="page-item">
                    <?php next_posts_link(' 
                        <span class="page-link" aria-hidden="true">Siguientes &raquo;</span>
                        <span class="sr-only">Siguientes</span>
                    '); ?>
                </li>
            </ul>

        </main>
        <?php get_sidebar(); ?>
    </div>
    <!--cierre row-->
</div>
<!--container-->
<?php get_footer(); ?>