<?php

/**

 * Template Name: UBT Home Page

 */

get_header(); ?>

  <!-- Modernizr -->

<script src="<?php echo get_template_directory_uri(); ?>/flexslider/demo/js/modernizr.js"></script>

  <!-- Modernizr -->

  <!-- Wistia iframe API -->

  <script src="//fast.wistia.com/static/iframe-api-v1.js"></script>

  

<script>

/*// Can also be used with $(document).ready()

$(window).load(function() {

  $('.flexslider').flexslider({

    animation: "slide"

  });

});*/

// Can also be used with $(document).ready()

  $(window).load(function(){

  // Wistia handler.

  wistiaEmbed = document.getElementById( 'player_1' ).wistiaApi;

 

  // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.

  $( '.flexslider' )

    .flexslider({

      animation: 'slide',

      useCSS: false,

      animationLoop: false,

      smoothHeight: true,

      start: function( slider ) {

        $('body').removeClass( 'loading' );

      }, 

      before: function ( slider ) {

        wistiaEmbed.pause();

      }

  });

 

  wistiaEmbed.bind( 'play', function() {

    jQuery( '.flexslider' ).flexslider( 'pause' );

  });

 

  wistiaEmbed.bind( 'end', function() {

    jQuery( '.flexslider' ).flexslider( 'play' );

  });

});

</script>

<div class="row" id="home-banner">

           

            <div class="banner">

            <section class="slider">

        <div class="flexslider">

          <ul class="slides">

<li class="simple-bg ">

            <div class="grid relative">

             <img src="http://www.simpleid.com.au/wp-content/uploads/2014/05/ubt.jpg" center />

            

</div>

            </li>

<li id="youtubevideo" class="slider-youtube">

              <div class="grid ">

              <h2 class="white-text center padding-top">Introducing Simple iD YOUR BUSINESS ONLINE</h2>

           <iframe id="player_1" src="//fast.wistia.net/embed/iframe/bye9d4rzky" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="580" height="326"></iframe>

</div>

            </li>

                <li class="slider-promo">

            <div class="grid relative">

                           <img src="<?php echo get_template_directory_uri(); ?>/img/500.jpg" />

              <a class="banner-btn" href="googleoffer">view offer »</a>

</div>

            </li>

            

            <li class="slider-cloud">

<div class="grid relative">

    

              

                <h2 class="center white-text">FRUSTRATION-FREE.  SECURE.  FLEXIBLE.  EFFICIENT.  SIMPLE.<br/>

                <span style="font-family: 'palatino linotype';text-transform: initial;">Welcome to your new work environment.</span> </h2>

                <a class="banner-btn" href="simple-cloud">Enter the cloud »</a>

</div>

            </li>

        

          </ul>

        </div>

      </section>

            </div>

       

            </div>

<div class="homeContent content">

  <!-- Demo CSS -->

  

          

          

            <div class="row business-online white-bg ">

             <div class="row row-line clearfix">

              <h2 class="mainHeading simple-text">Working <sup>with</sup> ubt<br/> since 2008</h2>

              </div>

              <div class="grid side-padding clearfix">

    <div class="one-col">

      <p class="p">Our work with UBT began through the managed I.T. branch of our business called YOUR IT. Our services have since expanded from web hosting to email for business, online marketing services, and web design, all rolled under our new name, Simple iD. As a UBT-approved supplier we currently support over 3,000 UBT businesses from across the globe with our range of services, backing everything up with 24x6 premium support. </p>

</div>

           

               

            </div>

            </div>

             <div class="row row-padding-bottom white-bg">

             <div class="row  clearfix">

              <h2 class="heading-no-line simple-text">SUPPORTING <sup>YOUR</sup> COMMUNITY</h2>

              </div>

              <div class="grid side-padding clearfix">

    <div class="one-col">

      <p class="p">At Simple iD, we have grown to understand and appreciate your community, the business challenges and opportunities you face, and are here to provide real solutions to support and grow your business online. <?php echo $_SESSION['fromau'] ? "We're also proud to offer UBT-specific pricing for all of our services, which includes a rebate back to the community." : "" ; ?> For pricing on our cloud, marketing and design services, view the links below. </p>

