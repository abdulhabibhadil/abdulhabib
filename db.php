<?php

$koneksi = mysqli_connect("localhost", "root", "", "belajar_loginapp");

if(!$koneksi){
	echo "connection failed";
}
