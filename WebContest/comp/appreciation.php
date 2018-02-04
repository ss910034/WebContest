<?php 
 $error=0;	
if(isset($_POST['College'])) $college=$_POST['College']; else $error++;
if(isset($_POST['Department'])) $department=$_POST['Department']; else $error++;
if(isset($_POST['choose'])) $chos1=$_POST['choose']; else $error++;
if(isset($_POST['Classname'])) $classname=$_POST['Classname']; else $error++;
if(isset($_POST['star'])) $chos2=$_POST['star'];else $error++; 
if(isset($_POST['comment'])) $comment=$_POST['comment'];else $error++; 
 require 'connectVar.php'; 

if($error==0)
{
$insert = $conn->query("INSERT INTO `comment`( `college`, `department`, `type`, `classname`, `star`, `comment`) VALUES ('$college','$department','$chos1','$classname','$chos2','$comment')"); 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Appreciate</title>
	<link rel="stylesheet" type="text/css" href="appreciation.css">
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
	<div class="choose">
		<form action="appreciation.php" method="post">
		<h2>
			<label for="College" id="label1">College : </label>
				<select name="College" style="width:115px; margin-bottom: 5%;" id="sel1">
	　				<?php
					  require_once("connectVar.php");
					  $ins="SELECT * FROM `college`";
  					  $acc=$conn->query($ins);
  					    while($row=@mysqli_fetch_row($acc))
  							echo '<option value="'.$row[1].'">'.$row[1].'</option>';
					?>
				</select>
			<script type="text/javascript">
				$("#sel1").change(
					function(){
						location.href="appreciation.php?college="+$(this).val();
					}
					)
			</script>
			<label for="Department" id="label2" style="margin-left: 2%;margin-bottom:5%;">Department : </label>
		
				<select name="Department" style="width:115px;" id="sel2">
				<?php
					   $col=$_GET['college'];
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
				$("#sel2").change(
					function(){
						location.href="appreciation.php?college=<?php echo $col ;?>&deparment="+$(this).val();
					}
					)
			</script>

			<label for="Type" id="label3" style="margin-left: 2%;margin-bottom: 5%;">Type : </label>
					
						<select name="Type1" style="width:115px;" id="sel3">
						<?php
							   $col2=$_GET['deparment'];
							   if(isset($col2))
						?>
						<script type="text/javascript">
							$("#sel2").val("<?php echo $col2; ?>");
						</script>
						<?php 
							$has=0;
						if($has==0)?>
							<option></option>
						else
						{
							<option value="必修" <?php if(isset($_GET['sel3'])&&$_GET['sel3']=="必修") $has=1; ?>>必修</option>
							<option value="選修" <?php if(isset($_GET['sel3'])&&$_GET['sel3']=="選修") $has=1; ?>>選修</option>
							<option value="通識" <?php if(isset($_GET['sel3'])&&$_GET['sel3']=="通識") $has=1; ?>>通識</option>							
						}
						?>
						</select>
						<script type="text/javascript">
							$("#sel3").change(
								function(){
									location.href="appreciation.php?college=<?php echo $col ;?>&deparment=<?php echo $col2 ?>&type="+$(this).val();
								})
						</script>

		<label for="Coursename" id="label4" style="margin-left: 2%;margin-bottom: 5%;">CourseName : </label>
			
				<select name="Coursename" style="width:200px;" id="sel4">
				<?php
					   $col3=$_GET['type'];
					   if(isset($col3))
				?>
				<script type="text/javascript">
					$("#sel3").val("<?php echo $col3; ?>");
				</script>
				<option></option>
				<?php
					$ins="SELECT * FROM `$col3` WHERE department ='$col2' ";
					$acc=$conn->query($ins);
					while($row=@mysqli_fetch_row($acc))
			 			echo '<option value="'.$row[1].'">'.$row[1].'</option>';
				?>
				</select>
				<script type="text/javascript">
					$("#sel4").change(
					function(){
						location.href="appreciation.php?college=<?php echo $col ;?>&deparment=<?php echo $col2 ?>&type=<?php echo $col3; ?>&coursename="+$(this).val();
							})
				</script>
			</h2>
		
		<input type="submit" name="sub" value="SUBMIT" style=" margin-left: 2%;margin-bottom: 5%;width:100px; ">
	</div>
	</form>
	<br></br>
	<HR>
	<?php
	if(isset($_GET['coursename']))
		$col4=$_GET['coursename'];
		if(isset($col4))
		{
	?>
	<script type="text/javascript">
		$("#sel4").val("<?php echo $col4; ?>");
	</script>
	<?php
}
	if(isset($_POST['sub'])&&$_POST['sub']=="SUBMIT")
		{ 
			$col=$_POST['College'];
			$col1=$_POST['Department'];
			$col2=$_POST['Type1'];
			$col3=$_POST['Coursename']; 
	?>

<table class="rwd-table" style="word-break:break-all;">
  <?php 
  $ins="SELECT * FROM `comment` WHERE classname = '$col3'";
  $acc=$conn->query($ins);
  $i=0;
  while($row=@mysqli_fetch_row($acc))
  {?>
	 <tr>
	 <?php
	 	if($i==0)
	 	{?>
	 		<td rowspan=10 text-align="left" width="30%">
		 		<br>
		 		<li style="margin-left: 5%;"><b>College </b><?php echo $row[1]; ?><br>
		 		<br>
		 		<li style="margin-left: 5%;"><b>Department </b><?php echo $row[2]; ?><br>
		 		<br>
		 		<li style="margin-left: 5%;"><b>Type </b><?php echo $row[3]; ?><br>
		 		<br>
		 		<li style="margin-left: 5%;"><b>CourseName </b><?php echo $row[4]; ?><br>
		 		<br>
	 		</td>
	 	<?php	
		} ?>
		    <td style="margin-left: 50px; text-align: center;width:13%;"><?php echo $row[5]; ?></td>
		    <td style="margin-left: 50px; text-align: center;"><?php echo $row[6]; ?></td>
 	  </tr>
  <?php
  $i++; } }?>
</table>


<div class="write">
	<a href="http://35.167.45.151/WebContest/comp/write.php" title="來說說你的想法~"><img src="354613.png" width="80" height="80"></a>
</div>
</div>
</HR>
</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</html>
