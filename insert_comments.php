<?php

$h = "localhost";
$u = "user1";
$p = "user1";
$n = "store";

$s1 = mysqli_connect($h, $u, $p, $n);
$s2 = "insert into comments (name, table_no, email, comment) values ('$_POST[name]', '$_POST[table_no]', '$_POST[email]', '$_POST[comment]')";
$s3 = mysqli_query($s1,$s2);

if($s3){
	echo "نظر شما با موفقیت ثبت شد";
}
else{
	echo "خطا در ثبت نظر!";
}

?>