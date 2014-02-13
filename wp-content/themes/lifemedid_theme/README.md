#Custom Header
In the 'edit page' view of the admin choose "Custom Header Element (FULL)" from the "Select header element"

content box within the page edit view in the Wordpress admin use markup based on the following example:

	<div>
	<h2>Solutions</h2>
	<span class="subtitle">No matter your size, if you help patients, we help you.</span>
	</div>


To make preview like title area image with scroll effect go to Theme Options/Background Options/Title area background and upload the image (image proportions should be at least 3:2 or wider & height at least 250px). Then set position to Fixed and alignment to Center Top. Title area background type - Scale image.
- file://.../themeforest-4538019-kickstart-retina-responsive-multipurpose-theme/User_Manual/index.html#!/theme_features_shortcodes


#Plugins

	Included the URL & Path Shortcodes plugin so that images can be added to the shortcode generated page content like in this example:
		[column size="1-4" last="0"]<a href="#"><img src="[get_template_directory_uri]/images/animation-thumbnail.png" /></a>[/column]

		 Below is a list of available shortcodes:

		[home_url]
		[site_url]
		[admin_url]
		[network_home_url]
		[network_site_url]
		[network_admin_url]
		[content_url]
		[plugins_url]
		[wp_upload_dir]
		[get_template_directory_uri]
		[get_stylesheet_directory_uri]
		[get_stylesheet_uri]
		[get_theme_root_uri]
		[get_stylesheet_directory]
		[get_theme_root]
		[get_theme_roots]
		Note that you can pass in parameters that are available to the corresponding WordPress functions. For example:

		[home_url path="faq" scheme="https"]


For Custom Meta Boxes

-https://github.com/rilwis/meta-box/blob/master/demo/demo.php

	new meta boxes are created in .../lifemedid_theme/config-meta-boxes.php


#Revolution Slider

The slider's docs are in the theme itself or at least in the zip file downleaded from the theme creators

#Blank white screen when trying to access wp-admin on staging
http://wordpress.org/support/topic/that-darn-message-again-warning-cannot-modify-header-information