<!DOCTYPE html>
<html>
<head>
	<title>開放式課程</title>
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
					    <li>
		           	   <a href="">Home</a>
					   </li>
					   <li>
					   <a href="#">About Us</a>
					   </li>
					   <li>
					   <a href="category.php">go to 排課</a></li>					   
					   <li>
					   <a href="#">開放式課程</a></li>
					   <li>
					   <a href="#">課程評價</a></li>
					</ul>   
			</div> 
		</nav> 
		</header>
    <link rel="stylesheet" type="text/css" href="not_login.css">
		<div class="inside">
      <div class="fix">
        <img class="p" src="https://image.flaticon.com/icons/svg/313/313034.svg"><p>&nbsp;&nbsp;&nbsp;&nbsp;Login to see more</p></img>
      </div>
		</div>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="index.js"></script>
</html>