<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php 
	include "dbconnection.php";
	include "access.php";
	

?>




</body>
</html>


  <?php
	
	$cat=$_REQUEST["cat"]; //user cat
	$user=$_REQUEST["user"]; // login user
	$pg_v="upfl"; // page id
	
	if(!pageaccess($pg_v,$cat))
			
				{
				echo "<h2><div align=\"center\" >Sorry you are not allow to update this record ";
				echo "<h2><div align=\"center\" >Plese meet authorized officer ";
				exit();
				}
			else
			{//go aheid 
			}
	
	
	$cat=$_POST["t_cat"];
	$file_dis=$_POST["file_dis"];
	$up_date=date("y-m-d");
	//$up_user="hemal";
	$up_level=0;
	$pro=$_FILES['file_id']['name'];
	$dir="report/";
		
	$file_name=$dir.$pro;
	
	
	
	if(move_uploaded_file($_FILES['file_id']['tmp_name'],$file_name))
		{	
			
			//list($width,$height,$type,$attr)=getimagesize($file_name);
	$ext = substr(strrchr($file_name, '.'), 1);
	
		if($ext=='jpg'||$ext=='gif'||$ext=='png')
		
			{
				$f_type=2;
				
			
			
			
				$insert="INSERT INTO up_file 
					(file_id,file_type,file_dis,file_cat,up_date,up_user,up_level) 
					values('".$file_name."','".$f_type."','".$file_dis."','".$cat."','"
					.$up_date."','".$user."','".$up_level."')";
				$insertresults=mysql_query($insert);
			
				if($insertresults>0)
					{
					//out massege
						$msg="File Name ".$file_name."  is Upload to system with <div> Discription".
						$file_dis." \n";
						// collect email address
						/*$sql=" SELECT email FROM ent_info";
						$rs=mysql_query($sql) or die(mysql_error());
			

						while($row=mysql_fetch_assoc($rs))
							{
								$email=$row["email"];
							}
			  			$mail=sendmail($email,$msg);
			 		}

				else
					{
						$msg=" Error! Check data in form\n";
						$mail=sendmail($email,$msg);
				*/	}
			
				echo "<div align=center><h2>";
				echo $msg;
				echo "<div>";
				die(mysql_error());
			}// end if $type
						
		
			
		else 
			{
				$f_type=1;
				
			$insert="INSERT INTO up_file 
					(file_id,file_type,file_dis,file_cat,up_date,up_user,up_level) 
					values('".$file_name."','".$f_type."','".$file_dis."','".$cat."','"
					.$up_date."','".$user."','".$up_level."')";
			
					$insertresults=mysql_query($insert);
		
			if($insertresults>0)
				{
					//out massege
	          	$msg="File Name ".$file_name."  is Upload to system with <div> Discription".
				$file_dis." \n";
			  	// collect email address
				$sql=" SELECT email FROM ent_info";
				$rs=mysql_query($sql) or die(mysql_error());
	

				while($row=mysql_fetch_assoc($rs))
					{
						$email=$row["email"];
						
						
					}
			  	$mail=sendmail($email,$msg);
			 	}

			else
			{
				$msg=" Error! Check data in form\n";
				$mail=sendmail($email,$msg);
			}
			echo "<div align=center><h2>";
				echo $msg;
				echo "<div>";
				die(mysql_error());
			
			}
	}//end of if(move_upload_file(*/		

	
	
	?>

