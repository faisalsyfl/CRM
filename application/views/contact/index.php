    <div class="row">
        
        <div class="col-md-12 col-xs-8 product-big-title-area">
            <div class="product-bit-title text-center">
                <h2>Dashboard <?php echo $acc->first; ?></h2>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-areax">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-4" style="">
                    <div class="profile green">
                        <div class="header">
                            <center>
                                <img src="<?php echo base_url('assets/img/blank-avatar.png'); ?>" alt="failed" class="img-responsive img-circle" style="max-height: 200px; padding:10px;">
                            </center>
                        </div>
                        <div class="profile-star">
                            <?php for($x=0;$x<$acc->stars;$x++){echo "<i title=\"Buy Every 10 items in a week, and get stars!\" class=\"fa fa-star fa-lg\"></i>";} for($x=0;$x<5-$acc->stars;$x++){echo "<i title=\"Buy Every 10 items in a week, and get stars!\" class=\"fa fa-star-o fa-lg\"></i>";} ?>
                        </div>
                        <div class="profile-content">
                            <div class="profile-container">
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

                    <div class="coupon green" style="margin-top:15px;">
                        <div class="coupon-header-container ">
                            <p>Vortex Coupon</p>
                            <hr>
                        </div>
                        <div class="coupon-content">
                            <ul>
                                <?php 
                                    foreach($coupon as $cpns){
                                 ?>
                                <li><?php echo $cpns->code." - Rp ".number_format($cpns->cash,0,",","."); ?></li>
                                 <?php 
                                    }
                                  ?>
                            </ul>
                        </div>
                    </div>

                    <div class="coupon green" style="margin-top:15px;">
                        <div class="coupon-header-container ">
                            <p>Vortex Point</p>
                            <hr>
                        </div>
                        <div class="coupon-content">
                            <div id="chartdiv" style="width: 100%; height:200px;"></div>
                        </div>
                    </div>

                </div>
               <div class="col-md-8 col-xs-8">
                    <div class="textproblem">
                        <form action="<?php echo site_url('Contact/post'); ?>" method="post" accept-charset="utf-8">
                            <textarea name="content" style="resize:none;" rows="3" class="form-control" required=""placeholder="Any problem? Post here and admin will help you :)" <?php if($_SESSION['username'] == "admin"){echo "disabled";} ?>></textarea>
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="category" class="form-control select-control" required="" >
                                        <option value="dismiss">--Choose Category--</option>
                                        <option value="warning">Need ASAP</option>
                                        <option value="primary">Ask Something</option>
                                        <option value="danger">Complaining</option>
                                        <option value="success">Good Serve</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-md-offset-6">
                                    <?php if($_SESSION['username'] != "admin"){

                                    ?>
                                    <input type="submit" name="" value="Post" class="form-control" style="padding:7px;">              
                                    <?php 
                                        } 
                                     ?>
                                </div>
                            </div>
                        </form> 
                    </div>
                    <div class="panel panel-primary" style="border-color: white;">
                        <div class="panel-body" style="">
                            <ul class="timeline">
                                <?php 
                                    foreach($posts as $row){
                                 ?>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge <?php echo $row->title; ?>">
                                        <?php 
                                            if($row->title == "success"){
                                                echo "<i class=\"fa fa-thumbs-o-up\"></i>";
                                            }else if($row->title == "warning"){
                                                echo "<i class=\"fa fa-warning\"></i>";
                                            }else if($row->title == "primary"){
                                                echo "<i class=\"fa fa-question\"></i>";
                                            }else if($row->title == "danger"){
                                                echo "<i class=\"fa fa-thumbs-o-down\"></i>";
                                            }else{
                                                echo "<i class=\"fa fa-question\"></i>";
                                            }
                                         ?>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
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
                                        </div>
                                        <div class="timeline-body">
                                            <?php echo $row->isi; ?>
                                        </div>
                                        <div class="pull-right">
                                            <?php if($_SESSION['username'] == "admin"){
                                            ?>
                                            <a href="" data-toggle="modal" data-target="#replyPost" data-pid="<?php echo $row->id; ?>"title="">Reply&nbsp;<i class="fa fa-reply"></i></a>
                                            <?php 
                                                }else{

                                             ?>
                                            <a href="<?php echo site_url('Contact/deletePost/'.$row->id); ?>" title="">Delete&nbsp;<i class="fa fa-trash"></i></a>
                                             <?php 
                                                } 
                                              ?>
                                        </div>
                                    </div>
                                </li>
                                 <?php 
                                    if($row->replied == 1){
                                        foreach($rep as $replies){   
                                            if($replies->post_id == $row->id){
                                 ?>
                                        <li>
                                            <div class="timeline-panel admin-post">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title"><i class="fa fa-user"></i>&nbsp;Admin</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p class="re">Re: <?php echo $row->isi; ?></p>
                                                    <p><?php echo $replies->content; ?></p>
                                                </div>
                                            </div>
                                        </li>
                                 <?php 
                                            }
                                        }
                                    }
                                  ?>

                               <?php 
                                    }
                                ?>
                         <!--        <li>
                                    <div class="timeline-panel admin-post">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"><i class="fa fa-user"></i>&nbsp;Admin</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Mohon maaf atas ketidaknyamanan nya. Akan segera kami usahakan :)</p>
                                        </div>
                                    </div>
                                </li>
 -->
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Here -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="replyPost">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Post Reply</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('Admin/replyPost'); ?>
                <input type="hidden" name="pid" value="">
                <label>From</label><br>
                <i class="fa fa-user fa-lg"></i> <b>Admin</b><br><br>
                <label>Message</label><br>
                <textarea name="message" class="form-control" rows="4"></textarea>
                <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary submit-but" Value="Post">
            </div>
                <input type="hidden" name="uid" value="<?php echo $acc->id; ?>">
                </form>
        </div>
      </div>
    </div><!-- End Modal -->

