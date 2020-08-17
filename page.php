<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Varnafest
 */

get_header();
?>

<div class="main-content-wrapper">
	
	<?php get_template_part( 'templates/sidebars/sidebar', 'left' ); ?>

	<div id="primary" class="site-main-page">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'templates/content/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</div><!-- #main -->

	<?php get_template_part( 'templates/sidebars/sidebar', 'right' ); ?>

</div>
<?php


get_footer();
