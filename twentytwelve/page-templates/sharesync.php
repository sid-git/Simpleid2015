
<?php
/**
 * Template Name: ShareSync Page
 */
get_header(); ?>
    <div class="content sc-page">
       
        	<div class="row  blue-bg section "  id="cloudsolutions">
        	 <div class="grid">
        	 	<div class="banner ">
                    <h2 class=" white-text"><?php the_field('tagline'); ?></h2>
                    
        	 	</div>
        	 </div>
            </div>
          
          
            <div class="row white-bg row-padding-bottom cloud-solution">
             	<div class="row row-line clearfix">
            		<h2 class="mainHeading blue-text white-text-bg"><?php the_field('first_heading'); ?></h2>
            	</div>
            	<div class="grid clearfix side-padding">
           
                   <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
       
      <?php endwhile; // end of the loop. ?>
               </div>
            </div>
 <div class="row white-bg row-padding-bottom">
             	<div class="row row-line clearfix">
            		<h2 class="mainHeading blue-text white-text-bg"><?php the_field('sign_up_heading'); ?></h2>
            	</div>
            	<div class="grid clearfix side-padding">
            	<p class="om-p"><?php the_field('sign_up_description'); ?>
 
</p>
<div class="one-col">
<div class="sc-page-forms">
<?php echo do_shortcode(get_post_meta($post->ID,'form_short_code',true)); ?>
</div>
</div>
           </div>
           </div>
            
        
    </div>
 
<?php get_footer(); ?>