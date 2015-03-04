<?php
/**
 * Template Name: Online Marketing Page
 */
get_header(); ?>
    <div class="content om-page">
       
        	<div class="row om-banner section"  id="onlinemarketing">
        	 <div class="grid">
        	 	<div class="banner side-padding">
                    <h2>GOOD COMPANIES REACH OUT TO FIND CUSTOMERS.<br/>
                    GREAT COMPANIES BUILD THE PATHS THAT BRING CUSTOMERS TO THEM.
                    </h2>
        	 	</div>
        	 </div>
            </div>
          
          
            <div class="row white-bg row-padding-bottom mobile-mode">
             	<div class="row row-line clearfix">
            		<h2 class="mainHeading red-text white-text-bg"><sup>YOUR</sup> Online Marketing Agency</h2>
            	</div>
            	<div class="grid clearfix side-padding">
           
                    <div class="one-col ">
                        <p class="row-padding-bottom om-p">We have a proven history as leaders in online marketing, helping businesses to be discoverable wherever 
        consumers are looking. We apply a series of customized strategies based on your goals to bring qualified traffic to your site and build relevant content that engages and converts consumers.</p>
                       <div class="service-mobile-tabs">
	                         <div class="swiper-container swipe-4">
	                         	<div class="swiper-wrapper">
	                         		<div class="swiper-slide" >
                                      <ul class="services-list om-page clearfix">
                                        <?php $args = array( 'post_type' => 'online_marketing', 'posts_per_page'=>'100');
                    
                                            $loop = new WP_Query( $args );
                    
                                            $count = 0;
                    
                                            while ( $loop->have_posts() ) : $loop->the_post();
                                            ?>
                                        
        
                                        <li class="">
                                            <a  href="#service-mobile-tabs-<?php echo $count; ?>"><? the_title(); ?> </a>                  
                                            <div class="services-list-des mobile-hide">
                                              <p><?php the_excerpt(); ?></p>
                                                <?php if(get_field('item_link')!=''){ ?><a href="<?php the_field('item_link'); ?>">click here to learn more <span class="animated-arrow brown-text ">»</span></a><?php } ?>
                                              <span class="services-list-des-bubble">.</span>
                                            </div>
                                        </li>
                                        <?php $count++;
                                          endwhile; ?>
                                      </ul>
	                         	 </div>
	                          	</div>
	                          </div>
                              
	                          <div class="service-mobile-tab-content-wrap mobile-only" >

	                          	<?php $args = array( 'post_type' => 'online_marketing', 'posts_per_page'=>'100');
	        
	                                $loop = new WP_Query( $args );
	        
	                                $count = 0;
	        
	                                while ( $loop->have_posts() ) : $loop->the_post();
	                                ?>

									<div class="service-mobile-tab-content" id="service-mobile-tabs-<?php echo $count; ?>">
	                          			<p><?php the_excerpt(); ?></p>
                                        <?php if(get_field('item_link')!=''){ ?><a href="<?php the_field('item_link'); ?>">click here to learn more <span class="animated-arrow brown-text ">»</span></a><?php } ?>
                                        
	                          		</div>

								
								<?php 
								$count++;
								 endwhile; ?>
	                          		

	                          </div>
                              
	                        </div>   
	                     
                    </div>
               
            	</div>
            </div>
            <div class="row pink-bg section" id="perfectblend">
              <div class="row row-line-white ">
                    <h2 class="heading-white pink-bg white-text"> THE IMPORTANCE <sup>OF</sup> THE PERFECT BLEND</h2>
               </div>
               <div class="grid clearfix ">
               	<div class="mug-content">
                    <div class="cup-description">
                        <div id="cup-1"><h3>BIGGEST IMPACT ON LEAD GENERATION</h3><ul><li>SEO: 52%</li><li>PPC: 35%</li><li>SOCIAL MEDIA: 12%</li></div>
                        <div id="cup-2">of all daily searches are for information on a 
        product or service </div>
                        <div id="cup-3">of search engine users 
        never go past the first 
        page of the search results</div>
                        <div id="cup-4">of all organic link clicks 
        go to the top 3 organic 
        listings</div>
                        <div id="cup-5"><h3>ANNUAL AND DAILY SEARCHES BY YEAR</h3></div>
                     </div>
                 </div>
              </div>
            </div>
            <div class="row case-study white-bg row-padding-bottom section" id="casestudy">
           
           		 <div class="row row-padding-bottom mobile-mode">
            	      <h2 class="heading-no-line  ">Case Study:<br/><span class="red-text">Helping andrews airport parking <sup>to</sup> fly</span></h2>
            	 </div>
               <div class="row row-padding-bottom mobile-mode">
          		<div class="grid clearfix side-padding">
                <div class="two-third-col">
                <p class="om-p">
                  By assessing their marketing needs and leveraging the latest 
