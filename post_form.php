<?php 
include "dbconnection.php";
include "access.php";
$pg_v="POST";
$u_id=$_REQUEST["user"];
$cat=$_REQUEST["cat"];

/*

if(!pageaccess($pg_v,$cat))
		{
		echo "Sorry you are not allow to submit this form ";
		exit();
		}
	else
	{//go aheid 
	}*/
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF">
<p>&nbsp;</p>
<form action="post_u.php" method="post">
  <table width="72%" border="0" align="center">
  <tr>
    <td colspan="3" bgcolor="#D9E6F2"><div align="center"><font size="+2">Massage Center </font></div></td>
    </tr>
  <tr>
    <td width="25%" height="32"><strong>Send To</strong></td>
    <td ><?php 		
				$sql=$sql="SELECT u_id FROM user";
				$name='res';
	  			$id=view_id($sql,$name); ?>
  <label></label></td>
    <td ><label>
      <div align="right">
        <input type="checkbox" name="checkbox" value="1">
        Send this message to all        </div>
    </label></td>
  </tr>
  <tr>
    <td height="21" bgcolor="#D9E6F2"><strong>Message Title </strong></td>
    <td height="21" colspan="2" bgcolor="#D9E6F2"><label>
      <div align="center">
        <input name="title" type="text" id="title" size="40">
        </div>
    </label></td>
    </tr>
  <tr>
    <td height="21" colspan="3"><label>Message</label></td>
    </tr>
  <tr>
    <td height="29" colspan="3"><div align="center">
      <textarea name="post" cols="60" rows="10" id="post"></textarea>
    </div></td>
  </tr>
  <tr>
    <td height="32" colspan="3" bgcolor="#D9E6F2">	   
      <div align="right">
        <input name="user" type="hidden" id="user" value=<?php echo $u_id?>>
        <input type="submit" name="Submit" value="Send">
        <input type="reset" name="Submit2" value="Reset">
      </div></td>
    </tr>
</table>
<p>
  <label></label>
</p>

</form>

<p>&nbsp; </p>
</body>
</html>
