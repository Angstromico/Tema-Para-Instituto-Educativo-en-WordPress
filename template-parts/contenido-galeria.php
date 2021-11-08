<main class="container">
    <div class="row justify-content-center">

        <div class=" col-md-10 bg-white py-3 px-5">
            <h2 class="separador text-center mb-5"><?php the_title(); ?></h2>
            <?php $imagnes = get_post_meta( get_the_ID(), 'edc_galeria_imagenes', true ); ?>

            <div class="card-columns">
                <?php foreach($imagnes as $id => $imagen):?>

                <div class="card">
                    <a href="#" data-toggle="modal" data-target="#imagen<?php echo $id; ?>">
                        <img src="<?php echo $imagen; ?>" class="img-fluida" />
                    </a>
                    <div id="imagen<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <img src="<?php echo $imagen; ?>" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </div>

    </div>
</main>