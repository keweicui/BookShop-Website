<?php
header ( "Content-type: text/html; charset=gb2312" ); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Admin table</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<script language="javascript">
  function openspgl(){
    if(document.all.spgl.style.display=="none"){
	   document.all.spgl.style.display="";
	   
	 }
	 else{
	  document.all.spgl.style.display="none";
	  
	 }  
  }
  function openyhgl(){
    if(document.all.yhgl.style.display=="none"){
	   document.all.yhgl.style.display="";
	   
	 }
	 else{
	  document.all.yhgl.style.display="none";
	  
	 }  
  }
  function openddgl(){
    if(document.all.ddgl.style.display=="none"){
	   document.all.ddgl.style.display="";
	   
	 }
	 else{
	  document.all.ddgl.style.display="none";
	  
	 }  
  }
  function opengggl(){
    if(document.all.gggl.style.display=="none"){
	   document.all.gggl.style.display="";
	   
	 }
	 else{
	  document.all.gggl.style.display="none";
	  
	 }  
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="212" border="0" cellpadding="0" cellspacing="0" background="left_bg.gif">
  <tr>
    <td height="425" valign="top" ><div align="center">
      <table width="212" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="212" height="32"  onClick="javascript:openspgl()"><div ><a href="#"><img id="d1" border="0" width="10" height="10">&nbsp;&nbsp;Product Management</a></div></td>
            </tr>
          </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="spgl" style="display:">
              <tr>
                <td height="20" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  
                  <a href="addgoods.php" target="main">Add Product</a></td>
              </tr>
              <tr>
                <td height="22" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  
                  <a href="editgoods.php" target="main">Modift Product</a></td>
              </tr>
              <tr>
                <td height="22" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  
                  <a href="showleibie.php" target="main">Product Type Managment</a></td>
              </tr>
              <tr>
                <td height="26" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  
                  <a href="addleibie.php" target="main">Add Product Type</a></td>
              </tr>
            </table>
            <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32"  onClick="javascript:openyhgl()"><div ><a href="#"><img id="d2" border="0" width="10" height="10">&nbsp;&nbsp;ID Management</a></div></td>
              </tr>
            </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="yhgl" style="display:">
              <tr>
                <td height="22" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="edituser.php" target="main">user Info Management</a></td>
              </tr>
              <tr>
                <td height="26" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="changeadmin.php"  target="main">Change Admin Info</a></td>
              </tr>
            </table>
            <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" onClick="javascript:openddgl()"><a href="#"><img id="d3" border="0" width="10" height="10">&nbsp;&nbsp;Order Management</a></td>
              </tr>
            </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="ddgl" style="display:">
              <tr>
                <td height="22" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="lookdd.php" target="main">Edit Order</a></td>
              </tr>

            </table>
            <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32"  onClick="javascript:opengggl()"><div ><a href="#"><img id="d4" border="0" width="10" height="10">&nbsp;&nbsp;Info Management</a></div></td>
              </tr>
            </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="gggl" style="display:">
              <tr>
                <td height="26" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="editpinglun.php " target="main">Comment Management</a></td>
              </tr>
			<tr><td height="100" >&nbsp;</td>
			</tr>
			<tr><td height="3" ></td></tr>
            </table>
			</td>
        </tr>
      </table>
      </div></td>
  </tr>
</table>
</body>
</html>
