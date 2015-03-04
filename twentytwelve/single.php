<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


<div class="blog-content content simple-bg padding-top">
    <div class="row white-bg clearfix">
        <div class="grid  clearfix" >
            <div class="blog-left">
                <h1 class="simple-text"><a class="simple-text" href="blog"><sup>the</sup> simple blog</a></h1>
                <?php while ( have_posts() ) : the_post(); ?>				
                
                <div class="blog-box blog-single-content">
                    <div class="blog-box-img">
                    	<a href="<?php echo get_permalink(); ?>">
							<?php the_post_thumbnail(); ?> 
                        </a>
                    </div>
                    <h2><?php the_title(); ?></h2>
                    <span class="simple-text"><?php the_date(); ?></span>
                    <div class="post-content">
						<?php the_content(); ?>
                    </div>
                    
                    <div class="blog-author clearfix">
                        <h3><?=get_the_author_meta('first_name'); ?> <?=get_the_author_meta('last_name'); ?></h3>
                        <span><?php echo get_the_author_meta('authortitle'); ?></span><br/>
                        <p>@<a class="simple-text">Simple iD</a></p>
                        <div class="social-box">
                            <ul>
                                <?php if(get_the_author_meta('twitter_url')!=''){ ?>
                                <li><a href="<?=get_the_author_meta('twitter_url'); ?>" class="tw" target="_blank">twitter</a></li>
                                <?php } ?>
                                <?php if(get_the_author_meta('facebook_url')!=''){ ?>
                                <li><a href="<?=get_the_author_meta('facebook_url'); ?>" class="fb" target="_blank">facebook</a></li>
                                <?php } ?>
                                <?php if(get_the_author_meta('gplus_url')!=''){ ?>
                                <li><a href="<?=get_the_author_meta('gplus_url'); ?>" class="gg" target="_blank">google</a></li>
                                <?php } ?>
                                <?php if(get_the_author_meta('linkedin_url')!=''){ ?>
                                <li><a href="<?=get_the_author_meta('linkedin_url'); ?>" class="ld" target="_blank">linkedin</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                   	
                    
                         <div class="author-details">
                             <div class="author-img">
                                  <img src="<?php echo get_field('photo','user_'.get_the_author_meta('id')) ?>" alt="<?=get_the_author_meta('first_name'); ?> <?=get_the_author_meta('last_name'); ?>" />
                             </div>
                             <p><?=get_the_author_description(); ?></p>
                          
                          </div>   
                      </div>
                    
                      <div class="blog-box-info clearfix">
                            <div class="blog-info-cat">
                            	<h4>Category</h4>
                             	<?php

								$category = get_the_category(); 
								
								$cat= $category[0];
								
								
								
								if($cat->cat_name=='Online Marketing'){
								
								?>
								
															<a href="<?php echo get_category_link($cat->term_id); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/simple_red.png"></a>
								
								<?php  }
								
								if($cat->cat_name=='Creative Services'){
								
								?>
								
															<a href="<?php echo get_category_link($cat->term_id); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/simple_green.png"></a>
								
								<?php  }
								
								if($cat->cat_name=='Simple Cloud'){
								
								?>
								
															<a href="<?php echo get_category_link($cat->term_id); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/simple_blue.png"></a>
								
								<?php  }  ?>

                            </div><!--close blog info cat-->

                            <div class="blog-info-tags">

                                <h4>tags</h4>
    
                                <p><?php
    
									$posttags = get_the_tags();
									
									if ($posttags) {
									
									  foreach($posttags as $tag) {
									
										echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name . ';</a> '; 
									
									  }
									
									}
									
									?></p>
                            </div><!--close blog info tags-->
                            
                            
                        </div><!--blog-box-info-->
                        
                        
                        <div class="blog-comment">
                        
                        	<?php
				
							$fields = array(
										'author' => '<input id="author" placeholder="NAME*" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' />',
										'email'  => '<input id="email" placeholder="EMAIL*" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' />',
										);
				
							$comments_args = array(
												'fields'               => $fields,
												'comment_notes_before' => '<span>No comments yet, be the first!</span><br /><br />',
												'comment_notes_after' => '',
												'title_reply'          =>'COMMENTS',
												'comment_field'        => '<textarea id="comment" placeholder="YOUR COMMENT*" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
												'label_submit'         => 'submit »',
												);
				
				 			?>
                        
                        
                      		<?   comment_form($comments_args); ?>
                        </div>
                        
                        
                </div><!--close blog-single-content-->
                
                
                

				


			<?php endwhile; // end of the loop. ?>
            
            
                
               
                
            </div><!--close left-->
            <div class="blog-right">
                <?php get_sidebar(); ?>

            </div>
            
        </div>
       </div> 
        
    </div>

	
   

<?php get_footer(); ?>