<html>
<body bgcolor="#FFFFFF">
<?php
	$pg_v="addu";
	include "dbconnection.php";
	include "access.php";
	$cat=$_REQUEST['cat'];
	$std_id=$_REQUEST['user'];
	
	/*$cat=$_POST['cat'];
	
	$std_id=$_POST['id'];
	$std_l_name=$_POST["std_l_name"];
	$std_f_name=$_POST["std_f_name"];
	$std_m_name=$_POST["std_m_name"];
	$std_prior=$_POST["std_prior"];
	$std_pri_date=$_POST["std_pri_date"];
	$std_nic=$_POST["std_nic"];
	$std_gender=$_POST["std_gender"];
	$std_marital=$_POST["std_marital"];
	$std_dob=$_POST["std_dob"];
	$std_add1=$_POST["std_add1"];
	$std_add2=$_POST["std_add2"];
	$std_add3=$_POST["std_add3"];
	$std_postal=$_POST["std_postal"];
	$std_email=$_POST["std_email"];
	$std_app_date=$_POST["std_app_date"];
	
	
	if(!pageaccess($pg_v,$cat))
		{
		echo "Sorry you are not allow ";
		exit();
		}
	else
		{//go aheid 
		}

//sql for first page
$sql_p1="insert into emp_details values('".$std_id."','".$std_l_name."','".$std_f_name."','".$std_m_name."','".$std_prior."','".$std_pri_date."','".$std_nic."','".$std_gender."','".$std_dob."','".$std_add1."','".$std_add2."','".$std_add3."','".$std_postal."','".$std_email."','".$std_app_date."','".$std_marital."')";

		
		setcookie('username',$std_id,time()+300);
		setcookie('sql_p1',$sql_p1,time()+300);*/
?>
<p><font size="+2"> Section 2: Educational / Professional Qualifications And
    Other Talents</font></p>
<p></p>
<table width="83%" border="1">
<form  method="post" action="qua_up.php">

 				<?php 	echo "<strong>Select a User</strong> ";
						$sql="SELECT emp_id FROM emp_details";
						$name='id';
	  					$id=view_id($sql,$name); ?>
  <tr bgcolor="#000000">
    <td width="30%" rowspan="2" bgcolor="#666666"><p><font color="#FFFFFF" size="+1">Educational / Professional </font></p>       <font color="#FFFFFF" size="+1">Qualification </font></td>
    <td height="33" colspan="2" bgcolor="#666666"><p><font color="#FFFFFF" size="+1">If it is exam
          Year of sat / if its course or program period</font></p>
    </td>
    <td width="23%" rowspan="2" bgcolor="#666666"><font color="#FFFFFF" size="+1">Subject</font></td>
    <td width="14%" rowspan="2" bgcolor="#666666"><font color="#FFFFFF" size="+1">Comment 01</font></td>
    <td width="15%" rowspan="2" bgcolor="#666666"><font color="#FFFFFF" size="+1">Comment 02</font></td>
  </tr>
  <tr>
    <td width="9%" bgcolor="#666666"><font color="#FFFFFF" size="+1">From</font></td>
    <td width="9%" bgcolor="#666666"><font color="#FFFFFF" size="+1">To</font></td>
  </tr>
  <tr bgcolor="#666666">
  
    <td><input name="inst11" type="text" id="inst11" size="40"> </td>
    <td><input name="inst12" type="text" id="inst12" size="12"></td>
    <td><input name="inst13" type="text" id="inst13" size="12"></td>
    <td><input name="inst14" type="text" id="inst14" size="30"></td>
    <td><input name="inst15" type="text" id="inst15" size="12"></td>
    <td><input name="inst16" type="text" id="inst16" size="12"></td>
	
  </tr>
  <tr bgcolor="#666666">
    <td><input name="inst21" type="text" id="inst21" size="40"> </td>
    <td><input name="inst22" type="text" id="inst22" size="12"></td>
    <td><input name="inst23" type="text" id="inst23" size="12"></td>
    <td><input name="inst24" type="text" id="inst24" size="30"></td>
    <td><input name="inst25" type="text" id="inst25" size="12"></td>
    <td><input name="inst26" type="text" id="inst26" size="12"></td>
  </tr>
  <tr bgcolor="#666666">
    <td><input name="inst31" type="text" id="inst31" size="40"> </td>
    <td><input name="inst32" type="text" id="inst32" size="12"></td>
    <td><input name="inst33" type="text" id="inst33" size="12"></td>
    <td><input name="inst34" type="text" id="inst34" size="30"></td>
    <td><input name="inst35" type="text" id="inst35" size="12"></td>
    <td><input name="inst36" type="text" id="inst36" size="12"></td>
  </tr>
  <tr bgcolor="#666666">
    <td><input name="inst41" type="text" id="inst41" size="40"> </td>
    <td><input name="inst42" type="text" id="inst42" size="12"></td>
    <td><input name="inst43" type="text" id="inst43" size="12"></td>
    <td><input name="inst44" type="text" id="inst44" size="30"></td>
    <td><input name="inst45" type="text" id="inst45" size="12"></td>
    <td><input name="inst46" type="text" id="inst46" size="12"></td>
  </tr>
  <tr>
    <td colspan="6"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><font size="+1">Employment Experience</font></p></td>
    </tr>
  <tr>
    <td colspan="6"><table width="88%" border="1">
      <tr bgcolor="#000000">
        <td width="35%" bgcolor="#999999"><strong><font color="#FFFFFF">Employer / Location</font></strong></td>
        <td width="10%" bgcolor="#999999"><strong><font color="#FFFFFF">From</font></strong></td>
        <td width="18%" bgcolor="#999999"><strong><font color="#FFFFFF">To</font></strong></td>
        <td width="37%" bgcolor="#999999"><strong><font color="#FFFFFF">Brief Discription of duties</font></strong></td>
      </tr>
      <tr align="left" bgcolor="#666666">
        <td><input name="exp11" type="text" id="exp11" size="45"></td>
        <td><input name="exp12" type="text" id="exp12" size="12"></td>
        <td><input name="exp13" type="text" id="exp13"></td>
        <td><input name="exp14" type="text" id="exp14" size="40"></td>
      </tr>
      <tr bgcolor="#666666">
        <td><input name="exp21" type="text" id="exp21" size="45"></td>
        <td><input name="exp22" type="text" id="exp22" size="12"></td>
        <td><input name="exp23" type="text" id="exp23"></td>
        <td><input name="exp24" type="text" id="exp24" size="40"></td>
      </tr>
      <tr bgcolor="#666666">
        <td><input name="exp31" type="text" id="exp31" size="45"></td>
        <td><input name="exp32" type="text" id="exp32" size="12"></td>
        <td><input name="exp33" type="text" id="exp33"></td>
        <td><input name="exp34" type="text" id="exp34" size="40"></td>
      </tr>
      <tr bgcolor="#666666">
        <td><input name="exp41" type="text" id="exp41" size="45"></td>
        <td><input name="exp42" type="text" id="exp42" size="12"></td>
        <td><input name="exp43" type="text" id="exp43"></td>
        <td><input name="exp44" type="text" id="exp44" size="40"></td>
        <input name="cat" type="hidden" id="cat" value=<?php echo $cat; ?> >
      </tr>
    </table></td>
    </tr>
  <tr>
    <td colspan="6" align="right"><input name="next" type="submit" id="next" value="Update">
      <input type="reset" name="Reset" value="Reset">
    </td>
    </tr>
  </form>
</table>


</body>
</html>