<?php
if(isset($_POST['submit'])){
	
	$name = array("alexwawo", "maria", "Johndoe", "Janedoe", "nathan");
	$minimum = 5;
	$maximum = 10;
	
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	
	if(strlen($username) < $minimum){
		echo "Username harus memiliki panjang 5 atau lebih";
	}
	
	if(strlen($username) < $maximum){
		echo "username tidak boleh lebih panjang dari 10";
	}
	
	if(!in_array($username, $name)){
		echo "maaf, akses di tolak";
	}else{
		echo "selamat datang";
	}
		
	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Forms</title>
</head>
<body>
	
<form action "form.php" method="post">
	<input type="text" name="username" placeholder="Enter username" />
	<input type="password" name="password" placeholder="enter password" />
	<br />
	<input type="submit" name="submit" />
</form>
	
</body>
</html>