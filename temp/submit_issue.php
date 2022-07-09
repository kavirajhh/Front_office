<?php
	include "dbconnection.php";
	include "access.php";
?>

<html>
<head><title>PGIS Application</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #C9DBED;
}
-->
</style></head>
<body>
<form action="update_issue.php" method="post">
  <div align="left">
    <table width="100%" height="100%" border="1"  align="left" bgcolor="#FFFFFF">	
      <tr>
        <td colspan="2"><h2 align="center">Enter Your Issue Here  <strong></strong></h2>
      <tr>
        <td colspan="2"><div align="left"></div>
        <tr>
            <td height="49" colspan="2" bordercolor="#E9F0F8" bgcolor="#E9F0F8"><p align="center"><strong>Enter Your Email Address Here</strong></p>
              <p align="center">
                <input name="name" type="text" id="name" size="25">              
                    </p>
        <tr>
              <td height="50" colspan="2" align="center" valign="middle" nowrap><p><strong>Select Title To Your Issue </strong></p>
                <p>
                
				  
<?php
			
			$sql="SELECT catagory FROM tech_catagory";
			$name='title';
	  		$id=view_id($sql,$name);
	
			   
			
	?>
                </p>
      <tr>
                                    <td colspan="2" align="center" valign="middle"><p><strong>Issue</strong></p>
                                      <p>
                                          <textarea name="issue" cols="70" rows="5" wrap="off" id="issue"></textarea>    
                                      </p>
      <tr>
          <td width="79">        
          <td width="917">        
      <tr>
        <td colspan="2">          <div align="right">
            <input name="submit" type="submit" value="Submit My Issue" >
            <input name="reset" type="reset" value="Clear Form">        
        </div>
    </table>
</div>
 </form> 

</body>
</html>