<?php get_header(); ?>
<main>
    <div class="breadcrumbs"><?php get_template_part('partials/breadcrumbs'); ?></div>
    <header class="blog-header text-center">
        <h1 class="red-text"><?php _e('El blog de Marzo', 'marzopublicidad') ?></h1>
    </header>
    <div class="separator"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <header>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        </header>
                        <figure class="hero-image">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail( 'full_width' ); ?>
                            </a>
                        </figure>
                        <?php the_content( $more_link_text , $strip_teaser ); ?>
                        <aside><i class="marzo_square"></i> <?php _e('Por:', 'marzopublicidad') ?> <?php the_author(); ?> | <?php _e('Categoría:', 'marzopublicidad') ?> <?php the_category( ', ' ); ?></aside>
                    </article>
                    <hr>
                <?php endwhile; ?>

                    <div class="navigation">
                        <div class="next-posts"><?php next_posts_link(); ?></div>
                        <div class="prev-posts"><?php previous_posts_link(); ?></div>
                    </div>

                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'sidebar' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
