<?php

/**

 * The template for displaying the footer

 *

 * Contains footer content and the closing of the #main and #page div elements.

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */

?>

	

<!--   <footer>

    <div class="grid">

       <p>Copyright © 2014  Simple iD. All rights reserved.Use of this website signifies your agreement to the Terms of Use and <a style="color:#fff" href="<?php echo bloginfo(url); ?>/website-privacy-statement">Privacy Statement</a>. <a style="color:#fff"href="<?php echo bloginfo(url); ?>/sitemap_index.xml">Sitemap</a></p>

    </div>  

    <div class="footer-contact">

    	<a href="<?php bloginfo('url'); ?>/contact">

       		contact us <span class="animated-arrow ">»</span>

       </a>

    </div>                                                      

    </footer>-->
    <?php if(is_tree(2818)){ //if it is IT solution page or its children pages ?>
   
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<img  class="soundsgreat" src="<?php echo get_template_directory_uri(); ?>/img/soundsgreat.png" alt="">
    		</div>
    	</div>
    </div>
     <div class="container-fluid red-orange-bg">
    	<div class="row orang-bg ">

    		<a  class="lets-talk btn red-orange-bg">Get in Touch</a>
    	</div>
    </div>
     <div class="container-fluid red-orange-bg lets-talk-box">
     	<div class="container">
     		<div class="row">
     			<div class="col-md-12">
     				<h2 class=" white-text">Call Us Now on 1300 30 40 37<br/>or Send Us a Message</h2>
		<?php echo do_shortcode( '[contact-form-7 id="2918" title="get in touch"]' ); ?>
     			</div>
     		</div>
     	</div>	
		
    </div>
    <?php } ?>
    <footer>
    	<div class="container top-spacer">
    		<div class="row">
	    		<div class="col-md-3 footer-box location">
	    			<h4>Office Locations</h4>
	    			<ul>
	    				<li>
	    					<a href="#" class="link-under" >Australia </a> <span class="arrow"></span><br/>
	    					1300 30 40 47
	    				</li>
	    				<li>
	    					<a href="#" class="link-under" >New zealand </a> <span class="arrow"></span><br/>
	    					0800 96 87 48
	    				</li>
	    				<li>
	    					<a href="#" class="link-under" >United Kingdom </a> <span class="arrow"></span><br/>
	    					0330 055 5567
	    				</li>
	    			</ul>
	    		</div>
	    		<div class="col-md-3 footer-box connect">
	    			<h4>Connect</h4>
	    			
	    			<ul class="list-unstyled">
	    				<li>
	    					<a href="https://www.facebook.com/simpleidaustralia" target="_blank" class="" ><span class="fa fa-facebook"></span> facebook </a> <span class="arrow"></span>
	    				</li>
	    				<li>
	    					<a href="https://twitter.com/Simple_ID_" target="_blank" class="" ><span class="fa fa-twitter"></span> twitter </a> <span class="arrow"></span>
	    				</li>
	    				<li>
	    					<a href="https://www.linkedin.com/company/simple-id" target="_blank" class="" ><span class="fa fa-linkedin"></span> linked in </a> <span class="arrow"></span>
	    				</li>
	    				<li>
	    					<a href="https://plus.google.com/+SimpleiDEastMelbourne/" target="_blank" class="" ><span class="fa fa-google"></span> google + </a> <span class="arrow"></span>
	    				</li>
	    			</ul>
	    		
	    		</div>
	    		<div class="col-md-3 footer-box">
	    			<h4>The simple blog</h4>
	    			<h5>Your Place for the latest News from Simple id</h5>
	    			LATEST POST:<br/>
                    <?php
					$args = array( 'numberposts' => '1','post_type' => 'post', );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){?>
                        <a href="<?php echo get_permalink($recent["ID"]); ?>" class="orange-text"><?php echo $recent["post_title"]; ?></a> <br/>
		    			<a href="<?php echo get_permalink($recent["ID"]); ?>" class="link-under">READ POST</a><span class="arrow"></span>
					<?php } ?>
	    		</div>
	    		<div class="col-md-3 footer-box">
	    			<h4>About Simple iD</h4>
	    			<p>
	    				We make doing business simple by delivering powerful, scalable and fully-supported solutions to propel businesses to success.
	    			</p>
	    			<a href="<?php echo bloginfo(url); ?>/about" class="link-under">LEARN MORE</a><span class="arrow"></span>
	    		</div>
    		</div>
    		<div class="row footer-bottom">
    		<div class="col-md-3">
    			Copyright © 2014 Simple iD.    
				All rights reserved. 
    		</div>
    		<div class="col-md-3">
    			Use of this website signifies your agreement to the Terms of Use.
    		</div>
    		<div class="col-md-3">
    			<a href="<?php echo bloginfo(url); ?>/website-privacy-statement" class="link-under">PRIVACY STATEMENT</a>
    		</div>
    		<div class="col-md-3">
    			<a href="<?php echo bloginfo(url); ?>/sitemap_index.xml" class="link-under">SITEMAP</a> 
    		</div>
    	</div>
    	</div>
    </div>	
    </footer>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    
	<script>
	
	var jq = jQuery.noConflict();
	
    	/* affix the navbar after scroll below header */
		jq('.inner-page-nav').affix({
		      offset: {
		        top: jq('.header-top').height()+jq('.simple-nav').height()
		      }
		});	

		/* highlight the top nav as scrolling occurs */
		jq('body').scrollspy({ target: '.inner-page-nav' })


		/* smooth scrolling for nav sections */
		
		/* smooth scrolling for nav sections */
		jq('#training-navbar').affix({
		      offset: {
		        top: jq('.inner-page-nav').height() + jq('.new-banner').height()+ jq('#training-navbar').height()
		      }
		});	

		/* highlight the top nav as scrolling occurs */
		jq('body').scrollspy({ target: '#training-navbar' });

		jq('.float-quote').affix({
		      offset: {
		        top: jq('.inner-page-nav').height() + jq('.new-banner').height()+ jq('.float-quote').height()
		      }
		});	

		/* highlight the top nav as scrolling occurs */
		jq('body').scrollspy({ target: '.float-quote' });
		


  
	var countclick = false;	
    jq('.lets-talk.btn').click(function(){
    	
    	jq('.lets-talk-box').slideToggle();
    	if(!countclick){
    		jq(this).text('close');
    		countclick = true;
    	}else{
    		jq(this).text("get in touch"); 
    		countclick=false;
    	}
    });
  	
  	jq('div.moreabout').click(function(){
  	    if(jq(this).css('height') == '40px') {
    	jq(this).css('height':"300px");

	}
  });
		
    </script>
    
  



    <script  type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nav.js"></script>

    <script  type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo.js"></script>



