<?php
/**
 * @package Bacardi
 */
?>

<?php if (get_post_thumbnail_id($post->ID)): ?>
<header class="entry-header image" style="background-image: url('<?php echo the_post_thumbnail_url($post->ID) ?>')">
	<?php the_title('<h1>', '</h1>'); ?>
</header><!-- .entry-header -->
<?php else: ?>
<header class="entry-header">
    <?php the_title('<h1>', '</h1>'); ?>
</header><!-- .entry-header -->
<?php endif ?>