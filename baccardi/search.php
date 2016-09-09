<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Bacardi theme
 * @since Bacardi theme 1.0
 */

get_header(); ?>

		<main id="main" class="site-main search" role="main">

		<?php if ( have_posts() ) : ?>		

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'loop-templates/post');

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'bacardi' ),
				'next_text'          => __( 'Next page', 'bacardi' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bacardi' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->

<?php get_footer(); ?>
