<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
<meta charset="utf-8">
<title>Home</title>
<link href="home.css" type="text/css" rel="stylesheet">
<link href="footer.css" type="text/css" rel="stylesheet">
<!-- <link href="footer.html" rel="import"> -->
</head>

<body style="font-size: 20px;">

<header style="width: 100%; height:75px; background: #F7C4CD">

	<img style="width: 40px; height: 40px" src="image/guide.png" id="head_pic1"/>
  	<input type="checkbox" id="open-modal" class="modal__toggler"  />
 	<label class="modal__mask" for="open-modal"></label>
  <div class="modal">
    <label class="modal__close" for="open-modal"></label>
    <div class="modal__content">
      <h1 class="modal__title">راهنمای کاربر</h1>
      <h4 class="p"> به رستوران لاوان خوش آمدید. این راهنما به شما کمک میکند تا با فرآیند سفارش دهی آشنا شده و تجربه رضایتمندی از ما داشته باشید.</h4>
		
      <p class="p">
		  1- وارد سایت شده و با توجه به سفارشات خود، منو را انتخاب کرد. </p>
      <p class="p">2- زمانی که سفارش مد نظر را پیدا کردید با کلیک روی دکمه + سفارش مدنظر را به فهرست اضافه میکنید.</p>
		<p class="p">3- بعد از انتخاب تمام سفارشات،برای دیدن سفارشات خود و تحویل آن به همکاران ما، دکمه یادداشت های من را از بالای صفحه انتخاب کنید.</p>
    </div>
  </div>

	
<label class="btn_guid demo-button" for="open-modal"></label>
  
	
	
<a href="#about">
<img style="width: 40px; height: 40px" src="image/info.png" id="head_pic2"/></a>
<a href="#contact">
<img style="width: 40px; height: 40px" src="image/contact.png" id="head_pic3"/></a>
<img src="image/logo.jpg" width="165" id="img1" style="width: 80px; height: 75px; direction:rtl"/>
</header>

<!--<div style="width: 638px; height: 80px; text-align: right; color: black; font-size: 20px; font-family: Inter; font-weight: 500; word-wrap: break-word">رستوارن لاوان<br/></div>-->
<hr  style="size:2px; width:100%"></hr>



	<table id="t_head"  style="width: 100%; height: 160px; background: #DCB675" dir="rtl">
		<div id="f_head"><tr>
			<td>
				<div id="sub_logo">
					<img style="width: 160px; height: 120px" src="image/Lavan.png" id="rating"  alt="لاوان"/>
				</div>
			</td>
				<td>
				<a href="#popular">
					<img style="width: 90px; height: 90px" src="image/rating.png" id="rating" alt="پر طرفدار"/></a>
			</td>
			<td>
				<a href="#main_food">
					<img style="width: 90px; height: 90px" src="image/meal.png" id="meal" alt="غذای اصلی"/></a>
			</td>
			<td>
				<a href="#appetizer">
					<img style="width: 90px; height: 90px" src="image/snack.png" id="snack" alt="پیش غذا"/></a>
			</td>
			<td>
				<a href="#saladd">
					<img style="width: 90px; height: 90px" src="image/salad.png" id="salad" alt="سالاد"/></a>
			</td>
			<td>
				<a href="#beverages">
					<img style="width: 90px; height: 90px" src="image/cocktail.png" id="cocktail" alt="نوشیدنی"/></a>
			</td>
		</tr></div>
		<tr><div id="s_head">
			<td>
				<div></div>
			</td>
			<td>
				<div id="text_h">پر طرفدار</div>
			</td>
            
			<td>
				<div id="text_h">غذای اصلی</div>
			</td>
			<td>
				<div id="text_h">پیش غذا</div>
			</td>
			<td>
				<div id="text_h">سالاد</div>
			</td>
			<td>
				<div id="text_h">نوشیدنی</div>
			</td>
			
		</tr></div>
	</table>


	
	<div id="hr1">
	<table>
		<tr>
			<td>
				<canvas id="l" width="620px" height="2px"></canvas>
			</td>
			<td id="text">
				<div id="popular"><h2>پر طرفدار</h2> </div> 
			</td>
			<td>
				<canvas id="r" width="620px" height="2px"></canvas>
			</td>
		</tr>
	</table></div>
	<br/><br/>

	<div id="div_menu">
    <div class="c1">
        <img src="image/Burger.jpg" id="c1_i"/>
        <button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
		<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
        <button id="c1_bboxshop"></button>
        <button id="c1_bplus"></button>
        <button id="c1_bminus"></button>
		<div id="c1_text"></div>
		<div id="c1_name">رویال برگر</div>
		<div id="c1_price">250,000</div>
		<div id="c1_des">مواد تشکیل دهنده:<br/>همبرگر<br/>پنیر چدار <br/>کالباس و ...</div>
		</div>
    </div>







	<div class="c2">
        <img src="image/stake.jpg" id="c1_i"/>
        <button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
		<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
        <button id="c1_bboxshop"></button>
        <button id="c1_bplus"></button>
        <button id="c1_bminus"></button>
		<div id="c1_text"></div><div id="c1_name">استیک گوشت</div>
		<div id="c1_price">500,000</div>
		<div id="c1_des">مواد تشکیل دهنده:<br/>گوشت راسته<br/>سس خردل<br/>سس بابیکیو و...</div></div>
    </div>







	<div class="c3">
        <img src="image/shutter.jpg" id="c1_i"/>
        <button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
		<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
        <button id="c1_bboxshop"></button>
        <button id="c1_bplus"></button>
        <button id="c1_bminus"></button>
		<div id="c1_text"></div><div id="c1_name">مرغ سوخاری</div>
		<div id="c1_price">250000</div>
		<div id="c1_des">مواد تشکیل دهنده:<br/>ران مرغ<br/>بال مرغ<br/>سیب زمینی و...</div></div>
    </div>
