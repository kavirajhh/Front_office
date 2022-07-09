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
	$sql=" SELECT file_id,file_dis,up_date FROM up_file where up_level=1 order by up_date desc ";
	
 	$list=file_list($sql);
	
	
	
?>    </td>
  </tr>
  <tr>
    <td bgcolor="#000000"><font color="#FFFFFF">Click on File Name to Download </font></td>
  </tr>
</table>

</body>
</html>
