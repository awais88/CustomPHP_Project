<?php 
/*******************/
/* Main Index File */
/*******************/


require_once(dirname(__File__)."/resources/config.php");               /* Settings File */
require_once(dirname(__File__)."/resources/libraries/functions.php");  /* Functions File */

?>
<div class="stable_the_height">
	<div class="header_block">
		<?php require_once(TEMPLATE_PATH."header.php"); /* Header File */ ?>
	</div><!-- header_block -->

	<div class="primary_content wrapper">
		<div class="main_content">
    		<?php get_the_layout(); ?>
		</div><!-- wrapper -->
		<div class="side_bar">
    		<?php require_once(TEMPLATE_PATH."side_bar.php"); ?>
		</div><!-- wrapper -->
	</div>

	<div class="footer_block wrapper">
		<?php require_once(TEMPLATE_PATH."footer.php");  /* Footer File */ ?>
	</div><!-- footer_block -->
</div><!-- stable_the_height -->
