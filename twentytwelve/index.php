<?php

/**

 * The main template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * For example, it puts together the home page when no home.php file exists.

 *

 * @link http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */

get_header(); ?>


<div class="home-page">
    <div class="container-fluid home-three-block">
    	<div class="container">
    		<div class="row container">
	    		<a href="<?php bloginfo('url'); ?>/office365">
                <div class="col-md-4 col-sm-4 home-office home-three-box-single">
	    			<div class="three-block-des">
	    				<h2>Office 365 <span class="solid-arrow"></span><small> Work smarter</small></h2>
	    			</div>
	    		</div>
                </a>
                <a href="<?php bloginfo('url'); ?>/online-marketing">
	    		<div class="col-md-4 col-sm-4 home-marketing home-three-box-single">
	    			<div class="three-block-des">
	    				<h2>Online Marketing <span class="solid-arrow"></span><small> Promoting you online</small></h2>
	    			</div>
	    		</div>
                </a>
                <a href="<?php bloginfo('url'); ?>/web-design-creative-services">
	    		<div class="col-md-4 col-sm-4 home-design home-three-box-single">
	    			<div class="three-block-des">
	    				<h2>Design <span class="solid-arrow"></span><small> Telling your story</small></h2>
	    			</div>
	    		</div>
                </a>
    		</div>
    	</div>
    </div>
</div>


<?php get_footer(); ?>