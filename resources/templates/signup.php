<h1> Sign Up Form </h1>
<div class="login_block">
	<form action="#" method="post" id="login_form">
		<label>Account User Name :</label><input type="text" name="username" id="username" value="">
    	<label>User Name (Full):</label><input type="text" name="user_full_name" id="user_full_name" value="">
    	<label>User Email :</label><input type="text" name="mail" id="mail" value="">
    	<label>User Password :</label><input type="text" name="password" id="pass" value="">
		<input type="submit" id="submit" value"Sign Up" >
	</form>
</div><!-- login_block -->

<?php

 $UserName = $_POST["username"];
 $UserMail = $_POST["mail"];
 $UserPassword = $_POST["password"];
 $UserFullName = $_POST["user_full_name"];

 if($UserName & $UserMail & $UserPassword){
 	register_user($UserName,$UserPassword,$UserMail,$UserFullName);	
 }
 

?>
