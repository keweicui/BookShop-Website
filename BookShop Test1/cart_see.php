<?php
	header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
 	session_start();//����session
	include("conn/conn.php");//�������ݿ������ļ�
	if (!isset($_SESSION['username'])) {//����û�δ��¼
		header("location:login.php");//��ת����¼ҳ��
		exit();//�˳�����
	} else {
		if ($_SESSION['producelist'] == "" || $_SESSION['quatity'] == "") {//������ﳵΪ��
			header("location:cart_null.php");//ҳ����ת
		} else {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb"
	dir="ltr"
	class="com_content view-featured itemid-593 j35 mm-hover no-touch"
	slick-uniqueid="3">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=gbk">
		<meta name="HandheldFriendly" content="true">
        <meta name="apple-mobile-web-app-capable" content="YES">-->
		<title>BookList-MagicBook</title>
		<link rel="stylesheet" href="css/t3-01.css" type="text/css">
		<link rel="stylesheet" href="css/t3-02.css" type="text/css">
		<link rel="stylesheet" href="css/t3-03.css" type="text/css">
		<link rel="stylesheet" href="css/t3-04.css" type="text/css">

</head>

<body>
<div class="t3-wrapper">

<?php
include("index-loginCon.php");//������¼ҳ��
?>
<!-- HEADER -->
<header id="t3-header" class="wrap t3-header">
    <div class="container">
        <div class="row">
            <!--LOGO-->
            <div class="col-xs-12 col-md-3 logo col-sm-6">
                <div class="logo-image">
                    <a href="index.php" title="JoomlArt Demo Site">
                        <img class="logo-img" src="images/logo.png" alt="���沼��">
                    </a>
                    <small class="site-slogan hidden-xs"></small>
                </div>
            </div>
            <nav id="t3-mainnav" class="col-xs-12 col-md-6 t3-mainnav navbar navbar-default">
                <div class="navbar-header">
                </div>
			<?php
				include("common-navi.php");//��������ҳ��
			?>
            </nav>


			<?php
				include("searchCon.php");//��������ҳ��
			?>
        </div>
    </div>
</header>
<!-- //HEADER -->

<div id="t3-mainbody" class="container t3-mainbody">
<div class="row">

<!-- MAIN CONTENT -->
<div id="t3-content" class="t3-content col-xs-12">


<div id="mijoshop" class="mijoshop common-home">
<div class="container_oc">
<div class="container_oc">
    <div class="breadcrumb">

    </div>
</div>
								<div class="row">
									<div id="content_oc" class="col-sm-12">
										<h1>
											My Cart
										</h1>
										<form action="cart_order.php" method="post" id="myform">
											<div class="table-responsive cart-info">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td class="text-center image">
						Picture
					</td>
					<td class="text-left name">
						Book Name
					</td>

					<td class="text-left quantity">
						Amount
					</td>
					<td class="text-right price">
						Price
					</td>
					<td class="text-right total">
						Total
					</td>
				</tr>
			</thead>
			<tbody>
			<?php
				$total=0;//Ϊ������ʼ����ֵ
			    $array=explode("@",$_SESSION['producelist']);//�����ﳵ�и���Ʒid��ֵ�ָ�Ϊ����
				$arrayquatity=explode("@",$_SESSION['quatity']);//�����ﳵ�и���Ʒ������ֵ�ָ�Ϊ����
				for($i=0;$i<count($array)-1;$i++){ //ѭ�����ﳵ�е���Ʒ
				   	$id=$array[$i];//��ȡ��Ʒid
				   	$num=$arrayquatity[$i];//��ȡ��Ʒ����
				  
				   	if($id!=""){//�����Ʒid��ֵ��Ϊ��
				   		$sql=mysqli_query($conn,"select * from tb_shangpin where id='".$id."'");//ִ�в�ѯ���
				   		$info=mysqli_fetch_array($sql);//����ѯ������ص�������
				   		$total1=$num*$info['huiyuanjia'];//��ȡ����Ʒ���ܼ�
				   		$total+=$total1;//��ȡ������Ʒ���ܼ�
				   		//$_SESSION["total"]=$total;
			?>

			<tr>
				<td class="text-center image" width="20%">
					<a href="goodsDetail.php?id=<?php echo $id;?>"><img width="80px" src="<?php echo $info['tupian'];?>">
					</a>
				</td>
				<td class="text-left name">
					<a href="goodsDetail.php?id=<?php echo $id;?>"> <?php echo $info['mingcheng'];?></a>
				</td>

				<td class="text-left quantity">
					<?php echo $num;?>Item
				</td>
				<td class="text-right price">
					AUD <?php echo $info['huiyuanjia'];?>
				</td>
				<td class="text-right total">
					AUD <?php echo $total1;?>
				</td>
			</tr>
			<?php
					}
				}
			?>

			</tbody>
		</table>
											</div>
										


										<div class="row cart-total">
											<div class="col-sm-4 col-sm-offset-8">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td class="text-left">
																<strong>Total:</strong>
															</td>
															<td class="text-right">AUD <?php echo $total;?>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
									</div>
								</div>
								
								
								<div class="row">
									<div id="content_oc" class="col-sm-12">
										<h1>
											Order Info
										</h1>
										
											<div class="table-responsive cart-info">
												<table class="table table-bordered">
													
													<tbody>
													
														<tr>
															<td class="text-right" width="20%">
																Name��
															</td>
															
															<td class="text-left quantity">
																<div class="input-group btn-block"
																	style="max-width: 400px;">
																	<input type="text" id="receiveName"
																		name="receiveName"
																		 size="10"
																		class="form-control">
																</div>
															</td>	
														</tr>
														
														<tr>
															<td class="text-right">
																Contact No��
															</td>
															
															<td class="text-left quantity">
																<div class="input-group btn-block"
																	style="max-width: 400px;">
																	<input type="text" id="tel"
																		name="tel"
																		 size="10"
																		class="form-control">
																</div>
															</td>
														</tr>
														
														<tr>
															<td class="text-right">
																Address��
															</td>
															
															<td class="text-left quantity">
																<div class="input-group btn-block"
																	style="max-width: 400px;">
																	<input type="text" id="address"
																		name="address"
																		 size="1"
																		class="form-control">
																	
																</div>
															</td>
														</tr>
														
														<tr>
															<td class="text-right">
																Instruction��
															</td>
															
															<td class="text-left quantity">
																<div class="input-group btn-block"
																	style="max-width: 400px;">
																	<input type="text"
																		name="bz"
																		 size="1"
																		class="form-control">
																	
																</div>
															</td>
														</tr>
														
													</tbody>
												</table>
											</div>
										

									</div>
								</div>
	<br/><br/>							
								<div class="row">
									<div id="content_oc" class="col-sm-12">
										<h1>
											Pay Method
										</h1>
										
											<div class="table-responsive cart-info">
												<table class="table table-bordered">
													
													<tbody>
														<tr>
															<td class="text-left">
																<img src="images/zhifubao.png"/>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										

<br/><br/>
										<div class="buttons">
											<div class="pull-left">
												<a href="index.php" class="btn btn-primary btn-default">Shopping</a>
											</div>
											<div class="pull-left">
												<a href="cart_clear.php" class="btn btn-primary btn-default">Empty Cart</a>
											</div>
											<div class="pull-right">
												<a 
													href="javascript:zhifu();"
													class="tigger btn btn-primary btn-primary">Check Out</a>
												
												</div>
										</div>
										
										</form>
										
									</div>
								</div>
								
							</div>
</div>
</div>

</div>
</div>


<!-- FOOTER -->
<?php
    include("footer.php");//��������ҳ��
?>

</div>

  <script type="text/javascript" src="js/jBox/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="js/jBox/jquery.jBox-2.3.min.js"></script>
  <link type="text/css" rel="stylesheet" href="js/jBox/Skins2/Blue/jbox.css"/>
  <style>
  .popup_cont {
    padding: 25px 10px 30px 10px;
    text-align: center;
}
  </style>
  <script>
  function zhifu(){
						
	            if($('#receiveName').val()==="" ){
	            	alert('�ջ�����������Ϊ�գ�');
	            	return;
	            }
	            if($('#tel').val()==="" ){
	            	alert('�ջ����ֻ�����Ϊ�գ�');
	            	return;
	            }
	            
	            if (isNaN($('#tel').val())) { 
��������				alert("�ֻ�������������"); 
��������				return;
��������			} 
	            
	            if($('#address').val()==="" ){
	            	alert('�ջ��˵�ַ����Ϊ�գ�');
	            	return;
	            }  
	  
				var html='<div class="popup_cont">'+
      					 '<p>ɨһɨ֧��</p>'+
        				 '<strong>��<font id="show_money_info">0.01Ԫ</font></strong>'+
        				 '<div style="width: 256px; height: 256px; text-align: center; margin-left: auto; margin-right: auto;" >' +
        				 '<image src="images/qr.png" width="256" height="256" /></div>'+
          				 '</div><p style="text-align:center">֧����ά���Ϊ������(���֪ʶ������������ϸ����)</p>';
						
				var content = {

			    state1: {
			        content: html,
			        buttons: { 'ȡ��': 0,'֧��':1 },
			        buttonsFocus: 0,
			        submit: function (v, h, f) {
			            if (v == 0) {
			                return true; // close the window
			            }
			            if (v == 1) {
			            	
			            	document.getElementById('myform').submit();
			                return true; 
			            }
			            return false;
			        }
			    }
			};
				$.jBox.open(content, '֧��', 400, 450);		
						
			}
  </script>
  
  	
</body>
</html>
<?php
	mysqli_close($conn);//�ر����ݿ�����
		}
	}
?>