
<?php 
include "dbconnection.php";
$pro_id=$_REQUEST["pro_id"];
	
	$sql1="select pro_vacants from pro_schedule where pro_id='".$pro_id."'";
	$cal=mysql_query($sql1)or die(mysql_error());
	while($row=mysql_fetch_assoc($cal)){
		
			foreach($row as $value){
			
									
			}}
	
	$sql="select * from pro_id where course_id='".$pro_id."'";
	$cal2=mysql_query($sql)or die(mysql_error());
	$nr=mysql_num_rows($cal2);
	$vacants=$value-$nr;
	
?>
<html>
<head><title>Add Programs</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #C9DBED;
}
.style3 {color: #0000FF}
.style6 {color: #FF0000; font-weight: bold; }
-->
</style></head>
<body>
<?php 
if($vacants>1){
echo "<form action=\"pro_apply_up.php\" method=\"post\">";
}

?>
  <div align="left">
    <table width="90%" height="90%" border="1"  align="center" bgcolor="#FFffff">	
      <tr>
        <td colspan="4" bordercolor="#000000"><h2 align="center">Application for Programs <strong></strong></h2>
      <tr>
          <td colspan="4" bordercolor="#000000" bgcolor="#C9DBED">
      <tr>
          <td height="26" colspan="4"><p align="center" class="style3">Total Vacants             <span class="style6">: <?php echo $value;?>                   
          </span>Available Vacants <span class="style6">:  <?php echo $vacants;?></span></p>
      <tr>
          <td height="11">
          
          <td width="455" colspan="2" bgcolor="#FFFFFF">
      <tr>
            <td height="26"><strong>Program ID </strong>
            <td colspan="2" bgcolor="#FFFFFF"><input name="pro_id" type="text" id="pro_id" size="25" maxlength="12" value=<?php echo $pro_id;?>>
      <tr>
                    <td><strong>Name</strong>
                    <td colspan="2" bgcolor="#FFFFFF"><input name="name" type="text" id="name" size="50" maxlength="50">      
      <tr>
          <td><strong>Address</strong>
        <td colspan="2" bgcolor="#FFFFFF"><input name="add" type="text" id="std_m_name4" size="65">
      <tr>
          <td><strong>Telephone No </strong>
          <td colspan="2" bgcolor="#FFFFFF"><input name="tp" type="text" id="std_m_name5" size="30">        
      <tr>
          <td><strong>E-mail</strong>
          <td colspan="2" bgcolor="#FFFFFF"><input name="email" type="text" id="std_m_name6" size="30">        
      <tr>
          <td>        
          <td colspan="2">        
      <tr>
        <td colspan="4">          <div align="right">
            <input name="submit" type="submit" value="Submit" >
            <label>
            <input type="reset" name="Reset" value="Cancel Registration">
            <input type="reset" name="Submit2" value="Reset">
            </label>        
        </div>
    </table>
</div>
</form>
</body>
</html>