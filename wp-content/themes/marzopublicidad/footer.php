<footer class="text-center">
    <p><?php _e('Copyright © 2014 MARZO Marketing y publicidad', 'marzopublicidad') ?></p>
    <span class="arrow_up text-center">
        <img  src="<?php echo get_template_directory_uri()?>/assets/img/arrows.png" alt="arrow up" width="32"><br>
        <?php _e('Sube', 'marzopublicidad') ?>
    </span>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/main.min.js' ?>"></script>
<script>
    function init() {
    var imgDefer = document.getElementsByTagName('img');
    for (var i=0; i<imgDefer.length; i++) {
    if(imgDefer[i].getAttribute('data-src')) {
    imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
    } } }
    window.onload = init;
</script>
    <?php wp_footer(); ?>
</body>
</html>