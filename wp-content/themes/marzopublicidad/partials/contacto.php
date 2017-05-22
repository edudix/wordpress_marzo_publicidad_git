<section class="contacto">
    <header>
        <h1 class="text-center"><i class="marzo_square"></i> <?php _e( 'Contacto', 'marzopublicidad' ); ?></h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form method="post" action="<?php bloginfo('url') ?>/confirmacion-de-contacto/">
                    <div class="form-group">
                        <input type="text" name="contact-name" class="form-control" id="nombre" placeholder="<?php _e('Nombre *', 'marzopublicidad') ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="contact-email" class="form-control" id="email" placeholder="<?php _e('Correo electrónico *', 'marzopublicidad') ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact-subject" class="form-control" id="asunto" placeholder="<?php _e('Asunto *', 'marzopublicidad') ?>" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="contact-message" rows="5" id="textarea" required placeholder="<?php _e('Cuéntanos *', 'marzopublicidad') ?>"></textarea>
                    </div>
                    <input type="hidden" name="submitted" value="1">
                    <button type="submit" class="button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>