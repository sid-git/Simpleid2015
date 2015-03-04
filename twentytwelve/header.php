<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width" />
<meta name="viewport" content="initial-scale=1">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js" type="text/javascript"></script>-->
<?php if((!is_page(array(2602,2604,2606,2609,2612,2614,2616,2618,2620,2622,2526)))&&(!is_home())){ ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/simple-notdelete.css" id="oldcss" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/edit.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/global.css" rel="stylesheet" type="text/css">
<?php } ?>
<!-- Bootstrap -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/simple.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/92ddbb5b-7060-4daf-af08-167d00a49485.css"/>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!--[if lte IE 8]>
<link href="<?php echo get_template_directory_uri(); ?>/css/simple-ie8.css" rel="stylesheet" type="text/css">
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->
<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/flexslider/flexslider.css" type="text/css" media="screen" />-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/Respond-master/src/respond.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
<!--<script defer src="<?php echo get_template_directory_uri(); ?>/flexslider/jquery.flexslider.js"></script>-->
<?php wp_head(); ?>
<a href="https://plus.google.com/115276818330831146724/" rel="publisher" /></a>
</head>
<?php
//check visitor's ip
/*$ip = $_REQUEST['REMOTE_ADDR']; // the IP address to query
$query = @unserialize(file_get_contents('http://ip-info.io/'.$ip));
if($query && $query['status'] == 'success') {
	$countries=array('BM','CA','GL','MX','PM','US','AG','AI','AW','BB','BS','CW','DM','DO','GD','GP','HT','JM','KN','KY','LC','MQ','MS','PR','SX','TC','TT','VC','VG','VI');
  if(in_array($query['countryCode'],$countries)){
	$_SESSION['fromau']=false;  
  }else{
	 $_SESSION['fromau']=true;
  }
}*/
// include the php script
include("geoip.inc");
// open the geoip database
$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
// to get country code
$country_code = geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']);
  if($country_code=='GB'){
	$_SESSION['notfromuk']=false;  
  }else{
	 $_SESSION['notfromuk']=true;
  }
//to make sure the previous GEO for north america is working.
$_SESSION['fromau']=true;
?>
<script>
function isIE () {
  var myNav = navigator.userAgent.toLowerCase();
  return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
}
if (isIE () == 8) {
document.write('<link href="<?php echo get_template_directory_uri(); ?>/css/simple-ie8.css" rel="stylesheet" type="text/css">');
}
</script>
<body <?php body_class(); ?>>
<div class="if-mobile"></div>
<!--<nav class="mobile-nav tabletbelow" id="mobile-main-nav">
     <?php /*?><?php
$defaults = array(
	'menu'            => 'Mobile Menu',
	'container'       => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '<ul>%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);
wp_nav_menu( $defaults );
?><?php */?>
    </nav>-->
	<div class="top-header">
        <div class="container header-top">
          <div class="page-header clearfix">
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>">simple id</a>
            <h3 class="col-md-4 pull-right text-right call-action"><small><a href="<?php bloginfo('url'); ?>/contact">GET IN CONTACT</a></small><br/><?php echo $_SESSION['notfromuk'] ? "1300 30 40 47" : "0330 055 5567" ; ?></h3>
          </div>
        </div>
    </div>
	<nav class="navbar navbar simple-nav " role="navigation">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav simple-main-nav">
	        <li class="menu-office"><a href="<?php bloginfo('url'); ?>/solution">IT Solution</a></li>
	        <li class="menu-marketing"><a href="<?php bloginfo('url'); ?>/online-marketing">Online Marketing</a></li>
	        <li class="menu-design"><a href="<?php bloginfo('url'); ?>/web-design-creative-services">Creative Services</a></li>
	      </ul>
	     
	      
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
<?php if(is_page(2526)||is_page(2749)||is_page(2638)||is_page(2622)||is_page(2620)||is_page(2618)||is_page(2616)||is_page(2614)||is_page(2612)||is_page(2609)||is_page(2606)||is_page(2604)){ ?>
<div class="float-quote">
<span>
Get a Free Quote<br/>
1300 30 40 47</span>
</span>
</div>
<?php } ?>
<!--<div class="homeContent content relative">
  <header>
       <div class="grid clearfix">
       <div class="tabletbelow" id="mobile-toggle">
       <a href="#mobile-main-nav" class="open-menu">
       nav
       </a>
       <a href="#" class="close-menu">
       nav
       </a>
       </div>
            <div class="logo">
            	<a href="<? bloginfo('url') ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/SimpleiD_logo.png" /></a>
            </div>
            <div class="top-nav tabletbelowhide clearfix">
            	<ul id="nav" class="clearfix">
                	<li><a href="<?php bloginfo('url') ?>">HOME<br/></a></li>
                    <li><a href="#">SERVICES<br/></a>
                    	<ul class="sub-menu">
                    	<div class="grid">
                        	<li><a href="<?php bloginfo('url') ?>/office365">OFFICE 365</a></li>
                            <li><a href="<?php bloginfo('url') ?>/online-marketing">ONLINE MARKETING</a></li>
                            <li><a href="<?php bloginfo('url') ?>/web-design-creative-services">CREATIVE SERVICES</a></li>
                        </div >
                        </ul>
                    </li>
                    <li><a href="<?php bloginfo('url') ?>/blog">BLOG<br/></a></li>
                </ul>
            </div>
            <div class="contact mobile-hide">
            	<div class="phone"><?php echo $_SESSION['notfromuk'] ? "1300 30 40 47" : "0330 055 5567" ; ?></div>
                <div class="links tabletbelowhide"><a href="<?php bloginfo('url') ?>/about">ABOUT US</a> | <a href="<?php bloginfo('url') ?>/contact">CONTACT US</a></div>
            </div>
       </div>
    </header>
-->
    