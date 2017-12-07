        <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Tracking Order</h2>
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
                    <div class="box box-info">
                        <div class="box-header with-border">
                          <h3 class="box-title" style="color:#fff;">Tracking Orders</h3>

                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <div class="table-responsive">
                            <table class="table no-margin">
                              <thead>
                              <tr>
                                <th>Order ID</th>
                                <th>Item</th>
                                <th>Status</th>
                                <th>Progress</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $i=0;foreach($orders as $row){ ?>
                              <tr>
                                <td><a href="pages/examples/invoice.html">OR<?php echo $ido[$i]['id']; ?></a></td>
                                <td><?php echo $row->name; ?></td>
                                <?php 
                                    if($row->status == 1){
                                        echo "<td><span class=\"label label-warning\">Pending</span></td>";
                                    }else if($row->status == 2){
                                        echo "<td><span class=\"label label-info\">Processing</span></td>";
                                    }else if($row->status == 3){
                                        echo "<td><span class=\"label label-success\">Shipped</span></td>";
                                    }else if($row->status == 4){
                                        echo "<td><span class=\"label label-danger\">Delivered</span></td>";
                                    }
                                ?>
                                <td>
                                  <div class="progress-group">
                                    <span class="progress-number"><b><?php echo ($row->status*25);?></b>/100%</span>

                                    <div class="progress sm">
                                      <div class="progress-bar progress-bar-<?php if($ido[$i]['id']%2 == 0)echo "red"; else echo "aqua"; ?>" style="width: <?php echo ($row->status*25);?>%"></div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <?php $i++;} ?>
                              </tbody>
                            </table>
                          </div>
                          <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                          <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                          <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                        </div>
                        <!-- /.box-footer -->
                      </div>
                      <!-- /.box -->                  
                </div>
            </div>
        </div>
    </div>