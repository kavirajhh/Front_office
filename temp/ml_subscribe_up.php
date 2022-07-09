<?php
include "dbconnection.php";

 function view_cat($sql){
	
			$rs=mysql_query($sql) or die(mysql_error());
	
			while($row=mysql_fetch_assoc($rs)){
			
				
			foreach($row as $value){
				$u_id=$_REQUEST["user"];
				$sub1=$_REQUEST["t1"];
				$test=($_POST[$value]);
				
				if($test!=0){
				
				
					if($sub1!='sub')
						{
							$sql2="INSERT INTO `ml_subscribe` ( `trans_id` , `user_id` , `tech_cat` 								) VALUES ('', '".$u_id."', '".$test."')";
							$msg="Subscription Success";
							$msg2="<tr><td bgcolor=\"#D9E6F2\">
							<a href=ml_subscribe.php?sub=sub&user=".$u_id.">
							To unsubscribe click here</a></p></td></tr>";
						}
					else
						{
							$sql2="delete from `ml_subscribe` where `user_id`='".$u_id."' and 
								`tech_cat`='".$test."'";
							$msg="Registration Cancel";
							$msg2="<tr><td bgcolor=\"#D9E6F2\">
									<a href=ml_subscribe.php?sub=un&user=".$u_id.">
									To Subscribe Click here</a></p></td></tr>";
						}
				
				
				$nra=mysql_query($sql2);
				}//if($test!=0){
		//	}//if($rs>0)
				
			}//foreach($row as $value){
			
		}//while($row=mysql_fetch_assoc($rs)){
		
	echo $msg;
	echo "<div></div>";
	echo $msg2; 
	}//func
///////////////////////////////////////////////////////////////////
	$sql=" SELECT catagory FROM tech_catagory ";
	$list=view_cat($sql);
	  
      




?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
