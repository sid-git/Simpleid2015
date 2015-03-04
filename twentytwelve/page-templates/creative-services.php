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

					<span class="pack-inc-gst"> *All Price Inc <?php echo $_SESSION['notfromuk'] ? "Gst" : "Vat" ; ?></span>

		<div class="package-single">

			<h3>Professional</h3>

			<div class="package-price-box">

				<h4><?php echo $_SESSION['notfromuk'] ? "$1,995" : "£1,149" ; ?></h4>

			</div>

			<div class="package-blurb">

				<h4>A clean and effective website for a small business</h4>

			</div>

			<div class="package-content">

				<ul>

					<li>Perfect for a simple, no-fuss web presence</li>

					<li>Branded with business logo and colors</li>

					<li>Responsive, mobile-friendly design included</li>

					<li>Customisable fonts, colors, backgrounds, images and graphics</li>

					<li>Integration into a WordPress premium theme</li>

					<li>Easy to use and update with 1 hour of personalised training</li>

					<li>Includes 2 rounds of revisions</li>

					

				</ul>

			</div>

			<div class="package-learn-more-btn">

					<span>Learn More</span>

				</div>

				<div class="package-learn-more">

				<ul>

					<li>Customisable fonts, colors, backgrounds, images and graphics to match your brand identity</li>

					<li>Optional home page image slider</li>

					<li>Up to 5 branded page layouts and menus, such as homepage, contact and internal information pages</li>

					<li>Up to 5 pages of content inserted</li>

					<li>Website owners can create and maintain unlimited pages</li>

					<li>Access to admin tools for basic website editing</li>

					<li>Company social media buttons coded on site</li>

					<li>Google Analytics setup to track your visitors</li>

					<li>1 basic contact form with captcha anti-spam</li>

					<li>1 Google map for your business location</li>

					<li>Additional training videos included</li>

				</ul>

			</div>

			<div class="package-add-on">

				<a>

                	<span class="">.</span>

					<h4>VIEW MORE ADD ONS</h4>

                </a>

				<div class="add-ons-list">

					<ul>

						<li>

							<a>SEO</a>

							<ul>

								<li>

									<span class="add-on-price">$30</span>

									Basic Onsite SEO package                  

									<span class="add-on-des">Includes sitemap xml, metadata, titles, descriptions, robot.txt, URL canonicalisation, image alt-tags</span>

									

								</li>

								<li>

									<span class="add-on-price">$499</span>

									<span class="add-on-des">per month for first 6 months</span>

								     Ongoing SEO package                  

									

								</li>

							</ul>

						</li>

						<li>

							<a>PPC/Remarketing</a>

							<ul>

								<li>

								<span class="add-on-price">POA</span>

								Comprehensive Monthly SEM campaign <br>

								(Google Adwords)

								</li>

								

							</ul>

						</li>

						<li>

							<a>web hosting</a>

							<ul>

								<li>

									<span class="add-on-price">$42.90/yr</span>

									Domain Name (Domain Hosting Assistance Included)  

									

								</li>

								<li>

								<span class="add-on-price">$27.50/month</span>

								Web Hosting - Starter 

								</li> 

								<li>

								<span class="add-on-price">$42.90/month</span>

								Web Hosting - Business

								</li>

								<li>

								<span class="add-on-price">$86.90/month</span>

								Web Hosting - Professional  

								</li>           

									

								

							</ul>

						</li>

						<li>

							<a>social</a>

							<ul>



								<li>

								<span class="add-on-price">$100</span>

								Matching Fully Functional Blog                  

									

								</li>

								<li><span class="add-on-price">$100</span>

								Facebook and Twitter Feed                  

									

								</li>

								<li><span class="add-on-price">$100</span>

								Social Sharing buttons                   

									

								</li>

								<li><span class="add-on-price">$100</span>

									<span class="add-on-des">per platform</span>

									Social Media Branding                   

									

								</li>

							</ul>

						</li>

						<li>

							<a>extra site features</a>

							<ul>



								<li>

								<span class="add-on-price">POA</span>

								Additional Custom Pages                 

									

								</li>

								<li><span class="add-on-price">$100</span>

								Events Calendar                   

									

								</li>

								<li><span class="add-on-price">$50</span>

								Basic Booking Form                   

									

								</li>

								<li><span class="add-on-price">$50</span>

									Comment Fields                  

									

								</li>

								<li><span class="add-on-price">$150</span>

									Basic Members Area                    

									

								</li>

							</ul>

						</li>

						<li>

							<a>video</a>

							<ul>

								<li><span class="add-on-price">$50</span>

									YouTube Video Integration                   

									</li>

									<li><span class="add-on-price">$150</span>

									Photo Gallery/YouTube Video Gallery 

                  					<span class="add-on-des">(includes insertion of 10 photos/videos)  </span>

									</li>

							</ul>

						</li>



