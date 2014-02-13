</div><!-- #wrapper -->

<div id="footer-contact">
	<div>
		<div class="footer-contact-header"><h2>Contact</h2></div>
		<div class="footer-contact-content">
			<p>Interested in learning more about the LifeMed ID solutions or seeing a demo? <a class="footer-contact-link" href="">Let us know how to contact you</a> and we’ll be in touch.</p>
		</div>
		<a href="" class="footer-contact-btn">Lets Talk <?php echo '<img class="footer-contact-btn-down-caret" src="'.get_template_directory_uri().'/images/down-caret.png" />'?> </a>
	</div>
</div>

<?php 
	if (!ot_get_option('footer_widgets')) {
		get_sidebar('footer'); 
	} 
	
	if (!ot_get_option('copyright_bar')) {
		echo '<div id="copyright-wrapper">
				<div id="copyright-container" class="size-wrap">
					<div id="copyright" >',
						ot_get_option('copyright_area_text'),
					'</div>';
					echo '<img id="footer-logo" src="'.get_template_directory_uri().'/images/lmid-logo-footer.png" />';
					wp_nav_menu( array('theme_location' => 'footer', 'container_id' => 'footer-menu', 'fallback_cb' => false));

					echo '<div class="clear"></div>
				</div>
		</div>';
	}
?>
</div><!--#layout-wrapper-->
<?php wp_footer(); ?>
</body>
</html>
<?php dumpTraceToConsole(); ?>
