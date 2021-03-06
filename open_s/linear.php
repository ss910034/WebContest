<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>開放式課程-線性代數</title>
	<link rel="stylesheet" type="text/css" href="css/cata.css">
 	<script src='js/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <style type="text/css">
    	<style>
      body {
  font-family: 微軟正黑體;
  font-size: 100%;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}
@media (min-width: 45em) {
  body {
    font-size: 120%;
  }
}
@media (min-width: 65em) {
  body {
    font-size: 130%;
  }
}
@media (min-width: 85em) {
  body {
    font-size: 150%;
  }
}

a {
  text-decoration: none;
}

header {
  position: fixed;
  width: 100%;
  background: rgba(0, 0, 0, 0.8);
  display: block;
  top: 0;
  padding: 0;
  z-index: 8;
  height: 3.5em;
}
header h1#logo {
 font-family: 微軟正黑體;
  color: #fff;
  font-size: 1em;
  margin: 0 !important;
  padding: .4em 1em 0;
  position: absolute;
  display: inline-block;
  vertical-align: middle;
  float: left;
  padding: 1em 0.5em 0;
  top: -9px;
}
header * {
  background-repeat: no-repeat;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
header nav p {
  font-size: 80%;
  color: #12384E;
  margin: 0 0 -1em;
  padding: 0;
  font-weight: 400;
}
header nav ul {
	font-family: 微軟正黑體;
  margin: 0;
  padding: 0;
  line-height: inherit;
  font-size: inherit;
  visibility: hidden;
  top: -5%;
  width: 100%;
  padding: 0;
  opacity: 0;
  display: table-cell;
  vertical-align: middle;
  -webkit-transform: perspective(600px) rotateX(10deg);
  transform: perspective(600px) rotateX(10deg);
  -webkit-transition: all 0.5s cubic-bezier(0.7, 0, 0.36, 0.63);
  -moz-transition: all 0.5s cubic-bezier(0.7, 0, 0.36, 0.63);
  -o-transition: all 0.5s cubic-bezier(0.7, 0, 0.36, 0.63);
  transition: all 0.5s cubic-bezier(0.7, 0, 0.36, 0.63);
}
header nav ul li {
  list-style: none;
  text-align: center;
}
header nav ul li a {
  display: block;
  color: #fff;
  padding: .5em 0;
  width: 100%;
  display: block;
  font-size: 200%;
  font-weight: 600;
}
header nav ul li a:hover {
  background: rgba(255, 255, 255, 0.8);
}
header nav ul li a:focus {
  outline: 0;
}
header nav ul li a:hover, header nav ul li a:active {
  color: #0e1718 !important;
}
header .nav-background {
  z-index: 99;
  visibility: hidden;
  position: fixed;
  top: 0;
  width: 100%;
  height: 100%;
  background: none;
  display: table;
  -webkit-transition: background-color 0.6s cubic-bezier(0.7, 0.01, 0.3, 1);
  -moz-transition: background-color 0.6s cubic-bezier(0.7, 0.01, 0.3, 1);
  -o-transition: background-color 0.6s cubic-bezier(0.7, 0.01, 0.3, 1);
  transition: background-color 0.6s cubic-bezier(0.7, 0.01, 0.3, 1);
}
header #toggle {
  height: 3em;
  z-index: 999;
  padding: 1.5em 1em 0;
  cursor: pointer;
  position: fixed;
  top: 0;
  right: .5em;
  -webkit-transition: padding-top 0.6s cubic-bezier(0.1, 0.01, 0.3, 1);
  transition: padding-top 0.6s cubic-bezier(0.1, 0.01, 0.3, 1);
}
header #toggle:hover {
  transition: top, 0.5s, ease-in-out;
}
header #toggle:hover .menubars:before {
  top: -9px;
}
header #toggle:hover .menubars:after {
  top: 9px;
}

