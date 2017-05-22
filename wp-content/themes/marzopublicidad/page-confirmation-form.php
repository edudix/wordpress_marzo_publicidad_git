<?php /* Template Name: Confirm form */ ?>
<?php get_header(); ?>
	<?php if(!empty($_POST)) :  ?>
		<?php if (!empty($_POST['contact-name']) && !empty($_POST['contact-email']) && !empty($_POST['contact-message'])): 
			$formCompleted = true;
			// El mensaje
			$mensaje = "Nombre: ".$_POST['contact-name']."\r\nEmail: ".$_POST['contact-email']."\r\nAsunto: ".$_POST['contact-subject']."\r\nMensaje: ".$_POST['contact-message']."";

			// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
			$mensaje = wordwrap($mensaje, 70, "\r\n");

			// Enviarlo
			mail('eorusco@marzomarketing.com,xiscoo@gmail.com', 'Mensaje desde la web de Marzo', $mensaje);
		 endif ?>
	<?php endif; ?>
    <div class="breadcrumbs"><?php get_template_part('partials/breadcrumbs'); ?></div>
 <header class="container page-header text-center">
	<?php if($formCompleted) :  ?>
 		<h1 class="text-center"><?php _e('Gracias!', 'marzopublicidad') ?></h1>
 		<p><?php _e('Hemos recibido tu mensaje, te contestaremos lo antes posible.', 'marzomarketing') ?></p>
 		<p><?php _e('Atentamente.', 'marzomarketing') ?><br><p><?php _e('El equipo de Marzo.', 'marzomarketing') ?></p></p>
	<?php else : ?>
 		<h1 class="text-center"><?php _e('Ups....', 'marzopublicidad') ?>
            		<br><?php _e('Inténtalo de nuevo.', 'marzomarketing') ?></h1>
            		<button class="button" onclick="goBack()">Volver a la página anterior</button>
	<?php endif; ?>
</header>
<script>
function goBack() {
    window.history.back();
}
</script>
<?php get_footer(); ?>