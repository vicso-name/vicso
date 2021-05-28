<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vicso
 */

get_header();
?>


<div class="main_container">

	<div class="container">

		<?php

			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'single');

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile;
		?>

	</div>

</div>

<?php
get_footer();
