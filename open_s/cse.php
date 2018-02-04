<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>開放式課程-資訊工程類</title>
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
  display: none;
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
      </div> 
		</nav> 
		</header>
    <?php if(isset($_SESSION['username']))
      { ?>
    <link rel="stylesheet" type="text/css" href="choose.css">
		<div class="inside">
      <nav class="nav nav-cover">
        <ul>
          <li><a href="http://35.167.45.151/open_s/other.php" data-value="管理類">管理類</a></li>
          <li><a data-value="資訊工程類" href="http://35.167.45.151/open_s/cse.php">資訊工程類</a></li>
          <li><a data-value="語文類" href="http://35.167.45.151/open_s/other.php">語文類</a></li>
          <li><a data-value="音樂類" href="http://35.167.45.151/open_s/other.php">音樂類</a></li>
          <li><a data-value="機電/電機類" href="http://35.167.45.151/open_s/other.php">機電/電機類</a></li>
          <li><a data-value="經濟/政治類" href="http://35.167.45.151/open_s/other.php">經濟/政治類</a></li>
          <li><a data-value="生命科學類" href="http://35.167.45.151/open_s/other.php">生命科學類</a></li>
          <li><a data-value="藝術類" href="http://35.167.45.151/open_s/other.php">藝術類</a></li>
          <li><a data-value="海洋科學類" href="http://35.167.45.151/open_s/other.php">海洋科學類</a></li>
        </ul>
      </nav>

      <div class="middle">
        <img class="p" src="https://image.flaticon.com/icons/svg/351/351641.svg"><p>&nbsp;必修</p></img>
        <div class='border'>
          <ul>
            <img class="x" src="https://image.flaticon.com/icons/svg/346/346195.svg"><p>&nbsp;大一&nbsp;</p></img>
            <a href="http://35.167.45.151/open_s/C.php" data-hover="C程式設計(一)(二)">C程式設計(一)(二)</a>&nbsp;&nbsp;&nbsp;<a href="http://35.167.45.151/open_s/calculus.php" data-hover="微積分(一)(二)">微積分(一)(二)</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="數位電子學">數位電子學</a>&nbsp;&nbsp;&nbsp;<a href="http://35.167.45.151/open_s/discrete.php" data-hover="離散數學">離散數學</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="C程式設計實習(一)(二)">C程式設計實習(一)(二)
            </a>
          </ul>
        </div>

        <div class='border'>
          <ul>
            <img class="x" src="https://image.flaticon.com/icons/svg/346/346195.svg"><p>&nbsp;大二&nbsp;</p></img>
            <a href="http://35.167.45.151/open_s/linear.php" data-hover="線性代數">線性代數</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="數位系統">數位系統</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="數位系統實驗">數位系統實驗</a>&nbsp;&nbsp;&nbsp;<a href="http://35.167.45.151/open_s/structure.php" data-hover="資料結構">資料結構</a>&nbsp;&nbsp;&nbsp;<a href="http://35.167.45.151/open_s/os.php" data-hover="作業系統">作業系統</a>&nbsp;&nbsp;&nbsp;<a href="http://35.167.45.151/open_s/probability.php" data-hover="機率學">機率學</a>&nbsp;&nbsp;&nbsp;<a href="http://35.167.45.151/open_s/orga.php" data-hover="計算機組織">計算機組織
            </a>
          </ul>
        </div>

        <div class='border'>
          <ul>
            <img class="x" src="https://image.flaticon.com/icons/svg/346/346195.svg"><p>&nbsp;大三&nbsp;</p></img>
            <a href="#" data-hover="演算法">演算法</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="組合語言與微機處理">組合語言與微機處理</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="UNIX系統程式 ">UNIX系統程式</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="電腦網路">電腦網路</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="物件導向程式設計 ">物件導向程式設計</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="資訊工程論壇 ">資訊工程論壇計</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="編譯器製作">編譯器製作
            </a>
          </ul>
        </div>

        <img class="p" src="https://image.flaticon.com/icons/svg/351/351641.svg"><p>&nbsp;選修</p></img>
        <div class='border'>
          <ul>
            <img class="x" src="https://image.flaticon.com/icons/svg/346/346195.svg"><p>&nbsp;資訊安全&nbsp;</p></img>
            <a href="#" data-hover="安全程式設計">安全程式設計</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="高等程式設計與實作">高等程式設計與實作</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="資訊安全">資訊安全</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="駭客攻防與電腦鑑識技術">駭客攻防與電腦鑑識技術</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="電子設計自動化暨測試演算法">電子設計自動化暨測試演算法
            </a>
          </ul>
        </div>

        <div class='border'>
          <ul>
            <img class="x" src="https://image.flaticon.com/icons/svg/346/346195.svg"><p>&nbsp;電腦網路&nbsp;</p></img>
            <a href="#" data-hover="JAVA物件導向程式設計">JAVA物件導向程式設計</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="無線行動網路">無線行動網路</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="無線網際網路">無線網際網路</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="網路系統程式設計">網路系統程式設計</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="網路應用程式設計">網路應用程式設計
            </a>
          </ul>
        </div>

        <div class='border'>
          <ul>
            <img class="x" src="https://image.flaticon.com/icons/svg/346/346195.svg"><p>&nbsp;硬體x嵌入式&nbsp;</p></img>
            <a href="#" data-hover="嵌入式系統程式設計">嵌入式系統程式設計</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="硬體描述語言">硬體描述語言</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="超大型積體電路設計概論">超大型積體電路設計概論</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="進階數位系統設計">進階數位系統設計</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="積體電路電腦輔助設計概論">積體電路電腦輔助設計概論
            </a>
          </ul>
        </div>

        <div class='border'>
          <ul>
            <img class="x" src="https://image.flaticon.com/icons/svg/346/346195.svg"><p>&nbsp;多媒體x資料庫&nbsp;</p></img>
            <a href="#" data-hover="代數應用">代數應用</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="軟體工程">軟體工程</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="程序導向程式設計">程序導向程式設計</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="資料壓縮導論">資料壓縮導論</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="網際網路資料庫">網際網路資料庫
            </a>
          </ul>
        </div>

        <div class='border'>
          <ul>
            <img class="x" src="https://image.flaticon.com/icons/svg/346/346195.svg"><p>&nbsp;共同選修&nbsp;</p></img>
            <a href="#" data-hover="資訊人與智慧財產權">資訊人與智慧財產權</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="基礎訊號處理">基礎訊號處理</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="巨量資料導論">巨量資料導論</a>&nbsp;&nbsp;&nbsp;<a href="#" data-hover="Python 程式設計">Python 程式設計
            </a>
          </ul>
        </div>
      </div>
		</div>
    <?php }
      else { ?>
      <link rel="stylesheet" type="text/css" href="not_login.css">
    <div class="inside">
      <div class="fix">
        <img class="p" src="https://image.flaticon.com/icons/svg/313/313034.svg"><p>&nbsp;&nbsp;&nbsp;&nbsp;Login to see more</p></img>
      </div>
    </div>
 <?php } ?>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="index.js"></script>
</html>
