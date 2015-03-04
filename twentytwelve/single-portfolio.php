<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="profolio-content content green-bg padding-top">
    <div class="row white-bg clearfix portfolio-padding">
         <div class="grid portfolio-padding clearfix" >
       <div class="portfolio-top">
        <h1 class="green-text"><?php the_title(); ?> | <?php the_field('categories') ?> </h1>
        <a href="<?php bloginfo('url'); ?>/web-design-creative-services/#portfolio" class="back-to-folio">back to portfolio »</a>
        </div>

           <div class="portfolio-left">
                
                <?php the_content(); ?>
                
                
</div>
            <div class="portfolio-right">
                <h3 class="green-text">About the job</h3>
                <span><?php echo get_field('about_the_job_short'); ?></span><br/><br/>

                <p><?php echo get_field('about_the_job_description'); ?></p>
                             <div class="blog-info-tags">
                            <h4>tags</h4>
                            <p><?php

$posttags = get_terms('ptags');

if ($posttags) {

  foreach($posttags as $tag) {

    echo $tag->name . '; '; 

  }

}

?></p>
                            </div>
                <div class="folio-share"><h3>share this work </h3>
                <ul>
					<li><a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>" target="_blank" class="tw">twitter</a></li>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank" class="fb">facebook</a></li>
                    <li><a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank" class="gg">google</a></li>
                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?=get_permalink(); ?>&title=<?=get_the_title(); ?>&source=<?=get_bloginfo('name')?>" target="_blank" class="ld">linkedin</a></li>
                </ul>

                </div> 
			 <?php
			$related_work=array();
			 $related_work=get_post_meta( get_the_ID(), 'related_work', true );
			 if($related_work[0]>1){
			  ?>
                <h3 class="related-works">Related work</h3>
                <ul class="related-works">
                <?php foreach($related_work as $related_w){ ?>
                    <li>
                        <a href="<?php echo get_permalink($related_w); ?>"><?php echo get_the_post_thumbnail( $related_w, $size, $attr ); ?> 
                        <div class="related-hover">
                        <h4><?php echo get_the_title($related_w); ?></h4></div>
                        </a>
                    </li>
                    
                    <?php } ?>
                   
                </ul>
                <?php } ?>
            </div>
        </div>
       </div> 
        
    </div>
    
    

	
   

<?php get_footer(); ?>