<script type="text/javascript">

  jq(function() {

	  jq('.nav-justified').onePageNav({
    		currentClass: 'active'
		});
	  jq('.training-nav').onePageNav({
    		currentClass: 'active'
		});
		
	  jq('.training-nav-sub').onePageNav({
    		currentClass: 'active'
		});
		
		

	  jq(".scrolltotop a").click(function(){

		  jq.scrollTo(0,300); 

		});

	  jq(".mobile-hide.scrolltotop").click(function(){

		  jq.scrollTo(0,300); 

		});

	  jq(".jq-open-menu").click(function(){

			jq(location).attr('href', '#mobile-main-nav');

			jq('.talk-content').hide();

		});

	  jq(".talktabs").click(function(){

			jq('.talk-content').show();

		});

		jq(".talk-close").click(function(){

			jq('.talk-content').hide();

		});



	  

	<?php if(!is_home()){ ?>

	if(jq( "#side-nav" ).length>0){

		jq(".sidebar-text").html(jq(".issub.current a").attr("title"));

				

		jq('#side-nav').onePageNav({

			end: function() {

				jq(".sidebar-text").html(jq(".issub.current a").attr("title"));

			},

			scrollChange: function() {

				jq(".sidebar-text").html(jq(".issub.current a").attr("title"));

			}

		});  

	}

	<?php } ?>

	

	if(jq('.if-mobile').css('display')=='block' && jq( ".service-mobile-tabs" ).length>0) {

		jq( ".service-mobile-tabs" ).tabs();

		

		 var mySwiper4 = new Swiper('.swipe-4',{

			scrollContainer: true,

			scrollbar: {

			  container: '.swiper-scrollbar'

			}

		  })



  	}

	  

    jq( "#tabs" ).tabs();

	

	if(jq('.if-mobile').css('display')=='none') {

		

		<?php if(is_home()){ ?>

		jq('#talkicon').animate({'top': '-75px'}, {

				duration: 100, 

				complete: function() {

					jq('#talkicon').animate({top: '-50px'},80);

				}});

		var s=setTimeout(function() {jq('#talkicon').animate({'top': '-65px'}, {

				duration: 50, 

				complete: function() {

					jq('#talkicon').animate({top: '-50px'},30);

				}

			});

		},180);

		 var r=setTimeout(function() {jq('.letsTalk').animate({right: '10px'},100)},500);

		 var t=setTimeout(function() {jq('.letsTalk').animate({right: '-203px'},100);jq('#talkicon').animate({height: '0px'},300);},1300);

		<?php }  ?>

		

	  jq('.letsTalk').mouseover(function(){

		jq(this).css('right','10px');

		});

	  jq('.letsTalk').mouseout(function(){

		jq(this).css('right','-203px');

		});

	}

  });

  </script>

  

	<div class="mobile-hide scrolltotop"><a>back to top</a></div>

  



