<?php 
include "dbconnection.php";
include "access.php";
	$u_id=$_REQUEST["user"];
	$cat=$_REQUEST["cat"];
	
	$pg_v="addu"; // page id
		
	
	if(!pageaccess($pg_v,$cat))
			{
			
				echo "<h2><div align=\"center\" >Sorry you are not allow to Add this record ";
				echo "<h2><div align=\"center\" >Plese meet authorized officer ";
				exit();
				
			}
			else
			{//go aheid 
			}
?>

<html>
<head>
<title>Business Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #C9DBED;
}
-->
</style></head>
<body>
<form action="biz_reg_update.php" method="post">
  <div align="left">
    <table width="675" height="454" border="1"  align="center" bgcolor="#FFffff">	
      <tr>
        <td colspan="2" bordercolor="#000000"><h2 align="center">Business Registration Form <strong></strong></h2>
        <tr>
          <td colspan="2" bordercolor="#000000" bgcolor="#C9DBED">
      <tr>
            <td width="151" height="26"><strong>Entrepreneur ID </strong>
            <td width="387" bgcolor="#FFFFFF">
			
			<?php 
			/*$sql="SELECT user_id FROM ent_info";
			$name='no';
	  		$id=view_id($sql,$name);*/
	
			?>
			<?php echo $u_id ?>
			
            <input name="user" type="hidden" id="user" value=<?php echo $u_id ?>>
            <input name="cat" type="hidden" id="cat" value="<?php echo $cat ?>">
      <tr>
                    <td><strong>Business Name</strong>
        <td bgcolor="#FFFFFF"><input name="biz_name" type="text" id="biz_name" size="40">
      <tr>
                                    <td><strong>Business Category </strong>
        <td bgcolor="#FFFFFF">
			<?php 
			$sql="SELECT catagory FROM tech_catagory";
			$name='tcat';
	  		$id=view_id($sql,$name);
			?>
			<label></label>
            <a href="left.php" target="_blank"></a>
        <tr bgcolor="#FFE9BB">
          <td bgcolor="#FFFFFF"><strong>Product / Service </strong>
        <td bgcolor="#FFFFFF"><input name="biz_product" type="text" id="biz_product" size="30"> 
           <?php echo "<a href=add_more_product.php?user=".$u_id." target=\"_blank\">More Product's.. </a>" ?>
      <tr>
          <td colspan="2" bgcolor="#C9DBED"><div align="center"><strong>Business Location </strong>          </div>
      <tr>
        <td><strong>District      </strong>
        <td bgcolor="#FFFFFF"><?php 
			$sql="SELECT district FROM district";
			$name='dist';
	  		$id=view_id($sql,$name);
	
			?>      
      <tr>
        <td><strong>Division      </strong>
        <td bgcolor="#FFFFFF"><?php 
			$sql="SELECT division FROM division";
			$name='div';
	  		$id=view_id($sql,$name);
	
			?>      
      <tr>
          <td><strong>Address No</strong> <strong>/ Street </strong>
          <td bgcolor="#FFFFFF"><input name="biz_add" type="text" id="std_m_name5" size="30">        
      <tr>
        <td><strong>Address City       </strong>
        <td bgcolor="#FFFFFF"><input name="biz_add2" type="text" id="biz_add" size="30">      
      <tr>
          <td><strong>Telephone Number 
          </strong>
          <td bgcolor="#FFFFFF"><label>
            <input name="tp" type="text" id="tp" size="14">
          </label>
      <tr>
          <td><strong>E-Mail Address </strong>          
          <td bgcolor="#FFFFFF"><input name="email" type="text" id="std_add2" size="40">        
      <tr>
          <td>        
          <td>        
      <tr>
        <td colspan="2">          <div align="right">
            <input name="submit" type="submit" value="Register" >
            <input name="reset" type="reset" value="Reset">        
        </div>
    </table>
</div>
</form>

</body>
</html>