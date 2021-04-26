<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package varnafest
 */



?>

	<footer id="colophon" class="site-footer">
		<?php dynamic_sidebar( 'festivals-list' ); ?>
		<?php dynamic_sidebar( 'archives-list' ); ?>
		<?php dynamic_sidebar( 'info-list' ); ?>
		<div class="site-info">
			<a href="https://wordpress.org/">Proudly powered by WordPress</a>
			<span class="sep">Theme <a href="https://github.com/Reaper9806/varnafest-theme">varnafest</a> by <a href="https://three-o-three.com">Studio 303</a> </span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
