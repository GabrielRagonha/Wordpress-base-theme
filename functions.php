<?php
	//Add logo theme support and option in customizer
	function customizer_customLogo() {
		$args = array(
			'header-text' => array(
				'site-title',
				'site-description',
			),
			'height' => 67,
			'width'  => 211,
		);

		add_theme_support( 'custom-logo', $args );
	}

	add_action( 'after_setup_theme', 'customizer_customLogo' );