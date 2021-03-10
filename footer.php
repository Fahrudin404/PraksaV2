<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fahrudin
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="slikeFooter"><div class="link"><a href="htttps://www.facebook.com/"><img src="https://freepngimg.com/thumb/facebook/24683-2-facebook-logo-photos-thumb.png" alt="" height="50px" width="50px"></a></div>
							 <div class="link"><a href="https://www.instagram.com/"><img src="https://freepngimg.com/thumb/instagram/8-2-instagram-png-clipart.png" alt="" height="50px" width="50px"></a></div>
							 <div class="link"><a href="https://www.youtube.com/"><img src="https://freepngimg.com/thumb/youtube/8-2-youtube-transparent-thumb.png" alt="" height="50px" width="50px"></a></div>
							 <div class="link"><a href="https://twitter.com/?lang=en"><img src="https://freepngimg.com/thumb/twitter/4-2-twitter-png-hd-thumb.png" alt="" height="50px" width="50px"></a></div>
	</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fahrudin' ) ); ?>"style="color:white">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'fahrudin' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'fahrudin' ), 'fahrudin', '<a href="http://underscores.me/" style="color:white" >Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
