<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr"
      class="com_content view-featured itemid-593 j35 mm-hover no-touch" slick-uniqueid="3">
<head>
    <meta http-equiv="content-type" content="text/html; charset=gbk">
    <title>Login-MagicBook</title>
    <link rel="stylesheet" href="css/t3-01.css" type="text/css">
    <link rel="stylesheet" href="css/t3-02.css" type="text/css">
    <link rel="stylesheet" href="css/t3-03.css" type="text/css">
    <link rel="stylesheet" href="css/t3-04.css" type="text/css">
</head>

<body>
<!-- Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->
<div class="t3-wrapper">
<!-- // Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->
<div id="toolbar">
    <div class="container">
        <div class="row">
            <div class="toolbar-ct col-xs-12 col-md-6  hidden-sm hidden-xs">
                <div class="toolbar-ct-1">
                    <div class="t3-module module " id="Mod87">
                        <div class="module-inner">
                            <div class="module-ct">

                                <div class="custom">
                                    <p><i class="fa fa-phone"></i> <span>tel 0415877655</span></p></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="toolbar-ct toolbar-ct-right col-xs-12 col-md-6">
                <div class="toolbar-ct-3 ">
                    <div class="btn-group active">
                        <button onclick='javascript:window.location.href="register.php";'  type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
					include("conn/conn.php");
					include("common-navi.php");
				?>
            </nav>
            <!-- //MAIN NAVIGATION -->
        </div>
    </div>
</header>
<!-- //HEADER -->

<div id="t3-mainbody" class="container t3-mainbody">
    <div class="row">
        <!-- MAIN CONTENT -->
        <div id="t3-content" class="t3-content col-xs-12">
            <div class="login-wrap" style="margin-bottom: 60px;margin-top:50px" >
                <div class="login " style="max-width: 400px;margin: 0 auto;border: 1px solid #eeeeee;">
                    <div class="page-header" >
                        <h1 style="color:#0885B1">
                            Login  		</h1>
                    </div>
                    <form action="login_check.php" method="post" class="form-horizontal">

									<fieldset>
										<div class="form-group">
											<div class="col-sm-4 control-label">
												<label id="username-lbl" for="username" class="required">
													Account
													<span class="star">&nbsp;*</span>
												</label>
											</div>
											<div class="col-sm-8">
												<input type="text" name="username" id="username" value=""
													class="validate-username required" size="25" required=""
													aria-required="true" autofocus="">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-4 control-label">
												<label id="password-lbl" for="password" class="required">
													Password
													<span class="star">&nbsp;*</span>
												</label>
											</div>
											<div class="col-sm-8">
												<input type="password" name="userpwd" id="userpwd"
													value="" class="validate-password required" size="25"
													maxlength="99" required="" aria-required="true">
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-offset-4 col-sm-8">
												<button type="submit" class="btn btn-primary">
													login
												</button>
											</div>
										</div>
										
							     </fieldset>
					</form>
                </div>

            </div>
        </div>
        <!-- //MAIN CONTENT -->

    </div>
</div>


<!-- FOOTER -->
<?php
                    include("footer.php");
                ?>
<!-- //FOOTER -->
<!-- Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->
</div>
<!-- // Need these wrapper for off-canvas menu. Remove if you don't use of-canvas -->
</body>
</html>