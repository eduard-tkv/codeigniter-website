            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Contact Us</h2>
                                <span>Home / <a href="contact-us">Contact Us</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Feel free to send a message</h2>
                                <img src="<?php echo base_url(); ?>assets/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div id="contact-us">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">  
                                            <div class="message-form">
                                            <div id="returnMessage"></div>
                                                <!--<form action="#" method="post" class="send-message">-->
                                                <?php 
          $attributes = array("class" => "form-horizontal", "id" => "reg_form", "name" => "reg_form");
          echo form_open("send_email/index", $attributes);?>
                                                    <div class="row">
                                                    <div class="name col-md-4">
                                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" value="<?php echo set_value('name'); ?>" />
                                                        <span class="text-danger"><?php echo form_error('name'); ?></span>
                                                    </div>
                                                    <div class="email col-md-4">
                                                        <input class="form-control" id="email" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
                                                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                                                    </div>
                                                    <div class="subject col-md-4">
                                                        <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" value="<?php echo set_value('subject'); ?>" />
                                                        <span class="text-danger"><?php echo form_error('subject'); ?></span>
                                                    </div>
                                                    </div>
                                                    <div class="row">        
                                                        <div class="text col-md-12">
                                                         <textarea class="form-control" id="messageSend" name="messageSend" placeholder="Message"><?php echo set_value('messageSend'); ?></textarea>
                                                         <span class="text-danger"><?php echo form_error('messageSend'); ?></span>
                                                        </div>   
                                                    </div>                              
                                                    <div class="send">
                                                        <input id="btn_send" name="btn_send" value="Send" type="submit">&nbsp;&nbsp;<?php echo $this->session->flashdata('msg'); ?>
                                                    </div>
                                                <?php echo form_close(); ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info">
                                                <!--<p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit. </p>-->
                                                <ul>
                                                    <li><i class="fa fa-phone"></i>+1 (416) 922-0532</li>
                                                    <li><i class="fa fa-globe"></i>290 Dundas St E, Toronto, Ontario M5A1Z9</li>
                                                    <!--<li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>-->
                                                </ul>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Find Us On Map</h2>
                                <img src="<?php echo base_url(); ?>assets/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="googleMap" style="height:420px;"></div>
                        </div>
                    </div>     
                </div>
            </div>


  

        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false">
        </script>
                
        <script>
		
		var map;
		
        function initialize()
        {
			var map_options = {
			  center: new google.maps.LatLng(43.658408,-79.371345),
			  zoom: 15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map = new google.maps.Map(document.getElementById("googleMap"), map_options);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addDomListener(window, "resize", function() 
		{
		 	var center = map.getCenter();
		 	google.maps.event.trigger(map, "resize");
		 	map.setCenter(center); 
		});
        </script>

    </body>
</html>