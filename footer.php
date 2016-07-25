<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Point-B
 */
?>
		</div>
	<!-- .site-main --></div>

	<?php
		/* A sidebar in the footer? Yep. You can can customize
		 * your footer with up to four columns of widgets.
		 */
		get_sidebar( 'footer' );
	?>

	<footer class="site-footer" role="contentinfo">
		<div class="clearfix container">
			<div class="row">
				<div class="col-sm-12 site-info">
					<center>
						<a href="https://twitter.com/claudebueno" title="Follow me on Twitter" target="_blank"><i class="fa fa-twitter" style="font-size:24px;color:#FFFFFF; margin-left:10px; margin-right:10;"></i></a>
						<a href="https://www.facebook.com/claude.bueno" title="Follow me on Facebook" target="_blank"><i class="fa fa-facebook" style="font-size:24px;color:#FFFFFF;margin-left:10px; margin-right:10;"></i></a>
						<a href="https://www.linkedin.com/in/claudebueno" title="Follow me on LinkedIn" target="_blank"><i class="fa fa-linkedin" style="font-size:24px;color:#FFFFFF;margin-left:10px; margin-right:10;"></i></a>
						<a href="https://plus.google.com/+ClaudeBUENO/" title="Follow me on Google+" target="_blank"><i class="fa fa-google-plus" style="font-size:24px;color:#FFFFFF;margin-left:10px; margin-right:10;"></i></a>
						<a href="https://github.com/claudebueno" title="Follow me on GitHub" target="_blank"><i class="fa fa-github" style="font-size:24px;color:#FFFFFF;margin-left:10px; margin-right:10;"></i></a>
						<a href="https://bitbucket.org/claudebueno/" title="Follow me on Bitbucket" target="_blank"><i class="fa fa-bitbucket" style="font-size:24px;color:#FFFFFF;margin-left:10px; margin-right:10;"></i></a>
					</center>
				</div>
		</div>
				<div class="row">
					<div class="col-sm-6 site-info">
						&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. <?php _e( 'All rights reserved', 'pointb' ); ?>.
					<!-- .site-info --></div>

					<div class="col-sm-6 site-credit">
						Thème Wordpress <a href="http://www.claudebueno.com/">Point-B</a> réalisé par <a href="http://www.claudebueno.com/" target="_blank">Claude BUENO</a>
					<!-- .site-credit --></div>
				</div>
		</div>
	<!-- .site-footer --></footer>
<!-- .site --></div>

<?php wp_footer(); ?>

</body>
</html>
