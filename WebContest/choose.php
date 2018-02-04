<?php 
	require_once('connectVar.php');
	if(isset($_POST['grade']))
		$Grade = $_POST['grade'];
	if(isset($_POST['semester']))
		$Semester = $_POST['semester'];
	if($Semester[3]=='u')
		$Sem = "Up";
	else
		$Sem = "Down";
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
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>課表</title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
  <table>
    <tr>  
      <th></th>
      <th>Mon</th>
      <th>Tue</th>
      <th>Wed</th>
      <th>Thu</th>
      <th>Fri</th>
    </tr>
    <?php
    
    	for($i=0;$i<12;$i++)
    	{
    		echo "<tr>";
    		for($j=0;$j<6;$j++)
    		{
    			echo "<td style='font-family:微軟正黑體;'>";
    			if(isset($class[$i][$j]))
    				echo $class[$i][$j];
    			echo "</td>";
    		}
    		echo "</tr>";
    	}
    ?>
  </table>
</body>
</html>