<?php if(is_page(14)){ // online marketing page ?>

<div class="sidebar">

   <div class="sidebarTop">

   &nbsp;

   </div>

  <?php

$defaults = array(

	'menu'            => 'Online Marketing Side',

	'container'       => '',

	'menu_class'      => 'red',

	'menu_id'         => 'side-nav',

	'echo'            => true,

	'fallback_cb'     => 'wp_page_menu',

	'link_after'      => '&nbsp;<span class="red-text">&raquo;</span>',

	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

	'depth'           => 0,

	'walker'          => ''

);

wp_nav_menu( $defaults );

?>

   <div class="sidebarBottom">

   &nbsp;

   </div><div class="sidebar-text"></div>

   </div>

   <style>@media only screen and (max-width:743px){

	.sidebar{background:rgba(232,79,83,0.85);} 

	#side-nav>li>ul>li>a {border:1px solid #ed2628;}

	#side-nav li>ul>li.current>a { background: #ed2628;}  

   }

   </style>

<?php } ?>

<?php if(is_page(2351)){ // seo page ?>

<div class="sidebar">

   <div class="sidebarTop">

   &nbsp;

   </div>

    <?php

$defaults = array(

	'menu'            => 'SEO Side',

	'container'       => '',

	'menu_class'      => 'red',

	'menu_id'         => 'side-nav',

	'echo'            => true,

	'fallback_cb'     => 'wp_page_menu',

	'link_after'      => '&nbsp;<span class="red-text">&raquo;</span>',

	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

	'depth'           => 0,

	'walker'          => ''

);

wp_nav_menu( $defaults );

?>

   <div class="sidebarBottom">

   &nbsp;

   </div><div class="sidebar-text"></div>

   </div>

   <style>@media only screen and (max-width:743px){

	.sidebar{background:rgba(232,79,83,0.85);} 

	#side-nav>li>ul>li>a {border:1px solid #ed2628;}

	#side-nav li>ul>li.current>a { background: #ed2628;}  

   }

   </style>

<?php } ?>

