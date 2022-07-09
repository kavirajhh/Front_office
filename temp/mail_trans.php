<?php

include "dbconnection.php";
require('class.simplemail.php');


 

if(isset($_POST['action']))
	{	
		switch($_POST['action'])
			{
				case 'Add New Catagory':
					$sql="INSERT INTO mail_list(mail_list) values ('".$_POST['add_mail']."')";
					echo "1";
					mysql_query($sql);
					break;
					
				case 'Delete Catagory':
					$sql="delete from mail_list where mail_id=".$_POST['del_mail'];
					mysql_query($sql);
					$sql="delete from mail_subs where mail_id=".$_POST['del_mail'];
					mysql_query($sql);
					echo "2";
					break;
					
				default :
					echo "3";
					break;
			}
0		}

?>