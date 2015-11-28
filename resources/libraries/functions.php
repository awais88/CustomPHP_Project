a<?php

/*** Functions File ***/

require_once(dirname(__FILE__)."/../config.php"); /* Settings File */

function get_the_layout($page="home.php"){  /* $page parameter contains the name of the file */
    
	$File_Path = TEMPLATE_PATH.$page;
	if($page){
		if(file_exists($File_Path)){
			require_once($File_Path);
		}else{
			echo '<img src="'.IMG_PATH.'404.jpg" >';	
		}
	}else{ 
		echo '<img src="'.IMG_PATH.'404.jpg" id="logo_img">';
	}


} 

?>
