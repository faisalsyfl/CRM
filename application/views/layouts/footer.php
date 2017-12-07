    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>v<span><b>Store</b></span></h2>
                        <p>Vortex Store is one of biggest store in the world!!</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile Phone</a></li>
                            <li><a href="#">Home accesseries</a></li>
                            <li><a href="#">LED TV</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">Gadets</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2016 wShop. All Rights Reserved. Coded with <i class="fa fa-heart"></i> by <a href="#" target="_blank">SQRT Development</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.sticky.js'); ?>"></script>
    
    <!-- jQuery easing -->
    <script src="<?php echo base_url('assets/js/jquery.easing.1.3.min.js'); ?>"></script>
    
    <!-- Main Script -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/amcharts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/pie.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/flipclock.min.js'); ?>"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

    <script>
        var chart = AmCharts.makeChart( "chartdiv", {
          "type": "pie",
          "theme": "light",
          "dataProvider": [ {
            "title": "Current Point",
            "value": <?php echo $point; ?>
          }, {
            "title": "Maximal Point",
            "value": <?php echo $upoint; ?>
          } ],
          "titleField": "title",
          "valueField": "value",
          "labelRadius": 5,

          "radius": "42%",
          "innerRadius": "60%",
          "labelText": "[[Text]]",
          "export": {
            "enabled": true
          }
        } );
    </script>
   	<script>
   		// initialise on document ready
			jQuery(document).ready(function ($) {
			    'use strict';

			    // CENTERED MODALS
			    // phase one - store every dialog's height
			    $('.modal').each(function () {
			        var t = $(this),
			            d = t.find('.modal-dialog'),
			            fadeClass = (t.is('.fade') ? 'fade' : '');
			        // render dialog
			        t.removeClass('fade')
			            .addClass('invisible')
			            .css('display', 'block');
			        // read and store dialog height
			        d.data('height', d.height());
			        // hide dialog again
			        t.css('display', '')
			            .removeClass('invisible')
			            .addClass(fadeClass);
			    });
			    // phase two - set margin-top on every dialog show
			    $('.modal').on('show.bs.modal', function () {
			        var t = $(this),
			            d = t.find('.modal-dialog'),
			            dh = d.data('height'),
			            w = $(window).width(),
			            h = $(window).height();
			        // if it is desktop & dialog is lower than viewport
			        // (set your own values)
			        if (w > 380 && (dh + 60) < h) {
			            d.css('margin-top', Math.round(0.96 * (h - dh) / 2));
			        } else {
			            d.css('margin-top', '');
			        }
			    });

			});
   	</script>
    <script>
        $('#replyPost').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('pid') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-body input').val(recipient)
        })
    </script>
    <?php 
        if(isset($free)){
     ?>
    <script type="text/javascript">
        $(window).load(function(){
            $('#coupon').modal('show');
        });
    </script>
     <?php 
        }
      ?>
    <?php 
        if(isset($bonuz) && $claim){
     ?>
    <script type="text/javascript">
        $(window).load(function(){
            $('#bonus').modal('show');
        });
    </script>
     <?php 
        }
      ?>
    <script type="text/javascript">
        var clock;
        
        $(document).ready(function() {
            
            var now = new Date();
            var hoursleft = 23-now.getHours();
            var minutesleft = 59-now.getMinutes();
            var secondsleft = 59-now.getSeconds();
            
            secondsleft = (minutesleft*60) + (hoursleft*3600);
            console.log(secondsleft)
            
            clock = $('.clock').FlipClock(secondsleft,{
                clockFace: 'HourlyCounter',
                countdown: true
            });
        });
    </script>
  </body>
</html>

