
<?php  

require_once(dirname(__FILE__)."/../config.php");  // Add Settings File  ?>

<!DOCTYPE html>
<html>
 <head>
 	<link rel="stylesheet" type="text/css" href="<?php echo $config["paths"]["css_path"]; ?>stylesheet.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 </head>

 <body>

   <header>
   		<div class="logo">
   			<img src="<?php echo IMG_PATH; ?>logo.jpg" id="logo_img">
   		</div><!-- logo -->
     	<div class="menu">
     		<ul id="top_menu">
     			<li><a href="#">Home</a></li>
     			<li><a href="#">About Us</a></li>
     			<li><a href="#">Contact Us</a></li>
     		</ul><!-- top_menu -->
   		</div><!-- menu -->
      <div class="clear"></div>
    </header><!-- Header Ends -->
  
