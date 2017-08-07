<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Base_Install
 */

?>

	</div><!-- #content -->
	</div><?php // close #content-wrap ?>
	
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'baseinstall' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'baseinstall' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'baseinstall' ), 'baseinstall', '<a href="https://www.mikejandreau.net/">Mike Jandreau</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<a id="scroll-to-top" href="#page"></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
