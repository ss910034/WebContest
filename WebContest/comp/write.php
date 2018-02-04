<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>評價撰寫</title>
	<link rel="stylesheet" type="text/css" href="write.css">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
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


<div class="inside">
	<h1 style="text-align: center;">Course Appreciation</h1>
	<?php if(isset($_SESSION['username']))
		{ ?>
	<form action="appreciation.php" method="post">
	<div class="college">
	<label style="padding-left: 25%;">College：</label>
	<select name="College" id="sel1" style="width:150px; margin-bottom: 10px;">
	<?php
	
		  require_once("connectVar.php");
		  $ins="SELECT * FROM `college`";
  		  $acc=$conn->query($ins);
  		    while($row=@mysqli_fetch_row($acc))
 			 {
  				echo '<option value="'.$row[1].'">'.$row[1].'</option>';
  			 }
	?>
	</select>
	<script type="text/javascript">
		$("#sel1").change(
			function(){
				location.href="write.php?value="+$(this).val();
			}
			)
	</script>
	</div>

	<div class="department">
	<label style="padding-left: 25%;">Department：</label>
	<select name="Department" id="department" style="width:150px; margin-bottom: 10px;">
	<?php
		   $col=$_GET['value'];
		   if(isset($col))
	{?>
	<script type="text/javascript">
		$("#sel1").val("<?php echo $col; ?>");
	</script>
	<option></option>
	<?php
					$ins="SELECT * FROM `必修` WHERE college = '$col'";
			  		    $acc=$conn->query($ins);
			  			while($row=@mysqli_fetch_row($acc))
			 		   	{	
			 		   		$has=0;
			 		   		for($i=0;$i<count($class);$i++)
			 		   		{
			 		   			if($class[$i]==$row[2])
			 		   			{
			 		   				$has++;
			 		   				break;
			 		   			}	
			 		   		}
			 		   		if($has==0)
			 		   		{
			 		   			echo '<option value="'.$row[2].'">'.$row[2].'</option>';
			  		   			$class[$i]=$row[2];
			  		   		}
			  		 	}
					}
				?>
	</select>
	<script type="text/javascript">
		$("#department").change(
			function(){
				location.href="write.php?value=<?php echo $col ;?>&department="+$(this).val();
			}
			)
	</script>
	</div>
	
	<div class="choose">
			<?php
			if(isset($_GET['department']))
		   		$col2=$_GET['department'];
	?>
	<script type="text/javascript">
		$("#department").val("<?php echo $col2; ?>");
	</script>
			<label style="padding-left: 25%;">Required/Selected：</label>
			<input type="radio" class="rb" name="choose" value="必修" <?php if(isset($_GET['rb'])&&$_GET['rb']=="必修") echo "checked=true"; ?>>必修
			<input type="radio" class="rb" name="choose" value="選修" <?php if(isset($_GET['rb'])&&$_GET['rb']=="選修") echo "checked=true"; ?>>選修
			<input type="radio" class="rb" name="choose" value="通識" <?php if(isset($_GET['rb'])&&$_GET['rb']=="通識") echo "checked=true"; ?>>通識
			<?php if(isset($_GET['rb'])) $cho1=$_GET['rb']; ?>
			<script type="text/javascript">
				$(".rb").change(
					function(){
						var language=$('input[name="choose"]:checked').val();
						location.href="write.php?value=<?php echo $col ;?>&department=<?php echo $col2 ;?>&rb="+language;
					}
					)
			</script>
	</div>

	<div class="classname">
	<label style="padding-left: 25%;">Name of Class：</label>
	<select name="Classname" id="class1" style="width:200px; margin-bottom: 10px;">
	<option></option>
	<?php	
			$ins="SELECT * FROM `$cho1` WHERE department ='$col2' ";
			$acc=$conn->query($ins);
			while($row=@mysqli_fetch_row($acc))
			 	echo '<option value="'.$row[1].'">'.$row[1].'</option>';
	?>
	</select>
	<script type="text/javascript">
		$("#class1").change(
			function(){
				location.href="write.php?value=<?php echo $col ;?>&department=<?php echo $col2 ;?>&rb=<?php echo $cho1;?>&class1="+$(this).val();
			}
			);
	</script>
	</div>

	<div class="star">
	<?php if(isset($_GET['class1'])) 
			$col3=$_GET['class1'];
	?>
	<script type="text/javascript">
		$("#class1").val("<?php echo $col3 ; ?>");
	</script>
		<label style="padding-left: 25%">Rate：</label>
		<input type="radio" class="s" name="star" value="☆"<?php if(isset($_GET['s'])&&$_GET['s']=="☆") echo "checked=true"; ?>>☆
		<input type="radio" class="s" name="star" value="☆☆"<?php if(isset($_GET['s'])&&$_GET['s']=="☆☆") echo "checked=true"; ?>>☆☆
		<input type="radio" class="s" name="star" value="☆☆☆"<?php if(isset($_GET['s'])&&$_GET['s']=="☆☆☆") echo "checked=true"; ?>>☆☆☆
		<input type="radio" class="s" name="star" value="☆☆☆☆"<?php if(isset($_GET['s'])&&$_GET['s']=="☆☆☆☆") echo "checked=true"; ?>>☆☆☆☆
		<input type="radio" class="s" name="star" value="☆☆☆☆☆"<?php if(isset($_GET['s'])&&$_GET['s']=="☆☆☆☆☆") echo "checked=true"; ?>>☆☆☆☆☆
					<?php if(isset($_GET['s'])) $cho1=$_GET['s']; ?>
			<script type="text/javascript">
				$(".s").change(
					function(){
						var la=$('input[name="star"]:checked').val();
						location.href="write.php?value=<?php echo $col ;?>&department=<?php echo $col2 ;?>&rb=<?php echo $cho1;?>&class1=<?php echo $col3; ?>&s="+la;
					}
					)
			</script>

	</div>

	<div class="comment">
		<form action="test.php" method="get">
		<label style="margin-left: 25%" for="comment" id="co1">Comment：</label>
		<textarea name="comment" style="width:500px; height:200px;" placeholder="請輸入對此堂課的評價..."></textarea>
	</div>

	<div class="button">
		<input type="submit" value="Submit" style="margin-left: 62.5%; width:100px;">
	</div>
	</form>
</div>	<?php } 
	else{?>
	<div class="stop">
	<img src="../img/stop.svg" style="height:150px;width:150px;"><div class="in">要先登入才可以填寫評價唷 ;)</div></div>
<?php	} ?>
</body>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</html>
