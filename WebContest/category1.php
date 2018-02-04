<?php session_start();
	require_once('connectVar.php');
	if(isset($_SESSION['username']))
	{
		$user=$_SESSION['username'];
		$sql="SELECT * FROM `web` WHERE `username` = '$user'"; 
		$result = $conn->query($sql);
		$nickname = $row[7];
	}else{
		$nickname = "__No_Login__";
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>課程分類</title>
	<link rel="stylesheet" type="text/css" href="css/cata.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<script src='js/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="http://cdn.bootcss.com/jquery/1.9.1/jquery.js"></script>
    <script src="./control1.js"></script>
    <style type="text/css">
    	form input{
    		transition-duration: 2s;
    	}
    	.go{
    		display: block;
    		margin: auto;
    		border-radius: 10px;
    		font-size: 15px;
    		padding: 5px 100px;
    		letter-spacing: 3px;
    		background:none;
    		border: none;
    		background: -webkit-linear-gradient(top, #60CF9C 0%, #379B9D 100%); 
			background: linear-gradient(to bottom, #60CF9C 0%, #379B9D 100%); 
			color: white;
    	}
    	.go:hover{
    		cursor: pointer;
    	}
    	.go1{
    		display: inline-block;
    		margin-left:30%;
    		border-radius: 10px;
    		font-size: 15px;
    		padding: 5px 100px;
    		letter-spacing: 3px;
    		background:none;
    		border: none;
    		background: -webkit-linear-gradient(top, #60CF9C 0%, #379B9D 100%); 
			background: linear-gradient(to bottom, #60CF9C 0%, #379B9D 100%); 
			color: white;
    	}
    	.order{
    		display: inline;
    		text-align: center;
    		padding:10px 30px;
    		font-size:18px;
    		background-color:rgb(244,244,244);
    		border-radius: 100px;
    	}
    	.thead{
			background: -webkit-linear-gradient(right, #379B9D 0%, #60CF9C 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to right, #379B9D 0%, #60CF9C 100%); 
			color: white;
			font-size: 25px;
			width:20%;
    	}
    	.con{
    		position: relative;
    		top:55px;
    	}
    	.last{
    		border-bottom: solid 2.5px rgb(27,157,147);
    	}
    	.nav2{
    		position: relative;
    		top :110px;
    		display: block;
    	}
    	.nav2 h5{
    		position: relative;
    		left :40px;
    		display: inline;
    	}
    	.container{
    		display: inline-block;
    		width: 99%;
    	}
    	.chatroom-btn{
    		position: fixed;
    		top:81px;
    		right: 0px;
    		display: inline-block;
    		width:10px;
    		height: 100%;
    		border: 1px solid;
    		float: left;
    		background-color: rgba(0,0,0,0.7);
    		transition-duration: 0.5s;
    	}
    	*{
    		transition-duration: 0.5s;
    	}
    	.chatroom-btn h4{
    		display: block;
    		position: relative;
    		top:35%;
    		vertical-align: middle;
    		color: white;
    	}
    	.message_box{
        width: 19.5%;
        height: 90%;
        position : fixed;
        top:81px;
        right:0px;
        border-style:ridge;
        word-wrap:break-word;
        overflow-x: hidden;
        overflow-y: auto;
        background-color: white;
        opacity: 1;
      }
      #topm{
      	background-color : black;
      	font-family: 'STCaiyun';
      	color : white;
      	width : 100%;
      	display: inline-block;
      	padding: 10px;
      	font-size:30px;
      	text-align : center;	
      }
      #bottom{
      	position:fixed;
	    bottom:0px;
        right: 0px;
        width: 19.8%;
      	/*border:solid 1px;*/
      }
      #name{
      	position: absolute;
      	bottom: 58px;
      }
      #message{
      	position: absolute;
      	bottom:35px;
      	width: 100%;
      }
      #btn_post{
      	position: absolute;
      	height: 35px;
      	bottom:0;
      	background-image: linear-gradient(to bottom,#5bc0de 0,#2aabd2 100%);
      	width: 100%;
      }
      
    </style>
</head>
<body>
		<header id="mast" class="">
		  	<h1 id="logo" style="font-size: 30px;">線上學C平台</h1>
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
		<div class="container0" id="chatroom" style="display: none;" value="1">  
        <div class="message_box">
          <div id="topm">Let's Talk!</div>
          <div id="chat"></div>
        </div>  
        <div id="bottom">
           <input id="name" size="15" type="hidden" value=<?php echo $nickname;?>>
          <input id="message" type="text" value="Say something...">
          <input id="btn_post" type="button" value="Enter"> 
        </div>     
      </div>
		<div class="chatroom-btn \"><h4>◁</h4></div>
		<div class="container">
			<div class="nav2">&nbsp;&nbsp;<h5><img src="img/pig1.png" style="width: 25px;">&nbsp;Home > 我要排課!</h5></div>
			<div class="con">
					<?php 
				if(!isset($_POST['submit']) || $_POST['submit']!="查看排課結果")
				{
					?>
				<form action="" method="post">
				<br>
				<br><br>
				<p>
				<table id="Select">
					<tr>
						<td class="thead">資訊安全</td>
						<td class="thead">電腦網路</td>
						<td class="thead">硬體x嵌入式</td>
						<td class="thead">多媒體x資料庫</td>
						<td class="thead">共同選修</td>
					</tr>
				<?php
						$sql1="SELECT * FROM `elective_class` WHERE type = 'Security'";
						$sql2="SELECT * FROM `elective_class` WHERE type = 'Network'";
						$sql3="SELECT * FROM `elective_class` WHERE type = 'Hard'";
						$sql4="SELECT * FROM `elective_class` WHERE type = 'Media'";
						$sql5="SELECT * FROM `elective_class` WHERE type = 'Other'";
						$result1 = $conn->query($sql1);
						$result2 = $conn->query($sql2);
						$result3 = $conn->query($sql3);
						$result4 = $conn->query($sql4);
						$result5 = $conn->query($sql5);
						while (1)
						{
							 $row1=@mysqli_fetch_row($result1);
							 if($row1==NULL)
							 	$row1=-99;
							 else
							 {
							 	$addtr=1;
							 	if($addtr)
							 		echo "<tr>";
							 	echo "<td class='c1 tded'>$row1[1]</td>";
							 	$row1=1;
							 }
							 $row2=@mysqli_fetch_row($result2);
							if($row2==NULL)
								$row2=-99;
							else
							{
								if(!$addtr)
									echo "<tr>";
								echo "<td class='c2 tded'>$row2[1]</td>";
								$row2=1;
							}
							 $row3=@mysqli_fetch_row($result3);
							if($row3==NULL)
								$row3=-99;
							else
							{
								if(!$addtr)
									echo "<tr>";
								echo "<td class='c3 tded'>$row3[1]</td>";
								$row3=1;
							 }
							 $row4=@mysqli_fetch_row($result4);
							if($row4==NULL)
								$row4=-99;
							else
							{	
							if(!$addtr)
									echo "<tr>";					
								echo "<td class='c4 tded'>$row4[1]</td>";
								$row4=1;
							}
							 	
							 $row5=@mysqli_fetch_row($result5);
							if($row5==NULL)
							{
								$row5=-99;
								$rowtotal=$row1+$row2+$row3+$row4+$row5;
								if($rowtotal==-495)
							 		break;
								echo "<td class='c5'></td>";
							}
							else
							{
								if(!$addtr)
									echo "<tr>";
								echo "<td class='c5 tded'>$row5[1]</td>";
								$row5=1;
							}
							 echo "</tr>";
						}
					?>
					<tr>
						<td class="last"></td>
						<td class="last"></td>
						<td class="last"></td>
						<td class="last"></td>
						<td class="last"></td>
					</tr>
				</table>
				</p>
				<div style="margin-left: 7%;margin-right: 7%;">
				<?php if(isset($_SESSION['username']))
					{ ?>		
				<form action="" method="post">
					<p><div><h2 class="order">志願序 : </h2></div></p>
					<input type="hidden" name="orderlist" value="" class="hidval">
					<input type="submit" name="submit" value="查看排課結果" class="go">	
				</form>
				<?php } 
				else{ ?>
					<div class="go1">快去登入，登入完即可使用排課功能唷 :) </div>
				<?php	}?>
				</div>
			<script src="js/cata.js"></script>
			<?php }
				if(isset($_POST['submit']) && $_POST['submit']=="查看排課結果")
				{
					if(isset($_SESSION['username']))
						$user=$_SESSION['username'];
					$sql="SELECT * FROM `web` WHERE `username` = '$user'"; 
					$result = $conn->query($sql);
					$row=@mysqli_fetch_row($result);
					if($row[5]=='u')
						$Sem = "Up";
					else
						$Sem = "Down";
					$Grade=$row[6];
					$sql="SELECT * FROM `required_class` WHERE `Semester` = '$Sem' and `Grade` = '$Grade'"; 
					$result = $conn->query($sql);
					while ($row=@mysqli_fetch_row($result))
					{
						$str = explode("-",$row[3]);
						$i = count($str);
						for($j=0;$j<$i;$j++)
						{
							$class[($str[$j]-1)][$row[2]]=$row[1];
						}
					}
					for($i=0;$i<12;$i++)
					{
						if($i==9)
				    		$class[$i][0]='C';
				    	else if ($i==10)
				    		$class[$i][0]='D';
				    	else if ($i==11)
				    		$class[$i][0]='E';
				    	else
							$class[$i][0]=$i+1;
					}
					$orderlist=$_POST['orderlist'];
					$str2 = explode(" ",$orderlist);
					$len = count($str2);
					for($l=0;$l<$len;$l++)
					{
						$str3=trim($str2[$l]);
						$sql="SELECT * FROM `elective_class` WHERE `Semester` = '$Sem' and `Name` = '$str3'"; 
						$result = $conn->query($sql);
						while ($row=@mysqli_fetch_row($result))
						{
							$str = explode("-",$row[3]);
							$i = count($str);
							for($j=0;$j<$i;$j++)
							{
								if(!isset($class[($str[$j]-1)][$row[2]]))
									$class[($str[$j]-1)][$row[2]]=$row[1];
								else
									break;
							}
						}
					}
			?>

			<table class="classform">
		    <tr id="topic">  
		      <th></th>
		      <th>Mon</th>
		      <th>Tue</th>
		      <th>Wed</th>
		      <th>Thu</th>
		      <th>Fri</th>
		      <!-- <th colspan="6">MonTueWedThuFri</th> -->
		    </tr>
		    <?php
		    	for($i=0;$i<12;$i++)
		    	{
		    		echo "<tr>";
		    		for($j=0;$j<6;$j++)
		    		{
		    			if(!$j)
		    				echo "<td style='font-family:微軟正黑體;background-color:rgb(239,239,239);'>";
		    			else
		    				echo "<td style='font-family:微軟正黑體;'>";
		    			if(isset($class[$i][$j]))
		    				echo $class[$i][$j];
		    			echo "</td>";
		    		}
		    		if($i==3)
		    			echo "<tr><td colspan=6 style=background-color:rgb(89,87,88);color:white;>午休時間</td></tr>";
		    		else if($i==9)
		    			echo "<tr><td colspan=6 style=background-color:rgb(89,87,88);color:white;>晚飯時間</td></tr>";
		    		echo "</tr>";
		    	}
		    ?>
		  </table>
		  <?php
		  	}
		  ?>
			</div>
		</div>		
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <script>
    var count=0;
    $(".chatroom-btn").click(
    	function(){
    		 
    		 if(!(count%2))
    		 {
    		 	$(".container0").css('display','block');
    		 	var w=$(".message_box").width();
    		 	$(".container").css('width','80%');
    		 	$("#Select").css('border-spacing','0px');
    		 	$(this).css(
    		    {
    		 			"transform": "translate("+(-w-3)+"px,0)"
    		 	});
    		 	$(this).css(
    		    {
    		 			"width": "5px"
    		 	});
    		 	$(".container0").show();

    		 }
    		 else
    		 {
    		 	$(".chatroom-btn").removeClass("chatroom_move");
    		 	$(".container").css('width','99%');
    		 	$("#Select").css('border-spacing','20px 0px');
    		 	$(this).css(
    		 		{
    		 			"transform": "translate(0,0)"
    		 		});
    		 	$(this).css(
    		    {
    		 			"width": "10px"
    		 	});
    		 	$(".container0").hide();
    		 }
    		 count++;
    	});
  </script>
</html>