<li>

							<a>business cards</a>

							<ul>



								<li>

								<span class="add-on-price">$150</span>

								Matching Business Card Design

								<span class="add-on-des">

								(includes 1,000 printed business cards)</span>

								</li>

							</ul>

						</li>

							

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

				<h4><?php echo $_SESSION['notfromuk'] ? "$3,795" : "£2,199" ; ?></h4>

			</div>

			<div class="package-blurb">

				<h4>Full-featured e-commerce store</h4>

			</div>

			<div class="package-content">

				<ul>

					<li>Designed to sell products/services from website</li>

					<li>Powerful product management suite through WooCommerce</li>

					<li>User-friendly product pages and layouts</li>

					<li>Simple PayPal shopping cart</li>

					<li>Branded with business logo and colors</li>

					<li>Responsive, mobile-friendly design included</li>

					<li>Integration into a WordPress premium theme</li>

					<li>Includes 2 rounds of revisions</li>

					<li>Easy to use and update with 1 hour of personalised training</li>

					

				</ul>

			</div>

				<div class="package-learn-more-btn">

					<span>Learn More</span>

				</div>

				<div class="package-learn-more">

				<ul>

					<li>Up to 10 products and categories inserted with training provided to easily add new products with images</li>

					<li>Ability to use various add-ons such as product variations, special offers, coupons, wishlist and more</li>

					<li>Integrated shopping cart and shipping cost calculator</li>

					<li>Manage customer order status and inventory tracking</li>

					<li>Automatic tax calculation</li>

					<li>Credit card checkout through PayPal</li>

					<li>Customer account login with view/track order page</li>

					<li>Up to 5 pages of content inserted</li>

					<li>Customisable fonts, colors, backgrounds, images and graphics to match your brand identity</li>

					<li>Optional home page image slider</li>

					<li>Up to 5 branded page layouts and menus, such as homepage, contact and internal information pages</li>

					<li>Website owners can create and maintain unlimited pages</li>

					<li>Access to admin tools for basic website editing</li>

					<li>Company social media buttons coded on site</li>

					<li>Google Analytics setup to track your visitors</li>

					<li>1 basic contact form with captcha anti-spam</li>

					<li>1 Google map for your business location</li>

					<li>Additional training videos included</li>



					

				</ul>

			</div>

			<div class="package-add-on">

				<a>

                	<span class="">.</span>

					<h4>VIEW MORE ADD ONS</h4>

                </a>

				<div class="add-ons-list">

					<ul>

						<li>

								<a>extra e-commerce features</a>

								<ul>

									<li>

										<span class="add-on-price">$150</span>

										<span class="add-on-des">per hour</span>

										Input of Existing Product Database                   

										

										

									</li>

									<li>

										<span class="add-on-price">$225</span>

										<span class="add-on-des">per year</span>

									     SSL Certificate for Secure Online Transactions                   

										

									</li>

									<li>

										<span class="add-on-price">$125</span>

										<span class="add-on-des">per year</span>

									     Subscription Recurring Payment Function (PayPal)             

										

									</li>

									<li>

										<span class="add-on-price">$250</span>

									     Additional Payment Gateway        

							</li>           

									

								

							</ul>

						</li>

									<li>

								<a>SEO</a>

								<ul>

								<li>

									<span class="add-on-price">$30</span>

									Basic Onsite SEO package                  

									<span class="add-on-des">Includes sitemap xml, metadata, titles, descriptions, robot.txt, URL canonicalisation, image alt-tags</span>

									

								</li>

								<li>

									<span class="add-on-price">$499</span>

									<span class="add-on-des">per month for first 6 months</span>

								     Ongoing SEO package                  

									

								</li>

							</ul>

						</li>

						<li>

							<a>PPC/Remarketing</a>

							<ul>

								<li>

								<span class="add-on-price">POA</span>

								Comprehensive Monthly SEM campaign <br>

								(Google Adwords)

								</li>

								

							</ul>

						</li>

						<li>

							<a>web hosting</a>

							<ul>

								<li>

									<span class="add-on-price">$42.90/yr</span>

									Domain Name (Domain Hosting Assistance Included)  

									

								</li>

								<li>

								<span class="add-on-price">$27.50/month</span>

								Web Hosting - Starter 

								</li> 

								<li>

								<span class="add-on-price">$42.90/month</span>

								Web Hosting - Business

								</li>

								<li>

								<span class="add-on-price">$86.90/month</span>

								Web Hosting - Professional  

								</li>           

									

								

							</ul>

						</li>

						<li>

							<a>social</a>

							<ul>



								<li>

								<span class="add-on-price">$100</span>

								Matching Fully Functional Blog                  

									

								</li>

								<li><span class="add-on-price">$100</span>

								Facebook and Twitter Feed                  

									

								</li>

								<li><span class="add-on-price">$100</span>

								Social Sharing buttons                   

									

								</li>

								<li><span class="add-on-price">$100</span>

									<span class="add-on-des">per platform</span>

									Social Media Branding                   

									

								</li>

							</ul>

						</li>

						<li>

							<a>extra site features</a>

							<ul>



								<li>

								<span class="add-on-price">POA</span>

								Additional Custom Pages                 

									

								</li>

								<li><span class="add-on-price">$100</span>

								Events Calendar                   

									

								</li>

								<li><span class="add-on-price">$50</span>

								Basic Booking Form                   

									

								</li>

								<li><span class="add-on-price">$50</span>

									Comment Fields                  

									

								</li>

								<li><span class="add-on-price">$150</span>

									Basic Members Area                    

									

								</li>

							</ul>

						</li>

						<li>

							<a>video</a>

							<ul>

								<li><span class="add-on-price">$50</span>

									YouTube Video Integration                   

									</li>

									<li><span class="add-on-price">$150</span>

									Photo Gallery/YouTube Video Gallery 

                  					<span class="add-on-des">(includes insertion of 10 photos/videos)  </span>

									</li>

							</ul>

						</li>



