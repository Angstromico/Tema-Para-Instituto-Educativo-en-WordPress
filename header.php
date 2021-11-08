<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta property="og:title" content="Instituto Educativo Medicina y Administración" />
    <meta property="og:image"
        content="https://raw.githubusercontent.com/Angstromico/Modelo-Para-Tema-WordPress/master/Captura.png" />
    <meta property="og:url" content="https://modelo-instituto-educativo-manuel-morales.netlify.app/" />
    <meta property="og:description" content="<?php wp_title($sep, true, 'right'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image:width" content="828" />
    <meta property="og:image:height" content="450" />
    <meta property="og:site_name" content="Instituto Modelo" />
    <meta property="fb:app_id" content="928977633900253" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:image"
        content="https://raw.githubusercontent.com/Angstromico/Modelo-Para-Tema-WordPress/master/Captura.png" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <title><?php wp_title($sep, true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-3 col-8 mb-4 mb-md-0">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php 
                        $opciones = get_option('edc_theme_options');
                        if(isset($opciones['logotipo'])): ?>
                        <img src="<?php echo $opciones['logotipo']; ?>" alt="Logo" class="img-fluid" />
                        <?php else: ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo"
                            class="img-fluid" />
                        <?php endif;
                    ?>

                    </a>
                </div>
                <!--col-md-4-->
                <div class="col-12 col-md-9">

                    <nav
                        class="main-navbar navbar navbar-expand-md navbar-light justify-content-center justify-content-lg-end justify-content-md-end">
                        <button class="navbar-toggler mb-4" data-toggle="collapse" data-target="#main-nav"
                            aria-expanded="false" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="col-md-8">

                            <?php 
                                if(has_nav_menu('main_menu')) {
                                    wp_nav_menu([
                                        'menu_class' => 'nav nav-justified flex-column flex-md-row justify-content-lg-end flex-lg-row',
                                        'container_class' => 'text-center collapse navbar-collapse justify-content-center text-uppercase  justify-content-lg-end',
                                        'container_id' => 'main-nav',
                                        'theme_location' => 'main_menu'
                                    ]);
                                } else { ?>
                            <div id="main-nav"
                                class="collapse navbar-collapse justify-content-center text-center text-uppercase justify-content-lg-end">
                                <a href="nosotros.html" class="nav-link">Nosotros</a>
                                <a href="blog.html" class="nav-link">Blog</a>
                                <a href="clases.html" class="nav-link">Clases</a>
                                <a href="galeria.html" class="nav-link">Galería</a>
                                <a href="contacto.html" class="nav-link">Contacto</a>
                            </div>
                            <?php }
                            ?>
                            <!--main-nav-->
                        </div>
                        <!--col-md-8-->
                    </nav>
                </div>
            </div>
            <!--row-->
        </div>
        <!--container-->
    </header>