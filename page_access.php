<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td>      
      <div align="center">
        <table width="100%" border="0" bgcolor="#000000">
          <tr>
            <td width="100%" bordercolor="#6699CC"><div align="center"><font color="#FFFFFF" size="+2"><strong>Restrict User Rights </strong></font></div></td>
          </tr>
          <tr>
            <td bordercolor="#6699CC">
			
<form name="form1" method="post" action="page_access.php">
<label>
<?php 
	include "dbconnection.php";
	include "access.php";
	//$pg_v="admi"; // page id
	//$cat=$_REQUEST["cat"]; //user cat
	
	$u_cat=$_REQUEST["ucat"];
	$p_id=$_REQUEST["pg_id"];
	
///////////////////////////////////////access contral
/*if(!pageaccess($pg_v,$cat))
			{
			
				echo "<h2><div align=\"center\" >Sorry you are not allow to View this record ";
				echo "<h2><div align=\"center\" >Plese meet authorized officer ";
				exit();
				
			}
			else
			{//go aheid 
			}*/
////////////////////////////////////////access contral	
	
	
	
	
	
function view_cat2($sql,$name)
	{	
		$rs=mysql_query($sql) or die(mysql_error());
		echo "<form name=\"form1\" method=\"post\" action=\"\"><select name=".$name.">";
		while($row=mysql_fetch_assoc($rs))
			{
				foreach($row as $value)
					{
						$c_id=$row["cat_id"];
						$c_name=$row["catagory"];
					}
				echo " <option value=".$c_id.">".$c_name."</option> ";
			}
		
	}echo "</select></form>";
	
	$sql="SELECT * FROM user_cat";
	$name='ucat';
	$id=view_cat2($sql,$name);
	if($p_id!=""){
	$sql1 = "delete  from pg_access WHERE page_id ='".$p_id."' and u_cat='".$u_cat."'";
	$up=mysql_query($sql1) or die(mysql_error());
					}	
		
?>
            <input type="submit" name="Submit" value="Go">
                </label>
              </form>            </td>
			 
          </tr>
        </table>
      </div>    </td>
  </tr>
  <tr>
    <td>
	
<?php
	
	
function view_pages($sql){
	
	$rs=mysql_query($sql) or die(mysql_error());
	echo "<table width=\"100%\" border=\"1\">\n";
	echo "<tr bgcolor=\"#CFDFEF\"><td>Page Name</td><td></td></tr>";
		while($row=mysql_fetch_assoc($rs)){
		echo "<tr>\n";
		
			foreach($row as $value){
				
				
				$pg_id=$row['page_id'];
				$pg_name=$row['pg_name'];
				$user_cat=$row['u_cat'];
				
			
			}
echo "<td bgcolor=\"#FFFFFF\">\n";
echo $pg_name;
echo "</td>\n";
echo "<td><a href=page_access.php?pg_id=".$pg_id."&ucat=".$user_cat." target=\"mainFrame\">Restrict </a></td>";
//echo "<td bgcolor=\"#FFFFFF\">";
//echo "<input type=\"checkbox\" name=".$pg_id." value=\"a\" />";
		}echo "</table>\n";
	}
	
	
	
	
	$sql=" SELECT page_id,pg_name,u_cat FROM pages,pg_access 
			where  	pages.pg_id=pg_access.page_id 
			and 	pg_access.u_cat='".$u_cat."'";
	$list=view_pages($sql);
	
	
	
?>   
 
  <tr>
    <td bgcolor="#000000">
      <label></label>
    
    </td>
  </tr>
</table>

</body>
</html>
