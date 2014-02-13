<div id="default-widget-area" class="widget-area">
	<ul class="xoxo">
	<li>
		<h3 class="widget-title"><span>Get Started</span></h3>
		<div class="textwidget">
			<ul class="get-started">
				<li><a href="<?php echo site_url(); ?>/?page_id=277&subject=demo" class="request-demo" /><img src="<?php echo get_template_directory_uri(); ?>/images/icon-request-demo.png" />Request Demo</a></li>
				<li><a href="<?php echo site_url(); ?>/savings-calc.xls" class="calculate-savings" /><img src="<?php echo get_template_directory_uri(); ?>/images/icon-savings-calc.png" />Calculate Savings</a></li>
				<li><a href="<?php echo site_url(); ?>/?page_id=280" class="download-materials" /><img src="<?php echo get_template_directory_uri(); ?>/images/icon-download.png" />Download Materials</a></li>
			</ul>
		</div>
	</li>
	<?php 
	$related_links = rwmb_meta( 'lmid_url' );
	$num_links = count($related_links);
	if ($related_links && $num_links > 0) { ?>
	<li id="text-7" class="widget-container widget_text">
		<h3 class="widget-title"><span>Related Links</span></h3>	
		<div class="textwidget">
			<ul class="related-links">
				<?php foreach($related_links as $link) { ?>
					<li><a href="<?php echo $link ?>"><?php echo $link ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</li>
	<?php }?>
	<?php dynamic_sidebar( 'primary-widget-area' ); ?>
	</ul>
</div>


