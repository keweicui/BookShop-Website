<?php
header ( "Content-type: text/html; charset=gb2312" ); 
?>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/font.css" rel="stylesheet">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<p>&nbsp;</p>
<p> 
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script language="javascript">
	  function chkinput(form){
	    if(form.name.value==""){
		  alert("input account pl!");
		  form.name.select();
		  return(false);
		}
		if(form.pwd.value==""){
		  alert("input password pl!");
		  form.pwd.select();
		  return(false);
		}
		return(true);
	  }
	</script>
<form name="form1" method="post" action="chkadmin.php" onSubmit="return chkinput(this)">
  <table width="545" border="0" align="center">
	<tr>
		<td height="226" background="">&nbsp;</td>
	</tr>
	<tr>
		<td height="45" align="right" background=""><table width="407" border="0" >
          <tr>
            <td width="57" align="center">Account��</td>
            <td width="94" align="center"><input type="text" name="name" size="14" maxlength="20" ></td>
            <td width="53" align="center">Password��</td>
            <td width="104" align="center"><input type="password" name="pwd" size="14" maxlength="20" class="inputcss"></td>
            <td width="99">&nbsp;
                <input type="submit" value="submit" width="74" height="24" border="0"></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td height="23"  background=""></td>
	</tr>
</table>
</form>
</body>
</html>