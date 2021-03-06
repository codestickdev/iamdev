<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package I_AM_Developer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="siteHeader">
		<div class="siteHeader__wrap container-lg">
			<div class="siteHeader__logo">
				<a href="<?php echo get_home_url('/'); ?>">
					<img src="<?php echo get_template_directory_uri() . '/images/iam_logo_dark.svg'; ?>"/>
				</a>
			</div>
			<nav class="siteHeader__nav">
				<button class="toggleMenu">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<div class="menuMobile">
		<div class="menuMobile__close"></div>
		<div class="menuMobile__wrap">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>
		</div>
	</div>
