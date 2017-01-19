 <?php

include('header.php');

 ?>
	
    <!--End Main Header -->
    
    <!--Page Title-->
    
    
    <!--Page Info-->
    
   	<!-- Contact Section -->
    <div class="contact-section">
    	<div class="auto-container">
            <div class="row clearfix">
            	<!--Contact Info Column-->
            	<div class="contact-info-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<div class="sec-title-three">
                            <h2>Contact Us</h2>
                            </div>
                        
                        <!--List Style Two-->
                        <ul class="list-style-two">
                        	<li><span class="icon flaticon-technology"></span>Call Us <br> <span class="number">+971 4 453 2699</span></li>
                            <li><span class="icon flaticon-pin"></span>Visit Us <br> <span class="number">Al Habtoor Business Tower, P.O. 29805, Dubai Marina,Dubai, UAE</span></li>
                            <li><span class="icon flaticon-envelope-2"></span>Mail Us <br> <span class="number">info@hotelilike.com</span></li>
                        </ul>
                        
                    </div>
                </div>
                
                <!--Contact Form Column-->
                <div class="contact-form-column col-md-6 col-sm-12 col-xs-12">
                	<div class="contact-form">
                        <form method="post" action="sendemail.php" id="contact-form">
                        
                            <div class="row clearfix">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="username" value="" placeholder="Your Name" required>
                                </div>
                                
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" value="" placeholder="Email" required>
                                </div>
                                
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" value="" placeholder="Subject" required>
                                </div>
        
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="theme-btn btn-style-two">Send</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                
            </div>
            
            <!-- Map Section -->
            <div class="map-section">
                <!--Map Canvas-->
                <div
                   "
                    style="height:500px;">
					
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.485558598547!2d55.13958291475225!3d25.085419742382733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b53c6fe36a1%3A0xb6dc0a807ec56420!2sAl+Habtoor+Business+Tower!5e0!3m2!1sen!2s!4v1484805807266" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

        </div>
        
    </div>
    
    <!--Main Footer / Footer Style three-->
 <?php

include('footer.php');

 ?>