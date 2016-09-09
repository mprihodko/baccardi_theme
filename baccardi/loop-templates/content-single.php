<?php 

/**
 * The part for displaying all single posts.
 *
 * @package Bacardi
 */

global $bacardi
?>
 

            <div class="col-md-12 col-sm-12">

                <div class="main-content fp-bottom-line">

                    <?php the_content(); ?>

                </div><!-- .main-content -->

            </div><!-- .col-md-8.col-md-offset-2 -->

            <div class="col-md-4 col-sm-4 sol-xs-12">
            	


            </div>

            <div class="col-md-4 col-sm-4 sol-xs-12">
            	
            	<?=the_date()?>

            </div>

            <div class="col-md-4 col-sm-4 sol-xs-12">
            	
            	<?=the_author()?>

            </div>
   