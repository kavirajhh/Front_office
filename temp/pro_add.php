

<html>
<head><title>Add Programs</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #C9DBED;
}
.style1 {font-size: 9px}
-->
</style></head>
<body>
<form action="pro_update.php" method="post">
  <div align="left">
    <table width="675" height="454" border="1"  align="center" bgcolor="#FFffff">	
      <tr>
        <td colspan="2" bordercolor="#000000"><h2 align="center">Add program to schedule  <strong></strong></h2>
        <tr>
          <td colspan="2" bordercolor="#000000" bgcolor="#C9DBED">
      <tr>
            <td width="151" height="26"><strong>Program ID </strong>
            <td width="387" bgcolor="#FFFFFF"><input name="pro_id" type="text" id="pro_id" size="25" maxlength="12">
      <tr>
                    <td><strong>Program</strong>
                    <td bgcolor="#FFFFFF"><input name="program" type="text" id="program" size="50" maxlength="50">      
      <tr>
          <td><strong>Dateand Time Held On </strong>
        <td bgcolor="#FFFFFF"><input name="pro_date" type="text" id="std_m_name4" size="20">
          YYYY-MM-DD
      HH-MM <span class="style1">( Yeaar, Month, Date, Hover, Minit)</span> 
      <tr>
          <td><strong>Organize By </strong>          
          <td bgcolor="#FFFFFF"><input name="pro_org" type="text" id="std_m_name5" size="30">        
      <tr>
          <td><strong>Location</strong>
          <td bgcolor="#FFFFFF"><input name="pro_loc" type="text" id="std_m_name6" size="30">        
      <tr>
          <td><strong>Contact Tele Phone </strong>
          <td bgcolor="#FFFFFF"><input name="pro_tp" type="text" id="std_m_name7" size="25">        
      <tr>
        <td><strong>E-mail</strong>      
        <td bgcolor="#FFFFFF"><input name="pro_email" type="text" id="std_add3" size="30">      
      <tr>
          <td><strong>Vacants</strong>
          <td bgcolor="#FFFFFF"><label>
            <input name="pro_vac" type="text" id="pro_vac" size="3">
          </label>
      <tr>
          <td>        
          <td>        
      <tr>
        <td colspan="2">          <div align="right">
            <input name="submit" type="submit" value="Add Program" >
            <input name="Button" type="button" value="Change Info">
            <label>
            <input type="button" name="Button" value="Cancel Program">
            <input type="reset" name="Submit2" value="Reset">
            </label>        
        </div>
    </table>
</div>
</form>

</body>
</html>