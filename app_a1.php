

<?php

	$pg_v="addu";
	echo "<body bgcolor=\"#9EC0DE\">";
	include "dbconnection.php";
	include "access.php";
	
	$cat=$_REQUEST['cat'];
	$user_id=$_REQUEST['user'];
				
	
	


	/*if(!pageaccess($pg_v,$cat))
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
<body bgcolor="#9EC0DE">
<form action="prof_up.php" method="post">
  <div align="left">
    <table width="675" height="557" border="1" bordercolor="#000000" bgcolor="#000000"  align="center">	
      <tr bgcolor="#000000">
        <td colspan="4" bgcolor="#0000FF"><h2 align="center"><font color="#CCCCCC" size="+2">Section
              1: </font><font color="#CCCCCC">Employee Information </font></h2>
          <p align="center"><font color="#CCCCCC"><strong>Step 01 of 03</strong></font></p>            
      <tr>
        <td width="231" bgcolor="#8A8AFF"><div align="left"><font color="#FFFFFF"><strong>Employee ID</strong></font></div>
        <td colspan="3" bgcolor="#FFFFFF">&nbsp;      
		
        <input name="id" type="text" id="id"  >
        <input name="cat" type="hidden" id="cat" value=<?php echo $cat; ?> >
<tr>
            <td height="26" bgcolor="#8A8AFF"><font color="#FFFFFF"><strong>Common Name
            </strong>            
            </font>
        <td colspan="3" bgcolor="#FFFFFF"><input name="std_l_name" type="text" id="std_l_name" size="20" maxlength="15">
      <tr>
                    <td bgcolor="#8A8AFF"><font color="#FFFFFF"><strong>Full Name</strong>
                    </font>
                    <td colspan="3" bgcolor="#FFFFFF"><input name="std_f_name" type="text" id="std_f_name" size="30" maxlength="75">      
      <tr>
                                    <td bgcolor="#8A8AFF"><font color="#FFFFFF"><strong>Designation
                                    </strong>                                      
                                    </font>
                                    <td width="201" bgcolor="#FFFFFF"><input name="std_m_name" type="text" id="std_m_name"  size="20" maxlength="35">
        <td width="75" bgcolor="#FFFFFF"><strong>Class</strong>                                    
      <td width="140" bgcolor="#FFFFFF"><input name="std_prior" type="text" id="std_prior" size="5" maxlength="5">      
      <tr bgcolor="#E8FFE8">
        <td bgcolor="#8A8AFF"><font color="#FFFFFF"><strong>Location </strong>                    
        </font>
          <td colspan="3" bgcolor="#FFFFFF"><label>
          <select name="std_pri_date" id="std_pri_date">
            <option value="Admin">Admin</option>
            <option value="Accounts">Accounts</option>
            <option value="Field">Field</option>
            <option value="GS">GS</option>
            <option value="Samurdhi">Samurdhi</option>
            <option value="Land">Land</option>
            <option value="ADR">ADR</option>
            <option value="Planning">Planning</option>
          </select>
            </label>                        
      <tr bgcolor="#8A8AFF">
          <td colspan="4" bgcolor="#0000FF"><div align="center"><strong><font color="#CCCCCC" size="+2">Personal Information</font></strong><font color="#CCCCCC" size="+2"> </font></div>
      <tr bgcolor="#CCCCCC">
        <td height="13" bgcolor="#8A8AFF"><div align="right">
        </div>          
          <div align="center"><strong>National Identity Card Number</strong></div>
        <td height="13" colspan="3"><input name="std_nic" type="text" id="std_nic2" size="10">                        
      <tr bgcolor="#CCCCCC">
          <td bgcolor="#8A8AFF"><strong>Gender</strong> <select name="std_gender" id="select2">
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
          <td bgcolor="#8A8AFF"><strong>Date Of Birth </strong>
      <td colspan="3"><input name="std_dob" type="text" id="std_dob" size="10">
YYYY-MM-DD      <tr bgcolor="#000000">
          <td colspan="4" bgcolor="#0000FF"><div align="center"><strong><font color="#CCCCCC" size="+2">Mailing Address</font></strong><font color="#CCCCCC" size="+2"> </font> </div>
      <tr bgcolor="#E8FFE8">
          <td bgcolor="#8A8AFF"><font color="#FFFFFF"><strong>Address No, Street </strong>          
          </font>
          <td colspan="3" bgcolor="#CCCCCC"><input name="std_add1" type="text" id="std_m_name5" size="20" maxlength="30">        
      <tr bgcolor="#E8FFE8">
          <td bgcolor="#8A8AFF"><font color="#FFFFFF"><strong>Address City        
          </strong>
          </font>
          <td colspan="3" bgcolor="#CCCCCC"><input name="std_add2" type="text" id="std_m_name6" size="20" maxlength="20">        
      <tr bgcolor="#E8FFE8">
          <td colspan="4" bgcolor="#0000FF"><div align="center"><font color="#CCCCCC" size="+2"><strong>Contact Details </strong></font>
          </div>
      <tr bgcolor="#CCCCCC">
          <td bgcolor="#8A8AFF"><strong>Home
              <input name="std_add3" type="text" id="std_add32" size="14" maxlength="14">         
          </strong>
        <td colspan="3"><strong>Mobile</strong>          <input name="std_postal" type="text" id="std_add3" size="14" maxlength="14">    
      <tr bgcolor="#CCCCCC">
          <td bgcolor="#8A8AFF"><strong>E-Mail Address </strong>          
          <td colspan="3"><input name="std_email" type="text" id="std_add2" size="40">        
      <tr bgcolor="#000000">
        <td colspan="4" bgcolor="#0000FF"><div align="center"><font color="#CCCCCC" size="+2"><strong>Other Information </strong></font><strong> </strong></div>
      <tr bgcolor="#CCCCCC">
          <td bgcolor="#8A8AFF"><font color="#000000"><strong>Appointment Date </strong></font>        
          <td colspan="3"><input name="std_app_date" type="text" id="std_app_date" size="10" maxlength="10">
        YYYY-MM-DD      <tr bgcolor="#000000">
        <td colspan="4" bgcolor="#0000FF">          <div align="right">
            <input name="submit" type="submit" value="Update" >
            <input name="reset" type="reset" value="Reset">        
        </div>
    </table>
</div>
</form>

</body>
</html>