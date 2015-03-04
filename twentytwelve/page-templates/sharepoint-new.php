<?php

/**

 * Template Name: sharepoint new

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
    <div class="container-fluid new-banner office-banner sharepoint-banner section-spacer">
    	<div class="container">
    		<div class="row">
    			<div class="banner-img">
    				<a href="//fast.wistia.net/embed/iframe/x7pvl14suc?popover=true" class="wistia-popover[height=338,playerColor=7b796a,width=600]"><img src="<?php echo get_template_directory_uri(); ?>/img/office-banner-devices.png" onclick="$('.office-banner iframe').toggle();"/></a><script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
    			</div>
    			

    		</div>
    		<div class="row">
    			<div class="col-md-8 col-centered text-center banner-des">
    				<h1>Collaborate on docs and projects from anywhere</h1>
    				<p>
    					Keep everyone working together, wherever they happen to be.<br /> Collaborate on documents with teammates, share reports with business partners, and connect with customers.
    				</p>
    				<!--<a href="#" class="btn transparent"> ask now</a>-->
    			</div>
    		</div>
    	</div>

    </div>
    <div class="container">
    	<div class="row section-spacer">
    		<div class="col-md-6">
    			<h2 class="heading orange text-center">SharePoint</h2>
    			<!--<h3 class="heading red text-center">
    				Top 10 Reasons Businesses are<br/> 
	Switching to  Office 365
    			</h3>-->
    			<p>
    				One minute you’re working on documents with colleagues nearby, and the next you’re working with customers overseas on different files. No problem with Office in the cloud, which gives you lots of ways to store, organize, and share files with people inside and outside your organization. No headaches over version control, either. Your files are always up to date, so everyone can access the latest master copy.
    			</p>
    		</div>	
    		<div class="col-md-6">
    			<img src="<?php echo get_template_directory_uri(); ?>/img/Sharepoint.jpg" alt="">
    		</div>
    	</div>
    </div>
   
    <div class="container">
    	<div class="row ">
    		<div class="col-md-10 col-centered section-spacer">
    			<!--<h2 class="text-center heading orange">Your Office in the Cloud</h2>-->
				<div class="row top-spacer">
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/microsoft-word.jpg" alt="microsoft word">
						<p class="top-spacer">
							<h4 class="heading red">Keep teams in sync</h4><small>Collaboration is the way business gets done today, but the challenge of collaboration is keeping everyone working together on the most recent version of a document. You know how much time is wasted when that doesn’t happen. SharePoint gives you many different ways to help ensure that everyone can find exactly the files they need fast and that all team members are moving forward together.</small>
						</p>
					</div>
					<div class="col-md-3 ">
						<img src="<?php echo get_template_directory_uri(); ?>/img/microsoft-outlook.jpg" alt="microsoft outlook">
						<p class="top-spacer">
							<h4 class="heading red">Organize project email</h4><small>Keep project emails and shared documents together in one place with a project-specific mailbox only team members can access, so no time is wasted searching for what you need.</small>
						</p>
					</div>
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/microsoft-powerpoint.jpg" alt="microsoft powerpoint">
						<p class="top-spacer">
							<h4 class="heading red">Use team sites for projects</h4><small>Share ideas, group documents and organize projects in a team site. To help track the progress of projects, you can assign tasks across a team and see them on a timeline.</small>
						</p>
					</div>
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/microsoft-excel.jpg" alt="microsoft excel">
						<p class="top-spacer">
							<h4 class="heading red">Work together on the same file</h4><small>Invite people outside your organization to access files online. You control who gets to see and edit what. Easily add, respond to, and track comments and status updates.</small>
						</p>
					</div>
					
				</div>
    		</div>
    	</div>
    </div>
    
    </div>


    
    


<?php get_footer(); ?>