

<?php
	echo "<body bgcolor=\"#FFFFFF\">";
	include "dbconnection.php";
	include "access.php";
	$user=$_REQUEST['user'];
				
	/*$pg_v="W001";
	$cat=$_COOKIE['catagory'];
	$id=$_COOKIE['username'];


	if(!pageaccess($pg_v,$cat))
		{
		echo "Sorry you are not allow ";
		exit();
		}
	else{
		//go aheid 
		}*/
?>

<html>
<head><title>Employee Information</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body bgcolor="#FFFFFF">
<form action="app_a2.php" method="post">
  <div align="left">
    <table width="675" height="557" border="1" bordercolor="#000000" bgcolor="#000000"  align="center">	
      <tr bgcolor="#000000">
        <td colspan="4"><h2 align="center"><font color="#CCCCCC" size="+2">Section
              1: </font><font color="#CCCCCC">Employee Information </font></h2>
          <p align="center"><font color="#CCCCCC"><strong>Step 01 of 03</strong></font></p>            
      <tr>
        <td width="231" bgcolor="#666666"><div align="left"><font color="#FFFFFF"><strong>Employee ID</strong></font></div>
        <td colspan="3" bgcolor="#CCCCCC">&nbsp;      
		<?php /*	$sql="SELECT u_id FROM user";
				$name='id';
	  			$id=view_id($sql,$name); 
				*/
				?>
        <input name="id" type="hidden" id="id" value=<?php echo $user; ?> >
<tr>
            <td height="26" bgcolor="#666666"><font color="#FFFFFF"><strong>Common Name
            </strong>            
            </font>
        <td colspan="3" bgcolor="#CCCCCC"><input name="std_l_name" type="text" id="std_l_name" size="20" maxlength="15">
      <tr>
                    <td bgcolor="#666666"><font color="#FFFFFF"><strong>Full Name</strong>
                    </font>
                    <td colspan="3" bgcolor="#CCCCCC"><input name="std_f_name" type="text" id="std_f_name" size="30" maxlength="75">      
      <tr>
                                    <td bgcolor="#666666"><font color="#FFFFFF"><strong>Designation
                                    </strong>                                      
                                    </font><td width="201" bgcolor="#CCCCCC"><input name="std_m_name" type="text" id="std_m_name"  size="20" maxlength="20">
        <td width="75" bgcolor="#CCCCCC"><strong>Class</strong>                                    
      <td width="140" bgcolor="#CCCCCC"><input name="std_prior" type="text" id="std_prior" size="5" maxlength="5">      
        <tr bgcolor="#E8FFE8">
        <td bgcolor="#666666"><font color="#FFFFFF"><strong>Location </strong>                    
        </font>
          <td colspan="3" bgcolor="#CCCCCC"><label>
          <select name="std_pri_date" id="std_pri_date">
              <option value="1">Admin</option>
              <option value="2">Accounts</option>
              <option value="3">Field</option>
              <option value="4">GS</option>
              <option value="5">Samurdhi</option>
              <option value="6">Land</option>
              <option value="7">ADR</option>
              <option value="8">Planning</option>
          </select>
            </label>                        
        <tr bgcolor="#000000">
          <td colspan="4"><div align="center"><strong><font color="#CCCCCC" size="+2">Personal Information</font></strong><font color="#CCCCCC" size="+2"> </font></div>
      <tr bgcolor="#CCCCCC">
        <td height="13"><div align="right">
        </div>          
          <div align="center"><strong>National Identity Card Number</strong></div>
        <td height="13" colspan="3"><input name="std_nic" type="text" id="std_nic2" size="10">                        
      <tr bgcolor="#CCCCCC">
          <td><strong>Gender</strong> <select name="std_gender" id="select2">
            <option value="0">Male </option>
            <option value="1">Female </option>
          </select>         
        <td colspan="3">          <strong>Marital Status</strong>            <select name="std_marital" id="select">
              <option value="Single">Single
              <option value="Married">Married
              <option value="Widowed">Widowed
              <option value="Divorced">Divorced
            </select>         
      <tr bgcolor="#CCCCCC">
          <td><strong>Date Of Birth </strong>
      <td colspan="3"><input name="std_dob" type="text" id="std_dob" size="10">
YYYY-MM-DD      <tr bgcolor="#000000">
          <td colspan="4"><div align="center"><strong><font color="#CCCCCC" size="+2">Mailing Address</font></strong><font color="#CCCCCC" size="+2"> </font> </div>
      <tr bgcolor="#E8FFE8">
          <td bgcolor="#666666"><font color="#FFFFFF"><strong>Address No, Street </strong>          
          </font>
          <td colspan="3" bgcolor="#CCCCCC"><input name="std_add1" type="text" id="std_m_name5" size="20" maxlength="20">        
      <tr bgcolor="#E8FFE8">
          <td bgcolor="#666666"><font color="#FFFFFF"><strong>Address City        
          </strong>
          </font>
          <td colspan="3" bgcolor="#CCCCCC"><input name="std_add2" type="text" id="std_m_name6" size="20" maxlength="20">        
      <tr bgcolor="#E8FFE8">
          <td colspan="4" bgcolor="#000000"><div align="center"><font color="#CCCCCC" size="+2"><strong>Contact Details </strong></font>
          </div>
          <tr bgcolor="#CCCCCC">
          <td><strong>Home
              <input name="std_add3" type="text" id="std_add32" size="14" maxlength="14">         
          </strong>
        <td colspan="3"><strong>Mobile</strong>          <input name="std_postal" type="text" id="std_add3" size="14" maxlength="14">    
      <tr bgcolor="#CCCCCC">
          <td><strong>E-Mail Address </strong>          
          <td colspan="3"><input name="std_email" type="text" id="std_add2" size="40">        
      <tr bgcolor="#000000">
        <td colspan="4"><div align="center"><font color="#CCCCCC" size="+2"><strong>Other Information </strong></font><strong> </strong></div>
      <tr bgcolor="#CCCCCC">
          <td><font color="#000000"><strong>Appointment Date </strong></font>        
          <td colspan="3"><input name="std_app_date" type="text" id="std_app_date" size="10" maxlength="10">
        YYYY-MM-DD      <tr bgcolor="#000000">
        <td colspan="4">          <div align="right">
            <input name="submit" type="submit" value=" Next " >
            <input name="reset" type="reset" value="Reset">        
        </div>
    </table>
</div>
</form>
</body>
</html>