<li>

							<a>business cards</a>

							<ul>



								<li>

								<span class="add-on-price">$150</span>

								Matching Business Card Design

								<span class="add-on-des">

								(includes 1,000 printed business cards)</span>

								</li>

							</ul>

						</li>

							

							

				</div><!--close add-ons-list-->

			</div><!--close package-add-on-->

		

			<div class="package-estimate">

				<p>Estimate Turnaround Time: 4 Weeks</p>

			</div>

			<div class="package-quote">

			<h3>get this package</h3>

			</div>

		</div><!--close package-single-->

		<div class="package-single">

			<h3>Custom</h3>

			<div class="package-price-box">

				<span>starting from</span><h4><?php echo $_SESSION['notfromuk'] ? "$9,995" : "£5,499" ; ?></h4>

			</div>

			<div class="package-blurb">

				<h4>Full-service 100% custom website with intelligent design & functionality</h4>

			</div>

			<div class="package-content">

				<ul>

					<li>Unique design built </li>

					<li>Personal consultation to understand your business strategy</li>

					<li>Responsive and mobile-friendly, with agency-quality web and graphic design </li>

					<li>Include anything from shopping carts and social media integration to a custom blog or members area, plus much more</li>

					<li>Custom built in WordPress CMS</li>

					<li>Easy to use and update with 2 hours of personalised training</li>

				</ul>

			</div>

			<div><br/><br/><br/>

				<h2 class="center">Call Us Now for<br/> a Free Consultation</h2>

				<br/><br/><br/>

			</div>

			

			

			<div class="package-quote">

			<h3>get this package</h3>

			</div>

		</div><!--close package-single-->







	</div>

	                  <p class="call-us-now green-text">CALL <sup>US</sup> NOW <?php echo $_SESSION['notfromuk'] ? "1300 30 40 47" : "0330 055 5567" ; ?><br>

