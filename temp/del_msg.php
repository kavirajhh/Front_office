<body bgcolor="#E8FFE8">
<?php
include "dbconnection.php";
include "access.php";	

///////////////////////////////////////////////////////////////////
	$sql=" select *  from message ";
	$list=view_cat($sql);

	
?>
