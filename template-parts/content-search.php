<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vicso
 */

?>

<?php
	$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    list($url, $width, $height) = $thumbnail; // Assign variables as if they were an array
?>

<div class="article-item">
	<div class="article-item__img">
		<img class="img-responcive" src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
	</div>
	<div class="article-item__content">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php the_excerpt_custom(140); ?></p>
		<a class="read-more" href="<?php the_permalink(); ?>">Read more</a>
	</div>
</div>
