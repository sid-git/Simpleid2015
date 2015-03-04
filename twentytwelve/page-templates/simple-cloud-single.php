<?php
/**
 * Template Name: Simple Cloud Single Page
 */
get_header(); ?>
    <div class="content sc-page">
       

          
          
            <div class="row white-bg row-padding-bottom cloud-solution">
             	<div class="row row-line clearfix">
            		<h2 class="mainHeading blue-text white-text-bg"><?php the_title(); ?></h2>
            	</div>
            	<div class="grid clearfix side-padding">
           
                    <div class="one-col ">
                        <p class="row-padding-bottom"><?php the_content(); ?></p>
                   </div>
               
            	</div>
          </div>
           
        
    </div>
 
<?php get_footer(); ?>