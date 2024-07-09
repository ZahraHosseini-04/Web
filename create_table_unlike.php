<?php

$h = "localhost";
$u = "user1";
$p = "user1";
$n = "store";

$s1 = mysqli_connect($h, $u, $p, $n);
$s2 = "create table unlikes (ID INT NOT NULL AUTO_INCREMENT, table_no INT, PRIMARY KEY (ID) )";
$s3 = mysqli_query($s1,$s2);

if($s3){
	echo "create table";
}
else{
	echo "error";
}

?>