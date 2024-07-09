<?php

$host = "localhost";
$user = "user1";
$pass = "user1";
$db = "store";

$s1 = mysqli_connect($host, $user, $pass, $db);
$s2 = "select comment from comments";
$s3 = mysqli_query($s1, $s2);

echo "<table style='background: #F7C4CD' border = '2px' width = '50%' align = 'center'> <tr> <th style='background: #DCB675; font-size : 30px;'>نظرات</th></tr>";

while ($s4 = mysqli_fetch_array($s3)){
    echo "<tr> <td align = 'center' style='font-size : 20px'> $s4[comment] </td></tr>";
}

echo "</table>";

?>

<html>
<head>
	<style>
	

	@keyframes btn-anim1 {
	  0% {
		left: -100%;
	  }
	  50%,100% {
		left: 100%;
	  }
	}



	@keyframes btn-anim2 {
	  0% {
		top: -100%;
	  }
	  50%,100% {
		top: 100%;
	  }
	}



	@keyframes btn-anim3 {
	  0% {
		right: -100%;
	  }
	  50%,100% {
		right: 100%;
	  }
	}


	@keyframes btn-anim4 {
	  0% {
		bottom: -100%;
	  }
	  50%,100% {
		bottom: 100%;
	  }
	}




	button {
		margin-left: 85px;
	  margin-top: 30px;
	  padding: 0;
	  border: none;
	  outline: none;
	  color: inherit;
	  width: 120px;
	  height: 47px;
	  cursor: pointer;
	  font-size: 16px;
	  position: relative;
		background-color: #DCB675;
	}

	.btn {
	   border: 1px solid black;
		border-radius: 12px;
	  animation: 0.5s collision ease-in;
	  overflow: hidden;
	  transition: 0.3s 0.1s;
	}

	.btn:active {
	  background: rgba(255, 255, 255, 0.5);
	}

	.btn p {
	  position: relative;
	  color: black;
	  font-weight: 700;
	  font-size: 1.1rem;
	  z-index: 5;
	  transition: 1s ease-in-out;
	}

	.btn:hover p {
	  color: #fff;
	}

	.btn:before, .btn:after {
		content: "";
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  height: 20px;
	  width: 20px;
	  border-radius: 50%;
	  background-color: black;
	}

	.btn:hover:before {
	  animation: collisionLeft 1s both;
	  animation-direction: alternate;
	}

	.btn:hover:after {
	  animation: collisionRight 1s both;
	  animation-direction: alternate;
	}

	.btn:before {
	  left: -30%;

	}
	.btn:after {
	  left: 125%;
	}

	@keyframes collisionLeft {
	  0% {
		left: -30%;
		width: 20px;
		height: 20px;
	  }
	  50% {
		left: 50%;
		width: 40px;
		height: 40px;
	  }
	  100% {
		left: 50%;
		width: 300px;
		height: 300px;
	  }
	}
	@keyframes collisionRight {
	  0% {
		left: 125%;
		width: 20px;
		height: 20px;
	  }
	  50% {
		left: 50%;
		width: 40px;
		height: 40px;
	  }
	  100% {
		left: 50%;
		width: 300px;
		height: 300px;
	  }
	}

	.btn-3 {
	  filter: url("#goo");
	  border: none;
	  background: transparent;
	}

	</style>
	
	
	</head>
<body>
	<div style="padding-left: 610px; padding-top: 430px;" >
<button type="submit" class="btn" style="background-color: #DCB675; border: 1px; border: 1px solid black;
	border-radius: 12px;" onclick="location.href='register_comments.html'">
		<p>ثبت نظر</p>
	</button>
</div>
	
	
	</body>

</html>