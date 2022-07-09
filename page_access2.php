<body bgcolor="#D9E6F2">
<html>
<body>
<table width="100%" border="0">
  <tr>
    <td>      
      <div align="center">
        <table width="100%" border="0" bgcolor="#000000">
          <tr>
            <td width="100%" bordercolor="#6699CC"><div align="center"><font color="#FFFFFF" size="+2"><strong><font color="#FFFFFF">Revork Restriction </font>  </strong></font></div></td>
          </tr>
          <tr>
            <td bordercolor="#6699CC">
			
<form name="form1" method="post" action="page_access.php">
<label>
<?php 
	include "dbconnection.php";
	//include "access.php";
	
	$u_cat=$_REQUEST["ucat"];
	$p_id=$_REQUEST["pg_id"];

	if($p_id!="")
			{
			/*$sql-"select * from pg_access where page_id=".$p_id." and u_cat=".$u_cat."";
			$rs=mysql_query($sql) or die(mysql_error());
			if($rs>0)
				{
				}
			else
				{*/
					$sql1 = "insert into pg_access values('','".$p_id."','".$u_cat."')";
					$up=mysql_query($sql1) or die(mysql_error());
				//}
			}
		else
			{
			}
	
	function view_cat($sql,$name)
		{	
			$rs=mysql_query($sql) or die(mysql_error());
		
			echo "<form name=\"form1\" method=\"post\" action=\"\"><select name=".$name."> <option 
			value=\"\"></option>";
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
	$id=view_cat($sql,$name);
		
		
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
	
	
	function view_denny($sql)
		{
	
		$rs=mysql_query($sql) or die(mysql_error());
		echo "<table width=\"100%\" border=\"1\">\n";
		echo "<tr bgcolor=\"#CFDFEF\"><td>Page Name</td><td></td></tr>";
		
			while($row=mysql_fetch_assoc($rs))
				{
					echo "<tr>\n";
		
				foreach($row as $value)
					{
						$pg_id=$row['pg_id'];
						$pg_name=$row['pg_name'];
						$user_cat1=$row['u_cat'];
					}
				echo "<td bgcolor=\"#FFFFFF\">\n";
				echo $pg_name;
				echo "</td>\n";

				echo "<td><a href=page_access2.php?pg_id=".$pg_id."&ucat=1 target=\"mainFrame\">	
						Revork </a></td>";

			}echo "</table>\n";
		
		}
	
	
	
	
	$sql=" SELECT pg_id,pg_name FROM pages where  pg_id  
			 not in (select page_id from pg_access where u_cat='".$u_cat."')";
	$list=view_denny($sql);
	
	
	
?>   
 
  <tr>
    <td bgcolor="#000000">
      <label></label>
    
    </td>
  </tr>
</table>

</body>
</html>
