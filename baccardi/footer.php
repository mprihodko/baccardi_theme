<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bacardi theme 
 */
global $bacardi;
?>
                </div><!-- #primary --> 

                <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                    <div class="col-lg-4 col-md-4 col-sm-hidden col-xs-hidden">
                        <?php get_sidebar('sidebar-main'); ?>
                    </div>
                <?php endif; ?> 
            </div><!-- .row -->
               
        </div><!-- Container end -->

    </div><!-- Wrapper end -->

    <div class="wrapper" id="wrapper-footer">
        
        <div class="container">

            <div class="row">

                <div class="col-md-12">
        
                    <footer id="colophon" class="site-footer" role="contentinfo">

                       

                    </footer><!-- #colophon -->

                </div><!--col end -->

            </div><!-- row end -->
            
        </div><!-- container end -->
        
        <div class="copyright"><?=$bacardi['copyright_footer']?></div>
        
    </div><!-- wrapper end -->



<?php wp_footer(); ?>

</body>

</html>