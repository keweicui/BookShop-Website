<?php
header ( "Content-type: text/html; charset=gb2312" ); 
session_start();//启动session
include("conn/conn.php");//包含数据库连接文件
 

$type=$_GET["type"];//获取商品类别id的值


$sql = mysqli_query($conn,"select * from tb_type where id=$type");//执行查询语句
$info = mysqli_fetch_array($sql);//将查询结果返回到数组中
$typeName = $info['typename'];//获取商品类别名称
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr"
      class="com_content view-featured itemid-593 j35 mm-hover no-touch" slick-uniqueid="3">
<head>
    <meta http-equiv="content-type" content="text/html; charset=gbk">
    <title>Booklist-MagicBook</title>
    <link rel="stylesheet" href="css/t3-01.css" type="text/css">
    <link rel="stylesheet" href="css/t3-02.css" type="text/css">
    <link rel="stylesheet" href="css/t3-03.css" type="text/css">
    <link rel="stylesheet" href="css/t3-04.css" type="text/css">


</head>

<body>
<!-- Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->
<div class="t3-wrapper">
<!-- // Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->

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
                        <img class="logo-img" src="images/logo.png" alt="">
                    </a>
                    <small class="site-slogan hidden-xs"></small>
                </div>
            </div>
            <!-- //LOGO -->

            <!-- MAIN NAVIGATION -->
            <nav id="t3-mainnav" class="col-xs-12 col-md-6 t3-mainnav navbar navbar-default">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                </div>
                
				<?php
					include("common-navi.php");//包含导航页面
				?>
            </nav>
            <!-- //MAIN NAVIGATION -->


            <!-- OFF-CANVAS SIDEBAR -->

            <!-- //OFF-CANVAS SIDEBAR -->


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
<div id="t3-content" class="t3-content col-xs-12 col-sm-12 col-md-9 col-md-push-3">

<div id="system-message-container" style="display: none;">
</div>

<div id="mijoshop" class="mijoshop common-home">
<div class="container_oc">
<ul class="breadcrumb">
</ul>
<div class="row">
<div id="content_oc" class="col-sm-12">
<div class="box_oc">
<div class="box-heading">
    <h1 class="mijoshop_heading_h1"><?php echo $typeName;?></h1>
</div>
<div class="box-content">

<hr>

<div class="row">

<?php
	$sql = mysqli_query($conn,"select * from tb_shangpin where typeid=$type");
	$count = mysqli_num_rows($sql);
	$pagesize=8;
	$maxPage = ceil($count/$pagesize);
	if (!isset($_GET['page'])) {
		$page = 1;
	} else {
		if($_GET['page']<0){
			$page = 1;
		}elseif($_GET['page'] > $maxPage) {
			$page = $maxPage;
		}else{
			$page = $_GET['page'];
		}
	}
	$sql = mysqli_query($conn,"select t1.id,t1.tupian,t1.mingcheng,t1.huiyuanjia,t2.typename from tb_shangpin t1,tb_type t2 where t1.typeid=t2.id and t1.typeid=$type order by addtime desc limit ".($page-1)*$pagesize.",".$pagesize);
	while ($info = mysqli_fetch_array($sql)) {
?>

													<div
														class="product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<div class="product-thumb">
															<div class="actions">
																<div class="image">
																	<a style="width:85%" href="goodsDetail.php?id=<?php echo $info['id'];?> "><img src="<?php echo $info['tupian'];?>"
																			> </a>
																</div>
																<div class="button-group btn-grid">
																	<div class="cart">
																		<button class="btn btn-primary btn-primary"
																			type="button" data-toggle="tooltip" 
																			onclick='javascript:window.location.href="cart_add.php?goodsID=<?php echo $info['id'];?>&num=1"; '
																			style="display: none; width: 33.3333%;"
																			data-original-title="addin cart">
																			<i class="fa fa-shopping-cart"></i>
																		</button>
																	</div>
																</div>
															</div>
															<div>
																<div class="caption">
																	<div class="name">
																		<a
																			href="goodsDetail.php?type=<?php echo $info['id'];?>" style="width:85%">
																			 <span style="color:#0885B1">Name：</span><?php echo $info['mingcheng'];?></a>
																	</div>															

																	<p class="price">
																		<span class="price-new">Category：</span>
																		<span><?php echo $info['typename'];?></span>
																		<span class="price-tax">Price：<?php echo $info['huiyuanjia'];?>$</span>
																	</p>
																</div>

															</div>
														</div>
													</div>
<?php
	}
?>



												</div>
<div class="row pagination">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" align="right">Current Page：[<?php echo $page;?>/<?php echo $maxPage;?>]&nbsp;
	<?php if($page>1){?>
	<a href="goodsList.php?page=1&type=<?php echo $type;?>">First Page</a>　<a href="goodsList.php?page=<?php echo $page-1;?>&type=<?php echo $type;?>">Back</a>
	<?php
	}
	if($page<$maxPage){
	?>
	　<a href="goodsList.php?page=<?php echo $page+1;?>&type=<?php echo $type;?>">Next</a>　<a href="goodsList.php?page=<?php echo $maxPage;?>&type=<?php echo $type;?>">Last Page&nbsp;</a>
	<?php }
	?>
	</td>
  </tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- //MAIN CONTENT -->

<!-- SIDEBAR LEFT -->
<div class="t3-sidebar t3-sidebar-left col-xs-12 col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9  hidden-sm hidden-xs">

    <div class="t3-module module " id="Mod157">
        <div class="module-inner"><h3 class="module-title "><span>Hot Deal</span></h3>

            <div class="module-ct">
                <div class="mijoshop">
                    <div class="container_oc">
                        <div class="box_oc">
                            <div>
                                <div class="box-product product-grid">
                                    
						<?php
							$hotsql=mysqli_query($conn,"select * from tb_shangpin order by cishu desc limit 0,7");//执行查询语句
							while ($info = mysqli_fetch_array($hotsql)) {//将查询结果循环返回到数组中
						?>
                                    <div>
                                        <div class="image"><a href="goodsDetail.php?id=<?php echo $info['id'];?>"><img src="<?php echo $info['tupian'];?>" width="80px" ></a></div>
                                        <div class="name"><a href="goodsDetail.php?id=<?php echo $info['id'];?>">
																<?php echo $info['mingcheng'];?> </a></div>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                           <?php echo $info['huiyuanjia'];?> $
                                        </div>
                                        
                                    </div>
                                    	<?php
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
<!-- //SIDEBAR LEFT -->

</div>
</div>


<!-- FOOTER -->
<?php
    include("footer.php");//包含搜索页面
?>
<!-- //FOOTER -->
<!-- Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->
</div>
<!-- // Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->
</body>
</html>