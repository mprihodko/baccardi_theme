<?php
/**
 * The template used for displaying posts on archive page content in archive.php
 *
 * @package Bacardi
 */
?>

<div class="col-md-4 col-sm-6 col-xs-12 post-block">
	<div class="img-box post">
		<div class="img-bg" style="background-image: url(<?=get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );?>);"></div>
		<div class="img-txt">
	        <a class="img-link" href="<?=the_permalink()?>"></a>     
	        <a href="<?=the_permalink()?>">
	            <h3><?=the_title()?></h3>
	        </a>
	    </div>
	</div>
</div>