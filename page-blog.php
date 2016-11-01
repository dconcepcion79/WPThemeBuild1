<?php
/*
Template Name: Blog
*/

?>

<?php get_header(); ?>

<section id="main">
<!-- TWO COLUMN -->


<div class="container clearfix">

<div class="blog">

<?php 
//the query

$args = array(
    'cat'=> 491,
    'posts_per_page' => 1,
  );
query_posts($args); ?>

<?php //the loop
while ( have_posts() ) : the_post(); ?>

<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<?php endwhile;
// Reset Query
wp_reset_query();
?>

</div>

<aside class="side">

<?php 
 if ( is_active_sidebar( 'yip-now-widget' ) ) : 
 dynamic_sidebar( 'yip-now-widget' ); 
endif; 
?>
</aside>

</div>


 <?php wp_reset_query(); ?>




<section id="greybnr">
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<p><?php the_field("blog_cta"); ?><button onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/premium/'"><?php the_field("sign_up"); ?></button></p>
<?php else: ?>
<p><?php the_field("blog_cta"); ?><button onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/premier/'"><?php the_field("sign_up"); ?></button></p>
<?php endif; ?>
</section>

</section>

<?php get_footer(); ?>
