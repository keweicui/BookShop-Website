<?php
header ( "Content-type: text/html; charset=gb2312" ); 
session_start();
include("conn/conn.php");
if(!isset($_SESSION['username'])){
	echo "<script>alert('login pl!');window.location.href='index.php';</script>";
}else{
	$ordersql = mysqli_query($conn,"select * from tb_order t1,tb_orderInfo t2,tb_shangpin t3 where t2.goodsID=t3.id and t1.id=t2.orderID and t1.username='".$_SESSION['username']."' order by t1.orderDate desc");
	$count = mysqli_num_rows($ordersql); 
	if($count == 0){
		echo "<script>window.location.href='order_null.php';</script>";
		exit();
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb"
	dir="ltr"
	class="com_content view-featured itemid-593 j35 mm-hover no-touch"
	slick-uniqueid="3">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=gbk">
		<title>BookList-MagicBook</title>
		<link rel="stylesheet" href="css/t3-01.css" type="text/css">
		<link rel="stylesheet" href="css/t3-02.css" type="text/css">
		<link rel="stylesheet" href="css/t3-03.css" type="text/css">
		<link rel="stylesheet" href="css/t3-04.css" type="text/css">
	


</head>

<body>
<div class="t3-wrapper">

<?php
include("index-loginCon.php");//包含登录页面
?>
<!-- HEADER -->
<header id="t3-header" class="wrap t3-header">
    <div class="container">
        <div class="row">
            <!--LOGO-->
            <div class="col-xs-12 col-md-3 logo col-sm-6">
                <div class="logo-image">
                    <a href="index.php" title="JoomlArt Demo Site">
                        <img class="logo-img" src="images/logo.png" alt="神奇布克">
                    </a>
                    <small class="site-slogan hidden-xs"></small>
                </div>
            </div>
            <nav id="t3-mainnav" class="col-xs-12 col-md-6 t3-mainnav navbar navbar-default">
                <div class="navbar-header">
                </div>
			<?php
				include("common-navi.php");//包含导航页面
			?>
            </nav>


			<?php
				include("searchCon.php");//包含搜索页面
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

								<div class="row">
									<div id="content_oc" class="col-sm-12">
										<h1>
											My Order
										</h1>
										<form action="cart_order.php" method="post" id="myform">
											<div class="table-responsive cart-info">
												<table class="table table-bordered">
													<thead>

														<tr>
															<td class="text-center image">
																Order No
															</td>
															<td class="text-center name">
																Produt Name
															</td>
															<td class="text-center name">
																Amount
															</td>
															<td class="text-center name">
																Price
															</td>
															<td class="text-center name">
																Cost
															</td>
															<td class="text-center quantity">
																Name
															</td>
															<td class="text-center price">
																Contact No
															</td>
															<td class="text-center total">
																Date
															</td>
															<td class="text-center total">
																Status
															</td>
														</tr>
															
													</thead>
													<tbody>
				<?php
					while($info = mysqli_fetch_array($ordersql)){//将查询结果循环返回到数组中
				?>

														<tr>
															<td class="text-center image" width="10%">
																<?php echo $info['orderID'];?>
															</td>
															<td class="text-center name">
																<?php echo $info['mingcheng'];?>
															</td>

															<td class="text-center quantity">
																<?php echo $info['number'];?>Item
															</td>
															<td class="text-center quantity">
																AUD <?php echo $info['price'];?>
															</td>
															<td class="text-center quantity">
																AUD <?php echo $info['number']*$info['price'];?>
															</td>
															<td class="text-center quantity">
																<?php echo $info['receiveName'];?>
															</td>
															<td class="text-center quantity">
																<?php echo $info['tel'];?>
															</td>
															<td class="text-center quantity">
																<?php echo $info['orderDate'];?>
															</td>
															<td class="text-center quantity">
																<?php echo $info['orderStatus'];?>
															</td>
														</tr>
														<?php
															}
														?>
													</tbody>
												</table>
											</div>																		
									</div>
								</div>			
	<br/><br/>							
								<div class="row">
									<div id="content_oc" class="col-sm-12">									
<br/><br/>
										<div class="buttons">
											
											<div class="pull-right">
												<a href="index.php" class="tigger btn btn-primary btn-primary">Shopping</a>
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
	include("footer.php");//包含搜索页面
?>

</div>
</body>
</html>
<?php
	mysqli_close($conn);//关闭数据库连接
}
?>
