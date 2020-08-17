<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Varnafest
 */

get_header();
?>

	<?php get_template_part( 'templates/sidebars/sidebar', 'left' ); ?>

	<div id="primary" class="site-main-post">
		<div class="post-wrapper">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'templates/content/content', get_post_type() );

				

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>

	</div><!-- #main -->

	<?php get_template_part( 'templates/sidebars/sidebar', 'right' ); ?>

<?php
get_sidebar();
get_footer();
