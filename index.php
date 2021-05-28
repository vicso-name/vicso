<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vicso
 */

get_header();
?>

<div class="main_container">

	<div class="container">
		<div class="page-header">
            <h1 class="page-header__title">Are you a beginner WordPress developer, and do you look for some WordPress and WooCommerce useful tutorials? Congratulations! You found what you were looking for.</h1>
        </div>
	</div>

	<div class="container-guts">
		<div class="article-grid">
			<?php
				if ( have_posts() ) :

					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
			?>
		</div>	
	</div>
</div>

<?php
get_footer();
