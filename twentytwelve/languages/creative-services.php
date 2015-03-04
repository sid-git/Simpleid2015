<?php
/**
 * Template Name: Creative Services Page
 */
get_header(); ?>
    <div class="content cs-page">
       
        	<div class="row cs-banner section"  id="creativeservices">
        	 <div class="grid">
        	 	<div class="banner side-padding">
                    <h2>EVERY BUSINESS HAS A STORY.</br>
WE HELP TELL YOURS WITH COMPELLING AND INTELLIGENT DESIGN.
                    </h2>
        	 	</div>
        	 </div>
            </div>
          
          
            <div class="row white-bg row-padding-bottom">
             	<div class="row row-line clearfix">
            		<h2 class="mainHeading green-text white-text-bg"><sup>our</sup> Web & Creative Services</h2>
            	</div>
            	<div class="grid clearfix side-padding">
           
                     <div class="one-col ">
                        <p class="row-padding-bottom om-p">A successful business is more than its name and logo, its products and services, and even its customers. It’s everything working in harmony to share your story with the world. We strive to understand what you do best and deliver a clear and consistent identity that captivates and delights.</p>
                          
                          <div class="service-mobile-tabs green">
	                         <div class="swiper-container swipe-4">
	                         	<div class="swiper-wrapper">
	                         		<div class="swiper-slide" >
                                      <ul class="services-list om-page clearfix">
                                       <?php $args = array( 'post_type' => 'creative_services', 'posts_per_page'=>'100');
                    
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

	                          	<?php $args = array( 'post_type' => 'creative_services', 'posts_per_page'=>'100');
	        
	                                $loop = new WP_Query( $args );
	        
	                                $count = 0;
	        
	                                while ( $loop->have_posts() ) : $loop->the_post();
	                                ?>

									<div class="service-mobile-tab-content" id="service-mobile-tabs-<?php echo $count; ?>">
	                          			<p><?php the_excerpt(); ?></p>
	                          		</div>

								
								<?php 
								$count++;
								 endwhile; ?>
	                          		

	                          </div>
                              
	                        </div>    
                        
                    </div>
               
            	</div>
            </div>
            <div class="row white-bg section" id="portfolio">
              <div class="row row-line  clearfix">
                <h2 class="mainHeading green-text white-text-bg"><sup>our</sup> WORK</h2>
              </div>
              <div class="row">
              <div class="grid clearfix">
                <div class="folio-container">
					<div class="mobile-hide">
                	<?php $args = array( 'post_type' => 'portfolio', 'posts_per_page'=>'100');
						$loop = new WP_Query( $args );
						$count = 0;
						while ( $loop->have_posts() ) : $loop->the_post();
						
						if($count%3==0){
								echo '<div class="folio-row">';	
							}
							$count++;
							
						?>
                        
                            <div class="folio-box" id="folio-box-<?=get_the_ID();?>">
                       
                                <?php the_post_thumbnail(); ?> 
                                <div class="folio-hover " onclick="play_node(<?=get_the_ID();?>);">
                                  <h4><?php the_title(); ?> | <?php the_field('categories') ?> <span class="animated-arrow green-text ">»</span></h4>
                                  <span class="folio-bubble">&nbsp;</span>
                                </div>
                            </div>
							
                     <?php
					 		if($count%3==0){
								echo '<div class="clear"></div></div>';	
							}
					 		
						endwhile;
					 ?>
                	<?php if($count%3!=0){echo '<div class="clear"></div></div>';	} ?>
                 	</div>
                    
                    <div class="mobile-only">
                	<?php $args = array( 'post_type' => 'portfolio', 'posts_per_page'=>'100');
						$loop = new WP_Query( $args );
						$count = 0;
						while ( $loop->have_posts() ) : $loop->the_post();
						
						if($count%2==0){
								echo '<div class="folio-row">';	
							}
							$count++;
							
						?>
                        
                            <div class="folio-box" id="folio-box-<?=get_the_ID();?>">
                       
                                <?php the_post_thumbnail(); ?> 
                                <div class="folio-hover" onclick="play_node(<?=get_the_ID();?>);">
                                  <h4><?php the_title(); ?> | <?php the_field('categories') ?> <span class="animated-arrow green-text ">»</span></h4>
                                  <span class="folio-bubble">&nbsp;</span>
                                </div>
                            </div>
							
                     <?php
					 		if($count%2==0){
								echo '<div class="clear"></div></div>';	
							}
					 		
						endwhile;
					 ?>
                	<?php if($count%2!=0){echo '<div class="clear"></div></div>';	} ?>
                 	</div>
                    
                    <div class="folio-content-hidden">
						<?php $args = array( 'post_type' => 'portfolio', 'posts_per_page'=>'100');
						$loop = new WP_Query( $args );
						$count = 0;
						while ( $loop->have_posts() ) : $loop->the_post();							
						?>
                        <div id="outer-folio-content-<?=get_the_ID();?>">
                            <div class="folio-content" id="folio-content-<?=get_the_ID();?>" style="display:none">
                               <div class="folio-img-container mobile-hide">
                                  <img src="<?php the_field('big_image') ?>">
                                </div>
                                <div class="folio-des">
                                    <h3 class="green-text"><?php the_title(); ?></h3><br/>
                                    <h3 class="green-text"><?php the_field('categories') ?></h3><br/>
                                    <p>
                                       <?php the_excerpt(); ?>
                                    </p>
                                     <a href="<?php echo get_permalink(); ?>">View Project <span class="animated-arrow green-text ">»</span></a>
                                     <span class="folio-close" onclick="closefolio(<?=get_the_ID();?>);">close X</span>
                                </div>
        
                            </div>
                           </div>
                          <?php	endwhile; ?>
                       </div>
                 
                </div>
              </div>
               	
            
           </div>
        </div> 
        <div class="row white-bg row-padding-bottom">
          <div class="row row-line  clearfix">
                <h2 class="mainHeading green-text white-text-bg"><sup>web</sup> package</h2>
              </div>
         <div class="grid clearfix">
					<div class="package-table clearfix">
		<div class="package-single">
			<h3>Professional</h3>
			<div class="package-price-box">
				<h4>$1995</h4>
			</div>
			<div class="package-blurb">
				<h4>A clean and effective website for a small businesses</h4>
			</div>
			<div class="package-content">
				<ul>
					<li>Up to 5 pages of content inserted</li>
					<li>Up to 5 branded page layouts</li>
					<li>home page image slider</li>
					<li>Customisable fonts, colors, backgrounds, images and graphics</li>
					<li>Website owners can create and maintain unlimited pages</li>
					<li>Access to admin tools for basic website editing</li>
					<li>social media buttons </li>
					<li>Google Analytics setup </li>
					<li>1 basic contact form with captcha anti-spam</li>
					<li>1 Google map location</li>
					<li>Additional training videos </li>
				</ul>
			</div>
			<div class="package-add-on">
				<a>
                	<span class="">.</span>
					<h4>VIVEW MORE ADD ONS</h4>
                </a>
				<div class="add-ons-list">
					<ul>
						<li>
							<a>SEO</a>
							<ul>
								<li>
									<span class="add-on-price">$30</span>
									Onsite SEO package                  
									<span class="add-on-des">Includes sitemap xml, metadata, titles, descriptions, robot.txt, URL canonicalisation, image alt-tags</span>
									
								</li>
								<li>
									<span class="add-on-price">$499</span>
									<span class="add-on-des">per month for first 6 months</span>
								     Initial SEO package                  
									
								</li>
							</ul>
						</li>
						<li>
							<a>SEM</a>
							<ul>
								<li>
								<span class="add-on-price">POA</span>
								Comprehensive Monthly SEM campaign (Google Adwords)
								</li>
								
							</ul>
						</li>
						<li>
							<a>web hosting</a>
							<ul>
								<li>
									<span class="add-on-price">$42.90/yr</span>
									domain name                 
									
								</li>
								<li>
								<span class="add-on-price">$499</span>
								<span class="add-on-des">per month for first 6 months</span>
								Domain hosting assistance ( Including )                 
									
								</li>
								<li>
								<span class="add-on-price">$27.50</span>
								<span class="add-on-des">per month</span>
								Web hosting - Starter 
								</li> 
								<li>
								<span class="add-on-price">$42.90</span>
								<span class="add-on-des">per month</span>
								Web hosting - Business
								</li>
								<li>
								<span class="add-on-price">$86.90</span>
								<span class="add-on-des">per month</span>
								Web hosting - Professional  
								</li>           
									
								
							</ul>
						</li>
						<li>
							<a>social</a>
							<ul>

								<li>
								<span class="add-on-price">$100</span>
								matching fully functional blog                  
									
								</li>
								<li><span class="add-on-price">$100</span>
								Facebook and Twitter feed                  
									
								</li>
								<li><span class="add-on-price">$100</span>
								Social Sharing buttons                   
									
								</li>
								<li><span class="add-on-price">$100</span>
									<span class="add-on-des">per platform</span>
									Social media branding                   
									
								</li>
							</ul>
						</li>
						<li>
							<a>extra sit features</a>
							<ul>

								<li>
								<span class="add-on-price">POA</span>
								Additional custom pages                 
									
								</li>
								<li><span class="add-on-price">$100</span>
								Events calendar                   
									
								</li>
								<li><span class="add-on-price">$50</span>
								Basic booking form                   
									
								</li>
								<li><span class="add-on-price">$50</span>
									Comment fields                  
									
								</li>
								<li><span class="add-on-price">$150</span>
									Basic members area                    
									
								</li>
							</ul>
						</li>
						<li>
							<a>video</a>
							<ul>
								<li><span class="add-on-price">$50</span>
									YouTube video integration                   
									</li>
									<li><span class="add-on-price">$150</span>
									Photo gallery/YouTube video gallery 
                  					<span class="add-on-des">(includes insertion of 10 photos/videos)  </span>
									</li>
							</ul>
						</li>
						<li>
							<a>E-marketing</a>
							<ul>

								<li>
								<span class="add-on-price">$150</span>
								Responsive e-newsletter template design                  
									
								</li>
								<li><span class="add-on-price">$50</span>
								Newsletter subscribe form                    
									
								</li>
								<li><span class="add-on-price">$130</span>
								Setup of campaign management program 
								<span class="add-on-des">(includes 1 hour of training) </span>                   
									
								</li>
								<li><span class="add-on-price">$10+</span>
									Campaign execution (per campaign)                    
									
								</li>
								
							</ul>
						</li>
						<li>
							<a>business cards</a>
							<ul>
								<li>
								<span class="add-on-price">$150</span>
								Matching business card design
								<span class="add-on-des">
								1,000 printed business cards</span>
								</li>
							</ul>
						</li>
					</ul>
				</div><!--close add-ons-list-->
			</div><!--close package-add-on-->
			<div class="package-estimate">
				<p>Estimate Turnaround Time: 3 Weeks</p>
			</div>
			<div class="package-quote">
			<h3>get this package</h3>
			</div>
		</div><!--close package-single-->
		<div class="package-single">
			<h3>E-Commerce</h3>
			<div class="package-price-box">
				<h4>$3795</h4>
			</div>
			<div class="package-blurb">
				<h4>Full-featured e-commerce store</h4>
			</div>
			<div class="package-content">
				<ul>
					<li>Up to 5 pages of content inserted</li>
					<li>Up to 5 branded page layouts</li>
					<li>Optional home page image slider</li>
					<li>Customisable fonts, colors, backgrounds, images and graphics</li>
					<li>unlimited pages</li>
					<li>Admin tools for basic website editing</li>
					<li>Company social media buttons coded on site</li>
					<li>Google Analytics setup to track your visitors</li>
					<li>1 basic contact form with captcha anti-spam</li>
					<li>1 Google map for your business location</li>
					<li>Additional training videos included</li>
					<li>Up to 10 products and categories inserted with training provided </li>
					<li>various add-ons such as product variations, special offers, coupons, wishlist and more</li>
					<li>shopping cart and shipping cost calculator</li>
					<li>customer order status and inventory tracking</li>
					<li>Automatic tax calculation</li>
					<li>Credit card checkout through PayPal</li>
					<li>Customer account login</li>
					<li>view/track order page</li>
					<li>unlimited products and categories</li>
				</ul>
			</div>
			<div class="package-add-on">
				<a>
                	<span class="">.</span>
					<h4>VIVEW MORE ADD ONS</h4>
                </a>
				<div class="add-ons-list">
					<ul>
						<li>
								<a>extra e-commerce features</a>
								<ul>
									<li>
										<span class="add-on-price">$150</span>
										<span class="add-on-des">per hour</span>
										Input of existing product database                   
										
										
									</li>
									<li>
										<span class="add-on-price">$225</span>
										<span class="add-on-des">per year</span>
									     SSL certificate for secure online transactions                   
										
									</li>
									<li>
									     Subscription recurring payment function                   
										
									</li>
									<li>
										<span class="add-on-price">$125</span>
									     Donation recurring payment function (PayPal                  
										
									</li>
								</ul>
							</li>
							<li>
								<a>SEM</a>
								<ul>
									<li>
									<span class="add-on-price">POA</span>
									Comprehensive Monthly SEM campaign (Google Adwords)
									</li>
									
								</ul>
							</li>
						<li>
							<a>SEO</a>
							<ul>
								<li>
									<span class="add-on-price">$30</span>
									Onsite SEO package                  
									<span class="add-on-des">Includes sitemap xml, metadata, titles, descriptions, robot.txt, URL canonicalisation, image alt-tags</span>
									
								</li>
								<li>
									<span class="add-on-price">$499</span>
									<span class="add-on-des">per month for first 6 months</span>
								     Initial SEO package                  
									
								</li>
							</ul>
						</li>
						<li>
							<a>SEM</a>
							<ul>
								<li>
								<span class="add-on-price">POA</span>
								Comprehensive Monthly SEM campaign (Google Adwords)
								</li>
								
							</ul>
						</li>
						<li>
							<a>web hosting</a>
							<ul>
								<li>
									<span class="add-on-price">$42.90/yr</span>
									domain name                 
									
								</li>
								<li>
								<span class="add-on-price">$499</span>
								<span class="add-on-des">per month for first 6 months</span>
								Domain hosting assistance ( Including )                 
									
								</li>
								<li>
								<span class="add-on-price">$27.50</span>
								<span class="add-on-des">per month</span>
								Web hosting - Starter 
								</li> 
								<li>
								<span class="add-on-price">$42.90</span>
								<span class="add-on-des">per month</span>
								Web hosting - Business
								</li>
								<li>
								<span class="add-on-price">$86.90</span>
								<span class="add-on-des">per month</span>
								Web hosting - Professional  
								</li>           
									
								
							</ul>
						</li>
						<li>
							<a>social</a>
							<ul>

								<li>
								<span class="add-on-price">$100</span>
								matching fully functional blog                  
									
								</li>
								<li><span class="add-on-price">$100</span>
								Facebook and Twitter feed                  
									
								</li>
								<li><span class="add-on-price">$100</span>
								Social Sharing buttons                   
									
								</li>
								<li><span class="add-on-price">$100</span>
									<span class="add-on-des">per platform</span>
									Social media branding                   
									
								</li>
							</ul>
						</li>
						<li>
							<a>extra sit features</a>
							<ul>

								<li>
								<span class="add-on-price">POA</span>
								Additional custom pages                 
									
								</li>
								<li><span class="add-on-price">$100</span>
								Events calendar                   
									
								</li>
								<li><span class="add-on-price">$50</span>
								Basic booking form                   
									
								</li>
								<li><span class="add-on-price">$50</span>
									Comment fields                  
									
								</li>
								<li><span class="add-on-price">$150</span>
									Basic members area                    
									
								</li>
							</ul>
						</li>
						<li>
							<a>video</a>
							<ul>
								<li><span class="add-on-price">$50</span>
									YouTube video integration                   
									</li>
									<li><span class="add-on-price">$150</span>
									Photo gallery/YouTube video gallery 
                  					<span class="add-on-des">(includes insertion of 10 photos/videos)  </span>
									</li>
							</ul>
						</li>
						<li>
							<a>E-marketing</a>
							<ul>

								<li>
								<span class="add-on-price">$150</span>
								Responsive e-newsletter template design                  
									
								</li>
								<li><span class="add-on-price">$50</span>
								Newsletter subscribe form                    
									
								</li>
								<li><span class="add-on-price">$130</span>
								Setup of campaign management program 
								<span class="add-on-des">(includes 1 hour of training) </span>                   
									
								</li>
								<li><span class="add-on-price">$10+</span>
									Campaign execution (per campaign)                    
									
								</li>
								
							</ul>
						</li>
						<li>
							<a>business cards</a>
							<ul>
								<li>
								<span class="add-on-price">$150</span>
								Matching business card design
								<span class="add-on-des">
								1,000 printed business cards</span>
								</li>
							</ul>
						</li>
					</ul>
				</div><!--close add-ons-list-->
			</div><!--close package-add-on-->
			<div class="package-estimate">
				<p>Estimate Turnaround Time: 3 Weeks</p>
			</div>
			<div class="package-quote">
			<h3>get this package</h3>
			</div>
		</div><!--close package-single-->
		<div class="package-single">
			<h3>Custom</h3>
			<div class="package-price-box">
				<h4>$6000</h4>
			</div>
			<div class="package-blurb">
				<h4>Full-service 100% custom website with intelligent design & functionality</h4>
			</div>
			<div class="package-content">
				<ul>
					<li>Up to 5 pages of content inserted</li>
					<li>Up to 5 branded page layouts & menus</li>
					<li>home page image slider</li>
					<li>Customisable fonts, colors, backgrounds, images and graphics</li>
					<li>Website owners can create and maintain unlimited pages</li>
					<li>Access to admin tools for basic website editing</li>
					<li>social media buttons </li>
					<li>Google Analytics setup </li>
					<li>1 basic contact form with captcha anti-spam</li>
					<li>1 Google map location</li>
					<li>Additional training videos </li>
				</ul>
			</div>
			<div class="package-add-on">
				<a>
                	<span class="">.</span>
					<h4>VIVEW MORE ADD ONS</h4>
                </a>
				<div class="add-ons-list">
					<ul>
						<li>
							<a>SEO</a>
							<ul>
								<li>Onsite SEO package                  
									<span class="add-on-des">Includes sitemap xml, metadata, titles, descriptions, robot.txt, URL canonicalisation, image alt-tags</span>
									<span class="add-on-price">$30</span>
								</li>
								<li>Initial SEO package                  
									<span class="add-on-price">$499/month for first 6 months</span>
								</li>
							</ul>
						</li>
						<li>
							<a>SEM</a>
							<ul>
								<li>Comprehensive Monthly SEM campaign  POA(Google Adwords
								</li>
								
							</ul>
						</li>
						<li>
							<a>web hosting</a>
							<ul>
								<li>Onsite SEO package                  
									<span class="add-on-des">Includes sitemap xml, metadata, titles, descriptions, robot.txt, URL canonicalisation, image alt-tags</span>
									<span class="add-on-price">$30</span>
								</li>
								<li>Initial SEO package                  
									<span class="add-on-price">$499/month for first 6 months</span>
								</li>
							</ul>
						</li>
						<li>
							<a>social</a>
							<ul>
								<li>Onsite SEO package                  
									<span class="add-on-des">Includes sitemap xml, metadata, titles, descriptions, robot.txt, URL canonicalisation, image alt-tags</span>
									<span class="add-on-price">$30</span>
								</li>
								<li>Initial SEO package                  
									<span class="add-on-price">$499/month for first 6 months</span>
								</li>
							</ul>
						</li>
						<li>
							<a>extra sit features</a>
						</li>
						<li>
							<a>video</a>
						</li>
						<li>
							<a>E-marketing</a>
						</li>
						<li>
							<a>business cards</a>
						</li>
					</ul>
				</div><!--close add-ons-list-->
			</div><!--close package-add-on-->
			<div class="package-estimate">
				<p>Estimate Turnaround Time: 3 Weeks</p>
			</div>
			<div class="package-quote">
			<h3>get this package</h3>
			</div>
		</div><!--close package-single-->



	</div>
		</div>
        </div>
        
    </div>
<style>
.folio-content-hidden{display:none;}
</style>

<script src="<?php echo get_template_directory_uri(); ?>/js/idangerous.swiper-2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/idangerous.swiper.scrollbar-2.1.js"></script>
<script>
if($('.if-mobile').css('display')=='block') {
		$('.mobile-hide').remove();
}
	var last_node=0;
	function play_node(id){
		if(last_node==0){
			$("#folio-box-"+id).addClass("active-folio");
				$("#folio-box-"+id).parent().append($("#outer-folio-content-"+id).html());
				$("#folio-content-"+id).slideDown(300,function(){
					  $.scrollTo(($("#folio-content-"+id).offset().top-$("header").height()-10),300); 
					});
				last_node=id;
			
		}else{
			$("#folio-box-"+last_node).removeClass("active-folio");	
			$("#folio-box-"+id).addClass("active-folio");
			//$("#folio-box-"+last_node).parent().animate({height:221},400);
			$("#folio-content-"+last_node).slideUp(300);
			//$("#folio-box-"+last_node).parent().children(".folio-content").remove();
			
			//$("#folio-box-"+id).parent().animate({height:660},400);
			$("#folio-box-"+id).parent().append($("#outer-folio-content-"+id).html());
			$("#folio-content-"+id).slideDown(300,function(){
					  $.scrollTo(($("#folio-content-"+id).offset().top-$("header").height()-10),300); 
					});
			last_node=id;
		}
	}
	function closefolio(id){
		$(".folio-content").slideUp(300);
		last_node=0;
	}
	$(document).ready(function(){
	$('.package-add-on a').click(function(){
		$(this).next('.add-ons-list').slideToggle();
		$(this).toggleClass("open");
		});
	$('.add-ons-list a').click(function(){
		$(this).next('ul').slideToggle();
		$(this).parent().siblings('li').children('ul').slideUp();
		});
	});



</script>
<?php get_footer(); ?>