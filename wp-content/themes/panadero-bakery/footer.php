<?php
/**
 * The template for displaying the footer
 * 
 * @subpackage panadero-bakery
 * @since 1.0
 * @version 0.1
 */

?>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<svg class="footer-separator-svg footer-separator-svg__waves_svg_separator" xmlns="http://www.w3.org/2000/svg" version="1.0" width="1200" fill="#fff" height="30" viewBox="0 0 1200 30" preserveAspectRatio="none"><path d="M0,0S1.209,1.508,200.671,7.031C375.088,15.751,454.658,30,600,30V0H0ZM1200,0s-90.21,1.511-200.671,7.034C824.911,15.751,745.342,30,600,30V0h600Z"></path></svg>
			<div class="container-fluid">
				<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
			</div>
			<div class="clearfix"></div>
			<div class="copyright"> 
				<div class="container">
					<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
				</div>
			</div>
		</footer>
		<?php if (get_theme_mod('panadero_bakery_show_back_totop',true) != ''){ ?>
			<button role="tab" class="back-to-top"><span class="back-to-top-text"><?php echo esc_html('Top', 'panadero-bakery'); ?></span></button>
		<?php }?>
	</div>
</div>
		
<?php wp_footer(); ?>

</body>
</html>