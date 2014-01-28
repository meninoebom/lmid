</div><!-- #wrapper -->

<div id="footer-contact">
	<h2>Contact</h2>
	<p></p>
	<p></p>
</div>

<div id="footer-main">
	<div class="footer-column">
		<h3>LifeMed ID</h3>
		<p>1.800.637.4398<br />LifeMedID@LMID.com</p>
		<p>1009 Address Street<br />Sacramento CA, 94039</p>
		<div id="social-icons">
			<h3>Get Social With Us</h3>
			<li>facebook</li>
			<li>twitter</li>
			<li>basketball</li>
		</div>
	</div>
	<div class="footer-column">
		<h3>Products</h3>
		<ul>
			<li><a href="">SecureReg ID&trade;</a></li>
			<li><a href="">SecureReg Integrated&trade;</a></li>
			<li><a href="">SecureReg Link&trade;</a></li>
			<li><a href="">SecureReg EMS Gateway&trade;</a></li>
			<li><a href="">Patient Identity Device&trade;</a></li>
			<li><a href="">SecureHub Patient&trade;</a></li>
		</ul>
	</div>
	<div class="footer-column">
		<h3>Solutions</h3>
		<ul>
			<li><a href="">Patient Identity Management</a></li>
			<li><a href="">Workflow Integration</a></li>
			<li><a href="">HL7 Expertise</a></li>
			<li><a href="">Patient Access</a></li>
			<li><a href="">Implementation Phases</a></li>
		</ul>
	</div>
	<div class="footer-column">
		<h3>Resource Center</h3>
		<ul>
			<li><a href="">Downloads</a></li>
			<li><a href="">Brochures</a></li>
			<li><a href="">White Papers</a></li>
		</ul>
	</div>
</div>
<div id="footer-logo-container">
	<p></p>
	<?php echo '<img id="footer-logo" src="'.get_template_directory().'images/lmid_logo.png" />' ?>
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
<?php 
dumpTraceToConsole(); 
?>