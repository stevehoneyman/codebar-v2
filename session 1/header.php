<!DOCTYPE html>
<!-- this is header.php, it displays all the usual meta information essential for a html document
and would also usually contain the header, navigation and sometimes banner elements. There's also the
wp_head() hook. WP uses this as a 'hook' to load files such as stylesheets (from functions.php) and
meta tags, scripts and styles from other plugins -->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

		<!-- wp_head() hook, usually the last element in the document <head> element -->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="site-wrapper">
			<header class="wrap">
				<div class="header-top">
					<!-- <button class="navicon"></button> -->
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
