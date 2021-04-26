<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package varnafest
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'varnafest' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$varnafest_description = get_bloginfo( 'description', 'display' );
			if ( $varnafest_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $varnafest_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<img id="mobile-nav-btn" src='wp-content/themes/varnafest-theme/theme-images/hamburger-menu.svg' class="mobile-nav"></img>
		<nav id="site-navigation" class="main-navigation">
			<img id="mobile-exit-btn"src="wp-content/themes/varnafest-theme/theme-images/close-menu.svg" class="mobile-exit"> </img>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<script>

			const mobileBtn = document.getElementById('mobile-nav-btn')
	  			nav = document.getElementById('site-navigation');
	  			mobileBtnExit = document.getElementById('mobile-exit-btn');

			mobileBtn.addEventListener('click', () => {
				nav.style.display = 'block';
			})

			mobileBtnExit.addEventListener('click', () => {
				nav.style.display = 'none';
			})

			function maintainNav(x) {
				nav = document.getElementById('site-navigation');
				if (x.matches) {
					nav.style.display = 'block';
				} else {
					nav.style.display = 'none';
				}
			}

			var x = window.matchMedia("only screen and (min-width: 768px)");
			maintainNav(x); // Call listener function at run time
			x.addListener(maintainNav);
		</script>
	</header><!-- #masthead -->