</div><br/><br/><br/>


	<div id="hr1">
	<table>
		<tr>
			<td>
				<canvas id="l" width="620px" height="2px"></canvas>
			</td>
			<td id="text">
				<div id="main_food"><h2>غذای اصلی</h2> </div>
			</td>
			<td>
				<canvas id="r" width="620px" height="2px"></canvas>
			</td>
		</tr>
	</table></div>
	<br/><br/>




	<div id="div_menu">
		<div class="c1">
			<img src="image/shutter.jpg" id="c1_i"/>
			<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
			<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
			<button id="c1_bboxshop"></button>
			<button id="c1_bplus"></button>
			<button id="c1_bminus"></button>
			<div id="c1_text"></div><div id="c1_name">مرغ سوخاری</div>
			<div id="c1_price">250000</div>
			<div id="c1_des">مواد تشکیل دهنده:<br/>ران مرغ<br/>بال مرغ<br/>سیب زمینی و...</div></div>
		</div>
	





		<div class="c2">
			<img src="image/Curry.jpg" id="c1_i"/>
			<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
			<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
			<button id="c1_bboxshop"></button>
			<button id="c1_bplus"></button>
			<button id="c1_bminus"></button>
			<div id="c1_text"></div>
			<div id="c1_name">خورشت کاری</div>
			<div id="c1_price">140,000</div>
			<div id="c1_des">مواد تشکیل دهنده:<br/>سینه مرغ<br/>ماست<br/>خامه و...</div></div>
		</div>
	





		<div class="c3">
			<img src="image/ginger .jpg" id="c1_i"/>
			<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
			<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
			<button id="c1_bboxshop"></button>
			<button id="c1_bplus"></button>
			<button id="c1_bminus"></button>
			<div id="c1_text"></div>
			<div id="c1_name">جوجه</div>
			<div id="c1_price">170,000</div>
			<div id="c1_des">مواد تشکیل دهنده:<br/>سینه مرغ<br/>سس خردل<br/>ماست و ...</div>
			</div>
		</div>






		<div class="c4">
			<img src="image/food4.jpg" id="c1_i"/>
			<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
			<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
			<button id="c1_bboxshop"></button>
			<button id="c1_bplus"></button>
			<button id="c1_bminus"></button>
			<div id="c1_text"></div><div id="c1_name">پیتزا سبزیجات</div>
			<div id="c1_price">210,000</div>
			<div id="c1_des">مواد تشکیل دهنده:<br/>نخودفرنگی<br/>ذرت<br/>قارچ و ...</div></div>
		</div>






		<div class="c5">
			<img src="image/pizza_spe.jpg" id="c1_i"/>
			<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
			<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
			<button id="c1_bboxshop"></button>
			<button id="c1_bplus"></button>
			<button id="c1_bminus"></button>
			<div id="c1_text"></div><div id="c1_name">پیتزا مخصوص</div>
			<div id="c1_price">250000</div>
			<div id="c1_des">مواد تشکیل دهنده:<br/>گوشت<br/>ژامبون مرغ<br/>قارچ و ...</div></div>
		</div>






		<div class="c6">
			<img src="image/pizza_pep.jpg" id="c1_i"/>
			<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
			<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
			<button id="c1_bboxshop"></button>
			<button id="c1_bplus"></button>
			<button id="c1_bminus"></button>
			<div id="c1_text"></div><div id="c1_name">رویال برگر</div>
			<div id="c1_price">250000</div>
			<div id="c1_des">مواد تشکیل دهنده:<br/>سوسیس پپرونی<br/>گوجه فرنگی<br/>فلفل دلمه ای و...</div></div>
		</div>









		<div class="c7">
			<img src="image/Burger.jpg" id="c1_i"/>
			<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
			<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
			<button id="c1_bboxshop"></button>
			<button id="c1_bplus"></button>
			<button id="c1_bminus"></button>
			<div id="c1_text"></div><div id="c1_name">رویال برگر</div>
			<div id="c1_price">250000</div>
			<div id="c1_des">مواد تشکیل دهنده:<br/>همبرگر<br/>پنیر چدار <br/>کالباس و...</div></div>
		</div>






		<div class="c8">
			<img src="image/stake.jpg" id="c1_i"/>
			<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
			<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
			<button id="c1_bboxshop"></button>
			<button id="c1_bplus"></button>
			<button id="c1_bminus"></button>
			<div id="c1_text"></div><div id="c1_name">استیک گوشت</div>
			<div id="c1_price">500,000</div>
			<div id="c1_des">مواد تشکیل دهنده:<br/>گوشت راسته<br/>سس خردل<br/>سس بابیکیو و...</div></div>
		</div>
	
	</div><br/><br/><br/>


	<div id="hr1">
		<table>
			<tr>
				<td>
					<canvas id="l" width="620px" height="2px"></canvas>
				</td>
				<td id="text">
					<div id="appetizer"><h2>پیش غذا</h2> </div> 
				</td>
				<td>
					<canvas id="r" width="620px" height="2px"></canvas>
				</td>
			</tr>
		</table></div>
		<br/><br/>
		<div id="div_menu">
			
			
			
			<div class="c1">
				<img src="image/Fries.jpg" id="c1_i"/>
				<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
				<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
				<button id="c1_bboxshop"></button>
				<button id="c1_bplus"></button>
				<button id="c1_bminus"></button>
				<div id="c1_text"></div>
				<div id="c1_name">سیب زمینی</div>
				<div id="c1_price">90,000</div>
				<div id="c1_des">مواد تشکیل دهنده:<br/>سیب زمینی<br/>آرد سوخاری<br/>سس گوجه و...</div>
				</div>
			</div>
		





			<div class="c2">
				<img src="image/korndog.jpg" id="c1_i"/>
				<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
				<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
				<button id="c1_bboxshop"></button>
				<button id="c1_bplus"></button>
				<button id="c1_bminus"></button>
				<div id="c1_text"></div><div id="c1_name">کورن داگ پنیری</div>
				<div id="c1_price">70,000</div>
				<div id="c1_des">مواد تشکیل دهنده:<br/>کورن داگ<br/>پنیر چدار<br/>تخم مرغ و...</div>
			</div>
			</div>
		
		</div><br/><br/><br/>
		
		



		
		<div id="hr1">
			<table>
				<tr>
					<td>
						<canvas id="l" width="620px" height="2px"></canvas>
					</td>
					<td id="text">
						<div id="saladd"><h2>سالاد</h2> </div> 
					</td>
					<td>
						<canvas id="r" width="620px" height="2px"></canvas>
					</td>
				</tr>
			</table></div>
			<br/><br/>
			<div id="div_menu">
				
				
				
				
				
				<div class="c1">
					<img src="image/Caesar-salad-1.jpg" id="c1_i"/>
					<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
					<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
					<button id="c1_bboxshop"></button>
					<button id="c1_bplus"></button>
					<button id="c1_bminus"></button>
					<div id="c1_text"></div>
					<div id="c1_name">سالاد سزار</div>
					<div id="c1_price">200,000</div>
					<div id="c1_des">مواد تشکیل دهنده:<br/>کاهو<br/>سینه مرغ<br/>نان تست و...</div>
					</div>
				</div>
			






				<div class="c2">
					<img src="image/food3.jpg" id="c1_i"/>
					<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
					<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
					<button id="c1_bboxshop"></button>
					<button id="c1_bplus"></button>
					<button id="c1_bminus"></button>
					<div id="c1_text"></div><div id="c1_name">سالاد سبزیجات</div>
					<div id="c1_price">150,000</div>
					<div id="c1_des">مواد تشکیل دهنده:<br/>ماکارونی پیکولی<br/>گوجه فرنگی<br/>ذرت و...</div></div>
				</div>
			





				<div class="c3">
					<img src="image/Salad.jpg" id="c1_i"/>
					<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
					<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
					<button id="c1_bboxshop"></button>
					<button id="c1_bplus"></button>
					<button id="c1_bminus"></button>
					<div id="c1_text"></div><div id="c1_name">سالاد مرغ گریل شده</div>
					<div id="c1_price">230,000</div>
					<div id="c1_des">مواد تشکیل دهنده:<br/>فیله مرغ<br/>خیار سبز<br/>کاهو و...</div></div>
				</div>





				<div class="c4">
					<img src="image/salad_nis.jpg" id="c1_i"/>
					<button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
					<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
					<button id="c1_bboxshop"></button>
					<button id="c1_bplus"></button>
					<button id="c1_bminus"></button>
					<div id="c1_text"></div>
					<div id="c1_name">سالاد سزار</div>
					<div id="c1_price">180,000</div>
					<div id="c1_des">مواد تشکیل دهنده:<br/>تخم مرغ<br/>کاهو<br/>گوجه فرنگی و...</div>
					</div>
				</div>
			</div><br/><br/><br/>
			


			
			<div id="hr1">
				<table>
					<tr>
						<td>
							<canvas id="l" width="620px" height="2px"></canvas>
						</td>
						<td id="text">
							<div id="beverages"><h2>نوشیدنی</h2> </div> 
						</td>
						<td>
							<canvas id="r" width="620px" height="2px"></canvas>
						</td>
					</tr>
				</table>
			</div><br/><br/><br/>

				<div id="div_menu">
    <div class="c1">
        <img src="image/Coca_Cola.jpg" id="c1_i"/>
        <button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
			<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
			<button id="c1_bboxshop"></button>
			<button id="c1_bplus"></button>
			<button id="c1_bminus"></button>
			<div id="c1_text"></div>
		<div id="c1_name">نوشابه کوکاکولا</div>
		<div id="c1_price">50,000</div>
		<div id="c1_des">مواد تشکیل دهنده:<br/>آب<br/>گلوکز<br/>اسید فسفریک و...</div>
		</div>
    </div>

	<div class="c2">
        <img src="image/Mocktail.jpg" id="c1_i"/>
       <button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
			<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
			<button id="c1_bboxshop"></button>
			<button id="c1_bplus"></button>
			<button id="c1_bminus"></button>
			<div id="c1_text"></div>
		<div id="c1_name">دوغ نعنا</div>
		<div id="c1_price">40,000</div>
		<div id="c1_des">مواد تشکیل دهنده:<br/>ماست<br/>آب یخ<br/>نعنا و...</div>
    </div>





	<div class="c3">
        <img src="image/Pepsi.jpg" id="c1_i"/>
       <button onclick="location.href='register_points_like.php'" id="c1_blike"></br>
		<?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM likes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_like' style='font-family: 'AFSANEH', Arial;'>".($r[0])."</lable>";
			
		}
			
			?></button>

        <button onclick="location.href='register_points_ulike.php'"  id="c1_bunlike"></br>
        <?php 
	
			$h = "localhost";
			$u = "user1";
		    $p = "user1";
		    $n = "store";
		
		    $s1 = mysqli_connect($h, $u, $p, $n);
			$s4 = "SELECT COUNT(table_no) FROM unlikes";
			$s5 = mysqli_query($s1,$s4);
		
		
			while($r=mysqli_fetch_array($s5)){
				echo "</br><lable id='l_unlike' style='font-family: 'AFSANEH', Arial; margin-bottom:-100px;'>".($r[0])."</lable>";
			
		}
			
			?>
    </button>
			<button id="c1_bmessage" onclick="location.href='show_comments.php'" ></button>
			<button id="c1_bboxshop"></button>
			<button id="c1_bplus"></button>
			<button id="c1_bminus"></button>
			<div id="c1_text"></div>
		<div id="c1_name">نوشابه پپسی</div>
		<div id="c1_price">45,000</div>
		<div id="c1_des">مواد تشکیل دهنده:<br/>آب<br/>گلوکز<br/>اسید فسفریک و...</div>
    </div>
