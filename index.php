<?php
	wp_enqueue_style('homeStyle', get_template_directory_uri() . '/assets/css/pages/home.css', '1.0');

	get_header();

	wp_enqueue_script('homeScript', get_template_directory_uri() . '/assets/scripts/pages/home.min.js', '1.0');
?>

	<div class="home">
	
	</div>

<?php get_footer() ?>
