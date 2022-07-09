<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile Update</title>

<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:160px;
	top:217px;
	width:552px;
	height:33px;
	z-index:1;
	background-color: #666666;
}
-->
</style>
</head>

<body>
<div id="apDiv1">
  <div align="center">
    <?php 	$pg_v="addu";
		include "dbconnection.php";
		include "access.php";
	
		$cat=$_POST['cat'];
		$std_id=$_REQUEST['id'];
	

	if(!pageaccess($pg_v,$cat))
			{
			echo "Sorry you are not allow ";
			exit();
			}
		else
		{//go aheid 
		}
		
		
	$id=""; // null variable for auto incriment id
	
	$inst=$_POST["inst11"];
	$from=$_POST["inst12"];
	$to=$_POST["inst13"];
	$field=$_POST["inst14"];
	$rece=$_POST["inst15"];
	$grant=$_POST["inst16"];
	
	
	if($inst!=""){
	$values=array($inst,$from,$to,$field,$rece,$grant);
		$sql1="insert into edu  values('".$id."','".$std_id."','".$values[0]."','".$values[1]."','".$values[2]."','".$values[3]."','".$values[4]."','".$values[5]."')";
		
		$nra=mysql_query($sql1);
				}
//////////////2nd row
	$inst2=$_POST["inst21"];
	$from2=$_POST["inst22"];
	$to2=$_POST["inst23"];
	$field2=$_POST["inst24"];
	$rece2=$_POST["inst25"];
	$grant2=$_POST["inst26"];
	
	//if($inst2!=""){
	//$_SESSION['values2']=array($inst2,$from2,$to2,$field2,$rece2,$grant2);
	//			}
	
	if($inst2!=""){
		$sql2="insert into edu  values('".$id."','".$std_id."','".$inst2."','".$from2."','".$to2."','".$field2."','".$rece2."','".$grant2."')";
		
		$nra=mysql_query($sql2);
					}
	
//////////////3ed row
	$inst3=$_POST["inst31"];
	$from3=$_POST["inst32"];
	$to3=$_POST["inst33"];
	$field3=$_POST["inst34"];
	$rece3=$_POST["inst35"];
	$grant3=$_POST["inst36"];
	
	//if($inst3!=""){
	//$_SESSION['values3']=array($inst3,$from3,$to3,$field3,$rece3,$grant3);}
	
	if($inst3!=""){
		$sql3="insert into edu values('".$id."','".$std_id."','".$inst3."','".$from3."','".$to3."','".$field3."','".$rece3."','".$grant3."')";
		
		$nra=mysql_query($sql3);
				}
	
//////////////4th row
	$inst4=$_POST["inst41"];
	$from4=$_POST["inst42"];
	$to4=$_POST["inst43"];
	$field4=$_POST["inst44"];
	$rece4=$_POST["inst45"];
	$grant4=$_POST["inst46"];
	

	//$_SESSION['values4']=array($inst4,$from4,$to4,$field4,$rece4,$grant4);
	
	if($inst4!=""){
		$sql4="insert into edu  values('".$id."','".$std_id."','".$inst4."','".$from4."','".$to4."','".$field4."','".$rece4."','".$grant4."')";
		
		$nra=mysql_query($sql4);
				}
	
	


///////////////////////////////////////////////////////////////////////////////
	$exp11=$_POST["exp11"];
	$exp12=$_POST["exp12"];
	$exp13=$_POST["exp13"];
	$exp14=$_POST["exp14"];
	
	
	//$_SESSION['values5']=array($exp11,$exp12,$exp13,$exp14);
	
	
	
	if($exp11!=""){
		$sql5="insert into exp  values('".$id."','".$std_id."','".$exp11."','".$exp12."','".$exp13."','".$exp14."')";
				
				$nra=mysql_query($sql5);
				}
	
	$exp21=$_POST["exp21"];
	$exp22=$_POST["exp22"];
	$exp23=$_POST["exp23"];
	$exp24=$_POST["exp24"];
	
	
	
	//$_SESSION['values6']=array($exp21,$exp22,$exp23,$exp24);

	if($exp21!=""){
		$sql6="insert into exp  values('".$id."','".$std_id."','".$exp21."','".$exp22."','".$exp23."','".$exp24."')";
				
				$nra=mysql_query($sql6);
				}
	
	$exp31=$_POST["exp31"];
	$exp32=$_POST["exp32"];
	$exp33=$_POST["exp33"];
	$exp34=$_POST["exp34"];
	
	
	
	//$_SESSION['values7']=array($exp31,$exp32,$exp33,$exp34);

	if($exp31!=""){
		$sql7="insert into exp  values('".$id."','".$std_id."','".$exp31."','".$exp32."','".$exp33."','".$exp34."')";
				
				$nra=mysql_query($sql7);
				}
	
	$exp41=$_POST["exp41"];
	$exp42=$_POST["exp42"];
	$exp43=$_POST["exp43"];
	$exp44=$_POST["exp44"];
	
	

	//$_SESSION['values8']=array($exp41,$exp42,$exp43,$exp44);

	if($exp41!=""){
		$sql8="insert into exp  values('".$id."','".$std_id."','".$exp41."','".$exp42."','".$exp43."','".$exp44."')";
				
				$nra=mysql_query($sql8);
				}
				echo "Profile of ";
				echo "$std_id ";
				echo " is Updated Successfully";
			
	
?>
  </div>
</div>
</body>
</html>
