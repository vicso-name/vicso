<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package vicso
 */

get_header();
?>
<div class="container-guts search-page">
<div class="container">
        <h2 class="favorite-posts__title"><span>Search Results</span></h2>
    </div>
	<div class="article-grid">

		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

	</div>
</div>

<?php
get_footer();
