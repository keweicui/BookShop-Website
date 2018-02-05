<?php
if(!isset($_SESSION['username'])){//如果用户未登录
?>
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
                        <button onclick='javascript:window.location.href="login.php"; ' style="padding-right: 10px" type="button" class="btn btn-default dropdown-toggle"
                                data-toggle="dropdown"
                                aria-expanded="false">login
                            	
                        </button>
                        <button onclick='javascript:window.location.href="register.php";'  type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            	Register
                        </button>
                    </div>
                </div>

                <div class="toolbar-ct-2 ">
                    <div class="t3-module module " id="Mod161">
                        <div class="module-inner">
                            <div class="module-ct">
                                <div class="mijoshop">
                                    <div class="container_oc">
                                        <div class="row">
                                            <div class="">
                                                <div id="cart" class="mini-cart">
                                                    <button onclick='javascript:window.location.href="cart_see.php";' class="shopping-cart">My Cart</button>
                                                    
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
</div>
<?php
}else{
?>
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
                        <button style="padding-right: 10px" type="button" class="btn btn-default dropdown-toggle"
                                data-toggle="dropdown"
                                aria-expanded="false">
                            Hello,<?php echo $_SESSION['username'];?>
                        </button>
                        <button onclick='javascript:window.location.href="modifyMember.php";' style="padding-right: 10px"  type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            Modify
                        </button>
                        <button onclick='javascript:window.location.href="logout.php";'  type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            Logout
                        </button>
                    </div>
                </div>

                <div class="toolbar-ct-2 ">
                    <div class="t3-module module " id="Mod161">
                        <div class="module-inner">
                            <div class="module-ct">
                                <div class="mijoshop">
                                    <div class="container_oc">
                                        <div class="row">
                                            <div class="">
                                                <div id="cart" class="mini-cart">
                                                    <button onclick='javascript:window.location.href="cart_see.php";' style="padding-right: 10px"  type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            My Cart
                        </button>
                         <button onclick='javascript:window.location.href="orderList.php";' style="padding-right: 10px"  type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            My Order
                        </button>
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
</div>
<?php
}
?>