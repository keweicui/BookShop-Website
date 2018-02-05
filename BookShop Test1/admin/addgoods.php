<?php
header ( "Content-type: text/html; charset=gb2312" ); 
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Add Product</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php include("conn/conn.php");?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">Add Product</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#666666"><table width="720" border="0" cellpadding="0" cellspacing="1">
	<script language="javascript">
	function chkinput(form)
	{
	  if(form.mingcheng.value=="")
	   {
	     alert("Enter Product Name!");
		 form.mingcheng.select();
		 return(false);
	   }
	  
	
	
	  if(form.huiyuanjia.value=="")
	   {
	     alert("Enter Product Price!");
		 form.huiyuanjia.select();
		 return(false);
	   }
	 
	
	
	  if(form.shichangjia.value=="")
	   {
	     alert("Enter Product Price in Market!");
		 form.shichangjia.select();
		 return(false);
	   }
	   if(form.huiyuanjia.value>form.shichangjia.value){
	   	alert("Price cannot Higher Market Price!");
		 form.huiyuanjia.select();
		 return(false);
	   }
	   
	  if(form.dengji.value=="")
	   {
	     alert("Enter Product Level!");
		 form.dengji.select();
		 return(false);
	   }
	   
	   
	   if(form.pinpai.value=="")
	   {
	     alert("Enter Product Brand!");
		 form.pinpai.select();
		 return(false);
	   }
	   
	   if(form.xinghao.value=="")
	   {
	     alert("Enter Product Code!");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("Enter Product Amount!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("Enter Product Info!");
		 form.jianjie.select();
		 return(false);
	   }
	
	   return(true);
	}
    </script>
     <form name="form1" enctype="multipart/form-data" method="post" action="savenewgoods.php" onSubmit="return chkinput(this)">
	  <tr>
        <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">Product Name：</div></td>
        <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="mingcheng" size="25" class="inputcss"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Date of Release：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
<select name="nian" class="inputcss">
<?php 
  	for($i=1995;$i<=2050;$i++){//循环输出年份
?>
  <option><?php echo $i;?></option>
<?php 
  	}
?>
</select>          
Y
          <select name="yue" class="inputcss">
            <?php 
            for($i=1;$i<=12;$i++){//循环输出月份
            ?>
           <option><?php echo $i;?></option>
            <?php 
             }
             ?>
          </select>
          M
          <select name="ri" class="inputcss">
		  <?php 
            for($i=1;$i<=31;$i++){//循环输出日期
            ?>
		  
            <option><?php echo $i;?></option>
		 <?php 
             }
             ?>
          </select>
          D</div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Price：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">Price in Market：<input type="text" name="shichangjia" size="10" class="inputcss" >
          AUD&nbsp;&nbsp;Membership Price：
          <input type="text" name="huiyuanjia" size="10" class="inputcss">
          AUD</div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Product Type：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
           <?php
			$sql=mysqli_query($conn,"select * from tb_type order by id desc");//执行查询语句
			$info=mysqli_fetch_array($sql);//将查询结果返回到数组中
			if($info==false){//如果查询结果为空
			  echo "Enter product Type!";//输出字符串
			}
			else
			{
			?>
            <select name="typeid" class="inputcss">
			<?php
			do{
			?>
              <option value=<?php echo $info['id'];?>><?php echo $info['typename'];?></option>
			<?php
			}while($info=mysqli_fetch_array($sql));//对查询结果执行while循环
			?>  
            </select>
            <?php
		     }
		    ?>
        </div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Product Level：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
          <select name="dengji" class="inputcss">
            <option selected value="精品">Top </option>
            <option value="一般">Normal</option>
            <option value="二手">Second-hand</option>
            <option value="淘汰">Old</option>
          </select>
        </div></td>
      </tr>
      <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center">Product Brand：</div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="left"><input type="text" name="pinpai" class="inputcss" size="20"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Product Code：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="xinghao" class="inputcss" size="20"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Recommented?：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
          <select name="tuijian" class="inputcss">
            <option selected value=1>Yes</option>
            <option value=0>No</option>
          </select>
     </div>
      </td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Product Amount：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="shuliang" class="inputcss" size="20"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">Product Picture：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="file" name="upfile" class="inputcss" size="30"></div></td>
      </tr>
      <tr>
        <td height="80" bgcolor="#FFFFFF"><div align="center">Product Info：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><textarea name="jianjie" cols="80" rows="8" class="inputcss"></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" class="buttoncss" id="submit" value="Add">
        &nbsp;&nbsp;<input type="reset" value="Reset" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
