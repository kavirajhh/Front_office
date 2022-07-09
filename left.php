<?php
session_start();
$cat=$_SESSION['cat'];
$user=$_SESSION['user'];

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
<table width="511" height="24%" border="0" align="center">
  <tr>
    <td height="52	">
	  <div align="center"><a href=left_ent_pic.php?cat=$cat,user=$user target="leftFrame"><img src=buttons/user.gif alt=Registration width=60 height=60 border=\"0\" /></a> </div></td>
    <td><div align="center"><a href="left_issue.php" target="leftFrame"><img src="buttons/nw_image32.gif" alt="Solution Centre" width="50" height="50" border="0"></a></div></td>
    <td><div align="center"><a href="left_file.php" target="leftFrame"><img src="buttons/vndb_icon1.jpg" alt="File Management" width="50" height="50" border="0"></a></div></td>
    <td><div align="center">
      <a href="left_task.php" target="leftFrame"><img src="buttons/nw_image24.gif" alt="Task Management" width="50" height="50" border="0" ><br>
      Task Management  </a>
    </div></td>
    <td><div align="center"><a href="left_pro.php" target="leftFrame"><img src="buttons/nw_image7.gif" alt="Program Schdule" width="50" height="50" border="0"></a></div></td>
    <td><div align="center"><a href="left_admin.php" target="leftFrame" ><img src="buttons/nw_image13.gif" alt="Admin Links" width="50" height="50" border="0"></a></div></td>
  </tr>
</table>
</body>
</html>
