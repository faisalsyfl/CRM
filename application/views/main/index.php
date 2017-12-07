
    <div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Fast Delivery</h2>
                                                <p>We will Transfer your order as fast as we can</p>
                                                <p>Fast Shipping Yeehaa!.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Customer Number 1</h2>
                                                <p>Everything is about customer, Customer is number one!. Talk to us if you need something and give us good rate~</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Collaborated with JNE</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eius?</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptates necessitatibus dicta recusandae quae amet nobis sapiente explicabo voluptatibus rerum nihil quas saepe, tempore error odio quam obcaecati suscipit sequi.</p>
                                                <a href="" class="readmore">Learn more</a>
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
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-bolt"></i>
                        <p>Fast Response</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-heart"></i>
                        <p>Customer Priority</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            <?php 
                                foreach($enam as $row){

                             ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="<?php echo base_url('assets/img/'.$row->path); ?>" alt="" style="height: 275px;">
                                    <div class="product-hover">
                                        <a href="<?php echo site_url('Users/addToCart/'.$row->id); ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="#" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html"><?php echo $row->name; ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo "Rp ".number_format($row->price,0,",","."); ?></ins>
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
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Brands</h2>
                        <div class="brand-list">
                            <img src="<?php echo base_url('assets/img/services_logo__1.jpg');?>" alt="">                         
                            <img src="<?php echo base_url('assets/img/services_logo__2.jpg');?>" alt="">                         
                            <img src="<?php echo base_url('assets/img/services_logo__3.jpg');?>" alt="">                         
                            <img src="<?php echo base_url('assets/img/services_logo__4.jpg');?>" alt="">                         
                            <img src="<?php echo base_url('assets/img/services_logo__1.jpg');?>" alt="">                         
                            <img src="<?php echo base_url('assets/img/services_logo__2.jpg');?>" alt="">                         
                            <img src="<?php echo base_url('assets/img/services_logo__3.jpg');?>" alt="">                         
                            <img src="<?php echo base_url('assets/img/services_logo__4.jpg');?>" alt="">                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <?php 
                            foreach($tiga as $row){
                         ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="<?php echo base_url('assets/img/'.$row->path); ?>" alt="" class="product-thumb"></a>
                            <h2><a href="#"><?php echo $row->name; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo "Rp ".number_format($row->price,0,",","."); ?></ins>
                            </div>                            
                        </div>
                        <?php 
                            }
                         ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <?php 
                            foreach($tiga as $row){
                         ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="<?php echo base_url('assets/img/'.$row->path); ?>" alt="" class="product-thumb"></a>
                            <h2><a href="#"><?php echo $row->name; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo "Rp ".number_format($row->price,0,",","."); ?></ins>
                            </div>                            
                        </div>
                        <?php 
                            }
                         ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <?php 
                            foreach($tiga as $row){
                         ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="<?php echo base_url('assets/img/'.$row->path); ?>" alt="" class="product-thumb"></a>
                            <h2><a href="#"><?php echo $row->name; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo "Rp ".number_format($row->price,0,",","."); ?></ins>
                            </div>                            
                        </div>
                        <?php 
                            }
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->

 
 