.menubars {
  width: 24px;
  height: 4px;
  margin: 10px 0;
  background: #fff;
  position: relative;
  z-index: 999 !important;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.menubars:before {
  top: -8px;
}
.menubars:after {
  top: 8px;
}
.menubars:after, .menubars:before {
  content: '';
  display: block;
  width: 24px;
  height: 4px;
  background: #EC008C;
  position: absolute;
  z-index: -1;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.menubars {
  width: 24px;
  height: 4px;
  margin: .2em 0;
  background: #FFF;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.menubars:before {
  top: -8px;
}
.menubars:after {
  top: 8px;
}
.menubars:after, .menubars:before {
  content: '';
  display: block;
  width: 24px;
  height: 4px;
  background: #FFF;
  position: absolute;
  z-index: -1;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.js-open {
  height: 100%;
}
.js-open header {
  margin-top: 0px;
  background: none;
}
.js-open .menubars {
  background: none !important;
}
.js-open .menubars:after {
  top: 0 !important;
  background: #fff !important;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
.js-open .menubars:before {
  top: 0 !important;
  background: #fff !important;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.js-open .nav-background {
  background: rgba(27, 128, 167, 0.9) !important;
}
.js-open ul {
  top: 0;
  visibility: visible;
  opacity: 1;
  margin-top: 0;
  -webkit-transform: perspective(600px) rotateX(0deg);
  -moz-transform: perspective(600px) rotateX(0deg);
  -ms-transform: perspective(600px) rotateX(0deg);
  -o-transform: perspective(600px) rotateX(0deg);
  transform: perspective(600px) rotateX(0deg);
}

.sect-hero .inside {
  padding: 25% 5% 20%;
}
.sect-hero h1 {
  font-size: 3em;
  color: #fff;
  margin: 0;
}
.sect-hero p {
  color: #fff;
}

    </style>
</head>
<body>
		<header id="mast" class="">
		  	<h1 id="logo" style="font-size: 30px;">自主學習選課平台</h1>
		<a id="toggle" href="#"><div class="menubars"></div></a>
		 <nav>
				 <div class="nav-background">
           <ul>
             <li><a href="http://35.167.45.151/webcontest/homepage/homepage1.php">Home</a></li>
             <li><a href="#">About Us</a></li>
             <li><a href="http://35.167.45.151/WebContest/category.php">go to 排課</a></li>            
             <li><a href="http://35.167.45.151/open_s/first.php">開放式課程</a></li>
             <li><a href="http://35.167.45.151/WebContest/comp/appreciation.php">課程評價</a></li>
             <?php
                if(isset($_SESSION['username']))
                {
             ?>
                <li><a href="http://35.167.45.151/webcontest/homepage/logout.php">登出</a></li>
             <?php }else
                {?>
                <li><a href="http://35.167.45.151/webcontest/homepage/homepage1.php">登入</a></li>
            <?php } ?>
          </ul>   
      </div> 
		</nav> 
		</header>
    <link rel="stylesheet" type="text/css" href="sourse.css">
		<div class="inside">
      <nav class="nav nav-cover">
        <ul>
          <li><a data-value="管理類" href="other.php">管理類</a></li>
          <li><a data-value="資訊工程類" href="cse.php">資訊工程類</a></li>
          <li><a data-value="語文類" href="other.php">語文類</a></li>
          <li><a data-value="音樂類" href="other.php">音樂類</a></li>
          <li><a data-value="機電/電機類" href="other.php">機電/電機類</a></li>
          <li><a data-value="經濟/政治類" href="other.php">經濟/政治類</a></li>
          <li><a data-value="生命科學類" href="other.php">生命科學類</a></li>
          <li><a data-value="藝術類" href="other.php">藝術類</a></li>
          <li><a data-value="海洋科學類" href="other.php">海洋科學類</a></li>
        </ul>
      </nav>

      <h3>線性代數</h3>

      <div class="box1">
        <a href="http://ocw.nthu.edu.tw/ocw/index.php?page=course&cid=89&"><img src="https://i.ytimg.com/vi/sJ9wTZBLr48/hqdefault.jpg" class="first"></a>
        <a href="http://ocw.nthu.edu.tw/ocw/index.php?page=course&cid=89&" class="title">清華大學開放式課程</br>趙啟超老師</a>
        <img src="https://image.flaticon.com/icons/svg/189/189671.svg" class="love"><h4 class="fa">Add To My Favorite</h4></img>
      </div>

      <div class="box2">
        <a href="http://ocw.aca.ntu.edu.tw/ntu-ocw/ocw/cou/102S207"><img src="https://i.ytimg.com/vi/kjmrIIcVswk/maxresdefault.jpg" class="first"></a>
        <a href="http://ocw.aca.ntu.edu.tw/ntu-ocw/ocw/cou/102S207" class="title">台灣大學開放式課程</br>蘇柏青老師</a>
        <img src="https://image.flaticon.com/icons/svg/189/189671.svg" class="love"><h4 class="fa">Add To My Favorite</h4></img>
      </div>

      <div class="box3">
        <a href="http://ocw.nctu.edu.tw/course_detail_3.php?bgid=1&gid=1&nid=271#.WLgSNPl97IU"><img src="https://i.ytimg.com/vi/FjN_sxRBmQg/hqdefault.jpg" class="first"></a>
        <a href="http://ocw.nctu.edu.tw/course_detail_3.php?bgid=1&gid=1&nid=271#.WLgSNPl97IU" class="title">交通大學開放式課程</br>莊重老師</a>
        <img src="https://image.flaticon.com/icons/svg/189/189671.svg" class="love"><h4 class="fa">Add To My Favorite</h4></img>
      </div>

		</div>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="index.js"></script>
</html>