<?php if(is_page(2362)){ // ppc page ?>

<div class="sidebar">

   <div class="sidebarTop">

   &nbsp;

   </div>

    <?php

$defaults = array(

	'menu'            => 'PPC Side',

	'container'       => '',

	'menu_class'      => 'red',

	'menu_id'         => 'side-nav',

	'echo'            => true,

	'fallback_cb'     => 'wp_page_menu',

	'link_after'      => '&nbsp;<span class="red-text">&raquo;</span>',

	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

	'depth'           => 0,

	'walker'          => ''

);

wp_nav_menu( $defaults );

?>

   <div class="sidebarBottom">

   &nbsp;

   </div><div class="sidebar-text"></div>

   </div>

   <style>@media only screen and (max-width:743px){

	.sidebar{background:rgba(232,79,83,0.85);} 

	#side-nav>li>ul>li>a {border:1px solid #ed2628;}

	#side-nav li>ul>li.current>a { background: #ed2628;}  

   }

   </style>

<?php } ?>

<?php if(is_page(16)){ // creative service page ?>

<div class="sidebar">

   <div class="sidebarTop">

   &nbsp;

   </div>

     <?php

$defaults = array(

	'menu'            => 'Creative Services Side',

	'container'       => '',

	'menu_class'      => 'green',

	'menu_id'         => 'side-nav',

	'echo'            => true,

	'fallback_cb'     => 'wp_page_menu',

	'link_after'      => '&nbsp;<span class="green-text">&raquo;</span>',

	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

	'depth'           => 0,

	'walker'          => ''

);

wp_nav_menu( $defaults );

?>

   <div class="sidebarBottom">

   &nbsp;

   </div><div class="sidebar-text"></div>

   </div>

   <style>@media only screen and (max-width:743px){

	.sidebar{background:rgba(156,221,157,0.9);} 

	#side-nav>li>ul>li>a {border:1px solid #37df37;}

	#side-nav li>ul>li.current>a { background: #37df37;}  

   }

   @media only screen and (max-width: 960px) and (min-width: 744px){

	#side-nav>li>ul>li>a {border:1px solid #37df37;}

	#side-nav li>ul>li.current>a { background: #37df37;}   

   }

   </style>

<?php } ?>

<?php if(is_page(29)){ // simple cloud page ?>

<div class="sidebar">

   <div class="sidebarTop">

   &nbsp;

   </div>

   <?php

$defaults = array(

	'menu'            => 'Simple Cloud Side',

	'container'       => '',

	'menu_class'      => 'blue',

	'menu_id'         => 'side-nav',

	'echo'            => true,

	'fallback_cb'     => 'wp_page_menu',

	'link_after'      => '&nbsp;<span class="blue-text">&raquo;</span>',

	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

	'depth'           => 0,

	'walker'          => ''

);

wp_nav_menu( $defaults );

?>

   <div class="sidebarBottom">

   &nbsp;

   </div><div class="sidebar-text"></div>

   </div>

   <style>@media only screen and (max-width:743px){

	.sidebar{background:rgba(152,155,203,0.85);} 

	#side-nav>li>ul>li>a {border:1px solid #767aba;}

	#side-nav li>ul>li.current>a { background: #767aba;}  

   }

   @media only screen and (max-width: 960px) and (min-width: 744px){

	#side-nav>li>ul>li>a {border:1px solid #767aba;}

	#side-nav li>ul>li.current>a { background: #767aba;}   

   }

   </style>

<?php } ?>

<?php wp_footer(); ?>

<!-- Google Analytics Code -->

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  

  ga('create', 'UA-177978-5', 'auto');

  ga('require', 'displayfeatures');

  ga('send', 'pageview');


 


</script>

<!-- End Google Analytics Code -->



<!-- Simple iD Google Code for Remarketing Tag -->

<!--------------------------------------------------

Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup

--------------------------------------------------->

<script type="text/javascript">

/* <![CDATA[ */

var google_conversion_id = 976306407;

var google_custom_params = window.google_tag_params;

var google_remarketing_only = true;

/* ]]> */

</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">

</script>

<noscript>

<div style="display:inline;">

<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/976306407/?value=0&amp;guid=ON&amp;script=0"/>

</div>

</noscript>

</body>

</html>