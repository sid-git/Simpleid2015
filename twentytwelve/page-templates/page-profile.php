<?php
/*
Template Name: profile
*/



 get_header();

 ?>
<style>


 .checkbox-229 .wpcf7-list-item {
display: block;}
body {background:#767aba;
color:#fff;
}

#wpcf7-f66-o1 td {color:#000;}
#wpcf7-f66-o1 span.wpcf7-not-valid-tip {
color:#000 !important}

#wpcf7-f66-o1 label {color:#000}
#wpcf7-f66-o1 div.wpcf7-validation-errors {
	background:#f7e700;
}
#wpcf7-f66-o1 div.wpcf7-mail-sent-ok {
	background:#398f14;
}
#wpcf7-f66-o1 input[type="submit"] {
	line-height: 20px;
	padding:10px 0;
	margin-bottom: 30px;
	font-weight: 600;
cursor:pointer;
   font-family: 'dincondensedcregular' !important;
background: #000;
border: none !important;
width: 200px;
padding: 18px 0;
text-transform: uppercase;
color:#fff;
font-size:22px;
}
#wpcf7-f66-o1 input[type="submit"]:hover {color: #fff; background:#767aba;}
input:focus {border:1px solid grey !important;}
#wpcf7-f66-o1 input {
	border:1px solid rgb(169, 169, 169) !important;

margin-top:5px;
	font-size: 12px;
	    font-family: 'ms_reference_sans_serifRg';
}



h1 {
	text-transform: uppercase;
   font-family: 'dincondensedcregular' !important;
margin-bottom: 30px;
background: #47484B;
padding: 20px 0;
text-align: center;
display: block;
color: #fff;
}
#wpcf7-f66-o1 table tr td input [type="text"] { border:none !important; }
}
div.fold {
display:block;
text-indent: -9999px;
position:absolute;
left:0;
bottom:0;
	width: 0px;
height: 0px;
border-style: solid;
border-width: 50px 50px 0 0;
border-color: #e1e1e1 transparent transparent transparent;
}


#wpcf7-f66-o1 span.wpcf7-not-valid-tip {
color: #EC4D51!important;}
#wpcf7-f66-o1 table tr td:first-of-type {width:230px;}
#wpcf7-f66-o1 table {margin:0 auto;}
#wpcf7-f66-o1 table tr {height:40px;}
</style>
<?php get_template_part( 'assets/php/partials/nav', 'header' ); ?>
<div class="business-profile">
<div  class="row" >
<div class="formLook">
 <?php while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>

        <?php the_content(); ?>
       
      <?php endwhile; // end of the loop. ?>


</div>
</div>
</div>








<?php get_footer(); ?>



