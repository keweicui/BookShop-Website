<?php
header ( "Content-type: text/html; charset=gb2312" ); 
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr"
      class="com_content view-featured itemid-593 j35 mm-hover no-touch" slick-uniqueid="3">
<head>
    <meta http-equiv="content-type" content="text/html; charset=gbk">
    <title>Shopping Center</title>
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="YES">
    <link rel="stylesheet" href="css/t3-01.css" type="text/css">
    <link rel="stylesheet" href="css/t3-02.css" type="text/css">
    <link rel="stylesheet" href="css/t3-03.css" type="text/css">
    <link rel="stylesheet" href="css/t3-04.css" type="text/css">
</head>

<body>
<div class="t3-wrapper">

<?php
include("conn/conn.php");
include("index-loginCon.php");
?>
<!-- HEADER -->
<header id="t3-header" class="wrap t3-header">
    <div class="container">
        <div class="row">
            <!--LOGO-->
            <div class="col-xs-12 col-md-3 logo col-sm-6">
                <div class="logo-image">
                    <a href="index.php" title="Shopping Center">
                        <img class="logo-img" src="images/logo.png">
                    </a>
                    <small class="site-slogan hidden-xs"></small>
                </div>
            </div>
            <!-- nav -->
            <nav id="t3-mainnav" class="col-xs-12 col-md-6 t3-mainnav navbar navbar-default">
                <div class="navbar-header">
                </div>
                <?php
					include("common-navi.php");
				?>
            </nav>
				<?php
					include("searchCon.php");
				?>
		</div>
    </div>
</header>

<!-- SPOTLIGHT 1 -->
<div class="container t3-sl t3-sl-1">
    <!-- SPOTLIGHT -->
				<div class="t3-spotlight t3-spotlight-1  row">
					<div
						class=" col-lg-9 col-md-12  col-sm-3 hidden-sm   col-xs-6 hidden-xs ">
						<div class="t3-module module ">
							<div class="module-inner">
								<div class="module-ct">
									<div class="mijoshop">
										<div class="container_oc">
										   <a ><img src="admin/upimages/mainpage.jpg" width="890px">									
										   </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div
						class=" col-lg-3  col-md-6 hidden-md   col-sm-3 hidden-sm   col-xs-6 hidden-xs ">
						<div class="t3-module module highlight ">
							<div class="module-inner">
								<h3 class="module-title ">
									<span>today recommend</span>
								</h3>
								<div class="module-ct">
									<div class="mijoshop">
										<div class="container_oc">
											<div class="box_oc">
												
												<div>
													<div class="box-product">
														<div>
															<div class="image">
																<a
																	href="goodsDetail.php?id=215"><img
																		src="admin/upimages/NF12.png" height="100px"
																		>
																</a>
															</div>
															<div class="name">
																<a
																	href="goodsDetail.php?id=215">What Happened</a>
															</div>
															<div class="rating">
																<span class="fa fa-stack"><i
																	class="fa fa-star fa-stack-2x"></i><i
																	class="fa fa-star-o fa-stack-2x"></i>
																</span>
																<span class="fa fa-stack"><i
																	class="fa fa-star fa-stack-2x"></i><i
																	class="fa fa-star-o fa-stack-2x"></i>
																</span>
																<span class="fa fa-stack"><i
																	class="fa fa-star fa-stack-2x"></i><i
																	class="fa fa-star-o fa-stack-2x"></i>
																</span>
																<span class="fa fa-stack"><i
																	class="fa fa-star fa-stack-2x"></i><i
																	class="fa fa-star-o fa-stack-2x"></i>
																</span>
																<span class="fa fa-stack"><i
																	class="fa fa-star-o fa-stack-2x"></i>
																</span>
															</div>
															<div class="price">
																
																<span class="price-new">$35.99</span>
															</div>
															
														</div>

														<div>
															<div class="image">
																<a href="goodsDetail.php?id=283" title="" ><img
																		src="admin/upimages/F12.png" height="120px">
																</a>
															</div>

														</div>
														<div>
															<div class="image">
																<a href="goodsDetail.php?id=213" title="" ><img
																		src="admin/upimages/F3.png" height="120px">
																</a>
															</div>

														</div>
														<div>
															<div class="image">
																<a href="goodsDetail.php?id=279" title="" ><img
																		src="admin/upimages/F8.png" height="120px">
																</a>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- SPOTLIGHT -->
</div>
<!-- //SPOTLIGHT 1 -->


<!-- MASS TOP -->
<nav class="container t3-masstop  hidden-sm hidden-xs">


<div class="custom">
<div>
<div class="ja-tabswrap default" style="width:100%;">
<div class="container">
<div class="ja-tabs-title-top" style="height:30px;">
    
        <h3><span class="h3span">New Arrived</span>
        </h3>    
