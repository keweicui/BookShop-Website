<?php
header ( "Content-type: text/html; charset=gb2312" ); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Order Mannagement</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<?php
 include("conn/conn.php");//�������ݿ������ļ�
 $id=$_GET['id'];//��ȡ����idֵ
 $sql=mysqli_query($conn,"select t1.receiveName,t1.address,t1.tel,t2.id,t2.orderID,t2.number,t3.mingcheng,t3.shuliang,t3.shichangjia,t3.huiyuanjia from tb_order t1,tb_orderinfo t2,tb_shangpin t3 where t1.id=t2.orderID and t2.goodsID=t3.id and t2.id='".$id."'");//ִ�в�ѯ���
 $info=mysqli_fetch_array($sql);//����ѯ������ص�������
?>
<style type="text/css">
<!--
.style2 {color: #f2ab5b}
.style2 {color: #FF0000}
.style3 {color: #000000}
.style4 {color: #990000}
-->
</style>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style4">operation</div></td>
  </tr>
  <tr>
    <td bgcolor="#333333"><table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="saveorder.php?id=<?php echo $info['id'];?>">
	  <tr>
        <td width="70" height="25" bgcolor="#FFFFFF"><div align="center" class="style3">Order No��</div></td>
        <td width="271" bgcolor="#FFFFFF"><div align="left"><?php echo $info['orderID'];?></div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center"><span class="style3">paid</span>
          <input type="checkbox" value="paid" name="ysk"></div></td>
        <td width="101" bgcolor="#FFFFFF"><div align="center"><span class="style3">sending</span>
          <input name="yfh" type="checkbox" value="sending"  >
        </div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center"><span class="style3">delivered</span>
          <input name="ysh" type="checkbox" value="delivered" >
        </div></td>
        <td width="101" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="Modify" class="buttoncss"></div></td>
	  </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="13"><div align="left">
      <div align="center" class="style2">note:.......</div>
    </div></td>
  </tr>
</table>
<table width="750" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#CCCCCC"><table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr bgcolor="#FFCF60">
        <td width="106" height="20"><div align="center" class="style4">Product Name</div></td>
        <td width="106"><div align="center" class="style4">Amount</div></td>
        <td width="106"><div align="center" class="style4">Market Price</div></td>
        <td width="106"><div align="center" class="style4">Member Price</div></td>
        <td width="106"><div align="center" class="style4">Discount</div></td>
        <td><div align="center" class="style4">In total</div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="left"> &nbsp;<?php echo $info['mingcheng'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php if($info['shuliang']<0) echo "Sold out"; else echo $info['number'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['shichangjia'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['huiyuanjia'];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo ceil(($info['huiyuanjia']/$info['shichangjia'])*100);?>%</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info['huiyuanjia']*$info['number'];?></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="750" height="195" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr>
    <td height="193" bgcolor="#333333"><table width="750" height="151" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr bgcolor="#FFCF60">
        <td height="20" colspan="2"><div align="center" class="style4">Infor</div></td>
      </tr>
      <tr>
        <td width="120" height="25" bgcolor="#FFFFFF"><div align="center" class="style3">Name��</div></td>
        <td width="627" bgcolor="#FFFFFF"><div align="left"><?php echo $info['receiveName'];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">Address��</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info['address'];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">Contact No��</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info['tel'];?></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" align="center">      <input name="button" type="button" class="buttoncss" onClick="javascript:history.back();" value="Return">    </td>
  </tr>
</table>
</body>
</html>
