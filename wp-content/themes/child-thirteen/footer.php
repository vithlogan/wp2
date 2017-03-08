<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
			<!-- Updated footer. Removed original Wordpress and Twenty Thirteen Theme branding. Added Copyright, the year, blog name and All rights reserved.  -->
				<p>&copy; Copyright 
				<?php echo date(Y); ?>
				<?php bloginfo('name'); ?> All rights reserved.</p>

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>