</div>
<div class="ja-tab-panels-top" style="height: 744px;">
<div class="ja-tab-content ja-tab-content col-6 active"
     style="opacity: 1; width: 100%; visibility: visible;">
    <div class="ja-tab-subcontent">
        <div class="mijoshop">
            <div class="container_oc">
                <div class="row">
				 <?php
				 	$sql=mysqli_query($conn,"select t1.id,t1.tupian,t1.mingcheng,t1.huiyuanjia,t2.typename from tb_shangpin t1,tb_type t2 where t1.typeid=t2.id order by t1.addtime desc limit 0,12"); //执行查询操作
					$info=mysqli_fetch_array($sql);
		 			if($info==false){//如果查询结果为空
		   				echo "本站暂无最新产品!";//输出字符串
		  			}else{ 
		    			do{
				 ?>
                    <div class="product-grid col-lg-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="product-thumb transition">
                            <div class="actions">
                                <div class="image"><a href="goodsDetail.php?id=<?php echo $info['id'];?> " >
								<img src="<?php echo $info['tupian'];?>" alt="Heroes Proved " class="img-responsive"></a>
								</div>
                                <div class="button-group">
                                    <div class="cart">
                                        <button class="btn btn-primary btn-primary" type="button" data-toggle="tooltip"
                                                onclick='javascript:window.location.href="cart_add.php?goodsID=<?php echo $info['id'];?>&num=1"; '
                                                style="display: none; width: 33.3333%;" data-original-title="addin cart"><i
                                                class="fa fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="name" style="height:60px"><a
                                        href="goodsDetail.php?id=<?php echo $info['id'];?>">
                                   <span style="color:#0885B1">Item：</span>  <?php echo $info['mingcheng'];?> </a></div>
                                <div class="name" style="margin-top:10px">
                                  <span style="color:#0885B1">：</span><?php echo $info['typename'];?> </div>

                                <p class="price">
                                   Price：<?php echo $info['huiyuanjia'];?> $
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
							}while($info=mysqli_fetch_array($sql));
                    	}
                    ?>
          

                 </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

</nav>
<!-- //MASS TOP -->


<div id="t3-mainbody" class="container t3-mainbody has-sidebar-left has-col-md-3">
<div class="row">

<!-- MAIN CONTENT -->
					<div id="t3-content"
						class="t3-content col-xs-12 col-sm-12 col-md-9 col-md-push-3">
						<div class="content-mass-top  hidden-sm hidden-xs">
							<div class="t3-module module dark " id="Mod125">
								<div class="module-inner">
									<h3 class="module-title ">
										<span>Recent Activity</span>
									</h3>
									<div class="module-ct">
										<img src="images/event.jpg" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //MAIN CONTENT -->

<!-- SIDEBAR LEFT -->
<div class="t3-sidebar t3-sidebar-left col-xs-12 col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9  hidden-sm hidden-xs">


    <div class="t3-module module " id="Mod157">
        <div class="module-inner">
        <h3 class="module-title ">
        <span>Hot Deal</span>
       
        </h3>

            <div class="module-ct">
                <div class="mijoshop">
                    <div class="container_oc">
											<div class="box_oc">
		<?php
	     	$sql=mysqli_query($conn,"select * from tb_shangpin order by cishu desc limit 0,3"); //执行查询操作
		 	$info=mysqli_fetch_array($sql);//将查询结果返回到数组中
		 	if($info==false){//如果查询结果为空
		   		echo "本站暂无热门产品!";//输出字符串
		  	}else{ 
		    	do{ 
	   ?>
												<div class="box-product product-grid product-hieight-min">
													<div>
														<div class="image">
															<a href="goodsDetail.php?id=<?php echo $info['id'];?>"><img src="<?php echo $info['tupian'];?>"
																	width="80px" >
															</a>
														</div>
														<div class="name">
															<a
																href="goodsDetail.php?id=<?php echo $info['id'];?>">
																<?php echo $info['mingcheng'];?> </a>
														</div>
														
														<div class="rating">
															<span class="fa fa-stack"><i
																class="fa fa-star fa-stack-2x"></i><i
																class="fa fa-star-o fa-stack-2x"></i>
															</span>
															<span class="fa fa-stack"><i
																class="fa fa-star fa-stack-2x"></i><i
																class="fa fa-star-o fa-stack-2x"></i>
															</span>
															<span class="fa fa-stack"><i
																class="fa fa-star fa-stack-2x"></i><i
																class="fa fa-star-o fa-stack-2x"></i>
															</span>
															<span class="fa fa-stack"><i
																class="fa fa-star fa-stack-2x"></i><i
																class="fa fa-star-o fa-stack-2x"></i>
															</span>
															<span class="fa fa-stack"><i
																class="fa fa-star fa-stack-2x"></i><i
																class="fa fa-star-o fa-stack-2x"></i>
															</span>
														</div>
														
														<div class="price">
															<span class="price-new">Price<?php echo $info['huiyuanjia'];?>$</span>
														</div>

													</div>
												</div>
		<?php
	    		}while($info=mysqli_fetch_array($sql));//将查询结果循环返回到数组中
			}
		?>
											</div>
										</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //SIDEBAR LEFT -->
</div>
</div>
<!-- FOOTER -->
<?php
					include("footer.php");//包含搜索页面
				?>

</div>

</body>
</html>