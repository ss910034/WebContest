<?php session_start(); ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php 
unset($_SESSION['username']);
echo "<meta http-equiv='Refresh' CONTENT='0; url=exit.php'>";
//echo "<meta http-equiv='Refresh' CONTENT='1; url=homepage1.php'>";
 ?>