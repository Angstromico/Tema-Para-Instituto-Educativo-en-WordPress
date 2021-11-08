<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<div class="container-fluid imagenes-principales">
    <div class="row imagen-superior imagen-inferior">
        <div class="col-md-6 bg-primary alto">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-8 col-md-6">
                    <div class="contenido text-center text-light py-3">
                        <?php echo get_post_meta(get_the_ID(), 'edc_homepage_texto_superior_1', true); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--imagen-->
        <div class="col-md-6 alto bg"
            style="background-image: url(<?php  echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_superior_1', true); ?>); ">
        </div>
    </div>
    <!--row-->
    <div class="row otra-imagen imagen-inferior">
        <div class="col-md-6 bg-secondary alto">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-8 col-md-6">
                    <div class="contenido text-center py-3">
                        <?php echo get_post_meta(get_the_ID(), 'edc_homepage_texto_superior_2', true); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--imagen-->
        <div class="col-md-6 bg alto"
            style="background-image: url(<?php  echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_superior_2', true); ?>); ">
        </div>
    </div>
    <!--row-->
</div>
<!--container-fluid-->
<?php 
$nosotros = new WP_Query('pagename=nosotros');
while($nosotros->have_posts()): $nosotros->the_post();?>
<?php get_template_part('template-parts/contenido', 'iconos'); ?>
<?php endwhile; wp_reset_postdata(); ?>
<section class="clases mt-5 py5">
    <h1 class="separador text-center mb-4">Nuestras Clases</h1>
    <div class="container">
        <div class="row justify-content-center">
            <?php 
                $opciones = get_option('edc_theme_options');
                $clases = $opciones['numero_clases'] ?? 3;
            ?>
            <?php query_cursos_instituto($clases); ?>
        </div>
        <div class="row my-5 justify-content-center">
            <div class="col-sm-5 col-md-3">
                <a href="<?php the_permalink(get_page_by_title('Nuestras Clases')); ?>"
                    class="btn btn-danger d-block">Ver Todas las Clases</a>
            </div>
        </div>
    </div>
    <!--container-->
</section>
<div class="profesional"
    style="background-image: url(<?php  echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_licenciatura', true); ?>); ">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="contenido text-warning text-center">
                    <?php echo get_post_meta(get_the_ID(), 'edc_homepage_texto_licenciatura', true); ?>
                    <?php $contacto = get_page_by_title('Contacto'); ?>
                    <a href="<?php echo get_permalink($contacto->ID); ?>"
                        class="btn btn-primary text-uppercase">Informate</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>