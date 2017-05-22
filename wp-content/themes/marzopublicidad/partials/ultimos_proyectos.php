<section class="ultimos_proyectos container">
    <header>
        <h1 class="text-center"><i class="marzo_square"></i> <?php _e( 'Últimos proyectos', 'marzopublicidad' ); ?></h1>
    </header>
    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
        <?php $eventos = new WP_Query( array( 'post_type' => 'proyectos', 'posts_per_page' => 8 ) );
        while ( $eventos->have_posts() ) : $eventos->the_post();  ?>
            <div <?php post_class($class = 'grid-item') ?>>
                <div class="overlayer animated text-center">
                    <div class="marzo_square"></div>
                    <p><?php _e('Más detalles', 'marzopublicidad')?></p>
                </div>
                <a class="proyecto" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php echo the_post_thumbnail( 'medium_width' ); ?>
                </a>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>
<?php if(!is_page('nuestra-experiencia')) :?>
    <div class="separator red"></div>
<?php endif; ?>