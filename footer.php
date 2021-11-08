<footer class="footer p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php 
                                if(has_nav_menu('main_menu')) {
                                    wp_nav_menu([
                                        'menu_class' => 'nav text-uppercase d-flex flex-column flex-md-row text-center text-md-left',
                                        'theme_location' => 'main_menu'
                                    ]);
                                } else { ?>

                <nav class="nav text-uppercase d-flex flex-column flex-md-row text-center text-md-left">
                    <a href="nosotros.html" class="nav-link">Nosotros</a>
                    <a href="blog.html" class="nav-link">Blog</a>
                    <a href="clases.html" class="nav-link">Clases</a>
                    <a href="galeria.html" class="nav-link">Galería</a>
                    <a href="contacto.html" class="nav-link">Contacto</a>
                </nav>

                <?php }
                            ?>
            </div>
            <div class="col-md-4">
                <p class="text-center text-md-right copyright mt-4 mt-md-0">
                    Todos los Derechos Reservados <?php echo date('Y'); ?>
                </p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>