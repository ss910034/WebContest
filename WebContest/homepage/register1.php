<?php 
	require "connectVar.php";
	$id=$_POST['user'];
	$pw=$_POST['pw'];
	$pw2=$_POST['pw2'];
	$name=$_POST['nam'];
	$student=$_POST['student'];
	$system=$_POST['system'];
	$grade=$_POST['grade'];
	$nick=$_POST['nick'];
	$tele=$_POST['tele'];
	$email=$_POST['email'];


	$result = $conn->query("SELECT * FROM `web` WHERE username='$id' ");
	//$row = $result->fetch_row();
	$row=@mysqli_fetch_row($result);

	$result1 = $conn->query("SELECT * FROM `web` WHERE student='$student' ");
	$row1=@mysqli_fetch_row($result1);


	if($id!=null && $pw!=null && $pw2!=null && $name!=null && $student!=null && $system!=null && $grade!=null && $nick!=null)
	{
		if($row[1]==$id)
		{
			// echo "此帳號已有人使用，請重新輸入!";
			echo "<meta http-equiv='Refresh' content='0; url=used1.php'>";
		}
		else if($pw != $pw2)
		{
			// echo "確認密碼錯誤，請重新輸入!";
			echo "<meta http-equiv='Refresh' content='0; url=pw_error.php'>";
		}
		else if($row1[4]==$student)
		{
			// echo "這個學號已經使用過，請重新輸入!";
			echo "<meta http-equiv='Refresh' content='0; url=used2.php'>";
		}
		else
		{
			 $sql = "INSERT INTO `web`(`username`,`password`,`name`,`student`,`system`,`grade`,`nickname`,`phone`,`email`) VALUES ('$id','$pw','$name','$student','$system','$grade','$nick','$tele','$email')";
			// echo $sql;
			$insert = $conn->query($sql);
			// echo "恭喜你成為會員 !!";
			echo "<meta http-equiv='Refresh' content='0; url=success.php'>";
		}
	}
	else
	{
		// echo "*為必填資料,請重新輸入 !";
		echo "<meta http-equiv='Refresh' content='0; url=lost.php'>";

	}
 ?>