    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>My Account</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-4">
                    <div class="list-group">
                        <a href="<?php echo site_url('Setting/'); ?>" class="list-group-item active green" style="background-color:#07575B; border-color: #07575B; ">
                        My Account
                        </a>
                        <a href="<?php echo site_url('Setting/address'); ?>" class="list-group-item">Address</a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 col-md-offset-1">
                    <div class="box-header" style="color:#fff;">
                        My Account
                    </div>
                    <div class="box-container">
                        <table border=0>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><?php echo $acc->first." ".$acc->last; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $acc->email; ?></td>
                            </tr>
                            <tr>
                                <td>Birthday</td>
                                <td>:</td>
                                <td><?php echo $acc->birthday; ?></td>
                            </tr>
                            <tr>
                                <td>Password&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;&nbsp;</td>
                                <td>*******</td>
                            </tr>
                            <tr>
                                <td>Last Login&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;&nbsp;</td>
                                <td><?php echo $acc->lastlogin; ?></td>
                            </tr>
                        </table>                             
                    </div>
                </div>
            </div>
        </div>
    </div>
