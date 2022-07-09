<body bgcolor="#FFFFFF">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td>      
      <div align="center">
        <table width="100%" border="0" bgcolor="#000000">
          <tr>
            <td width="100%" bordercolor="#6699CC"><div align="center"><font color="#FFFFFF" size="+2"><strong>Technical Reports </strong></font></div></td>
          </tr>
        </table>
      </div>    </td>
  </tr>
  <tr>
    <td>
	<?php
	include "dbconnection.php";
	include "access.php";
	
	$sql= "SELECT * FROM pro_schedule WHERE pro_date  BETWEEN '2010-11-01' AND '2010-11-30' ";
	//$up=mysql_query($sql) or die(mysql_error());

	
 	$list=pro_list($sql);
	
	
	
?>    </td>
  </tr>
  <tr>
    <td bgcolor="#000000"><font color="#FFFFFF">Click on program Name to Apply </font></td>
  </tr>
</table>

</body>
</html>
