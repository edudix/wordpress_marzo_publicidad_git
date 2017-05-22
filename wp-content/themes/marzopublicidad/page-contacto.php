<?php /* Template Name: Contacto */ ?>
<?php get_header(); ?>
<main>
    <div class="breadcrumbs"><?php get_template_part( 'partials/breadcrumbs' ); ?></div>
    <header class="container page-header">
        <h1 class="text-center"><?php _e('Todo empieza', 'marzopublicidad') ?><br><?php _e('con un simple "hola"', 'marzomarketing') ?></h1>
    </header>
    <article class="container contacto_content">
        <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
        else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </article>
    <div class="separator"></div>
    <?php get_template_part( 'partials/contacto' ); ?>
    <?php get_template_part( 'partials/city' ); ?>
</main>
<?php get_footer(); ?>