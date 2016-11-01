<?php
/*
Template Name: FAQ
*/
 get_header(); ?>

<section id="faq" class="clearfix">
<!-- TWO COLUMN -->

 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
<div class="container">
<div class="summary">
<?php the_field("summary"); ?>
</div>
<div id="question">
<?php the_content();?>
</div>

</div>


 




<section id="greybnr">
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<p><?php the_field("faq_cta"); ?><button class="green" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/free/'"><?php the_field("signup_faq"); ?></button></p>
<?php else: ?>
<p><?php the_field("faq_cta"); ?><button class="green" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/gratis/'"><?php the_field("signup_faq"); ?></button></p>
<?php endif; ?>
</section>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
