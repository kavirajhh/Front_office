<?php
include "dbconnection.php";
include "access.php";
	
	$ent_id=$_REQUEST["ent_id"];
	$v=viewbdata($id);
		?>

<html>
<head><title>Euntoponears Informatiom</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #C9DBED;
}
-->
</style>
</head>
<body>
<form action="ent_change.php" method="post">

  <div align="left">
    <table width="675" height="454" border="1"  align="center" bgcolor="#FFffff">	
      <tr>
        <td colspan="3" bordercolor="#000000" bgcolor="#C9DBED"><h2 align="center">Business Information's 
      </h2>
        <tr>
        <td colspan="3" bordercolor="#000000" bgcolor="#C9DBED">
      <tr>
        <td height="26" colspan="3">
		<input name="id" type="hidden" id="id" value="<?php echo $v[0];?>">            
        <input name="user" type="hidden" id="user" value=<?php echo $user ?>>
        <input name="cat" type="hidden" id="cat" value="<?php echo $cat ?>">
        <tr>
            <td width="162"><strong>Full Name </strong><strong>              </strong>
            <td colspan="2">                                    <?php echo $v[1];?> <?php echo $v[2];?>      
              <?php echo $v[3];?>   
      <tr bgcolor="#FFE9BB">
          <td colspan="2" bgcolor="#FFFFFF"><strong>Marital Status</strong>        
	<?php echo $v[3]; ?>
        <td width="217" bgcolor="#FFFFFF"><strong>Gender</strong>         
		 <?php echo $v[3]; ?>
      <tr>
          <td colspan="2"><strong>National Identity Card Number         
          </strong>
        <td bgcolor="#FFFFFF"><?php echo $v[6];?>                                 
      <tr>
          <td colspan="2"><strong>Date Of Birth        
          </strong>
        <td bgcolor="#FFFFFF"><?php echo $v[7];?>
      <tr>
          <td colspan="3" bgcolor="#C9DBED"><div align="center"><strong>Contac Details </strong>          </div>
      <tr>
          <td colspan="2"><strong>Address No, Street </strong>          
          <td bgcolor="#FFFFFF"><?php echo $v[8];?>       
      <tr>
          <td colspan="2"><strong>Address City        
          </strong>
          <td bgcolor="#FFFFFF"<?php echo $v[9];?>>        
      <tr>
          <td colspan="2"><strong>District</strong>
          <td bgcolor="#FFFFFF"><?php echo $v[10];?>         
      <tr>
        <td colspan="2"><strong>Divisional Secretariat </strong>      
        <td bgcolor="#FFFFFF"><?php echo $v[11];?>   
      <tr>
          <td colspan="2"><strong>Telephone Number 
          </strong>
          <td bgcolor="#FFFFFF"><label>
           <?php echo $v[12];?> 
          </label>
      <tr>
          <td colspan="2"><strong>E-Mail Address </strong>          
          <td bgcolor="#FFFFFF"><?php echo $v[13];?>      
      <tr>
          <td colspan="2">        
          <td>        
      <tr>
        <td colspan="3">          <div align="right">
          <input name="ent" type="hidden" id="ent" value=<?php echo $v[14];?>>
        </div>
    </table>
</div>
</form>

</body>
</html>