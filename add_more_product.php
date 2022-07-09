<html><style type="text/css">
<!--
body {
	background-color: #9EC0DE;
}
-->
</style>
<body>


<?php
	include "dbconnection.php";
	$u_id=$_REQUEST["user"];
	$pro=$_POST["product"];
	
	if($pro!="")
	{
		$sql="insert into product ( `user` , `product` ) values('".$u_id."','".$pro."')";
		$nra=mysql_query($sql);
	}		
			
?>
<table width="100%" height="100%" border="0">
  <tr bgcolor="#E9F0F8">
    <td height="30">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="60"><div align="center"><strong>Add More Product's to <?php echo $u_id;?></strong></div></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="71"><form name="form1" method="post" action="add_more_product.php">
      <label>
        <div align="center">
         <input name=user type=hidden id="user" value=<?php echo $u_id;?>>
          <input name="product" type="text" id="product">
          <label>
          <input type="submit" name="Submit" value="Add">
          </label>
        </div>
        </label>
    </form>    </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="68">	</td>
  </tr>
  <tr bgcolor="#E9F0F8">
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>