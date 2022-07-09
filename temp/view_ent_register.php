<?php
include "dbconnection.php";
include "access.php";
	
	$id=$_REQUEST["no"];
	$user=$_REQUEST["user"];
	$cat=$_REQUEST["cat"];
		
	
		$v=viewdata($id);
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
        <td colspan="2" bordercolor="#000000" bgcolor="#C9DBED"><h2 align="center">Entrepreneur Information's 
      </h2>
        <tr>
        <td colspan="2" bordercolor="#000000" bgcolor="#C9DBED">
      <tr>
        <td height="26" colspan="2">
		<input name="id" type="hidden" id="id" value="<?php echo $v[0];?>">            
        <input name="user" type="hidden" id="user" value=<?php echo $user ?>>
        <input name="cat" type="hidden" id="cat" value="<?php echo $cat ?>">
        <tr>
            <td height="26"><strong>Last Name            
            </strong>
            <td width="387" bgcolor="#FFFFFF"><input name="l_name" type="text" id="l_name" size="25" value=<?php echo $v[1];?>>
      <tr>
                    <td><strong>First Name</strong>
                    <td bgcolor="#FFFFFF"><input name="f_name" value=<?php echo $v[2];?> type="text" id="f_name" size="25">      
      <tr>
                                    <td><strong>Middle Name                                    
                                    </strong>
        <td bgcolor="#FFFFFF"><input name="m_name" value=<?php echo $v[3];?> type="text" id="m_name"  size="25">    
      <tr bgcolor="#FFE9BB">
          <td bgcolor="#FFFFFF"><strong>Marital Status</strong>        
	<?php 
		  	if($v[4]==0){echo "<select name=\"std_marital\" id=\"std_marital\"> <option value=\"0\" 			selected>Single <option value=\"1\">Married<option value=\"2\">Widowed<option 		
			value=\"3\">Divorced</select>";}
			if($v[4]==1){echo "<select name=\"std_marital\" id=\"std_marital\"> <option value=\"0\" 
			>Single <option value=\"1\" selected>Married<option value=\"2\">Widowed<option 
			value=\"3\">Divorced</select>";}
			if($v[4]==2){echo "<select name=\"std_marital\" id=\"std_marital\"> <option value=\"0\" 
			>Single <option value=\"1\" >Married<option value=\"2\" selected>Widowed<option 
			value=\"3\">Divorced</select>";}
			if($v[4]==3){echo "<select name=\"std_marital\" id=\"std_marital\"> <option value=\"0\" 
			>Single <option value=\"1\" >Married<option value=\"2\" >Widowed<option value=\"3\" 
			selected>Divorced</select>";}
			
		  ?>
        <td bgcolor="#FFFFFF"><strong>Gender</strong>         
		 <?php 
		  	if($v[5]==0){echo "<select name=\"std_gender\" id=\"std_gender\"> <option value=\"0\" 	
			selected>Male <option value=\"1\">Female</select>";}
			else 		{echo "<select name=\"std_gender\" id=\"std_gender\"> <option value=\"0\" >
			Male <option value=\"1\" selected>Female</select>";}
			
		  ?>
      <tr>
          <td><strong>National Identity Card Number         
          </strong>
        <td bgcolor="#FFFFFF"><input name="nic" value=<?php echo $v[6];?> type="text" id="nic" size="10">                                
      <tr>
          <td><strong>Date Of Birth        
          </strong>
        <td bgcolor="#FFFFFF"><input name="dob" value=<?php echo $v[7];?> type="text" id="std_m_name4" size="10">
          YYYY-MM-DD
      <tr>
          <td colspan="2" bgcolor="#C9DBED"><div align="center"><strong>Contac Details </strong>          </div>
      <tr>
          <td><strong>Address No, Street </strong>          
          <td bgcolor="#FFFFFF"><input name="add1" value=<?php echo $v[8];?> type="text" id="std_m_name5" size="30">        
      <tr>
          <td><strong>Address City        
          </strong>
          <td bgcolor="#FFFFFF"><input name="add2" value=<?php echo $v[9];?> type="text" id="std_m_name6" size="30">        
      <tr>
          <td><strong>District</strong>
          <td bgcolor="#FFFFFF"><input name="dist" value=<?php echo $v[10];?> type="text" id="std_m_name7" size="25">        
      <tr>
        <td><strong>Divisional Secretariat </strong>      
        <td bgcolor="#FFFFFF"><input name="div" value=<?php echo $v[11];?> type="text" id="std_add3" size="10">      
      <tr>
          <td><strong>Telephone Number 
          </strong>
          <td bgcolor="#FFFFFF"><label>
            <input name="tp" value=<?php echo $v[12];?> type="text" id="tp" size="14">
          </label>
      <tr>
          <td><strong>E-Mail Address </strong>          
          <td bgcolor="#FFFFFF"><input name="email" value=<?php echo $v[13];?> type="text" id="std_add2" size="40">        
      <tr>
          <td>        
          <td>        
      <tr>
        <td colspan="2">          <div align="right">
          <input name="ent" type="hidden" id="ent" value=<?php echo $v[14];?>>
          <input name="submit" type="submit" value="Change Info" >
            <input name="reset" type="reset" value="Delete">        
        </div>
    </table>
</div>
</form>

</body>
</html>