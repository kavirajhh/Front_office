<?php
	include "dbconnection.php";
	include "access.php";
	$u_id=$_REQUEST["user"];
	$cat=$_REQUEST["cat"];
	
?>

<html>
<head><title>Euntoponears Registration</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #C9DBED;
}
-->
</style>
</head>
<body>
<form action="ent_update.php" method="post">
  <div align="left">
    <table width="675" height="454" border="1"  align="center" bgcolor="#FFffff">	
      <tr>
        <td colspan="2" bordercolor="#000000"><h2 align="center">Registration Form <strong></strong></h2>
        <tr>
          <td colspan="2" bordercolor="#000000" bgcolor="#C9DBED">
        <tr>
          <td height="26"><strong>User ID         </strong>
          <td bgcolor="#FFFFFF"><?php echo $u_id ?>
            <input name="user" type="hidden" id="user" value=<?php echo $u_id ?>>
            <input name="cat" type="hidden" id="cat" value="<?php echo $cat ?>">        
      <tr>
            <td width="151" height="26"><strong>Last Name            
            </strong>
            <td width="387" bgcolor="#FFFFFF"><input name="l_name" type="text" id="l_name" size="25">
      <tr>
                    <td><strong>First Name</strong>
                    <td bgcolor="#FFFFFF"><input name="f_name" type="text" id="f_name" size="25">      
      <tr>
                                    <td><strong>Middle Name                                    
                                    </strong>
        <td bgcolor="#FFFFFF"><input name="m_name" type="text" id="m_name"  size="25">    
      <tr bgcolor="#FFE9BB">
          <td bgcolor="#FFFFFF"><strong>Marital Status</strong>            <select name="marital" id="marital">
            <option value="Single">Single
            <option value="Married">Married
            <option value="Widowed">Widowed
            <option value="Divorced">Divorced            
            </select>      
        <td bgcolor="#FFFFFF"><strong>Gender</strong>          <select name="gender" id="gender">
            <option value="0">Male </option>
            <option value="1">Female </option>
          </select>         
      <tr>
          <td><strong>National Identity Card Number         
          </strong>
        <td bgcolor="#FFFFFF"><input name="nic" type="text" id="nic" size="10">                                
      <tr>
          <td><strong>Date Of Birth        
          </strong>
        <td bgcolor="#FFFFFF"><input name="dob" type="text" id="std_m_name4" size="10">
          YYYY-MM-DD
      <tr>
          <td colspan="2" bgcolor="#C9DBED"><div align="center"><strong>Contac Details </strong>          </div>
      <tr>
          <td><strong>Address No, Street </strong>          
          <td bgcolor="#FFFFFF"><input name="add1" type="text" id="std_m_name5" size="30">        
      <tr>
          <td><strong>Address City        
          </strong>
          <td bgcolor="#FFFFFF"><input name="add2" type="text" id="std_m_name6" size="30">        
      <tr>
          <td><strong>District</strong>
          <td bgcolor="#FFFFFF">
		  <?php 
			$sql="SELECT district FROM district";
			$name='dist';
	  		$id=view_id($sql,$name);
	
			?>
        
      <tr>
        <td><strong>Divitional Secretariat </strong>      
        <td bgcolor="#FFFFFF"><?php 
			$sql="SELECT division FROM division";
			$name='div';
	  		$id=view_id($sql,$name);
	
			?>
        
      <tr>
          <td><strong>Telephone Number 
          </strong>
        <td bgcolor="#FFFFFF"><label>
        <input name="tp" type="text" id="tp" size="14">
          </label>
          <strong>Fax Number</strong>
          <input name="tp2" type="text" id="tp2" size="14">
      <tr>
          <td><strong>E-Mail Address </strong>          
          <td bgcolor="#FFFFFF"><input name="email" type="text" id="std_add2" size="40">        
      <tr>
          <td>        
          <td>        
      <tr>
        <td colspan="2">          <div align="right">
            <input name="submit" type="submit" value="Register" >
            <input name="reset" type="reset" value="Reset">        
        </div>
    </table>
</div>
</form>

</body>
</html>