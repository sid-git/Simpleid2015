<?php
/**
 * Template Name: standard Page
 */
get_header(); ?>
    <div class="content standard-page">
       

           <?php while ( have_posts() ) : the_post(); ?>
              <?php if(is_page(2638)||is_page(2749)){ ?>
            <div class="demo-img"></div>
        <?php }  ?>
           
            <div class="row white-bg row-padding-bottom ">
  
             	<div class="row row-line clearfix">
            		<h2 class="mainHeading simple-text white-text-bg"><?php the_title(); ?></h2>
            	</div>

              
              <div class="row grid side-padding clearfix row-padding-bottom">
                <div class="one-col clearfix row-padding-bottom" >

                 <?php  the_content(); ?>
                
                </div>
              </div>
            </div>
            <?php endwhile; // end of the loop. ?>
             
            
        
    </div>
 
<?php get_footer(); ?>