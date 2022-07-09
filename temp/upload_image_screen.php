<?php 
	include "dbconnection.php";
	include "access.php";
	$cat=$_REQUEST["cat"]; //user cat
	$user=$_REQUEST["user"]; // login user
	
	?>
</head>

<body>
<label></label>
<label></label>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="upload_file.php">
<table width="100%" height="204" border="0">
  <tr>
    <td height="31" colspan="3" bordercolor="#000000" bgcolor="#E9F0F8"><div align="center"><strong>Upload Images </strong></div></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><strong>Image Catogary</strong></td>
    <td><label>
	<?php
			$sql="SELECT catagory FROM tech_catagory";
			$name='t_cat';
	  		$id=view_id($sql,$name);
	
	?>
    </label></td>
  </tr>
  <tr>
    <td width="19%">&nbsp;</td>
    <td width="15%"><strong>Description</strong></td>
    <td width="66%">
      <label>
      <textarea name="file_dis" cols="50" rows="4" id="file_dis"></textarea>
        </label>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Image Path </strong></td>
    <td><label>
      <input name="file_id" type="file" id="file_id" size="30" maxlength="60" />
      <br>
      File Type Should be in .GIF,.JPG,.PNG formats 
    </label></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#E9F0F8"><label>
      <div align="right">
        <input name="cat" type="hidden" id="cat" value=<?php echo $cat;?>>
        <input name="user" type="hidden" id="user" value=<?php echo $user;?>>
        <input name="up_file_bt" type="submit" id="up_file_bt" value="Upload Image" />
        <input type="reset" name="Reset" value="Clear Data" />
        </div>
    </label></td>
  </tr>
</table>
</form>
</body>
</html>

