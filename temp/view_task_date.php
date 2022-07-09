<body bgcolor="#FFFFFF">

<html>
<body>
<table width="100%" border="0">
  <tr>
    <td>      
      <div align="center">
        <table width="100%" border="0" bgcolor="#000000">
          <tr>
            <td width="100%" bordercolor="#6699CC"><div align="center"><font color="#FFFFFF" size="+2"><strong>All Task's Open  </strong></font></div></td>
          </tr>
        </table>
      </div>    </td>
  </tr>
  <tr>
    <td>
	<?php
	include "dbconnection.php";
	include "access.php";
	$today=date("y-n-d");
	
	$sql=" SELECT task_id,task_date,task,task_client FROM task_open  where  task_id in (select task_id from task_trans where trans_date='".$today."') ";
	$list=view_not_com($sql);
	
	
	
?>    </td>
  </tr>
  <tr>
    <td bgcolor="#000000">&nbsp;</td>
  </tr>
</table>

</body>
</html>
