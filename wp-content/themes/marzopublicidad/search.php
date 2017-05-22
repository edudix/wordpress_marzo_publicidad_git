<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>
<main>
    <div class="breadcrumbs"><?php get_template_part('partials/breadcrumbs'); ?></div>
    <header class="container page-header">
        <?php if ( have_posts() ) : ?>
            <h1 class="text-center"><?php printf( __( 'Resultados para: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        <?php else : ?>
            <?php get_template_part( 'no-results', 'search' ); ?>
        <?php endif; ?>
    </header>
    <section class="container">
        <?php while ( have_posts() ) : the_post(); ?>

            <article class="post">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php the_content( $more_link_text , $strip_teaser ); ?>
            </article>
            <hr>

        <?php endwhile; ?>
    </section>
</main>

<?php get_footer(); ?>