<?php

/*

Template Name: Plain Text Page

*/





 ?>

<style>

body {background:#EC4D51;

color:#fff;

}

.formLook {background:#e1e1e1; border:1px solid #d1caca; width:960px; margin:70px auto; padding:20px;}





.thankyousem h1 {

	text-transform: uppercase;

   font-family: 'dincondensedcregular' !important;

margin-bottom: 30px;

background: #47484B;

padding: 20px 0;

text-align: center;

display: block;

color: #fff;

}

.thankyousem p{

	color:#000;

}

</style>

<?php get_header(); ?>



<div  class="row thankyousem" style="margin:30px auto; width:80%; padding:0 10%">

<div class="formLook">




<p style="width:80%;margin:0 auto; padding-bottom:30px; padding:20px;">
<?php the_content(); ?>
</p>



</div>

</div>

















<?php get_footer(); ?>







