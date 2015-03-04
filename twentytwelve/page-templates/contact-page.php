<?php



/**



 * Template Name: Contact Page



 */



get_header(); ?>



 



    <div class="content sc-page">



      



        	<div class="row  section simple-bg"  id="cloudsolutions">



        	 



        	 	<div class="banner ">



                        <?php 



						if($_SESSION['notfromuk']){



							



							echo do_shortcode('[intense_map type="Roadmap" width="100%" height="400px" zoom="15" fit_bounds="0" address="Level 4, 517 Flinders Lane, Melbourne VIC 3000" latitude="-37.816156" longitude="144.985945" scale_control="1" hue="#0b1624" saturation="-20" lightness="4"]



[intense_map_marker address="Level 4, 517 Flinders Lane, Melbourne VIC 3000 " title="Simple iD" description="Head Office" color="#d0dce0" markertype="Marker" markertext="Simple iD is an online marketing agency with dedicated web design and graphic design teams. Our studio is based in the great Australian city of Melbourne." animation="DROP" markerimage="http://simpleid.com.au/wp-content/themes/twentytwelve/img/simple-map.png" /]



[/intense_map]'); 		



						}else{



							echo do_shortcode('[intense_map type="Roadmap" width="100%" height="400px" zoom="15" fit_bounds="0" address="Delta House, Belper Road, Heaton Mersey, SK43QW" latitude="53.409234" longitude="-2.203349" scale_control="1" hue="#0b1624" saturation="-20" lightness="4"]



[intense_map_marker address="Delta House, Belper Road, Heaton Mersey, SK43QW" title="Simple iD" description="Los Angeles Office" color="#d0dce0" markertype="Marker" markertext="Simple iD is an online marketing agency with dedicated web design and graphic design teams. Our studio is based in the great Australian city of Melbourne." animation="DROP" markerimage="http://simpleid.com.au/wp-content/uploads/2014/04/SimpleiD_Anchor.png" /]



[/intense_map]'); 		



						}



       ?>



        	 	</div>



        	



            </div>



          



          



            <div class="row white-bg row-padding-bottom">



             	<div class="row row-line clearfix">



            		<h2 class="mainHeading simple-text white-text-bg">Get <sup>in</sup> touch</h2>



            	</div>



            	<div class="grid clearfix side-padding">



           



                    <div class="simple-contact-box clearfix">



                    	<div class="two-col">



                    		<ul>



                    				<li>



                    					<h3>office 365</h3>



                    					<span>Work smart, fast, wherever</span>



                    					<a onclick="ga('send', 'event', 'Cloud Email', ' Contact Us Page', 'Link Clicked');" href="mailto:office365@simpleid.com" class="blue-text">office365@simpleid.com</a>



                    				</li>



                    				<li>



                    					<h3>online marketing</h3>



                    					<span>Promoting you online</span>



                    					<a onclick="ga('send', 'event', 'Marketing Email', ' Contact Us Page', 'Link Clicked');" href="mailto:sem@simpleid.com" class="red-text">sem@simpleid.com</a>



                    				</li>



                    				<li>



                    					<h3>creative services</h3>



                    					<span>Telling your story</span>



                    					<a onclick="ga('send', 'event', 'Creative Email', ' Contact Us Page', 'Link Clicked');" href="mailto:creative@simpleid.com" class="green-text">creative@simpleid.com</a>



                    				</li>



                    		</ul>	



                    	</div>



                    	<div class="two-col contact-details">



                    		<h3>head office: <?php echo $_SESSION['notfromuk'] ? "melbourne" : "manchester" ; ?></h3>



                    		<table>



                    			<tr>



                    				<td><h3>address</h3></td>



                    				<td>



                                    <?php if($_SESSION['notfromuk']){ ?>



                    				Level 4, <br/>



									517 Flinders Lane, <br/>



									Melbourne, VIC 3000<br/>



                                    <?php }else{  ?>



									Delta House, Belper Road, <br/>



									Heaton Mersey, SK43QW<br/>



                                    



                                    <?php } ?>



                    				</td>



                    			</tr>



                    			<tr>



                    				<td><h3>phone</h3></td>



                    				<td>



                    				<?php echo $_SESSION['notfromuk'] ? "1300 30 40 47" : "0330 055 5567" ; ?>



                    				</td>



                    			</tr>



                    			<tr>



                    				<td><h3>email</h3></td>



                    				<td>



                    				<a onclick="ga('send', 'event', 'Sales Email', ' Contact Us Page', 'Link Clicked');" href="mailto:solutions@simpleid.com">solutions@simpleid.com</a>



                    				</td>



                    			</tr>



<tr>



                    				<td><h3>other offices</h3></td>



                    				<td>



                    				<?php echo $_SESSION['notfromuk'] ? "MANCHESTER, AUCKLAND, LOS ANGELES" : "MELBOURNE, AUCKLAND, LOS ANGELES" ; ?>



                    				</td>



                    			</tr>



                    		</table>



                    	</div>



                    </div>

                    <div>
                <?php echo do_shortcode( '[contact-form-7 id="2674" title="Contact Page Contact"]' ) ?>

            </div>



               </div>



            </div>



            



            



        



    </div>



 



<?php get_footer(); ?>