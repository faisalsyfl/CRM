    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Vortex Member</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="container">
            <div class="row">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <td><b>Order ID</b></td>
                            <td><b>Product Name</b></td>
                            <td><b>Status</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i = 0;
                            foreach($order as $row){
                        ?>
                        <tr>
                            <td>OR<?php echo $ido[$i]['id']; ?></td>
                            <td><?php echo $row->name;?></td>
                            <td>
                                <a href="<?php echo site_url('Admin/change/1/'.$ido[$i]['id'].'/'.$row->uid);?>" title=""><span class="label label-warning <?php if($row->status == 1)echo "black";?>">Pending</span></a>
                                <a href="<?php echo site_url('Admin/change/2/'.$ido[$i]['id'].'/'.$row->uid);?>" title=""><span class="label label-info <?php if($row->status == 2)echo "black";?>">Processing</span></a>
                                <a href="<?php echo site_url('Admin/change/3/'.$ido[$i]['id'].'/'.$row->uid);?>" title=""><span class="label label-success <?php if($row->status == 3)echo "black";?>">Shipped</span></a>
                                <a href="<?php echo site_url('Admin/change/4/'.$ido[$i]['id'].'/'.$row->uid);?>" title=""><span class="label label-danger <?php if($row->status == 4)echo "black";?>">Delivered</span></a>
                            </td>
                        </tr>
                        <?php 
                            $i++;} 
                         ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
