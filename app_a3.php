<html>
<body bgcolor="#E8FFE8">
<?php
	$pg_v="addu";
	include "dbconnection.php";
	include "access.php";
	
	$cat=$_REQUEST['cat'];
	$std_id=$_REQUEST['user'];
	
	

	if(!pageaccess($pg_v,$cat))
			{
			echo "Sorry you are not allow ";
			exit();
			}
		else
		{//go aheid 
		}
/*
///////////////////////////////////page 01 data
	$sql_p1=$_COOKIE['sql_p1'];
////////////////////////////////////////////////

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
				}
	
	


///////////////////////////////////////////////////////////////////////////////
	$exp11=$_POST["exp11"];
	$exp12=$_POST["exp12"];
	$exp13=$_POST["exp13"];
	$exp14=$_POST["exp14"];
	
	
	//$_SESSION['values5']=array($exp11,$exp12,$exp13,$exp14);
	
	
	
	if($exp11!=""){
		$sql5="insert into exp  values('".$id."','".$std_id."','".$exp11."','".$exp12."','".$exp13."','".$exp14."')";
				}
	
	$exp21=$_POST["exp21"];
	$exp22=$_POST["exp22"];
	$exp23=$_POST["exp23"];
	$exp24=$_POST["exp24"];
	
	
	
	//$_SESSION['values6']=array($exp21,$exp22,$exp23,$exp24);

	if($exp21!=""){
		$sql6="insert into exp  values('".$id."','".$std_id."','".$exp21."','".$exp22."','".$exp23."','".$exp24."')";
				}
	
	$exp31=$_POST["exp31"];
	$exp32=$_POST["exp32"];
	$exp33=$_POST["exp33"];
	$exp34=$_POST["exp34"];
	
	
	
	//$_SESSION['values7']=array($exp31,$exp32,$exp33,$exp34);

	if($exp31!=""){
		$sql7="insert into exp  values('".$id."','".$std_id."','".$exp31."','".$exp32."','".$exp33."','".$exp34."')";
				}
	
	$exp41=$_POST["exp41"];
	$exp42=$_POST["exp42"];
	$exp43=$_POST["exp43"];
	$exp44=$_POST["exp44"];
	
	

	//$_SESSION['values8']=array($exp41,$exp42,$exp43,$exp44);

	if($exp41!=""){
		$sql8="insert into exp  values('".$id."','".$std_id."','".$exp41."','".$exp42."','".$exp43."','".$exp44."')";
				}
				
setcookie('sql_p1',$sql_p1,time()+300);
setcookie('sql1',$sql1,time()+300);
setcookie('sql2',$sql2,time()+300);
setcookie('sql3',$sql3,time()+300);
setcookie('sql4',$sql4,time()+300);
setcookie('sql5',$sql5,time()+300);
setcookie('sql6',$sql6,time()+300);
setcookie('sql7',$sql7,time()+300);
setcookie('sql8',$sql8,time()+300);*/
setcookie('catagory',$cat,time()+300);
setcookie('username',$std_id,time()+300);


?>
<p><font size="+2">Section 03: Other Information</font></p>
<table width="75%" border="1">
<form name="upload" enctype="multipart/form-data" method="post" action="upload.php">
  <tr>
    <td bgcolor="#000000">&nbsp;</td>
    </tr>
  <tr>
    <td bgcolor="#666666">
      <p><font color="#CCCCCC" size="+2"><strong>Upload Photograph</strong></font></p>
      <p>
        <input name="proposal" type="file" id="proposal">
      </p></td>
    </tr>
  <tr>
    <td bgcolor="#000000"><input type="submit" name="Submit" value="upload"></td>
    </tr>
  </form>
</table>
</body>
</html>