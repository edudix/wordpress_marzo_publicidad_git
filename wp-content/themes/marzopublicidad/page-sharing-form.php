<?php /* Template Name: Sharing form */ ?>
<?php get_header(); ?>
<main>
    <div class="breadcrumbs"><?php get_template_part( 'partials/breadcrumbs' ); ?></div>
    <section class="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form method="post" action="<?php bloginfo('url') ?>/comparte/">
                        <div class="form-group">
                            <p class="text-center"><?php echo $prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null; ?></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
