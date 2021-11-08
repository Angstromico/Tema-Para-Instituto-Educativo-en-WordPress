<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<main id="content" class="container">

    <!-- This sets the $curauth variable -->

    <div class="row justify-content-center">

        <?php
                $user = wp_get_current_user();
                if ( $user ) :
                ?>
        <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>"
            class="img-fluid rounded-circle mb-4 imagen-autor" />
        <?php endif; ?>

    </div>


    <h2 class="text-center p-3 m-3">Acerca de: <?php the_author(); ?></h2>
    <div class="row justify-content-center">
        <div class="col-md-8 py-3 px-5 contenido-nosotros bg-light">
            <dl>

                <h3>Perfil:</h3>
                <p><?php echo $user->user_description; ?></p>
            </dl>

            <h2 class="my-1 mx-auto">Ultimas Publicaciones Hechas <?php the_author(); ?>:</h2>
            <ul class="list-group">
                <!-- The Loop -->
                <?php 
            $args = array(
                'author'        =>  $user->ID, 
                'posts_per_page' => 2
            );
            $ultimas_publicaciones = get_posts( $args );
            $categorias = get_categories($ultimas_publicaciones);
            /*echo '<pre>';
            echo var_dump($categorias[1]) ;
            echo '</pre>';*/
        ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <li class="list-group-item">

                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                        <?php echo $ultimas_publicaciones[0]->post_title; ?></a>, que fue publicado:
                    <span> <?php echo $ultimas_publicaciones[0]->post_date; ?> </span>cuya temática era: <span>
                        <?php echo $categorias[0]->name;?> </span>
                </li>
                <li class="list-group-item">

                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                        <?php echo $ultimas_publicaciones[1]->post_title; ?></a>, que fue publicado:
                    <span> <?php echo $ultimas_publicaciones[1]->post_date; ?> </span>cuya temática era: <span>
                        <?php echo $categorias[1]->name;?></span>
                </li>
                <?php endwhile; else: ?>
                <p><?php _e('No hay Posts de este Autor.'); ?></p>

                <?php endif; ?>

                <!-- End Loop -->

            </ul>

        </div>
    </div>
</main>
<?php get_footer(); ?>
<?php return; ?>
<?php endwhile; ?>