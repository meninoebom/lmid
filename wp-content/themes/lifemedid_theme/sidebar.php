<div id="default-widget-area" class="widget-area">
	<ul class="xoxo">
	<?php dynamic_sidebar( 'primary-widget-area' ); ?>
	<?php 
	$related_links = rwmb_meta( 'lmid_url' );
	$num_links = count($related_links);
	if ($num_links > 0) { ?>
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
	</ul>
</div>


