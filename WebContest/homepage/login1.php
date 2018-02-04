<?php 
	require "connectVar.php";
	$id=$_POST['user'];
	$pw=$_POST['pw'];

	$result=$conn->query("SELECT * FROM `web` WHERE username='$id' ");
	$row = $result->fetch_row();

	if($id!=null && $pw!=null && $row[1]==$id && $row[2]==$pw)
	{
		session_start();
		$_SESSION['username']=$id;
		$_SESSION['nickname']=$row[7];
		//echo "登入成功，歡迎回來!!";
		echo "<meta http-equiv='Refresh' content='0; url=homepage1.php'>";
	}
	else
	{
		//echo "登入失敗請重試!";
		echo "<meta http-equiv='Refresh' content='0; url=homepage1.php'>";
	}
 ?>