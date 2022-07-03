<?php get_header(); ?>

<!-- <div class="page-content"> -->


    <!-- Page content -->
    <!-- <div class="page-center">  -->

        <!-- <div style = "display:flex; position: relative; tex-align:center; background-color: LightCyan; height:max-content;">  -->
            <img class="services-yellow" src="<?php echo get_template_directory_uri(); ?>/images/services-yellow.png" />
            <img class="services-blue" src="<?php echo get_template_directory_uri(); ?>/images/services-blue.png" />
            <img class="services-grey" src="<?php echo get_template_directory_uri(); ?>/images/services-grey.png" />


            <!-- style="position:absolute; top:0%; bottom: 0%; left:0%; right:0%"  -->
            <div class="flex-row w-100" > 
                <div class="flex-column" style ="margin: 6%; width: 46%"> 
                    <div style="background: transparent;" class= "service_box">
                        <div style = "background: Lavender" class ="image_box w-50">
                            <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/cruise-holiday 1.png" />
                            <div class="centered"> Cruises </div> 
                        </div>
                        <div style = "background: white" class = "text_box w-50">  
                            <div class = "service_title"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel dui purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ut metus lectus. </div> 
                        </div>
                    </div>

                    <div style="background: transparent;" class= "service_box">
                        <div style = "background: Lavender" class ="image_box w-50">
                            <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/flight-getty 1.png" />
                            <div class="centered"> Flights </div> 
                        </div>
                        <div style = "background: white" class = "text_box w-50">  
                            <div class = "service_title"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel dui purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ut metus lectus. </div> 
                        </div>
                    </div>

                    <div style="background: transparent;" class= "service_box">
                        <div style = "background: Lavender" class ="image_box w-50">
                            <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/Beaches-Turks-Caicos-Overview 1.png" />
                            <div class="centered"> Resorts </div> 
                        </div>
                        <div style = "background: white" class = "text_box w-50">  
                            <div class = "service_title"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel dui purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ut metus lectus. </div> 
                        </div>
                    </div>

                    <div style="background: transparent;" class= "service_box">
                        <div style = "background: Lavender" class ="image_box w-50">
                            <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/Beaches-Turks-Caicos-Overview 2.png" />
                            <div class="centered"> Hospice </div> 
                        </div>
                        <div style = "background: white" class = "text_box w-50">  
                            <div class = "service_title"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel dui purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ut metus lectus. </div> 
                        </div>
                    </div>
                </div>
            
                <!-- Add the contact form here -->

                <div class="form-container" style = "width: 34%; margin-top: 6%; height: fit-content;">

                    <div> 
                        <div style = "margin-bottom: 20px; color: white; font-size: 42px; font-family: 'Lato'; font-style: normal; font-weight:700;"> 
                            Contact Us!  
                        </div>

                        <a  href="tel:5867574177" class = "social-account-left" style= "margin-bottom: 3px;">  
                            <ion-icon id = "phone-icon" name="call-outline"></ion-icon>
                            <div id = "phone-text">586-757-4177</div>
                        </a>

                        <a href = "https://www.facebook.com/teddybeartravel/" class = "social-account-left" style= "margin-bottom: 3px;">  
                            <ion-icon id = "facebook-icon" name="logo-facebook"></ion-icon>
                            <div id = "facebook-text">AAT Facebook</div>
                        </a>
                        
                        <a href="mailto:AAT@gmail.com" class = "social-account-left" >  
                            <ion-icon id = "mail-icon" name="mail-outline"></ion-icon>
                            <div id = "facebook-text">AAT@gmail.com</div>
                        </a>
                    </div>

                    <?php echo do_shortcode('[forminator_form id="13"]'); ?>

                </div>
            </div>
        <!-- </div> -->

        




    <!-- </div> -->

<!-- </div> -->



<?php get_footer(); ?>