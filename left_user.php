<?php
session_start();
$cat=$_SESSION['cat'];

?>
<html>
<head>
<title>l</title>
<style type="text/css">
<!--
body {
	background-color: #D9E6F2;
}
-->
</style></head>

<body>
<table border="0">
  <tr>
    <td height="77">
	  <div align="center"><a href=left_ent_pic.php></a> <a href="left.php" target="leftFrame"><img src="buttons/new_icon3.gif" width="62" height="68" border="0"></a></div></td>
  </tr>
  <tr>
    <td height="42"><div align="center"><strong>User Information </strong></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="ent_register.html" target="mainFrame">User Register</a></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="biz_register.php" target="mainFrame">Bussiness Register </a></div></td>
  </tr>
  
  <tr>
    <td><a href="page_access.php" target="mainFrame">Access</a></td>
  </tr>
</table>
</body>
</html>
