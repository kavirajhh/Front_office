<?php
	
	include "dbconnection.php";
	include "access.php";
	$pg_v="VIEW";
	$std_id=$_POST["id"];
	$cat=$_COOKIE['catagory'];
	
	if($std_id=="")
		{
		echo "No Profile Found ";
		exit();
		}
	else{
	//go aheid 
		}

	if(!pageaccess($pg_v,$cat))
		{
		echo "Sorry you are not allow ";
		exit();
		}
	else{
	//go aheid 
		}
$sql="select inst,e_from,e_to,e_field,received,granted from edu where std_id='".$std_id."'";
$sql1="select employer,ex_from,ex_to,discription from exp where std_id='".$std_id."'";
$v=viewdata($std_id);
$i=viewintended($std_id)


?>



<html>
<head><title>PGIS Application</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body bgcolor="#FFFFFF">

<table width="100%" border="2" bordercolor="#006600" bgcolor="#000000">
  <tr>
    <td width="28%" height="43"><font color="#666666"><strong><font color="#CCCCCC">Employee ID
            : </font></strong></font><font color="#CCCCCC">&nbsp; </font></td>
    <td colspan="3"><div align="left"><font color="#CCCCCC"><?php echo $std_id;?></font></div></td>
    <td width="20%" rowspan="3" align="center" valign="middle"><div align="center">
      <p><strong><font color="#000000">
          <?php $l=$i[7]; echo "<a href=\"".$l."\">"; 
          echo "<img name=\"a\" src=\"$l\" width=\"100\" height=\"100\" alt=\"\">" ?>
      </font></strong></p>
      <p><strong><font color="#000000"><strong><font color="#CCCCCC">Name : </font></strong></font><font color="#CCCCCC"> </font><font color="#CCCCCC"><?php echo $v[2];?></font><font color="#000000">    </font></strong></p>
    </div></td>
  </tr>
  <tr>
    <td height="37"><font color="#666666"><strong><font color="#CCCCCC">Full
            Name</font></strong><font color="#CCCCCC"> </font></font><font color="#CCCCCC" size="+3">&nbsp;</font></td>
    <td height="37" colspan="3"><font color="#CCCCCC" size="+3"><strong><?php echo $v[2]; ?></strong></font></td>
  </tr>
  <tr>
    <td height="43"><font color="#000000"><strong><font color="#CCCCCC">Designation</font></strong></font><font color="#CCCCCC">&nbsp; </font></td>
    <td width="34%" height="43"><font color="#FFFFCC" size="+1"><?php echo $v[3];?></font></td>
    <td width="8%"><strong><font color="#FFFFFF">Class</font></strong></td>
    <td width="10%"><font color="#FFFFCC" size="+1"><?php echo $v[4];?></font></td>
  </tr>
