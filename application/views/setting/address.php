    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Billing Address</h2>
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
                        <a href="<?php echo site_url('Setting/'); ?>" class="list-group-item">
                        My Account
                        </a>
                        <a href="<?php echo site_url('Setting/address'); ?>" class="list-group-item active green" style="background-color:#07575B; border-color: #07575B; ">Address</a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 col-md-offset-1">
                    <div class="box-header" style="color:#fff;">
                        Billing Address
                    </div>
                    <div class="box-container">
                        <table border=0 class="table">
                            <?php echo form_open('Setting/save'); ?>
                            <tr>
                                <td><input type="text" name="address" placeholder="Address" class="form-control" value="<?php if($billing != NULL)echo $billing->address; ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="city" placeholder="city" class="form-control" value="<?php if($billing != NULL)echo $billing->city; ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="postcode" placeholder="postcode" class="form-control" value="<?php if($billing != NULL)echo $billing->postcode; ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="phone" placeholder="phone" class="form-control" value="<?php if($billing != NULL)echo $billing->phone; ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="" value="Save"></td>
                            </tr>
                            <?php echo form_close(); ?>
                        </table>                             
                    </div>
                </div>
            </div>
        </div>
    </div>
