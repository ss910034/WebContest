<?php 
	require "connectVar.php";
 ?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Creat account</title>
  <script src='js/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<style type="text/css">
*{
	font-family:微軟正黑體;
}
body {
  font-family: 微軟正黑體;
  font-size: 100%;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}
body,html {
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
  background-image: linear-gradient(180deg, #37375A 70%, #31315A);
  text-align: center;
  font-family: 'Segoe UI';
}
form {
  width: 40%;
  margin-left: 30%;
  padding-top: 10%;
}
input[type="text"],
input[type="password"],select {
/*text-align: center;*/
  width: 100%;
  background: transparent;
  border-bottom: solid 1px #7053c4;
  border-top: none;
  border-left: none;
  border-right: none;
  font-size: 1.3em;
  padding: 0.5em 0.4em;
  transition: all 0.4s;
  color: #BDBDBD;
}
.word{
  width: 100%;
  background: transparent;
  font-size: 1.3em;
  padding: 0.5em 0.4em;
  transition: all 0.4s;
  color: #BDBDBD;
}

input[type="text"]:focus,
input[type="password"]:focus {
  background: #7035c4;
  transform: scale3d(1.06,1.06,1.06);
}
/*select:focus {
  background: #7035c4;
  transform: scale3d(1.06,1.06,1.06);
}*/
input[type="submit"]{
  background: transparent;
  width: 50%;
  margin-top: 2em;
  font-size: 1.3em;
  border: solid 1px #7053c4;
  padding: 1em 0;
  color: #bdc3c7;
  transition: all 0.6s;
}
input[type="submit"]:hover{
  cursor:pointer;
  background: #7035c4;
}
#h123 {
  color: #bdc3c7;
  border-bottom: solid 1px #7035c4;
  padding: 0 0 0.8em 0;
  width: 50%;
  margin-left: 25%;
  margin-bottom: 1em;
}
@media (max-width: 550px) {
  form {
  width: 90%;
  margin-left: 3%;
  padding-top: 5%;
}
  input,select {
    font-size: 1em;
  }
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
  left:0px;
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
             <li><a href="http://35.167.45.151/open_s/cse.php">開放式課程</a></li>
             <li><a href="http://35.167.45.151/WebContest/comp/appreciation.php">課程評價</a></li>
             <li><a href="http://35.167.45.151/webcontest/homepage/homepage1.php">登入</a></li>
          </ul>   
      </div> 
    </nav> 
    </header>
    <div class="inside">
      
    </div>
<form  method="post" action="register1.php" enctype="Multipart/Form-Data">
<img src="http://35.167.45.151/webcontest/homepage/user 64.png">
  <h1 id="h123">Create my account</h1>
  <input type="text" name="user" placeholder="*帳號">
  <input type="password" name="pw" placeholder="*密碼">
  <input type="password" name="pw2" placeholder="*確認密碼">
  <input type="text" name="nam" placeholder="*姓名">
  <input type="text" name="student" placeholder="*學號">

  <select name='system' value="*系級">
 				<option>資工系</option>
 				<option>資管系</option>
 				<option>企管系</option>
 			</select>
 			<select name='grade'>
 				<option value="1">大一</option>
 				<option value="2">大二</option>
 				<option value="3">大三</option>
 				<option value="4">大四</option>
 			</select>
 <input type="text" name="nick" placeholder="*暱稱">
 <input type="text" name="tele" placeholder="電話">
 <input type="text" name="email" placeholder="信箱">

<div class="word">*為必填資料</div>

  <!-- <button type="submit">Register</button> -->
  <input type="submit" name="button" value="Register">
<!--   <input type="button" value="BACK HOME" onclick=location.href='http://localhost:8080/webcontest/homepage/homepage.php'> -->
</form>

</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="index.js"></script>
</html>