</table>
<h2 align="left">&nbsp;</h2>
<form action="change_std_a1.php" method="post">
  <div align="left">
    <table width="966" height="594" border="1" align="left" bordercolor="#006600">
      <tr> 
        <td colspan="3" rowspan="2" bordercolor="#000000" bgcolor="#333333"><font color="#CCCCCC" size="+1"><strong>Mailing 
          Address </strong></font> 
        <td colspan="3" bordercolor="#000000" bgcolor="#666666"><strong><font color="#CCCCCC">Personal Address </font></strong>
        
        <td colspan="2" bordercolor="#000000" bgcolor="#666666"><div align="center"><font color="#CCCCCC"><strong>Telephone </strong> </font></div>
      <tr> 
        <td height="28" bordercolor="#000000" bgcolor="#E8FFE8"><font color="#000000"><?php echo $v[9];?></font> 
        <td colspan="2" bordercolor="#000000" bgcolor="#E8FFE8"><font color="#000000"><?php echo $v[10];?></font> 
        <td width="132" bordercolor="#000000" bgcolor="#E8FFE8"><font color="#000000">Home
            : <?php echo $v[11];?></font> 
        <td width="187" bordercolor="#000000" bgcolor="#E8FFE8"><font color="#000000">Mobile
            : <?php echo $v[12];?></font> 
      <tr> 
        <td height="32" colspan="3" bordercolor="#000000" bgcolor="#000000"><strong><font color="#CCCCCC" size="+1">E-Mail 
          Address </font></strong> 
        <td colspan="5" bordercolor="#000000" bgcolor="#666666"><font color="#0099FF"><?php echo $v[13];?> </font>          
      <tr> 
        <td colspan="3" bordercolor="#000000" bgcolor="#000000"><font color="#000000" size="+1"> <font color="#CCCCCC"><strong>Appointment
        Date</strong></font></font><font color="#CCCCCC"><strong> </strong></font>        
        <td colspan="5" bordercolor="#000000" bgcolor="#000000"><font color="#0099FF"><?php echo $v[14];?></font><font color="#FFFFFF">&nbsp;           </font> 
      <tr bgcolor="#000000"> 
        <td colspan="8"> <div align="center"><font color="#000000" size="+1"><strong><font color="#CCCCCC">Personal 
        Information</font></strong></font><font color="#CCCCCC">&nbsp; </font> </div>
      <tr bgcolor="#E8FFE8"> 
        <td colspan="3"><strong><font color="#000000">National 
          Identity Card Number </font></strong> 
        <td><font color="#000000"><?php echo $v[6];?></font> 
        <td><strong><font color="#000000">Date Of Birth 
          </font></strong> 
        <td colspan="3"><font color="#000000"><?php echo $v[8];?> 
          </font> <font color="#000000">&nbsp;</font> 
      <tr bgcolor="#E8FFE8"> 
        <td colspan="3"><font color="#000000"><strong>Marital 
          Status </strong></font> 
        <td width="174"><font color="#000000"> 
          <?php  echo $v[15];?>
        </font> 
        <td width="101"><strong><font color="#000000">Gender 
          </font></strong> 
        <td colspan="3" bgcolor="#E8FFE8"><font color="#000000"> 
          <?php if($v[7]==0) echo "Male"; else echo "Female"; ?>
          </font> 
      <tr bgcolor="#000000"> 
        <td colspan="8"><font color="#000000">&nbsp; </font><font color="#000000">&nbsp;</font> 
      <tr bgcolor="#666666"> 
        <td colspan="8"><div align="center"><font color="#CCCCCC" size="+1"><strong>Education Qualification 
            </strong></font> 
        </div>
      <tr> 
        <td colspan="8"> <font color="#000000"> 
          <?php $e=view_edu($sql)?>
          </font> 
      <tr bgcolor="#666666"> 
        <td colspan="8"><div align="center"><font color="#000000" size="+1"><strong> <font color="#CCCCCC">Experience &nbsp;</font></strong></font><font color="#CCCCCC"><strong><font size="+1"> &amp; Talents </font></strong></font> </div>
      <tr> 
        <td colspan="8"> <font color="#000000"> 
          <?php $e=view_edu($sql1)?>
          </font> 
      <tr bordercolor="#000000" bgcolor="#000000"> 
        <td height="23"><font color="#000000">&nbsp; </font> 
        <td><font color="#000000">&nbsp;</font> 
        <td width="46"><font color="#000000">&nbsp;</font> 
          <font color="#000000">&nbsp; </font> 
        <td><font color="#000000">&nbsp; </font> 
        <td><font color="#000000">&nbsp; </font> 
        <td colspan="2">&nbsp;        
        <td><font color="#000000">&nbsp; </font> 
      <tr bordercolor="#000000" bgcolor="#000000"> 
        <td width="115"><strong><font color="#000000"><?php /*echo $i[1];*/?> 
          </font> </strong>
        <td width="68"><strong><font color="#000000"> 
          <?php /*if($i[2]==0) echo "Fall"; else echo "Spring";*/?>
          </font> </strong>
        <td><strong><font color="#000000"> 
          <?php /*if($i[3]==0) echo "Full Time"; else echo "Part Time";*/?>
          </font> </strong>
        <td><strong><font color="#000000"><?php /*echo $i[4];*/?> 
          </font> </strong>
        <td><strong><font color="#000000"> 
          <?php /*$s=subject($i[5]); echo $s;*/?>
          </font> </strong>
        <td colspan="2"><strong><font color="#000000"></a> 
          <?php /*if($i[6]==0) echo "Yes"; else echo "No";*/?>
          </font> </strong>
        <td><strong><font color="#000000"> 
</font></strong> 
      <tr bgcolor="#000000"> 
        <td colspan="8" bordercolor="#000000"><div align="right"><font color="#000000">&nbsp;</font> 
            <font color="#000000">&nbsp;</font> <font color="#000000">&nbsp;</font> 
            <font color="#000000">&nbsp;</font> <font color="#000000">&nbsp;</font> 
            <font color="#000000">&nbsp;</font> <font color="#000000"> 
            <input name="submit" type="submit" value="Change Data">
            </font> </div> 
    </table>
</div>
</form>
</body>
</html>