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
                            <td>No.</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Stars</td>
                            <td>Email Notif</td>
                            <td>Dashboard</td>
                            <td>Tracking Order</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i = 1;
                            foreach($member as $row){
                        ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row->first." ".$row->last; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php for($x=0;$x<$row->stars;$x++){echo "<i class=\"fa fa-star\"></i>";}?></td>
                            <td><?php if($row->notification == 1){echo "Yes";}else{echo "No";} ?></td>
                            <td><a href="<?php echo site_url('Admin/visit/'.$row->id); ?>" title="" class="label label-success">Visit Page</a></td>
                            <td><a href="<?php echo site_url('Admin/trackingstatus/'.$row->id); ?>" title="" class="label label-info">Tracking Order</a></td>
                        </tr>
                        <?php 
                            } 
                         ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
