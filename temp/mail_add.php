
<?php 
include "dbconnection.php";
include "access.php";
?>
<html>
<head><title>Mail Administration</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #C9DBED;
}
.style1 {color: #FFFFFF}
-->
</style></head>
<body>
<form action="mail_trans.php" method="post">
  <div align="left">
    <table width="99%" height="100%" border="1"  align="center" bgcolor="#FFFFFF">	
      <tr>
        <td colspan="2"><h2 align="center">Mail Administration</h2></td>
      <tr>
        <td height="31" colspan="2" > <div align="center" class="style1">.</div>
      <tr>
            <td height="49" colspan="2"  bgcolor="#E9F0F8"><p align="center">&nbsp;</p>
              <p align="center">&nbsp;</p>
      <tr>
        <td height="149" colspan="2" align="center" valign="middle" nowrap><p>&nbsp;</p>
          <table width="324" border="0" align="center">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><label>
                    <input name="add_mail" type="text" id="add_mail">
                  </label></td>
                  <td colspan="2"><label>
                    <input type="submit" name="Submit" value="Add New Catagory">
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><label>
                    
					<?php 		
					$sql="select mail_list from mail_list order by mail_list";
					$name='del_mail';
	  				$id=view_id($sql,$name); 
				?>    
					
                  
                  </label></td>
                  <td colspan="2"><label>
                    <input type="submit" name="Submit2" value="Delete Catagory">
                  </label></td>
                </tr>
              </table>
              <tr>
          <td width="79" height="2">        
          <td width="917">        
      <tr>
        <td colspan="2" bgcolor="#E9F0F8">
          <p>&nbsp;</p>
        <p>&nbsp;</p>
      </table>
</div>
</form>

</body>
</html>