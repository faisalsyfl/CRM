        <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <?php 
                            foreach($products as $row){

                         ?>

                        <div class="thubmnail-recent">
                            <img src="<?php echo base_url('assets/img/'.$row->path); ?>" class="recent-thumb" alt="">
                            
                            <h2><a href=""><?php echo $row->name; ?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><?php $discount = $star/10; $harga = $row->price - ($discount * $row->price);echo "Rp ".number_format($harga,2,",",".");  ?></ins> <del><?php echo "Rp ".number_format($row->price,2,",","."); ?></del>
                            </div>                             
                        </div>
                        <?php 
                            }
                          ?>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="<?php echo site_url('Users/checkout'); ?>">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $total = 0;
                                            if(isset($cart)){
                                            $dc = $star/10;
                                                
                                            foreach($cart as $row){
                                                foreach($row as $secrow){
                                                    $total+=$secrow['price'] - ($dc * $secrow['price']);

                                         ?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="<?php echo site_url('Users/removeitem/'.$secrow['id']); ?>">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="<?php echo base_url('assets/img/'.$secrow['path']); ?>"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html"><?php echo $secrow['name']; ?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php $discount = $star/10; $harga = $secrow['price'] - ($discount * $secrow['price']);echo "Rp ".number_format($harga,2,",",".");  ?></span> 
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount"><?php $discount = $star/10; $harga = $secrow['price'] - ($discount * $secrow['price']);echo "Rp ".number_format($harga,2,",",".");  ?></span> 
                                            </td>
                                        </tr>
                                         <?php 
                                                }
                                            }
                                            }
                                          ?>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="coupon">
                                                    <label for="coupon_code">Coupon:</label>
                                                    <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code" <?php if(isset($coupon)){echo "disabled";} ?>>
                                                    <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                                </div>
                                                <input type="submit" value="Update Cart" name="update_cart" class="button">
                                                <input type="hidden" name="hidtotal" value="<?php if(isset($coupon)){$temp = $total-$coupon;}else{$temp = $total;} if(isset($temp))echo $temp;?>">
                                                <input type="submit" value="Proceed to Checkout/Pay" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">


                            <div class="cross-sells">
                                <h2>You may be interested in...</h2>
                                <ul class="products">
                                    <?php 
                                        foreach($productsb as $row){

                                     ?>
                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" style="height:150px;" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="<?php echo base_url('assets/img/'.$row->path); ?>">
                                            <h3><?php echo $row->name; ?></h3>
                                            <span class="price"><span class="amount"><?php echo "Rp ".number_format($row->price,0,",","."); ?></span></span>
                                        </a>
                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="#">Select options</a>
                                    </li>
                                     <?php 
                                        }
                                      ?>
                                </ul>
                            </div>


                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount"><?php echo "Rp ".number_format($total,0,",","."); ?></span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Coupon Registered</th>
                                            <td><?php if(isset($coupon)){echo "Rp ".number_format($coupon,0,",",".");}else{echo "None";} ?></td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount"><?php if(isset($coupon)){$total-=$coupon;echo "Rp ".number_format($total,0,",",".");}else{echo "Rp ".number_format($total,0,",",".");}?></span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>