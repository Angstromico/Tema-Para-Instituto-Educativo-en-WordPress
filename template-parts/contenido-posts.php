<?php $url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<?php if($url): ?>
<div class="container">
    <div class="row">
        <div class="col-12 imagen-destacada nosotros-bg" style="background-image: url(<?php echo $url ?>)"></div>
    </div>
</div>
<?php endif; ?>
<main class="container">
    <div class="row justify-content-center contenido-entrada">
        <div class="col-md-8 py-3 px-5 contenido-nosotros bg-light <?php echo $url ? 'top' : ''; ?>">
            <h1 class="text-center my-5 separador"><?php the_title(); ?></h1>
            <?php get_template_part('template-parts/meta', 'posts'); ?>
            <?php the_content(); ?>
        </div>
    </div>
</main>