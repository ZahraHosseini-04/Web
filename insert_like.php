<?php

$h = "localhost";
$u = "user1";
$p = "user1";
$n = "store";

$s1 = mysqli_connect($h, $u, $p, $n);
$s2 = "insert into likes (table_no) values ('$_POST[like]')";
$s3 = mysqli_query($s1,$s2);

if($s3){
	echo "امتیاز شما با موفقیت ثبت شد";
}
else{
	echo "خطا در ثبت امتیاز";
}

?>