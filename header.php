<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta name="robots" content="all" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700" rel="stylesheet">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/main.css">
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <?php
                $logoID = get_theme_mod('custom_logo');
                $logoImg = wp_get_attachment_image_src($logoID, 'full');

                if (!empty($logoImg)): ?>
                    <a href="<?= esc_url(home_url('/')) ?>">
                        <img src="<?= esc_url($logoImg[0]) ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                <?php
            endif; ?>

            <div class="navbar__menu">
                <?php
                    wp_nav_menu(array(
                        'menu' => 'Menu principal'
                    ));
                ?>
            </div>
        </nav>
    </header>