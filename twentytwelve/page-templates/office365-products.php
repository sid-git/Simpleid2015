<?php
/**
 * Template Name: office 365 products
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
       <<div class="container-fluid new-banner banner-it red-orange-bg section-spacer">
        <div class="container">
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-md-5 banner-des">
                    <h1>I.T. Solutions For The Small Business.</h1>
                    <p> 
                        Whether you’re working in your office or on the go, you get a familiar, top-of-the-line set of productivity tools. 
                    </p>
                      <a href="   " class="btn learn-more">Learn More</a>
                    <!--<a href="#" class="btn transparent"> ask now</a>-->
                </div>

            </div>
        </div>
        
    </div>
        <div class="container">



                <?php


                // check if the repeater field has rows of data
                if( have_rows('product_features') ):
                    $count=0;

                    // loop through the rows of data
                    while ( have_rows('product_features') ) : the_row();
                        $count++;
                        ?>

                        



                        <div class="row section-spacer">

                            <?php if($count % 2 == 0){ ?>

                            <div class="col-md-5 office-repeater">
                                    <?php

                                    // check if the flexible content field has rows of data
                                    if( have_rows('feature_media') ):

                                         // loop through the rows of data
                                        while ( have_rows('feature_media') ) : the_row();

                                            if( get_row_layout() == 'image' ):

                                                echo '<img src="'.get_sub_field('feature_grid_image').'" alt="" />';

                                            elseif( get_row_layout() == 'video' ): 

                                                echo get_sub_field('feature_grid_video');

                                            endif;

                                        endwhile;

                                    else :

                                        // no layouts found

                                    endif;

                                    ?>
                                </div>

                            <?php } ?>


                            <div class="col-md-7 office-repeater">
                                <h2 class="heading orange">
                                    <?php the_sub_field('feature_title'); ?>
                                </h2>


                                <?php

                                // check if the repeater field has rows of data
                                if( have_rows('feature_paragraph') ):

                                    // loop through the rows of data
                                    while ( have_rows('feature_paragraph') ) : the_row();

                                        ?>

                                        <div class="office-repeater-single">
                                    
                                            <h4 class="heading red orange">
                                                <?php the_sub_field('paragraph_title'); ?>
                                            </h4>
                                            <p>
                                               <?php the_sub_field('paragraph_content'); ?>
                                            </p>
                                            <a href="<?php the_sub_field('paragraph_link'); ?>" class="learn-more">
                                                learn more »
                                            </a>
                                        </div>

                                        <?

                                    endwhile;

                                else :

                                    // no rows found

                                endif;

                                ?>






                                
                            </div>
                            
                            <?php if($count % 2 != 0){ ?>

                            <div class="col-md-5 office-repeater">
                                    <?php

                                    // check if the flexible content field has rows of data
                                    if( have_rows('feature_media') ):

                                         // loop through the rows of data
                                        while ( have_rows('feature_media') ) : the_row();

                                            if( get_row_layout() == 'image' ):

                                                echo '<img src="'.get_sub_field('feature_grid_image').'" alt="" />';

                                            elseif( get_row_layout() == 'video' ): 

                                                echo get_sub_field('feature_grid_video');

                                            endif;

                                        endwhile;

                                    else :

                                        // no layouts found

                                    endif;

                                    ?>
                                </div>

                            <?php } ?>


                        </div>


                        <?php

                    endwhile;

                else :

                    // no rows found

                endif;

                ?>

        	


    	</div> 
    
    
    
    
    </div>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/kinetic-v5.1.0.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/simple-flower.js"></script>


<?php get_footer(); ?>