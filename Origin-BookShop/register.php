<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr"
      class="com_content view-featured itemid-593 j35 mm-hover no-touch" slick-uniqueid="3">
<head>
    <meta http-equiv="content-type" content="text/html; charset=gbk">
    <title>Register-Magicbook</title>
    <link rel="stylesheet" href="css/t3-01.css" type="text/css">
    <link rel="stylesheet" href="css/t3-02.css" type="text/css">
    <link rel="stylesheet" href="css/t3-03.css" type="text/css">
    <link rel="stylesheet" href="css/t3-04.css" type="text/css">
   
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="YES">
    <!-- //META FOR IOS & HANDHELD -->

    <!-- Le HTML5 shim and media query for IE8 support -->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->

   
    <style>
        .com_users .page-header {
            border-color: #eeeeee
        }

        .com_users .login-wrap {
            margin-bottom: 60px
        }

        .com_users .login-wrap .login {
            max-width: 400px;
            margin: 0 auto;
            border: 1px solid #eeeeee
        }

        .com_users .login-wrap .login fieldset {
            padding-top: 20px
        }

        .com_users .login-wrap .page-header {
            padding: 20px
        }

        .com_users .login-wrap .page-header h1 {
            font-size: 15px;
            text-transform: none;
            color: #f0141e
        }

        .com_users .login-description {
            padding: 0 20px;
            margin-bottom: 20px
        }

        .com_users .other-links {
            padding: 20px;
            margin: 0;
            border-top: 1px solid #eeeeee
        }

        .com_users .other-links ul {
            margin: 0;
            padding: 0
        }

        .com_users .other-links ul li {
            list-style: none
        }

    </style>



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
                                    <p><i class="fa fa-phone"></i> <span>tel400-675-1066</span></p></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="toolbar-ct toolbar-ct-right col-xs-12 col-md-6">
                <div class="toolbar-ct-3 ">
                    <div class="btn-group active">
                        <button onclick='javascript:window.location.href="login.php";' style="padding-right: 10px" type="button" class="btn btn-default dropdown-toggle"
                                data-toggle="dropdown"
                                aria-expanded="false">
                            login
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
                        <img class="logo-img" src="images/logo.png" alt="ÉñÆæ²¼¿Ë">
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
					include("conn/conn.php");//°üº¬Êý¾Ý¿âÁ¬½ÓÎÄ¼þ
					include("common-navi.php");//°üº¬µ¼º½Ò³Ãæ
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
            <div id="system-message-container" style="display: none;">
            </div>

            <div class="registration col-sm-6 col-sm-offset-3">

                <form id="member-registration" action="register_deal.php" onSubmit="return regis();"
                      method="post" class="form-validate form-horizontal">
                    <fieldset>
                        <legend style="color:#0885B1;font-size: 31px">Register</legend>
                        <div class="form-group">
                            <div class="control-label">
                                <span class="spacer"><span class="before"></span><span class="text"><label
                                        id="jform_spacer-lbl" class="" ><strong class="red">*</strong>
                                    Must</label></span><span class="after"></span></span></div>

                        </div>
                        <div class="form-group">
                            <div class="control-label">
                                <label id="jform_name-lbl" for="jform_name" class="hasTooltip required" title=""
                                       data-original-title="">
                                    Account<span class="star">&nbsp;*</span></label>
                            </div>
                            <input type="text" name="username" id="username" value="" class="required" size="30"
                                   required="required" aria-required="true">
                        </div>
                        <div class="form-group">
                            <div class="control-label">
                                <label id="jform_username-lbl" for="jform_username" class="hasTooltip required" title=""
                                       data-original-title="">
                                    Name<span class="star">&nbsp;*</span></label>
                            </div>
                            <input type="text" name="truename" id="jform_username" value=""
                                   class="validate-username required" size="30" required="required"
                                   aria-required="true">
                        </div>
                        <div class="form-group">
                            <div class="control-label">
                                <label id="jform_password1-lbl" for="jform_password1" class="hasTooltip required"
                                       title=""
                                       data-original-title="">
                                    Password<span class="star">&nbsp;*</span></label>
                            </div>
                            <input type="password" name="pwd" id="pwd" value=""
                                   autocomplete="off" class="validate-password required" size="30" maxlength="99"
                                   required="required" aria-required="true">
                        </div>
                        <div class="form-group">
                            <div class="control-label">
                                <label id="jform_password2-lbl" for="jform_password2" class="hasTooltip required"
                                       title=""
                                       data-original-title="">
                                    Confirm Password<span class="star">&nbsp;*</span></label>
                            </div>
                            <input type="password" name="pwd2" id="pwd2" value=""
                                   autocomplete="off" class="validate-password required" size="30" maxlength="99"
                                   required="required" aria-required="true">
                        </div>
                        <div class="form-group">
                            <div class="control-label">
                                <label id="jform_email1-lbl" for="jform_email1" class="hasTooltip required" title=""
                                       data-original-title="">
                                    Contact Num</label>
                            </div>
                            <input type="text" name="tel" class="validate-email " id="tel"
                                   value="" size="30" autocomplete="email"  aria-required="true">
                        </div>
                        <div class="form-group">
                            <div class="control-label">
                                <label id="jform_email2-lbl" for="jform_email2" class="hasTooltip required" title=""
                                       data-original-title="">
                                    Email</label>
                            </div>
                            <input type="email" name="email" class="validate-email" id="jform_email2"
                                   value="" size="30"  aria-required="true">
                        </div>
                    </fieldset>
                    <div class="form-actions clearfix">
                        <button type="submit" class="btn btn-primary pull-left">Submit</button>
                   </div>
                </form>
            </div>

        </div>
        <!-- //MAIN CONTENT -->

    </div>
</div>


<!-- FOOTER -->
<?php
                    include("footer.php");//包含搜索页面
                ?>

</div>
</body>

</html>
