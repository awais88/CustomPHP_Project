<?php

//echo "Functions File";

/*** Functions File ***/
require_once(dirname(__FILE__)."/../config.php"); /* Settings File */
require_once(dirname(__FILE__)."/db_connection.php");  /* DB Connection File */

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

function check_user_login(){


}


/******** DB Functions **********/


function register_user($name,$pass,$mail,$fullname){

global $conn;  /* global is used for Variable Scope */

	$check_username_mail = check_the_username($name,$mail);
if($check_username_mail == 1){
	echo "Username/mail already exists";
}	else{

	$sql = "INSERT INTO users (user_name,user_pass,user_full_name,user_email) 
	VALUES ('".$name."','".$pass."','".$fullname."','".$mail."' )";

	$retval = $conn->query($sql);
	
	if ($retval) {
	    echo "Sign Up Successfully";
	} else {	
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn).$conn->connect_error;
	}
}
}/* function end */

function check_the_username($name,$mail){

global $conn; /* global is used for Variable Scope */

$sql = "SELECT user_name,user_email FROM users WHERE user_name ='".$name."' OR user_email='".$mail."'";
$result = $conn->query($sql);

if($result->num_rows > 0){
	return 1;
}else{
	return 0;
}

}/* function end */

function login($username,$pass){

global $conn; /* global is used for Variable Scope */

$sql = "SELECT user_name FROM users WHERE user_name ='".$username."' AND user_pass='".$pass."'";
$result = $conn->query($sql);
if($result->num_rows > 0){
	return 1;
}else{
	return 0;
}

}

?>
