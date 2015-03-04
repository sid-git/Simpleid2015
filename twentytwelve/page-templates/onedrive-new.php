<?php

/**

 * Template Name: onedrive new

 */

get_header(); ?>

	<div class="office-page ">
	<div class="collapse navbar-collapse">
		<nav class="navbar-justified inner-page-nav " role="navigation" >
			<div class="container">
				<?php include('office-menu.php'); ?>
			</div>
		</nav>
	</div>
    <div class="container-fluid new-banner office-banner onedrive-banner section-spacer">
    	<div class="container">
    		<div class="row">
    			<div class="banner-img">
    				<a href="//fast.wistia.net/embed/iframe/wds46ofnb4?popover=true" class="wistia-popover[height=338,playerColor=7b796a,width=600]"><img src="<?php echo get_template_directory_uri(); ?>/img/office-banner-devices.png" onclick="$('.office-banner iframe').toggle();"/></a><script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
    			</div>
    			

    		</div>
    		<div class="row">
    			<div class="col-md-8 col-centered text-center banner-des">
    				<h1>Share files simply</h1>
    				<p>
    					Store, sync, share, and easily collaborate on files securely for businesses of any size.
    				</p>
    				<!--<a href="#" class="btn transparent"> ask now</a>-->
    			</div>
    		</div>
    	</div>

    </div>
    <div class="container">
    	<div class="row section-spacer">
    		<div class="col-md-6">
    			<h2 class="heading orange text-center">OneDrive</h2>
    			<!--<h3 class="heading red text-center">
    				Top 10 Reasons Businesses are<br/> 
	Switching to  Office 365
    			</h3>-->
    			<p>
    				OneDrive for business is your personal online storage service, easily comparable to one you may already know, Dropbox. Store files in your OneDrive and access them from anywhere or even send links to people so they can see it based on the permissions given.
    			</p>
    		</div>	
    		<div class="col-md-6">
    			<img src="<?php echo get_template_directory_uri(); ?>/img/One_drive.jpg" alt="">
    		</div>
    	</div>
    </div>
   
    <div class="container">
    	<div class="row ">
    		<div class="col-md-10 col-centered section-spacer">
    			<!--<h2 class="text-center heading orange">Your Office in the Cloud</h2>-->
				<div class="row top-spacer">
					<div class="col-md-3 ">
						<img src="<?php echo get_template_directory_uri(); ?>/img/microsoft-word.jpg" alt="microsoft word">
						<p class="top-spacer">
							<h4 class="heading red">Get your files anywhere</h4><small>With 1 TB of personal document storage, you can store your files online so you can access them anytime, anywhere, from your PC, tablet, or phone.</small>
						</p>
					</div>
					<div class="col-md-3 ">
						<img src="<?php echo get_template_directory_uri(); ?>/img/microsoft-outlook.jpg" alt="microsoft outlook">
						<p class="top-spacer">
							<h4 class="heading red">Share internally and externally</h4><small>You need to share files, with people inside your company and outside it, and you need to do it simply and with confidence. With Office 365 you can share documents efficiently, while still being able to control who can see and edit each file. </small>
						</p>
					</div>
					<div class="col-md-25">
						<img src="<?php echo get_template_directory_uri(); ?>/img/microsoft-powerpoint.jpg" alt="microsoft powerpoint">
						<p class="top-spacer">
							<h4 class="heading red">Find shared documents fast</h4><small>No need to hunt down the document a colleague or partner shared with you. You can find it fast with the Shared with me view in your personal online storage site.</small>
						</p>
					</div>
					<div class="col-md-25">
						<img src="<?php echo get_template_directory_uri(); ?>/img/microsoft-excel.jpg" alt="microsoft excel">
						<p class="top-spacer">
							<h4 class="heading red">Send large files with ease</h4><small>Upload and send files up to 2GB in size, internally or externally with a link.</small>
						</p>
					</div>
					
				</div>
    		</div>
    	</div>
    </div>
    
    </div>


    
    


<?php get_footer(); ?>