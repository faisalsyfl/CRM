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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/timeline.css'); ?>">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.html"><span>Admin</span> - v<span>Store</span></a></h1>
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
                        <li <?php if($active == "Home"){echo "class=\"active\"";} ?>><a href="<?php echo site_url('Admin/'); ?>">Home</a></li>
                        <li <?php if($active == "Shop"){echo "class=\"active\"";} ?>><a href="#">Shop</a></li>
                        <li <?php if($active == "Users"){echo "class=\"active\"";} ?>><a href="<?php echo site_url('Admin/member'); ?>">Users</a></li>
                        
                        <!-- <li><a href="<?php echo site_url('Contact/'); ?>">Dashboard</a></li> -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="top-label label label-danger"><?php echo $cunrep; ?></span><i class="fa fa-envelope fa-lg"></i>
                            </a>
                            <!-- dropdown-messages -->
                            <ul class="dropdown-menu dropdown-messages">
                                <?php  
                                    foreach($unrep as $row){

                                ?>
                                <li>
                                    <a href="<?php echo site_url('Admin/visit/'.$row->user_id); ?>">
                                        <div>
                                            <span class="pull-right text-muted">
                                                <em>
                                             <?php 
                                                if($row->title == "success"){
                                                    echo "<h4 class=\"timeline-title\">Good Serve</h4>";
                                                }else if($row->title == "warning"){
                                                    echo "<h4 class=\"timeline-title\">Important Question</h4>";
                                                }else if($row->title == "primary"){
                                                    echo "<h4 class=\"timeline-title\">Some Question</h4>";
                                                }else if($row->title == "danger"){
                                                    echo "<h4 class=\"timeline-title\">Complaining</h4>";
                                                }else{
                                                    echo "<h4 class=\"timeline-title\">Missing</h4>";
                                                }
                                             ?>
                                                </em>
                                            </span>
                                        </div>
                                        <div><?php echo $row->isi; ?></div>
                                    </a>
                                </li>
                                <?php 
                                    }
                                 ?>
                            </ul>
                            <!-- end dropdown-messages -->
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-lg"></i>
                            </a>
                            <!-- dropdown user-->
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i>My Account</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="<?php echo site_url('Users/loggingOut'); ?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                                </li>
                            </ul>
                            <!-- end dropdown-user -->
                        </li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->

