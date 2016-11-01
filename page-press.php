<?php
/*
Template Name: Press
*/
 get_header(); ?>

<section id="faq" class="clearfix">

<!-- TWO COLUMN -->


 
<div class="container">

<?php
            wp_nav_menu( array(
                'menu'              => 'Press menu',
                'theme_location'    => 'Press Menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'pressnav',)
            );
			  
        ?>
</div>

  <section class="press-fullbg clearfix">

  <div class="container clearfix">
  <header class="press-header">
    <?php the_content();?>
  </header>
  </div>
</section>

     
 <div class="container clearfix" style="clear: left;"> 


 
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<!-- <div class="presscenter">
  <div class="press-left">
    <video class="press-video" width="100%" height="auto" autoplay="" loop="">
 
      <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/yiptv-promo.m4v" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </div>
  <div class="press-right">
    <?php the_content();?>
  </div>
</div> -->
 
   <?php endwhile; endif; ?>
 

<?php if (is_page(1225)): ?>
<div class="press">
<?php
// The Query
$args = array(
    // 'cat'=> 63,
    'cat'=> 164,
    'posts_per_page' => 12,
  );
  query_posts($args); ?>

<?php while ( have_posts() ) : the_post(); ?>
  	<div class="press-post clearfix">
          <div class="press-left clearfix">
          <img class="press-logo" src="<?php the_field("press-logo"); ?>" />
            <h5><?php the_date(); ?></h5>
            <h1><?php the_title(); ?></h1>
            <div class="excerpt">
              <p><?php the_excerpt(); ?></p>
            </div>

            <?php
              if(get_field('newswire-link'))
              {
                echo '<a target="_blank" class ="read-more-button" href="';
                the_field('newswire-link');
                echo '"> Read More...';
                echo '</a>';
              }
              else {
                echo '<a target="_blank" class ="read-more-button" href="';
                the_permalink();
                echo '"> Read More...';
                echo '</a>';
              }
              ?>


          </div>
          <div class="press-right">
            <blockquote>
              <p><?php the_field("press_quote"); ?></p>
            </blockquote>

<!--             <?php get_sidebar(); ?> -->

          </div>
    </div>
<?php endwhile; ?>

</div>

<?php // Reset Query
wp_reset_query();
?>

<?php else: ?>
<div class="press">
<?php
// The Query
$args = array(
    'cat'=> 867,
    'posts_per_page' => 12
  );
  query_posts($args); ?>


<?php while ( have_posts() ) : the_post(); ?>
	
<div class="press-post clearfix">
          <div class="press-left clearfix">
          <img class="press-logo" src="<?php the_field("press-logo"); ?>" />
            <h5><?php the_date(); ?></h5>
            <a href="<?php echo get_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
            <div class="excerpt">
              <p><?php the_excerpt(); ?></p>
            </div>
            <a class="read-more-button" href="<?php echo get_permalink(); ?>">Read More..</a>
          </div>
          <div class="press-right">
            <a href="<?php echo get_permalink(); ?>">
              <blockquote>
                <p><?php the_field("press_quote"); ?></p>
              </blockquote>
            </a>

<!--             <?php get_sidebar(); ?> -->

          </div>
    </div>

<?php endwhile;	?>



</div>
<?php // Reset Query
wp_reset_query();
?>


<?php endif; ?>
<!-- <div class="pressarchive">
<?php get_sidebar(); ?>
</div> -->


</div>






</section>
 




<section id="greybnr">
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<p><?php the_field("press"); ?><button class="green" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/free/'"><?php the_field("sign_up"); ?></button></p>
<?php else: ?>
<p><?php the_field("press"); ?><button class="green" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/gratis/'"><?php the_field("sign_up"); ?></button></p>
<?php endif; ?>
</section>

 

<?php get_footer(); ?>