</div><br/><br/><br/>

				

				<br/><br/>
				
				<footer style="height: 380px;">
					<table width="100%" border="0" >
			<tr dir="rtl">
				<th width="159" scope="col" style="padding-left: 20px;">مجوزها</th>
			  	<div id="about"><th width="800" scope="col" style="padding-left: 400px">درباره ما</th></div>
			  	<div id="contact"><th width="535" scope="col" style="padding-left: 300px;">ارتباط با ما</th></div>
			</tr>
						
						
			<tr style="padding: 0px;">
			  <td><img class="tdtext" src="image/output.png"  alt="" id=pic_license style="padding-left: 35px;"/></td>
			  <td dir="rtl" class="tdtext" style="padding-top: 5px;"><p class="pdar" >رستوران لاوان با بیش از 10 سال سابقه درخشان در شهر تهران، میزبان شماست.
				 
			نکاتی در رابطه با رستوران لاوان که خوب است بدانید:
			روز های سه شنبه فقط مخصوص بانوان است و ورود آقایان به رستوران ممنوع میباشد.
			مشتریان در تمام نقاط رستوران به اینترنت پرسرعت بی سیم که به صورت رایگان ارائه می شود نیز دسترسی دارند.</p> 
			  <p class="pdar">ساعت کاری شنبه تا پنجشنبه : 10 صبح الی 11 شب</p>
			  <p class="pdar">ساعت کاری جمعه و تعطیلات رسمی : 12 صبح الی 10 شب</p></td>
			  <td dir="rtl" style="padding-top: 0px;" class="tdtext"><img src="image/maps-and-flags.png" height="25px" width="25" style="margin-right: 10px;">
				  <label class="par">تهران، صادقیه، نرسیده به پاساژ گلدیس</label>
			  <div style="margin-top: 14px;"><img src="image/old-typical-phone.png" height="25px" width="25" style="margin-right: 10px;">
				 <label style="margin-right: 4px; margin-bottom: 20px;">021-33251441</label></div>
				  
				  
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
			
			
			<div id="social">
			<ul style="padding-right: 5px; padding-top: 25px; padding-left: 450px; padding-bottom: 0px;">
			<li class="facebook">
			  <a href="https://www.facebook.com/restaurant/"><button class="border"><i class="fa fa-facebook"></i></button></a>
			</li>
			
			
			
			<li class="instagram">
			   <a href="https://www.facebook.com/restaurant/"></a><button class="border"><i class="fa fa-instagram"></i></button></a>
			</li>
			
			</ul>
			</div>
			
				 
			</td></tr>
			</footer>



</body>
	

</html>