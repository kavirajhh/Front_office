<html><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.style3 {font-size: 18px}
.style4 {font-size: 10px}
.style9 {font-family: "MisterEarl BT"}
.style10 {font-size: 36px}
.style11 {font-size: 9px}
.style12 {font-size: 16px}
.style13 {font-size: 18}
-->
</style>
<body>

      <p>
  <?php
include "dbconnection.php";
include "access.php";
	$task_id="";
	$task_date=date("Y-n-d");
	$task_user="hemal";
	$task_nic=$_POST["nic"];
	$task_client=$_POST["client"];
	$task_email=$_POST["email"];
	$task_tp=$_POST["tp"];
	$task_task=$_POST["task"];
	$task_sec=$_POST["sec"];
	$task_gn=$_POST["gn"];
	$task_comp="";
	

	$sql=	"insert into task_open values('".$task_id."','".$task_date."','".$task_user."','".
			$task_task."','".$task_sec."','".$task_nic."','".$task_client."','".$task_email."','".$task_tp."','".$task_gn."','".$task_comp."')";
	$insertresults=mysql_query($sql) or die(mysql_error());
	$t_id=mysql_insert_id();
		if($insertresults>0)
			{
	          $msg="The task '".$task_task."' open for'".$task_client."' on '".$task_date."'\n</div> Your Task ID is<h2>'".$t_id."'</h2> and please Note that for future request ";
			 // echo $msg;
			 // $mail=sendmail($task_email,$msg);
			 }
			 ?>
      </p>
      <table width="200" border="0" align="center">
        <tr>
          <td colspan="2"><div align="center">
            <p><span class="style12"><span class="style13">Divisional Secretariat<br>
  Ambagamuva korale</span> Ginigathena </span></p>
            </div></td>
        </tr>
        <tr>
          <td width="95"><div align="center">TP  0512242213 </div></td>
          <td width="89"><div align="center">Fax 0512242760 </div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"><span class="style3">Client Registration Form</span></div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <p>Reg No </p>
            <p><span class="style10"><?php echo $t_id ?></span></p>
          </div></td>
        </tr>

        <tr>
          <td colspan="2"><div align="center">Name : <?php echo $task_client ?></div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">GN Division : <?php echo $task_gn ?></div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">Section : <u> <?php echo $task_sec ?></u></div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">Service :<u> <?php echo $task_task ?></u> </div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center" class="style4"><?php echo $task_date?></div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center" class="style11"><span class="style4"><span class="style9">i wave</span> software solutions </span></div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p> 
        <?php
			 echo "<script>window.print();</script>"
?>
</p>
</body>
</html>