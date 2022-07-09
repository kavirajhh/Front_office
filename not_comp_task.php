<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td>      
      <div align="center">
        <table width="100%" border="0" bgcolor="#000000">
          <tr>
            <td width="100%" bordercolor="#6699CC"><div align="center"><font color="#FFFFFF" size="+2"><strong>Not Complete Task's</strong></font></div></td>
          </tr>
        </table>
      </div>    </td>
  </tr>
  <tr>
    <td>
	<?php
	include "dbconnection.php";
	include "access.php";
	$sql=" SELECT task_sec,task_id,task_date,task,task_client FROM task_open  where task_complete='0' order by task_sec";
	$list=view_not_com($sql);
	 
	
	
?>    </td>
  </tr>
  <tr>
    <td bgcolor="#000000">&nbsp;</td>
  </tr>
</table>

</body>
</html>
