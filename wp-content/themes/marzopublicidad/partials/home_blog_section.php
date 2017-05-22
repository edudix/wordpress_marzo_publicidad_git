<section class="blog_resumen">
    <div class="container">
        <header>
            <h1 class="text-center"><i class="marzo_square"></i> <?php _e( 'El blog de Marzo', 'marzopublicidad' ); ?></h1>
        </header>
        <div class="row">
            <?php $temp = $blog_posts; $blog_posts= null;
            $blog_posts = new WP_Query(); $blog_posts->query('posts_per_page=4');
            while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
            <div class="col-sm-6 col-md-3 col-xs-12">
                <article <?php post_class($class = 'home-post') ?>>
                    <div class="overlayer animated text-center">
                        <div class="marzo_square"></div>
                        <p><?php _e('Más detalles', 'marzopublicidad')?></p>
                    </div>
                    <a class="home-post-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php echo the_post_thumbnail( 'small_width' ); ?>
                        </a>
                    </article>
                    <a class="home-post-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                       <?php the_title() ?>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>