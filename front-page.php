<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Base_Install
 */
?>

<?php if ( is_home() && is_front_page() ) : // If front page is set to show latest posts, get this markup ?>
	<?php 
		// get page content
		while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', 'page' );
			/* // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
			comments_template();
			endif; */
		endwhile; // End of the loop.
		// the_posts_navigation(); // If front page is set to show latest posts, get the default post navigation
		baseinstall_numeric_posts_nav(); // Numbered pagination links
	?>

<?php else : // If front page is set to show a static page, show this markup before content area ?>
	<div class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<?php 
					// get page content
					while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
						/* // If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
						comments_template();
						endif; */
					endwhile; // End of the loop.
					// the_posts_navigation(); // If front page is set to show latest posts, get the post navigation
				?>

			</main>
		</div>
		<?php get_sidebar( baseinstall_template_base() ); ?>
	</div>

<?php endif; ?>

