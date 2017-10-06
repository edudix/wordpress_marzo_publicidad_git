<?php get_header(); ?>
<main>
    <div class="breadcrumbs"><?php get_template_part( 'partials/breadcrumbs' ); ?></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <header>
                            <h1><?php the_title(); ?></h1>
                        </header>
                        <figure class="hero-image">
                            <?php the_post_thumbnail( 'full_width' ); ?>
                        </figure>
                        <aside id="single">
                          <i class="marzo_square"></i> <?php _e('Por:', 'marzopublicidad') ?> <?php the_author(); ?> | <?php _e('Categoría:', 'marzopublicidad') ?> <?php the_category( ', ' ); ?>
                        </aside>
                        <hr>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
                    <div class="navigation">
                        <div class="next-posts"><?php next_posts_link(); ?></div>
                        <div class="prev-posts"><?php previous_posts_link(); ?></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
