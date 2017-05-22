<?php /* Template Name: Quienes_somos */ ?>
<?php get_header(); ?>
<main>
    <div class="breadcrumbs"><?php get_template_part('partials/breadcrumbs'); ?></div>
    <header class="container page-header">
        <h1 class="text-center"><?php _e('Somos un equipo.', 'marzopublicidad') ?>
            <br><?php _e('El tuyo.', 'marzomarketing') ?></h1>
    </header>
    <article class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
        else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </article>
    <?php get_template_part('partials/bokeh'); ?>
    <?php get_template_part( 'partials/contacto' ); ?>
</main>
<?php get_footer(); ?>
