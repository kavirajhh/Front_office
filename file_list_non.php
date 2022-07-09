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
	$pg_v="flua"; // page id
	
	$cat=$_REQUEST["cat"]; //user cat
	$user=$_REQUEST["user"]; // login user
	
		if(!pageaccess($pg_v,$cat))
				{
			
				
				echo "<h2><div align=\"center\" >Sorry you are not allow to update this record ";
				echo "<h2><div align=\"center\" >Plese meet authorized officer ";
				exit();
				}
		else
			{//go aheid 
			}
	
	
	$sql=" SELECT file_id,file_dis,up_date FROM up_file where up_level=0 order by up_date desc ";
	
 	$list=file_list($sql);
	
	
	
?>    </td>
  </tr>
  <tr>
    <td bgcolor="#000000"><font color="#FFFFFF">Click on File Name to Download </font></td>
  </tr>
</table>

</body>
</html>
