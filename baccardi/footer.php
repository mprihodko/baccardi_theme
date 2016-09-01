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

                <?php if ( is_active_sidebar( 'sidebar-bacardi' ) ) : ?>
                    <div class="col-md-3 col-sm-hidden col-xs-hidden">
                        <?php get_sidebar('main'); ?>
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

                    <?php if (isset($bacardi['footer_widget_items']) && count($bacardi['footer_widget_items'])>0): ?>
                        <?php $class = bc_define_footer_widget_class(count($bacardi['footer_widget_items'])); ?>
                            <?php foreach ($bacardi['footer_widget_items'] as $widget): ?>
                                <div class="<?=$class?>">
                                    <?php echo $widget['footer_widget_item']; ?>
                                </div>
                            <?php endforeach; ?>
                    <?php endif; ?>
                       

                    </footer><!-- #colophon -->

                </div><!--col end -->

            </div><!-- row end -->
            
        </div><!-- container end -->
        
        <div class="copyright">
            <?=isset($bacardi['copyright_footer'])? $bacardi['copyright_footer']: '<a href="'.admin_url('admin.php?page=theme_options&tab=0').'">Enter text here</a>'?>
            
        </div>
        
    </div><!-- wrapper end -->



<?php wp_footer(); ?>

</body>

</html>