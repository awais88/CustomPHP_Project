<?php
/************************************************************/
/*** This file contains all "Main Settings" for this site ***/
/************************************************************/


   	$config = array( 
		"db" => array( "DB_name"     => "Insert DB name here",
			           "DB_username" => "Insert DB user-name here",
			           "DB_password" => "Insert DB password here",
			           "DB_server"   => "localhost",
			),
		"urls"  => array(  "base_url" => "http://tartantraffic.com/CustomProject/" ),
		"paths" => array(
		                  "resource_path" => "http://".$_SERVER["HTTP_HOST"]."/CustomProject/resources/",
		                  "js_path" => "http://".$_SERVER["HTTP_HOST"]."/CustomProject/js/" ,
						  "css_path" => "http://".$_SERVER["HTTP_HOST"]."/CustomProject/css/" )

	);

/*  Some most commonly used paths */
define("TEMPLATE_PATH", dirname(__FILE__)."/templates/");   /* Templates Path */
define("IMG_PATH", "http://".$_SERVER["HTTP_HOST"]."/CustomProject/img/");   /* Images Path */
/*  Error Reporting  */

ini_set("error_reporting","1");

?>

