<?php 
	echo "<body bgcolor=\"#E8FFE8\">";
	include "dbconnection.php";
	include "access.php";
	$pg_v="VIEW";
	$cat=$_REQUEST['cat'];

	if(!pageaccess($pg_v,$cat))
			{
			echo "Sorry you are not allow to submit this form ";
			exit();
			}
	else
			{//go aheid 
			}
?>
<html>
<head>
<title>Change Catagory</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#E8FFE8">
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action="view_app.php" method="post">
  <table width="48%" border="1" align="center">
    <tr align="center" valign="bottom" bgcolor="#666666"> 
      <td colspan="2"><p align="center"><font color="#FFFFFF" size="+2"><strong>Enter
              User Id for View Information</strong></font></p>
        <p align="center">&nbsp;</p></td>
    </tr>
    <tr> 
      <td width="41%" bgcolor="#000000"><strong><font color="#FFFFFF">Login Name</font></strong></td>
      <td width="59%" bgcolor="#000000"> 
        <?php 	$sql="SELECT emp_id FROM emp_details";
				$name='id';
	  			$id=view_id($sql,$name); 
				
        //<input name="id" type="text" id="id">     
		 ?>
      </td>
    </tr>
    <tr bgcolor="#000000"> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="View"> </td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>
