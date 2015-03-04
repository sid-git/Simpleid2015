<?php
/*
Template Name: sem
*/




 ?>
<style>
body {background:#EC4D51;
color:#fff;
}
.before-form{
width: 100%;
margin: 0 auto;
color: black;
margin-bottom: 20px;	
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


</style>
<?php wpcf7_enqueue_scripts(); ?>
<?php get_header(); ?>

<div  class=" red-bg row sem-form" >
<div class="formLook ">
<h1>Search Engine Marketing Campaign Brief</h1>
<div class="side-padding">
<?php the_content(); ?>
</div>
</div>
</div>








<?php get_footer(); ?>



