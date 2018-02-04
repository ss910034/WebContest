<?php 
  require "connectVar.php";
  session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
  <title>自主學習選課平台</title>
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  height: 50px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}
.log{
	background:rgba(239,239,239,0.7);
	position:absolute;
	right : 15px;
}

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Login to Your Account</h1><br>
          <form method="post" action="login1.php">
          <input type="text" name="user" placeholder="Username">
          <input type="password" name="pw" placeholder="Password">
          <input type="submit" name="button" class="login loginmodal-submit" value="登入">
          </form>
    
          <!-- <div class="login-help">
          <a href="#">Register</a> - <a href="#">Forgot Password</a>
          </div> -->
        </div>
      </div>
      </div>


<div class="home">
	<?php
                if(isset($_SESSION['username']))
                        echo "<h4 class=log>Welcome ".$_SESSION['nickname']."</h4>"; ?> 
 <div class="headname">
    <div class="name">
      <p>自主學習選課平台</p>
      <div class="intro">本平台提供最佳化排課結果、課程評價、多元開放式課程，以及線上聊天室能與在線會員互動，得到選課第一手消息，讓我們成為你最佳的學習幫手。</div>
    </div>
    <div class="animate1"></div>
    <div class="animate2"></div>
  </div>

</div>


<div class="select">
<div class="line1">
<div class="icon4">
<?php 
  if(empty($_SESSION['username']))
  {
       
    echo '<a href="#" data-toggle="modal" data-target="#login-modal" ><img src="pic4.png" border-radius = "50%" height = "200px" width = "200px"></a>';
    echo '<p>登入</p>';
  }
  else if(!empty($_SESSION['username']))
  {
    echo '<a href="logout.php"><img src="logout1.png" border-radius = "50%" height = "200px" width = "200px"></a>';
    echo '<p>登出</p>';
  }

 ?>
  </div>
  <div class="icon5">
    <a href="http://35.167.45.151/webcontest/homepage/register.php" ><img src="icon4.png" border-radius = "50%" height = "200px" width = "200px"></a>
    <p>註冊</p>
  </div> 
 
</div>

<div class="line2">
  <div class="icon2" > 
   <div class="flip2">
      <div class="front2"><img src="icon3.png" width="200" height="200"></div>
      <div class="back2" width="200px" height="200px" ><div class="button"><h3><b>想知道有誰可以carry嗎?<br>來跟大家一起排課吧!</b></h3></div>
     </div>
    </div>
</div>
  
  
  <div class="icon1" ontouchstart="this.classList.toggle('hover');" >
    <div class="flip1">
      <div class="front1"><img src="icon1.png" width="200" height="200"></div>
      <div class="back1" width="200px" height="200px" ><div class="button"><h3><b>想知道如何躺著上課嗎?<br>快來看裡面有什麼吧~</b></h3></div>
     </div>
      </div>  
  </div>
    
    
  <div class="icon3">
    <div class="flip3">
     <div class="front3"><img src="icon2.png" width="200" height="200"></div>
      <div class="back3" width="200px" height="200px" ><div class="button"><h3><b>想知道這堂課是不是自己想修的嗎?<br>看看大家怎麼說吧!</b></h3></div>
      </div>
    </div>  
  </div>
  
    <div class="word2">
      <h><a href="http://35.167.45.151/WebContest/category.php"  style="color:white;">開始排課</a></h>
    </div>
    <div class="word1">
      <h><a href="http://35.167.45.151/open_s/cse.php" style="color:white;">開放式課程</a></h>
    </div>
    <div class="word3">
      <h><a href="http://35.167.45.151/WebContest/comp/appreciation.php" style="color:white;">課程評價</a></h>
    </div>
</div>
  <div class="info">
    <div class="logo"><img src="logo.png" ></div>
    <div class="someword">
	<h>國立中山大學資訊工程系</h><br>
	<p>804 高雄市鼓山區蓮海路70號 </p><br>
	<p>製作者 : 劉亭吟  徐翊真  賴昱諠  蔡惠如  蕭廷瑞  陳仕軒</p>
    </div>
  </div>
</div>

</body>
</html>
