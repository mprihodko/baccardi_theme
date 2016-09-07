<?php
/**
 * The template for displaying all single posts.
 *
 * @package Bacardi
 */

get_header(); ?>


		<main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="col-md-12 col-sm-12">

				    <div class="main-content fp-bottom-line">

				        <?php the_content(); ?>

				    </div><!-- .main-content -->

				</div>    

				<div class="col-md-12 col-sm-12">
	                <?php
	                // If comments are open or we have at least one comment, load up the comment template
	                if ( comments_open() || get_comments_number() ) :
	                    comments_template();
	                endif;
	                ?>
                </div>

            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->

<?php get_footer(); ?>