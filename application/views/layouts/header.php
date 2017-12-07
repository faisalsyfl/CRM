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
                        <h1><a href="index.html">v<span>Store</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="" data-toggle="modal" data-target="#register"><i style="margin-left:0px;" class="fa fa-user log"></i><span class="cart-amunt">REGISTER</span></a>
                    </div>
                    <div class="shopping-item">
                       <a href="" data-toggle="modal" data-target=".bs-example-modal-sm"><i style="margin-left:0px;" class="fa fa-sign-in log"></i><span class="cart-amunt">LOGIN</span></a>
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
                        <li <?php if($active == "Home"){echo "class=\"active\"";} ?> ><a href="<?php echo site_url('/'); ?>">Home</a></li>
                        <li <?php if($active == "Shop"){echo "class=\"active\"";} ?>><a href="<?php echo site_url('Shop/'); ?>">Shop</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <!-- Modal Here -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('Users/loggingIn'); ?>
                <label>Email/Username</label><br>
                <input type="text" class="form-control" name="username" required=""></input>
                <label>Password</label><br>
                <input type="password" class="form-control" required="" name="password" ></input>
                <br>
                <a href="#" title=""><center>forgot your password?</center></a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary submit-but" Value="Login">
            </div>
                </form>
        </div>
      </div>
    </div><!-- End Modal -->

        <!-- Modal Here -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="register">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Register</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('Users/register'); ?>
                <label>Email/Username</label><br>
                <input type="text" class="form-control" name="username" required=""></input>
                <label>First Name</label><br>
                <input type="text" class="form-control" name="first" required=""></input>
                <label>Last Name</label><br>
                <input type="text" class="form-control" name="last" required=""></input>
                <label>Birthday</label><br>
                <input type="date" class="form-control" name="birthday" required=""></input>
                <label>Password</label><br>
                <input type="password" class="form-control" required="" name="password" ></input>
                <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary submit-but" Value="Login">
            </div>
                </form>
        </div>
      </div>
    </div><!-- End Modal -->