</div>

           

              

               

            </div>

            </div>

              <div class="row business-online white-bg">
          <div class="row row-line clearfix mobile-hide">
              <h2 class="mainHeading "><sup>YOUR</sup> BUSINESS ONLINE</h2>
          </div>
          <div class="grid clearfix">
     
              <div class="three-col">
                  <div class="swiper-container swipe-1">
                          <div class="swiper-wrapper">
                              <div class="home-three-tab swiper-slide home-swipe" >
                                  <a href="simple-cloud"><img class="mobile-only"src="<?php echo get_template_directory_uri(); ?>/img/simple-white.png" /><img class="mobile-hide"src="<?php echo get_template_directory_uri(); ?>/img/simple_blue.png" /></a>
                                  <h3 class="blue-text"><a href="simple-cloud" class=" blue-text mobile">SIMPLE CLOUD</a><span class="sub-head">Worry-free technology</span></h3>
                                  <p class="mobile-hide">Do more with less using the power of cloud-based solutions to boost productivity, regulate IT costs, enhance flexibility and drive innovation.<br/><br></p>
                                  <div class="block-links mobile-hide">
                                      <a class="rollover-blue" href="simple-cloud">SIMPLIFY IT</a>
                                  </div>
                              </div>
                              <div class="blue-quick-links clearfix swiper-slide home-swipe relative" >
                                  <h3 class="blue-text mobile-hide">QUICK LINKS</h3>
                                  <p>
                                      <ul class="quick-links hover-blue ">
                                          <li><a href="<? bloginfo('url')?>/simple-cloud/#cloudsolutions"><span>Cloud computing & cloud hosting</span><span class="blue-text"> »</span></a></li>
                                          <li><a href="<? bloginfo('url')?>/sharesync"><span>ShareSync secure file sharing</span><span class="blue-text"> »</span></a></li>
                                          <li><a href="<? bloginfo('url')?>/simple-cloud/#emailforbusiness"><span>Email & hosted exchange services</span><span class="blue-text"> »</span></a></li>
                                          <li><a href="<? bloginfo('url')?>/lync"><span>Lync secure instant messaging</span><span class="blue-text"> »</span></a></li>
                                          <li><a href="<? bloginfo('url')?>/emailarchiving"><span>Email archiving</span><span class="blue-text"> »</span></a></li>
                                          <li><a href="<? bloginfo('url')?>/simple-cloud/#webhostingdomains"><span>Web hosting & domains</span><span class="blue-text"> »</span></a></li>
                                      </ul>
                                  </p>
                              </div>
                          </div>
                   </div>
              </div>
               <div class="three-col">
                   <div class="swiper-container swipe-2">
                              <div class="swiper-wrapper">
                                  <div class="home-three-tab swiper-slide home-swipe" >
                                      <a href="online-marketing-agency"><img class="mobile-only"src="<?php echo get_template_directory_uri(); ?>/img/simple-white.png" /><img class="mobile-hide"src="<?php echo get_template_directory_uri(); ?>/img/simple_red.png" /></a>
                                      <h3 class="red-text"><a href="online-marketing-agency" class=" red-text mobile">ONLINE MARKETING</a><span class="sub-head">Promoting you online</span></h3>
                              
                                      <p class="mobile-hide">Armed with a deep understanding of the digital world, we develop strategies that drive customers to your business, helping you achieve your objectives and prepare the future.</p>
                                      <div class="block-links mobile-hide">
                                          <a class="rollover-red " href="online-marketing-agency">PROMOTE ME</a>
                                      </div>
                                  </div>
                      
                                  <div class="red-quick-links clearfix swiper-slide home-swipe relative" >
                                      <h3 class="red-text mobile-hide">QUICK LINKS</h3>
                                      <p>
                                          <ul class="quick-links hover-red">
                                              <li><a href="<? bloginfo('url')?>/ppc/#freesearchengine"><span>SEM assessment</span> <span class="free-txt">FREE</span><span class="red-text"> »</span></a></li>
                                              <li><a href="<? bloginfo('url')?>/seo/#seoevaluation"><span>SEO site evaluation</span> <span class="free-txt">FREE</span><span class="red-text"> »</span></a></li>
                                              <li><a href="<? bloginfo('url')?>/online-marketing-agency/#casestudy"><span>Case Study: Helping Andrews Parking take off</span><span class="red-text"> »</span></a></li>
                                          </ul>
                                      </p>
                                  </div>
                              </div>
                      </div>
                </div>
               <div class="three-col">
                    <div class="swiper-container swipe-3">
                          <div class="swiper-wrapper">
                              <div class="home-three-tab swiper-slide home-swipe" >
                                <a href="web-design-creative-services"><img class="mobile-only"src="<?php echo get_template_directory_uri(); ?>/img/simple-white.png" /><img class="mobile-hide"src="<?php echo get_template_directory_uri(); ?>/img/simple_green.png" /></a>
                                <h3 class="green-text"><a href="web-design-creative-services" class=" green-text mobile">CREATIVE SERVICES</a><span class="sub-head">Telling your story</span></h3>
                  
                                <p class="mobile-hide">To stay ahead, you need brains and beauty. Luckily, we have both. Leave it to us to push beyond simple pixels and make you stand out in your industry.<br/><br></p>
                                <div class="block-links mobile-hide">
                                    <a class="rollover-green" href="web-design-creative-services">PROVE IT</a>
                                </div>
                            </div>
                            <div class="green-quick-links clearfix swiper-slide home-swipe relative" >
                                <h3 class="green-text mobile-hide">QUICK LINKS</h3>
                                <p>
                                      <ul class="quick-links hover-green">
                                          <li><a href="<? bloginfo('url')?>/web-design-creative-services/#creativeservices"><span>Web & design services</span><span class="green-text"> »</span></a></li>
                                          <li><a href="<? bloginfo('url')?>/web-design-creative-services/#portfolio"><span>Our portfolio of work</span><span class="green-text"> »</span></a></li>
                             
                                      </ul>
                                </p>
                            </div>
                        </div>
                  </div>
              </div>
       </div>
      
</div>

         <!--    <div class="row ">

               <div class="row row-line ">

                    <h2 class="mainHeading"> Call <sup>to</sup> Action</h2>

               </div>

              <div class="grid clearfix">

                <a class="action-btn"href="#">Action Button »</a>

              </div>

            </div> -->

</div>

<?php get_footer(); ?>