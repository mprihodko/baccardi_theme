<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bacardi
 */

get_header(); ?>
 
<div class="row">

   <div id="primary" class="content-area">

         <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">

                            <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>

                        </div><!-- .col-md-8.col-md-offset-2 -->

                    </div><!-- .row -->

                </div><!-- .container -->

            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->

    </div><!-- #primary -->

</div><!-- .row -->

<?php get_footer(); ?>
