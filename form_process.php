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