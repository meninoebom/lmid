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