techniques in online marketing, we were able to produce a 
tailored campaign that really helped Andrews to take off.
                </p>
                </div>
                <div class="three-col center">
                <span class="online-booking-no red-text">4525</span>
                <h3>Online Bookings <sup>per month</sup></h3>
                </div>
          			</div>
          		</div>
              <div class="row ">
                <img class="mobile-only"src="<?php echo get_template_directory_uri(); ?>/img/data-graphic.gif" / style="width:100%">
                 <div class="grid clearfix side-padding">
                    <div class="three-col cpl mobile-hide">
                      <h3>COST PER LEAD</h3>
                      <div class="data-container">
                        <div class="data-mask data-group1">
                        <span id="cpl-1">133</span>
                        <span id="cpl-2">42.10</span>
                        </div>
                           
                      </div>    
                      <div class="caseText">
                      		<span class="caseGreen">BEFORE OPTIMISATION</span><span class="caseRed">AFTER OPTIMISATION</span>
                      </div>
                    </div>
                    <div class="three-col ovpm mobile-hide">
                    <h3>Organic Visitors Per Month</h3>
                   
                      <div class="data-container two-col">
                         <div class="data-mask data-group2-1">
                           <span class="data-group2-1-no">15</span>
                            
                          </div>
						
                      </div>
                           <div class="data-container two-col">
                         <div class="data-mask data-group2-2">
                           <span class="data-group2-2-no">1458</span>
                          </div>
                      </div>
                      <div class="caseText">
                      		<span class="caseRed">BEFORE</span><span class="caseBlue">AFTER</span>
                      </div>
                    </div>
                    <div class="three-col nolpd mobile-hide">
                    <h3>Number of Leads Per Day</h3>
                       <div class="data-container radio two-col">
                           <div class="radio1">
                           <span class="radio-no">14</span>
                           </div>
                           
                       </div> 
                       <div class="data-container radio two-col">
                           <div class="radio2">
                              <span class="radio-no">55</span>
                           </div>
                           
                       </div> 
                      <h3>Enquiries per month</h3>
                      <div class="caseText">
                           
                           	<span class="caseGreen">BEFORE = 0</span>
                           
                          	 <span class="caseBlue">AFTER = <span class="caseBlue" id="after-epm">30</span></span>
                           
                           
                       </div> 
                      
                      
                    </div>
                </div>
              </div>
            	
            </div>
            <div class="row ">
            
           
               <div class="row row-line ">
                    <h2 class="mainHeading"> let <sup>us</sup> help your <br/> Business <sup>to</sup> take off</h2>
               </div>
              <div class="grid clearfix ">
                  <p class="call-us-now red-text">CALL <sup>US</sup> NOW <?php echo $_SESSION['notfromuk'] ? "1300 30 40 47" : "0330 055 5567" ; ?><br/>
FOR A FREE QUOTATION</p>
                  </div>
              
            </div>
        
    </div>
 <script src="<?php echo get_template_directory_uri(); ?>/js/count.js"></script>

   <script src="<?php echo get_template_directory_uri(); ?>/js/idangerous.swiper-2.1.min.js"></script>
   <script src="<?php echo get_template_directory_uri(); ?>/js/idangerous.swiper.scrollbar-2.1.js"></script>
<script>
var jq = jQuery.noConflict();

