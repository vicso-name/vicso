<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vicso
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wrapper">

	<header class="header">
		<div class="main_container">
			<div class="header-content">

			<figure class="main-logo">
				<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				
				if ( has_custom_logo() ) {
					echo '<a href="/"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
				} else {
					echo '<h1>' . get_bloginfo('name') . '</h1>';
				}
				?>
			</figure>
			
			<nav class="top-navigation">
				<?php 
					wp_nav_menu(
						array(
						'theme_location' => 'top-menu'
						)
					);
				?>
			</nav>

			<div class="search-favorite">

				<form class="searchform" id="searchform" method="get" action="">
					<input type="text" class="search-field" name="s" placeholder="Search" value="">
					<button class="search-icon" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</form>

				<div id="favorite-post-count" class="favorite-post-count">
					<div id="count-value" class="count-value"></div>
					<a href="/vicso/favorite-posts/"><i class="fas fa-heart"></i></a>
				</div>

			</div>

			</div>
		</div>
	</header>
	<div class="fake-header"></div>

	<main class="main">




