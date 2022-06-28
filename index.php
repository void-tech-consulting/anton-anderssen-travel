<?php get_header(); ?>

<img id="background-shape-yellow" src="<?php echo get_template_directory_uri(); ?>/images/Vector-3.png" />
<img id="background-shape-blue" src="<?php echo get_template_directory_uri(); ?>/images/Vector-4.png" />

<div id = "home-page-opener">
    <div id = "home-page-text"> Disability should not determine where you can and cannot go. </div>
    <img id="header-top-image" src="<?php echo get_template_directory_uri(); ?>/images/303edited.png" />
</div>

<div id = "home-page-services">
    <div class="services-container">

        <div id="slideshow">
            <div class="slide-wrapper-services">
                <div class="slide">
                    <img id="rotating-images" src="<?php echo get_template_directory_uri(); ?>/images/flight1-1.png" />
                </div>
                <div class="slide">
                    <img id="rotating-images" src="<?php echo get_template_directory_uri(); ?>/images/flight1-2.png" />
                </div>
                <div class="slide">
                    <img id="rotating-images" src="<?php echo get_template_directory_uri(); ?>/images/flight1-3.png" />
                </div>
                <div class="slide">
                    <img id="rotating-images" src="<?php echo get_template_directory_uri(); ?>/images/flight1-4.png" />
                </div>
            </div>
        </div>

        <div id="services-left-text"> <span id="cruises-text"> cruises, </span>flights, resorts, hospice services, <br> and more. </div>
    </div>
    <div id = "services-right-text"> CHECK <br>OUT OUR SERVICES <br> <span id="greater-than-text"> >> </span></div>
</div>

<div id = "home-page-services">
    <div id = "volunteers-left-text"> VOLUNTEER <br> WITH US <br> <span id="greater-than-text"> >> </span></div>   
    <div class="services-container">
        <div id="slideshow">
            <div class="slide-wrapper-volunteer">
                <div class="slide">
                    <img id="rotating-images" src="<?php echo get_template_directory_uri(); ?>/images/volunteer.png" />
                </div>
                <div class="slide">
                    <img id="rotating-images" src="<?php echo get_template_directory_uri(); ?>/images/volunteer1.png" />
                </div>
                <div class="slide">
                    <img id="rotating-images" src="<?php echo get_template_directory_uri(); ?>/images/volunteer2.png" />
                </div>
            </div>
        </div>

        <div id="volunteers-right-text"> travel agent, teddy bear ministry, <span id="hospice-text"> hospice, </span> and more. </div>
    </div>
</div>



<?php get_footer(); ?>