<?php
/**
 * @package Bacardi
 */
global $bacardi;
global $post;
// var_dump($bacardi);
?>
<?php 
if(isset($bacardi['enable_page_title']) && !empty($bacardi['enable_page_title']) && !is_single()){
	$show_title=$bacardi['enable_page_title'];
}elseif(is_single()){
	$show_title=redux_post_meta( THEME_OPT, get_the_ID(), 'enable_page_title');	
	// var_dump($show_title);
}else{
	$show_title=true;
}
if(isset($bacardi['enable_overlay']['rgba']) && !empty($bacardi['enable_overlay']['rgba'])){
	echo "<style type='text/css'>
			.entry-header:after{ background-color: ".$bacardi['enable_overlay']['rgba']." }
		</style>";
}elseif (is_single() && $overlay = redux_post_meta( THEME_OPT, get_the_ID(), 'enable_overlay')) {
	echo "<style type='text/css'>
			.entry-header:after{ background-color: ".$overlay['rgba']." }
		</style>";
}
if(isset($bacardi['page_title_image']['url']) && !empty($bacardi['page_title_image'])){
	$background_image = $bacardi['page_title_image'];
}elseif(is_single()){
	$background_image = redux_post_meta( THEME_OPT, get_the_ID(), 'page_title_image');	
}else{
	$background_image = '';
}

if(isset($bacardi['page_title_head']) && !empty($bacardi['page_title_head'])){
	$title = '<h1>'.$bacardi['page_title_head'].'</h1>';
}elseif( is_page() || is_single()){	 
	if(redux_post_meta( THEME_OPT, get_the_ID(), 'page_title_head'))
		$title = '<h1>'.redux_post_meta( THEME_OPT, get_the_ID(), 'page_title_head').'</h1>';
	else
		$title = '<h1>'.get_the_title().'</h1>';
}elseif( is_home()){
	$title = '<h1>Blog</h1>';
}elseif( is_search()){
	$title = '<h1 class="page-title">'. __( 'Search Results for:', 'bacardi' ) . '<span>' . esc_html( get_search_query() ) . '</span></h1>' ; 
}else{
	$title = '<h1 class="page-title">'.get_the_archive_title().'</h1>';
}

if($show_title): //showtitle ?>
	
	<header class="entry-header <?php echo (isset($background_image['url']) && $background_image['url']!='')? 'image' : '' ?>" style="background-image: url('<?=(isset($background_image['url']))? $background_image['url'] : '' ?>')">
		<?php echo $title; ?>
	</header><!-- .entry-header -->	

<?php endif; //showtitle ?> 