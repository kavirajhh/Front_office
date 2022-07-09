<body bgcolor="#FFFFFF">
<?php

//////////////////////////////////////////////////////////////////////////

function pageaccess($u_pg,$u_cat)
	{
	$sql="select * from pg_access where page_id='".$u_pg."' and u_cat='".$u_cat."'";
	$rs=mysql_query($sql);
	$nr=mysql_num_rows($rs);
			if($nr>0)
				{return true;
				}
			else 	
				{ return false;					
				}
	}//end of function pageaccess
	
	
/////////////////////////////////////////////////////////////////////////


function view_id($sql,$name){
	
	$rs=mysql_query($sql) or die(mysql_error());
		echo "<form name=\"form1\" method=\"post\" action=\"\"><select name=".$name.">";
		while($row=mysql_fetch_assoc($rs)){
		
			foreach($row as $value){
			echo " <option value=".$value.">".$value."</option> ";
							
			}
		}
	}echo "</select></form>";

////////////////////////////////////////////////////////////////////

function view_not_com($sql){
	$secT="";
	$rs=mysql_query($sql) or die(mysql_error());
	echo "<table width=\"100%\" border=\"1\">\n";
	echo "<tr bgcolor=\"#CFDFEF\"><td>Section</td><td>Task ID</td><td>Task Open Date</td><td>Task</td><td>Client</td><td>Link</td></tr>";
		while($row=mysql_fetch_assoc($rs)){
			$sec=$row["task_sec"];
		if($sec!=$secT){
		echo "<tr><td colspan=6>".$sec."</td></tr>";
			$secT=$sec;
			}
		echo "<tr>\n";
		
			foreach($row as $value){
				echo "<td bgcolor=\"#FFFFFF\">\n";
				echo $value;
				
				echo "</td>\n";
			
			}
			echo "<td bgcolor=\"#FFFFFF\"><a href='view_task.php?task_id=".$row['task_id']."'>More Details</a></td>";
		}echo "</table>\n";
	}
///////////////////////////////////////////////////////////////////
function file_list($sql){
	
	$rs=mysql_query($sql) or die(mysql_error());
	echo "<table width=\"100%\" border=\"1\">\n";
	echo "<tr bgcolor=\"#CFDFEF\"><td>File Name</td><td>Discription</td><td>Upload Date</td></tr>";
		while($row=mysql_fetch_assoc($rs)){
		echo "<tr>\n";
		
			foreach($row as $value){
				echo "<td bgcolor=\"#FFFFFF\">\n";
				$name=$row['file_id'];
				echo "<a href=\"".$name."\"target=\"_blank\">".$value."</a>";
				
				echo "</td>\n";
			
			}
			
		}echo "</table>\n";
	}
	
	
//////////////////////////////////////////////////////////////////////////////////
function pro_list($sql){
	
	$rs=mysql_query($sql) or die(mysql_error());
	echo "<table width=\"100%\" border=\"1\">\n";
	echo "<tr bgcolor=\"#CFDFEF\"><td>File Name</td><td>Discription</td><td>Upload Date</td></tr>";
		while($row=mysql_fetch_assoc($rs)){
		echo "<tr>\n";
		
			foreach($row as $value){
				echo "<td bgcolor=\"#FFFFFF\">\n";
				echo $value;
				//$name=$row['file_id'];
				//echo "<a href=\"".$name."\"target=\"_blank\">".$value."</a>";
				
				echo "</td>\n";
			
			}
			
		}echo "</table>\n";
	}
