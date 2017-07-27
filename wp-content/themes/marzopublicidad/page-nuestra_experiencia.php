<?php /* Template Name: Nuestra_experiencia */ ?>
<?php get_header(); ?>
<main>
    <div class="breadcrumbs"><?php get_template_part('partials/breadcrumbs'); ?></div>
    <header class="container page-header">
        <h1 class="text-center"><?php _e('¿Creatividad? Por supuesto.', 'marzopublicidad') ?>
            <br><?php _e('En cada departamento.', 'marzomarketing') ?></h1>
    </header>
    <article class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
        else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </article>
    <?php get_template_part('partials/street'); ?>
    <?php get_template_part('partials/nuestras_marcas'); ?>
    <?php /*get_template_part('partials/ultimos_proyectos');*/ ?>
</main>
<?php get_footer(); ?>