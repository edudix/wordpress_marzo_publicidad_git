<?php /* Template Name: Glosario */ ?>
<?php get_header(); ?>
    <main>
        <div class="breadcrumbs"><?php get_template_part('partials/breadcrumbs'); ?></div>
        <header class="container page-header">
            <h1 class="text-center"><?php _e('Glosario.', 'marzopublicidad') ?></h1>
        </header>
        <article class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile;
            else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </article>
    </main>
<?php get_footer(); ?>