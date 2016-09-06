<?php
/**
 * @package Bacardi
 */
global $bacardi;
?>
<?php 
if(isset($bacardi['enable_overlay']['rgba']) && !empty($bacardi['enable_overlay']['rgba'])){
	echo "<style type='text/css'>
			.entry-header:after{ background-color: ".$bacardi['enable_overlay']['rgba']." }
		</style>";
}
if(isset($bacardi['enable_page_title']) && !empty($bacardi['enable_page_title'])){
	$show_title=$bacardi['enable_page_title'];
}else{
	$show_title=true;
}
if(isset($bacardi['page_title_image']['url']) && !empty($bacardi['page_title_image']['url'])){
	$background_image = $bacardi['page_title_image']['url'];
}else{
	$background_image = '';
}
if(isset($bacardi['page_title_head']) && !empty($bacardi['page_title_head'])){
	$title = '<h1>'.$bacardi['page_title_head'].'</h1>';
}elseif( !is_home()){	 
	$title = '<h1>'.get_the_title().'</h1>';
}elseif( is_home()){
	$title = '<h1>Blog</h1>';
}

if($show_title): //showtitle ?>
	
	<header class="entry-header <?php echo ($background_image)? 'image' : '' ?>" style="background-image: url('<?=$background_image?>')">
		<?php echo $title; ?>
	</header><!-- .entry-header -->	

<?php endif; //showtitle ?> 