//////////////////////////////////////////////////////////////////////////////////
function viewdata($id)
	{
	$sql1="select * from ent_info where reg_no='".$id."'";
	$rs=mysql_query($sql1);
	echo("<h2>");

		while($row=mysql_fetch_assoc($rs))
			{
			$reg_no=$row["reg_no"];
			$l_name=$row["l_name"];
			$f_name=$row["f_name"];
			$m_name=$row["m_name"];
			$marital=$row["marital"];
			$gender=$row["gender"];
			$nic=$row["nic"];
			$dob=$row["dob"];
			$add1=$row["add1"];
			$add2=$row["add2"];
			$distric=$row["distric"];
			$division=$row["division"];
			$tp=$row["tp"];
			$email=$row["email"];
			$user_id=$row["user_id"];
			$date=$row["date"];
			
			
			}//end of while
			
$ent_info=array($reg_no,$l_name,$f_name,$m_name,$marital,$gender,$nic,$dob,$add1,$add2,$distric,$division,$tp,$email,$user_id,$date);
return $ent_info;
	}// end of viewdata
//////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////view biz//////////////////////////////////////
function viewbdata($id)
	{
	$sql1="select * from biz_register where user_id='".$id."'";
	$rs=mysql_query($sql1);
	echo("<h2>");

		while($row=mysql_fetch_assoc($rs))
			{
			$reg_no=$row["reg_no"];
			$l_name=$row["l_name"];
			$f_name=$row["f_name"];
			$m_name=$row["m_name"];
			$marital=$row["marital"];
			$gender=$row["gender"];
			$nic=$row["nic"];
			$dob=$row["dob"];
			$add1=$row["add1"];
			$add2=$row["add2"];
			$distric=$row["distric"];
			$division=$row["division"];
			$tp=$row["tp"];
			$email=$row["email"];
			$user_id=$row["user_id"];
			$date=$row["date"];
			
			
			}//end of while
			
$ent_info=array($reg_no,$l_name,$f_name,$m_name,$marital,$gender,$nic,$dob,$add1,$add2,$distric,$division,$tp,$email,$user_id,$date);
return $ent_info;
	}// end of viewdata
////////////////////////////////view biz////////////////////////////////////////

//send mail

function sendmail($task_email,$msg)
	{
		$to=$task_email;
		$from="hemalhh@yahoo.com";
		$sub="MOST System Message";
		$mes=$msg;
		$header="From:".$from."\r\n";
		$mailsent=mail($to,$sub,$mes,$header);
	if($mailsent)
		{
			echo "<div align=center><h2>";
			echo "<div>Mail Send ...";
		}
	else{
			echo "<div align=center><h2>";
			echo "<div>Send mail Error ...";
		}
	}//end the sendmail() 
			
////////////////////////////////////////////////////////////
 function view_cat($sql)
 	{
	
		$rs=mysql_query($sql) or die(mysql_error());
	
	while($row=mysql_fetch_assoc($rs))
		{
			foreach($row as $value)
				{
					$test=($_POST[$value]);
					if($test!=0)
					{
						$sql="Delete from MESSAGE where (id='".$test."')";
						$rs2=mysql_query($sql);
					}//if($test!=0){
		
				}//foreach($row as $value){
				
		}//while($row=mysql_fetch_assoc($rs)){
	}//func
////////////////////////////////////////////////////////////
function view_msg($sql){
	
	$rs=mysql_query($sql) or die(mysql_error());
	
	echo "<table width=\"100%\" border=\"1\" bordercolor=\"#D9E6F2\">\n";
	
		while($row=mysql_fetch_assoc($rs)){
		echo "<tr>\n";
		
			foreach($row as $value)
				{
					$id=$row["id"];
					$title=$row["title"];
					$sender=$row["sender"];
					$dade=$row["date"];
					
				
				/*echo "<td >\n";
				echo $value;
				echo "</td>\n";*/
			
			}
					
					echo "<td width=\"5%\"><input type=\"checkbox\" name=".$id."
					value=".$id."></td>";
					echo "<td width=\"60%\">".$title."</td>";
					echo "<td width=\"10%\">".$sender."</td>";
					echo "<td width=\"25%\">".$dade."</td>";
		}
		
	echo "</table>\n";
	
	}

	/////////////////////////////////////

function cat_id($id){
		$sql="select cat_id from user_cat where catagory='".$id."'";
		$rs=mysql_query($sql);
		$row=mysql_fetch_array($rs);
		$u=$row["cat_id"]; 
		return $u;
		}


?>



