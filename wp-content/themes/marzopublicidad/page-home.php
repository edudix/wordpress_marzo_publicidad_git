<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<main>
    <?php get_template_part( 'partials/slideshow' ); ?>
    <?php get_template_part( 'partials/service_list' ); ?>
    <?php get_template_part( 'partials/city' ); ?>
    <?php get_template_part( 'partials/nuestras_marcas' ); ?>
    <?php get_template_part( 'partials/ultimos_proyectos' ); ?>
    <?php get_template_part( 'partials/home_blog_section' ); ?>
    <?php get_template_part( 'partials/trabajamos_para_ti' ); ?>
    <?php get_template_part( 'partials/colaboradores' ); ?>
    <?php get_template_part( 'partials/contacto' ); ?>
</main>
<?php get_footer(); ?>

