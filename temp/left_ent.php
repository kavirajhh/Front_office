<?php 
	$cat=$_REQUEST["catagory"];
	?>
<html>
<head>
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #D9E6F2;
}
-->
</style></head>

<body>
<table width="100%" border="2">
  
  <tr>
    <td><a href="ent_register.html" target="mainFrame">User Register</a></td>
  </tr>
  <tr>
    <td><a href="biz_register.php" target="mainFrame">Bussiness Register </a></td>
  </tr>
  <tr>
    <td><a href="submit_issue.html" target="mainFrame">Submit Issue </a></td>
  </tr>
  <tr>
    <td><a href="issue_auth.php" target="mainFrame">Issue Authorize </a></td>
  </tr>
  <tr>
    <td><a href="solution.php" target="mainFrame">Solution</a></td>
  </tr>
  <tr>
    <td><a href="solution_auth.php" target="mainFrame">Solution Authorize </a></td>
  </tr>
  <tr>
    <td><a href="seatch_text.html" target="mainFrame">Search</a></td>
  </tr>
</table>
<?php echo $cat ?>
</body>
</html>
