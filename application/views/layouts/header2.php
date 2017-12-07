<?php 
    if(!isset($_SESSION['loggedin'])){
        redirect(site_url('/'));
    }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vStore - Customers are our priority</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/timeline.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flipclock.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="<?php echo site_url('Setting/'); ?>"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="<?php echo site_url('Users/cart'); ?>"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                            <li><a href="<?php echo site_url('Users/checkout'); ?>"><i class="fa fa-tag"></i> Checkout</a></li>
                            <li><a href="<?php echo site_url('Users/tracking'); ?>"><i class="fa fa-truck"></i> Tracking Order</a></li>

                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_SESSION['first']; ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('Setting/'); ?>">My Account</a></li>
                                    <li><a href="<?php echo site_url('Users/loggingOut'); ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.html">v<span>Store</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                       <a href="<?php echo site_url('Users/cart'); ?>">Cart - <span class="cart-amunt"><?php echo "Rp ".number_format($pay,0,",","."); ?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $count; ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if($active == "Home"){echo "class=\"active\"";} ?>><a href="<?php echo site_url('Users/'); ?>">Home</a></li>
<!--                         <li <?php if($active == "Shop"){echo "class=\"active\"";} ?>><a href="<?php echo site_url('Users/shop'); ?>">Shop</a></li> -->
                    <li class="dropdown"> 
                    <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Category <span class="caret"></span> </a> 
                    <ul class="dropdown-menu" aria-labelledby="drop1"> 
                        <li class="dropli"><a href="<?php echo site_url('Shop/category/1'); ?>">Tablets & Gadgets</a></li> 
                        <li class="dropli"><a href="<?php echo site_url('Shop/category/2'); ?>">Camera & Handycam</a></li> 
                        <li class="dropli"><a href="<?php echo site_url('Shop/category/3'); ?>">Home Electronics</a></li> 
                    </ul> 
                    </li>
                        <li <?php if($active == "Dashboard"){echo "class=\"active\"";} ?>><a href="<?php echo site_url('Contact/'); ?>">Dashboard</a></li>
                    </ul>

                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->

   <!-- Coupon Modal -->
   <!-- Modal Here -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="coupon">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Today's Coupon</h4>
            </div>
            <div class="modal-body">
                <div class="mid-body">
                    <p>FREE COUPON!</p>
                </div>
                <div class="code" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                    <code ><?php echo $free; ?></code> 
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4 clock-mess">
                        Return next :
                    </div>
                    <div class="col-md-8">
                        <div class="clock" style=""></div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <span class="footer-text">Check Your Dashboard</span><a href="<?php echo site_url('Contact/'); ?>" title=""><i class="fa fa-arrow-right fa-3x"></i></a>
            </div>
        </div>
      </div>
    </div><!-- End Modal -->

    <!-- Coupon Modal -->
   <!-- Modal Here -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="bonus">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Vortex Point Coupon</h4>
            </div>
            <div class="modal-body">
                <div class="mid-body">
                    <p>FREE COUPON!</p>
                </div>
                <div class="code" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                    <code ><?php echo $bonuz; ?></code> 
                </div>
                <br>
            </div>
            <div class="modal-footer">
                <span class="footer-text">Check Your Dashboard</span><a href="<?php echo site_url('Contact/'); ?>" title=""><i class="fa fa-arrow-right fa-3x"></i></a>
            </div>
        </div>
      </div>
    </div><!-- End Modal -->