<?php
header ( "Content-type: text/html; charset=gb2312" ); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Edit Product</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php
  include("conn/conn.php");//�������ݿ������ļ�
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<?php
	   $sql=mysqli_query($conn,"select count(*) as total from tb_shangpin ");//ִ�в�ѯ���
	   $info=mysqli_fetch_array($sql);//����ѯ������ص�������
	   $total=$info['total'];//��ȡ��ѯ����ܼ�¼��
	   if($total==0){//�����ѯ���Ϊ��
	     echo "��վ������Ʒ!";//����ַ���
	   }
	   else
	    {
?>
<form name="form1" method="post" action="deletefxhw.php">
  <p>&nbsp;</p>
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="75" bgcolor="#666666"><table width="750" height="86" border="0" cellpadding="0" cellspacing="1">
      
	  <tr bgcolor="#FFCF60">
        <td height="20" colspan="10"><div align="center" class="style1">Product Info Edit</div></td>
      </tr>
      <tr>
        <td width="59" height="28" bgcolor="#FFFFFF"><div align="center">Checked</div></td>
        <td width="102" bgcolor="#FFFFFF"><div align="center">Name</div></td>
        <td width="86" bgcolor="#FFFFFF"><div align="center">Brand</div></td>
        <td width="71" bgcolor="#FFFFFF"><div align="center">Code</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">Left</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">Price in Market</div></td>
        <td width="61" bgcolor="#FFFFFF"><div align="center">Price in Membership</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">Sold</div></td>
        <td width="112" bgcolor="#FFFFFF"><div align="center">Date of Addin</div></td>
        <td width="68" bgcolor="#FFFFFF"><div align="center">Operation</div></td>
      </tr>
	  <?php
	  
	       $pagesize=10;//ÿҳ��ʾ10����¼
		   if ($total<=$pagesize){//����ܼ�¼��С�ڵ���10
		      $pagecount=1;//��ҳ��Ϊ1
			} 
			if(($total%$pagesize)!=0){//����ܼ�¼������10��������Ϊ0
			   $pagecount=intval($total/$pagesize)+1;//������ҳ��
			
			}else{
			   $pagecount=$total/$pagesize;//������ҳ��
			
			}
			if(!isset($_GET['page'])){//�����ַ����page����û������
			    $page=1;//���嵱ǰҳ��
			
			}else{
			    $page=intval($_GET['page']);//���嵱ǰҳ��
			
			}
			 
           $sql1=mysqli_query($conn,"select * from tb_shangpin order by addtime desc limit ".($page-1)*$pagesize.",$pagesize");//ִ�в�ѯ���
		   while($info1=mysqli_fetch_array($sql1))//����ѯ���ѭ�����ص�������
		    {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="<?php echo $info1['id'];?>" value=<?php echo $info1['id'];?>>
        </div></td>
        <td height="25" bgcolor="#FFFFFF">
          
          <div align="center"><?php echo $info1['mingcheng'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['pinpai'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['xinghao'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php if($info1['shuliang']<0) {echo "Sold";}else {echo $info1['shuliang'];}?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['shichangjia'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['huiyuanjia'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['cishu'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1['addtime'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="changegoods.php?id=<?php echo $info1['id'];?>">Change</a></div></td>
      </tr>
	 <?php
	    }
        
      ?>
	 
    </table></td>
  </tr>
</table>
<table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="165">
	  <div align="left"><input name="submit" type="submit" class="buttoncss" id="submit" value="delete">
	  &nbsp;<input type="reset" value="reset" class="buttoncss"></div></td>
    <td width="585"><div align="center">
        <?php
		   echo $total;//����ܼ�¼��
		  ?>
        &nbsp;Items&nbsp;&nbsp;<?php echo $page;?>&nbsp;/&nbsp;<?php echo $pagecount; ?>&nbsp;Pages
        <?php
		  if($page>=2)//�����ǰҳ�����ڵ���2
		  {
		  ?>
        <a href="editgoods.php?page=1" title="Home Page"><font face="webdings"> 9 </font></a> <a href="editgoods.php?page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){//�����ҳ��С�ڵ���4
		    for($i=1;$i<=$pagecount;$i++){//ѭ���������ҳ��
		  ?>
        <a href="editgoods.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 //ѭ���������ҳ��
		  ?>
        <a href="editgoods.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="editgoods.php?page=<?php echo $page-1;?>" title="Next"><font face="webdings"> 8 </font></a> <a href="editgoods.php?page=<?php echo $pagecount;?>" title="Last"><font face="webdings"> : </font></a>
        <?php }?>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
  <?php
	}
  ?>
</body>
</html>