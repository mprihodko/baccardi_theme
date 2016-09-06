<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bacardi theme 
 */
global $bacardi;
$widgets = bc_check_enabled_footer_widgets(); 
?>
                </div><!-- #primary --> 

                <?php if ( is_active_sidebar( 'sidebar-bacardi' ) && $bacardi['enable_sidebar']) : ?>
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

                    <?php if (isset($bacardi['header_logo']['url']) && isset($bacardi['display_footer_logo'])): ?>
                        
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center footer-logo">
                            <a href="<?=home_url()?>"><img src="<?=$bacardi['header_logo']['url']?>" alt="<?=bloginfo('name');?>"></a>
                        </div>

                    <?php endif; ?> 
                     
                    <?php if(is_array($widgets)) : ?> 
                        <div class="row widgets-bar">
                            <?php $class = bc_define_footer_widget_class(count($widgets)); ?>

                            <?php foreach($widgets as $widget): ?>
                               
                                <div class="<?=$class?> text-center">

                                    <ul id="<?=$widget?>" class="footer-widget">
                                        <?php dynamic_sidebar( $widget ); ?>
                                    </ul>

                                </div>

                            <?php endforeach; ?>
                        </div>
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