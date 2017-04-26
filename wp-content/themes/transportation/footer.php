<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package transportation
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'transportation' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'transportation' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'transportation' ), 'transportation', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/js/vendor/jquery.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/js/vendor/foundation.min.js"></script>
<script type="text/javascript">
	$(document).foundation();
</script>

<?php wp_footer(); ?>

</body>
</html>
