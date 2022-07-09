
<?php
		
	include "dbconnection.php";
	include "access.php";
	?>

<html><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
<body>
<table width="100%" height="100%" border="1">
  <tr>
    <td height="42" bgcolor="#C9DBED">&nbsp;</td>
  </tr>
  <tr>
    <td height="173">
	
	<?php
	
	$id="";
	$name=$_POST["name"];
	$title=$_POST["title"];
	$issue=$_POST["issue"];
	$date=date("y-m-d H-i-s");
	$auth="";
	
//insert the values 
		
	$sql = "INSERT INTO issues (`issue_id`, `client`, `title`, `issue`, `date`, `auth`)  VALUES ('"
			.$id."','".$name."','".$title."','".$issue."','".$date."','".$auth."')"; 
	
	$insert=mysql_query($sql);
		
		if(	$name=="")
			{$name='hemal@localhost';}
			if($insert>0)
				{
				
	          	$msg="Your Issue<em> ".$issue." </em> is add to database  \n";
			  	
			  	$mail=sendmail($name,$msg);
			 }

		else
			{
				$msg=" Error! Check data in form\n";
				$mail=sendmail($name,$msg);
			}
			
			echo "<div align=center><h2>";
			echo $msg;
			echo "<div>";
			die(mysql_error());





	
?></td>
  </tr>
  <tr>
    <td bgcolor="#C9DBED">&nbsp;</td>
  </tr>
</table>
</body>
</html>