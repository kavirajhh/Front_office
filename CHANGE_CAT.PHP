<?php 
include "dbconnection.php";
include "access.php";
/*$pg_v="atis";
//session_start();
$cat=$_COOKIE['catagory'];

if(!pageaccess($pg_v,$cat))
		{
		echo "Sorry you are not allow to submit this form ";
		exit();
		}
	else
	{//go aheid 
	}*/
?>
<html>
<head>
<title>Change Catagory</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF">
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action="change_ucat.php" method="post">
  <table width="75%" border="1" align="center">
    <tr> 
      <td colspan="2"><p align="center"><font size="+2">Change User Catagory</font></p>
        <p align="center">&nbsp;</p></td>
    </tr>
    <tr> 
      <td width="25%">Login Name</td>
      <td width="59%" > 
        <?php 	$sql="SELECT u_id FROM user";
				$name='log_name';
	  			$id=view_id($sql,$name); 
				?>
      </td>
    </tr>
    <tr> 
      <td>Catagory</td>
      <td > 
        <?php 	$sql="SELECT catagory FROM user_cat";
				$name='u_cat';
	  			$id=view_id($sql,$name); ?></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>
