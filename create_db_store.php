<?php

$h = "localhost";
$u = "user1";
$p = "user1";

$s1 = mysqli_connect($h,$u,$p);
$s2 = "create database store";
$s3 = mysqli_query($s1,$s2);

if($s3){
	echo "create database";
}
else{
	echo "error";
}

?>