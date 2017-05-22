<?php /* Template Name: Servicios */ ?>
<?php get_header(); ?>
<main>
    <div class="breadcrumbs"><?php get_template_part( 'partials/breadcrumbs' ); ?></div>
    <header class="container page-header">
        <h1 class="text-center"><?php _e('Publicidad y comunicación', 'marzopublicidad') ?><br><?php _e('en todas sus formas.', 'marzomarketing') ?></h1>
    </header>
    <section class="service-articles">
        <?php $servicios = new WP_Query( array( 'post_type' => 'servicios') );
        while ( $servicios->have_posts() ) : $servicios->the_post();  ?>
            <div class="service-article">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <article>
                                <header>
                                    <h1><span class="service-article-title"><?php the_title(); ?></span></h1>
                                </header>
                                <?php the_content(); ?>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </section>
</main>
<?php get_footer(); ?>
