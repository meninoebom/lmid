<?php
/**
 * The template for displaying search forms
 */
?>
	<div class="searchform-wrapper">
		<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div class="fieldcontainer">
				<input id="s" onfocus="this.value=''" onblur="this.value='<?php _e('SEARCH...', 'kickstart');?>'" type="text" tabindex="1" value="<?php _e('SEARCH...', 'kickstart');?>" name="s" class="s" />
			</div>
		</form>
	</div>