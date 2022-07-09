

<html>
<head><title>PGIS Application</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #C9DBED;
}
.style1 {font-size: 18px}
-->
</style>
<?php
	include "access.php";
	include "dbconnection.php";
	
	$nic=$_POST["nic"];
	$sec=$_POST["sec"];	
	
	
		$sql2="select * from task_open where nic='".$nic."'";
		$rs=mysql_query($sql2);
		if($rs>0)
			{
			
				$row=mysql_fetch_array($rs);
				//$nic=$row["nic"];
				$client=$row["task_client"];
				$add=$row["task_email"];
				$phone=$row["task_phone"];
				$gn=$row["gn"];
			}
		else
			{	
				//$nic=$nic;
				$client='';
				$add='';
				$phone='';
				$gn='';
			}
		
		?>


</head>
<body>
<form action="up_task_open.php" method="post" target="_blank">
  <div align="left">
    <table width="80%" height="60%" border="1"  align="center" bgcolor="#FFFFFF">	
      <tr>
        <td height="107" colspan="2"><p align="center"><span class="style1">Client Registration</span></p>
          <p align="center"><span class="style1">&#3545;&#3523;&#3530;&#3520;&#3535;&#3517;&#3535;&#3511;&#3539; &#3517;&#3538;&#3514;&#3535;&#3508;&#3503;&#3538;&#3458;&#3488;&#3538;&#3514;<br>
          </span></p>
      <tr>
          <td height="26"><strong>NIC        </strong>
          <td bgcolor="#FFFFFF"><input name="nic" type="text" id="nic" size="12" maxlength="12" value=<?php echo $nic?>>        
      <tr>
          <td width="370" height="26"><strong>Client Name </strong>/ &#3505;&#3512; 
          <td width="270" bgcolor="#FFFFFF"><input name="client" type="text" id="client" size="45" maxlength="45" value=<?php echo $client?>>
      <tr>
                    <td><strong> Address </strong>
                    / &#3517;&#3538;&#3508;&#3538;&#3505;&#3514; 
                    <td bgcolor="#FFFFFF"><input name="email" type="text" id="email" size="25" value=<?php echo $add?>>      
      <tr>
                                    <td><strong>Telephone Number </strong>
        / &#3503;&#3540;&#3515;&#3482;&#3501;&#3505; &#3461;&#3458;&#3482;&#3514; 
                                    <td bgcolor="#FFFFFF"><input name="tp" type="text" id="tp"  size="25" maxlength="10" value=<?php echo $phone?>>    
      <tr>
          <td><strong>GN Division</strong> / &#3484;&#3530;&zwj;&#3515;&#3535;&#3512; &#3505;&#3538;&#3517;&#3504;&#3535;&#3515;&#3539; &#3520;&#3523;&#3512;
          <td bgcolor="#FFFFFF">
		   <?php 
		  	
			$sql="SELECT gn_name FROM gn ";
			$gn='gn';
	  		$id=view_id($sql,$gn);
			?>
      <tr>
        <td><strong>Section</strong> / &#3461;&#3458;&#3521;&#3514;
        <td><?php   echo $sec ?><input name="sec" type="hidden" value=<?php   echo $sec ?>>
        
      <tr>
          <td><strong>Task </strong> / &#3482;&#3535;&#3515;&#3499;&#3514;
        <td>
		<?php 
		  	
			$sql="SELECT subject FROM subject where branch='".$sec."'";
			$sub='task';
	  		$id=view_id($sql,$sub);
			?>
		
		
		</td>
      <tr>
        <td colspan="2">          <div align="right">
            <input name="submit" type="submit" value="Open Task" >
            <input name="reset" type="reset" value="Clear Form">        
        </div>
    </table>
</div>
</form>

</body>
</html>