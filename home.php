<?php 
	include "dbconnection.php";	
	$id=$_REQUEST["id"];
	$pw=$_REQUEST["pw"];
	$time=date("Y-m-d h-m-s");
	
?>
<head>
<title>CoreMax Hemal Kaviraj</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #D9E6F2;
}
-->
</style></head>
<?php	
	if($id==""){
				echo ("Enter Valid User ID");
				echo "<a href='index.html' >";
				echo "<br>";
				echo "Back";
				echo "</a>";
				exit();
				}//end of if
	else{	
				$sql="select * from user where u_id='".$id."' and u_pw=('".md5($pw)."')";
				$rs= $conn->query($sql);
				$nr=mysql_num_rows($rs);
		
				if($nr!=1){
					$sql="select * from user where u_id='".$id."' and u_pw=('".$pw."')";
					$rs=mysql_query($sql);
					$nr=mysql_num_rows($rs);
							}
		
				if($nr==1){
					$sql2="select u_cat from user where u_id='".$id."'";
					$u_cat=mysql_query($sql2);
					while($row=mysql_fetch_array($u_cat))
						{
						$cat=$row["u_cat"];
	
						}//end of while
						
//echo "<frameset rows=\"80,*\" cols=\"*\" frameborder=\"no\" border=\"0\" framespacing=\"0\">";
echo "<frameset rows=\"80,150,*\" cols=\"*\" frameborder=\"no\" border=\"0\" framespacing=\"0\">";// new line
echo "<frame src=\"top.php\" name=\"topFrame\" scrolling=\"No\"  id=\"topFrame\" title=\"topFrame\" />";
echo "<frame src=\"left.php?\" name=\"topFrame\" scrolling=\"No\"  id=\"topFrame\" title=\"leftFrame\" />";
echo "<frameset rows=\"*\" cols=\"131,*\" framespacing=\"0\" frameborder=\"no\" border=\"0\">";
echo "<frame src=\"main.html\"  name=\"leftFrame\" scrolling=\"No\"  id=\"leftFrame\" title=\"leftFrame\" />";
echo "<frame src=\"main.html\" name=\"mainFrame\" id=\"mainFrame\" title=\"main\" />";
echo "</frameset>";
echo "</frameset>";
echo "<noframes>";
					
				$sql3="UPDATE `user` SET `last` = '".$time."' WHERE `u_id` = '".$id."' LIMIT 1" ;
				$up=mysql_query($sql3);
					
						}//end of if($nr==1)
			
					else { 	print ("Invalied User Name or Password");
							echo "<a href='index.html' >";
							echo "<br>";
							echo "Back";
							echo "</a>";
							exit();
				  			}
		}//end of else
	////////////////////////////////
	session_start();
	$_SESSION['cat']=$cat;
	$_SESSION['user']=$id;
	///////////////////////////////	
?>
<body>
<table width="100%" height="100%" border="1">
  <tr>
    <td height="88">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="176" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>

</noframes>

</html>
