<?php

/*
Template Name: Success Page
*/

?>

<?php get_header(); ?>

<div class="container clearfix" style="padding-top:150px">

<!-- Start of Left Column with Main Content -->
<div class="left-column clearfix">
  
	<?php the_content(); ?>

</div>
<!-- End of Left Column with Main Content -->

<!-- Start of Right Column Sidebar with 3 Points -->
    <div class="right-column clearfix">
     
     <?php the_field('rtcol'); ?>
     
    </div>
<!-- End of Right Column Sidebar with 3 Points -->
</div>

<?php get_footer(); ?>