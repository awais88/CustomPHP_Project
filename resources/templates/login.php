<h1> Login </h1>
<div class="login_block">
	<form action="#" method="post" id="login_form">
		<label>Account UserName :</label><input type="text" name="username" id="username" value="">
    	<label>User Password :</label><input type="text" name="password" id="pass" value="">
		<input type="submit" id="submit" value"Sign Up" >
	</form>
</div><!-- login_block -->

<?php

 $UserName = $_POST["username"];
 $UserPassword = $_POST["password"];
 

 if($UserName & $UserPassword){
 	$login_result = login($UserName,$UserPassword);	
 }
 if($login_result == 1){
 	echo " Sucessful Login ";
 }else{
 	echo "<a href='#'>Click here to Sign Up </a>";	
 }
 

?>