jq(document).ready(function(){

	
	var s = jq(".online-booking-no");
    var pos = s.position();     
	var h = 0;   
	
	var cup=jq('#cup-1');
	var cuppos = cup.position();
	var cuph = 0;        
    jq(window).scroll(function() {
									
        var windowpos = jq(window).scrollTop()+jq(window).height();
        if (windowpos >= pos.top && h==0) {
			manyactions();
			h=1;
        }
		if (windowpos >= cuppos.top && cuph==0) {
			cupanimation();
			cuph=1;
        }
    });
function manyactions(){

			jq( ".data-group1" ).animate({
				height: "315px"
			  }, 1500,'linear', function() {				  
				// Animation complete.
			  });
             jq( ".data-group2-1" ).animate({
				height: "105px"
			  }, 500,'linear', function() {				  
				// Animation complete.
			  });
			   jq( ".data-group2-2" ).animate({
				height: "315px"
			  }, 1500,'linear', function() {				  
				// Animation complete.
			  });
			 //GREEN NUMBER RADIO DATA///////////////////////////////////////////////
			  jq( ".radio2 .radio-no" ).animate({
				 fontSize: "90px",
			  }, 1000,'swing', function() {
				// Animation complete.
			  });
			   //RED NUMBER RADIO DATA///////////////////////////////////////////////
			  jq( ".radio1 .radio-no" ).animate({
				 fontSize: "44px",
			  }, 500,'swing', function() {
				// Animation complete.
			  });
			//RED RADIO DATA///////////////////////////////////////////////
			  jq( ".radio1" ).animate({
				 margin: "50px 0 0",
				height: "80px",
				width:"80px"
			  }, 500,'linear', function() {
				// Animation complete.
			  });
			//GREEN RADIO DATA////////////////////////////////////////////
			   jq( ".radio2" ).animate({
				margin: "10px 0 0 25px",
				height: "150px",
				width:"150px"
			  }, 1000,'linear', function() {
				// Animation complete.
			  });
			//RED RADIO COUNT UP////////////////////////////////////////
			   jq(function(jq) {
					jq('.radio1 .radio-no').countTo({
						from: 0,
						to: 14,
						speed: 500,
						refreshInterval: 50,
						onComplete: function(value) {
							console.debug(this);
						}
					});
				});
			 //PEOPLE COUNT UP////////////////////////////////////////
				 jq(function(jq) {
					jq('.data-group2-2-no').countTo({
						from: 0,
						to: 1458,
						speed: 1000,
						refreshInterval: 50,
						onComplete: function(value) {
							console.debug(this);
						}
					});
				});
			 //PEOPLE COUNT UP////////////////////////////////////////
				 jq(function(jq) {
					jq('.data-group2-1-no').countTo({
						from: 0,
						to: 15,
						speed: 500,
						refreshInterval: 50,
						onComplete: function(value) {
							console.debug(this);
						}
					});
				});
			   //GREEN RADIO COUNT UP////////////////////////////////////////
				 jq(function(jq) {
					jq('.radio2 .radio-no').countTo({
						from: 0,
						to: 55,
						speed: 1000,
						refreshInterval: 50,
						onComplete: function(value) {
							console.debug(this);
						}
					});
				});
			 //GREEN RADIO COUNT UP////////////////////////////////////////
				 jq(function(jq) {
					jq('.online-booking-no').countTo({
						from: 0,
						to: 4525,
						speed: 1000,
						refreshInterval: 50,
						onComplete: function(value) {
							console.debug(this);
						}
					});
				});	
			 //COST 1 COUNT UP////////////////////////////////////////
				 jq(function(jq) {
					jq('#cpl-1').countTo({
						from: 0,
						to: 133,
						speed: 1000,
						refreshInterval: 50,
						onComplete: function(value) {
							console.debug(this);
						}
					});
				});	
			//COST 2 COUNT UP////////////////////////////////////////
				 jq(function(jq) {
					jq('#cpl-2').countTo({
						from: 0,
						to: 42.10,
						speed: 500,
						refreshInterval: 50,
						onComplete: function(value) {
							console.debug(this);
						}
					});
				});	
			//AFTER ENQUIRIES COUNT UP////////////////////////////////////////
				 jq(function(jq) {
					jq('#after-epm').countTo({
						from: 0,
						to: 30,
						speed: 500,
						refreshInterval: 50,
						onComplete: function(value) {
							console.debug(this);
						}
					});
				});	
				
			
}
 
 
function cupanimation(){
			//CUP ANIMATION//////////////////////
			 jq( "#cup-1" ).animate({
				left: "454px",
			  }, 1000,'swing', function() {				  
				// Animation complete.
			  });
			  jq( "#cup-2" ).animate({
				left: "596px",
			  }, 1000,'swing', function() {				  
				// Animation complete.
			  });
			  jq( "#cup-3" ).animate({
				left: "690px",
			  }, 1000,'swing', function() {				  
				// Animation complete.
			  });
			  jq( "#cup-4" ).animate({
				left: "678px",
			  }, 1000,'swing', function() {				  
				// Animation complete.
			  });
			  jq( "#cup-5" ).animate({
				left: "255px",
			  }, 1000,'swing', function() {				  
				// Animation complete.
			  });
}



  



});  


</script>
<?php get_footer(); ?>