<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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

                <h1 class="simple-text"><sup>the</sup> simple blog</h1>

                <h3>Your Place for all the latest STUFF from Simple ID</h3>

                

              <?php 




						while ( have_posts() ) : the_post();

						

							

						?>

                <div class="blog-box">
<a href="<?php echo get_permalink(); ?>">
                    <div class="blog-box-img front">

                     <?php the_post_thumbnail(); ?> 

                    

                    </div>

                    <h2><?php the_title(); ?></h2></a>

                    <span class="simple-text"><?php the_date(); ?></span>

                    <p><?php echo get_the_excerpt(); ?></p>

                    <a href="<?php echo get_permalink(); ?>">read post »</a>

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

                            </div>

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

                            </div>

                        </div>

                </div>

                <?php endwhile; ?>

<?php wp_simple_pagination(); ?>	


            </div>

            <div class="blog-right">

            <?php get_sidebar(); ?>

             


            </div>

        </div>

       </div> 

        

    </div>


<?php get_footer(); ?>