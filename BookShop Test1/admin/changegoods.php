<?php
header ( "Content-type: text/html; charset=gb2312" ); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Change product infor</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php 
  include("conn/conn.php");//包含数据库连接文件
  $sql1=mysqli_query($conn,"select * from tb_shangpin where id=".$_GET['id']."");//执行查询语句
  $info1=mysqli_fetch_array($sql1);//将查询结果返回到数组中
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">Change product infor</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#666666"><table width="750" border="0" cellpadding="0" cellspacing="1">
        <script language="javascript">
	function chkinput(form)
	{
	  if(form.mingcheng.value=="")
	   {
	     alert("name pl!");
		 form.mingcheng.select();
		 return(false);
	   }
	  
	
	
	  if(form.huiyuanjia.value=="")
	   {
	     alert("member price pl!");
		 form.huiyuanjia.select();
		 return(false);
	   }
	 
	
	
	  if(form.shichangjia.value=="")
	   {
	     alert("market price pl!");
		 form.shichangjia.select();
		 return(false);
	   }
	  if(form.dengji.value=="")
	   {
	     alert("product level!");
		 form.dengji.select();
		 return(false);
	   }
	   
	   
	   if(form.pinpai.value=="")
	   {
	     alert("brand !");
		 form.pinpai.select();
		 return(false);
	   }
	   
	   if(form.xinghao.value=="")
	   {
	     alert("mode!");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("amount!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("indro!");
		 form.jianjie.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
        <form name="form1"  enctype="multipart/form-data" method="post" action="savechangegoods.php?id=<?php echo $_GET['id'];?>" onSubmit="return chkinput(this)">
          <tr>
            <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">Product name：</div></td>
            <td width="618" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="mingcheng" size="25" class="inputcss" value="<?php echo $info1['mingcheng'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">addtime：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="nian" class="inputcss">
                  <?php 
  for($i=1995;$i<=2050;$i++){//循环输出年份
 ?>
                  <option <?php if(substr($info1['addtime'],0,4)==$i){echo "selected";}?>><?php echo $i;?></option>
                  <?php 
  }
 ?>
                </select>
                Y
                <select name="yue" class="inputcss">
                  <?php 
            for($i=1;$i<=12;$i++){//循环输出月份
            ?>
                  <option <?php if(substr($info1['addtime'],5,1)==$i){echo "selected";} ?>><?php echo $i;?></option>
                  <?php 
             }
             ?>
                </select>
                M
                <select name="ri" class="inputcss">
                  <?php 
            for($i=1;$i<=31;$i++){//循环输出日期
            ?>
                  <option <?php if(substr($info1['addtime'],7,1)==$i){echo "selected";} ?>><?php echo $i;?></option>
                  <?php 
             }
             ?>
                </select>
                D</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">price：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">Market price：
                    <input type="text" name="shichangjia" size="10" class="inputcss" value="<?php echo $info1['shichangjia'];?>">
                AUD&nbsp;&nbsp;Member price：
                <input type="text" name="huiyuanjia" size="10" class="inputcss" value="<?php echo $info1['huiyuanjia'];?>">
                AUD</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">Product type：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <?php
			$sql=mysqli_query($conn,"select * from tb_type order by id desc");//执行查询语句
			$info=mysqli_fetch_array($sql);//将查询结果返回到数组中
			if($info==false){//如果查询结果为空
			  echo "product tyoe !";//输出字符串
			}
			else
			{
			?>
                <select name="typeid" class="inputcss">
                  <?php
			do
			{
			?>
                  <option value=<?php echo $info['id'];?> <?php if($info1['typeid']==$info['id']) {echo "selected";}?>><?php echo $info['typename'];?></option>
                  <?php
			}
			while($info=mysqli_fetch_array($sql));//对查询结果执行while循环
			?>
                </select>
                <?php
		     }
		    ?>
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">Product level：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="dengji" class="inputcss">
                  <option value="精品" <?php if(trim($info1['dengji'])=="精品"){echo "selected";}?>>best</option>
                  <option value="一般" <?php if(trim($info1['dengji'])=="一般"){echo "selected";}?>>normal</option>
                  <option value="二手" <?php if(trim($info1['dengji'])=="二手"){echo "selected";}?>>second hand</option>
                  <option value="淘汰" <?php if(trim($info1['dengji'])=="淘汰"){echo "selected";}?>>poor</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td height="22" bgcolor="#FFFFFF"><div align="center">Brand：</div></td>
            <td height="22" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="pinpai" class="inputcss" size="20" value="<?php echo $info1['pinpai'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">Mode：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="xinghao" class="inputcss" size="20" value="<?php echo $info1['xinghao'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">Recommand：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="tuijian" class="inputcss" >
                  <option value=1 <?php if($info1['tuijian']==1) {echo "selected";}?>>Y</option>
                  <option value=0 <?php if($info1['tuijian']==0) {echo "selected";}?>>N</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">Amount：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="shuliang" class="inputcss" size="20" value="<?php echo $info1['shuliang'];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">Picure：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input name="upfile" type="file" class="inputcss" id="upfile" size="30">
            </div></td>
          </tr>
          <tr>
            <td height="80" bgcolor="#FFFFFF"><div align="center">Indro：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <textarea name="jianjie" cols="50" rows="8" class="inputcss"><?php echo $info1['jianjie'];?></textarea>
            </div></td>
          </tr>
          <tr>
            <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
              <input type="submit" class="buttoncss" value="change">
              &nbsp;&nbsp;
                <input type="reset" value="cancel change" class="buttoncss">
            </div></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
</body>
</html>
