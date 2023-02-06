<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="site-wrapper">
			<header class="wrap">
				<div class="header-top">
					<nav>
						<?php wp_nav_menu(array(
							'menu_id' => 'nav',
							'menu_class' => 'main-nav',
							'theme_location' => 'header-menu',
						));?>
					</nav>
				</div>
			</header>

		<main class="wrap insulate">