FOR A FREE QUOTATION</p>

                  </div>

		</div>

        </div>

        

    </div>

<style>

.folio-content-hidden{display:none;}

<?php 

if($_SESSION['notfromuk']){

	?>

.package-price-box h4:after {



content: "inc gst";

display: block;

font-size: 12px;

text-shadow: none;

text-align: center;



}

<?php }else{ ?>

.package-price-box h4:after {



content: "inc vat";

display: block;

font-size: 12px;

text-shadow: none;

text-align: center;



}

.package-price-box h4{

	font-family:'ms_reference_sans_serifRg' !important;

	font-size:38px !important;	

}

<?php } ?>

</style>







<script src="<?php echo get_template_directory_uri(); ?>/js/idangerous.swiper-2.1.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/idangerous.swiper.scrollbar-2.1.js"></script>

<script>
var jq = jQuery.noConflict();
if(jq('.if-mobile').css('display')=='block') {

		jq('.mobile-hide').remove();

}

	var last_node=0;

	function play_node(id){

		if(last_node==0){

			jq("#folio-box-"+id).addClass("active-folio");

				jq("#folio-box-"+id).parent().append(jq("#outer-folio-content-"+id).html());

				jq("#folio-content-"+id).slideDown(300,function(){

					  jq.scrollTo((jq("#folio-content-"+id).offset().top-jq("header").height()-10),300); 

					});

				last_node=id;

			

		}else{

			jq("#folio-box-"+last_node).removeClass("active-folio");	

			jq("#folio-box-"+id).addClass("active-folio");

			//jq("#folio-box-"+last_node).parent().animate({height:221},400);

			jq("#folio-content-"+last_node).slideUp(300);

			//jq("#folio-box-"+last_node).parent().children(".folio-content").remove();

			

			//jq("#folio-box-"+id).parent().animate({height:660},400);

			jq("#folio-box-"+id).parent().append(jq("#outer-folio-content-"+id).html());

			jq("#folio-content-"+id).slideDown(300,function(){

					  jq.scrollTo((jq("#folio-content-"+id).offset().top-jq("header").height()-10),300); 

					});

			last_node=id;

		}

	}

	function closefolio(id){

		jq(".folio-content").slideUp(300);

		last_node=0;

	}

	jq(document).ready(function(){

		jq('.package-add-on a').click(function(){

			jq(this).next('.add-ons-list').slideToggle();

			jq(this).toggleClass("open");

			});

		jq('.add-ons-list a').click(function(){

			jq(this).next('ul').slideToggle();

			jq(this).parent().siblings('li').children('ul').slideUp();

			});

		jq('.package-learn-more-btn span').click(function(){

			jq(this).parent().next('.package-learn-more').slideToggle().next('.package-add-on').slideToggle();

			

			});

	});







</script>

<?php get_footer(); ?>