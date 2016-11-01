<?php 
/*
Template Name: Copa
*/
?>

<?php get_header(); ?>

<section id="main" class="clearfix">
<!-- TWO COLUMN -->

 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    

<div class="container">


<div class="copa">
<div class="hero">
<img src="<?php the_field('hero-banner');?>">

<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<p><button onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/premium/'"><?php the_field("signup"); ?></button></p>
<?php else: ?>
<p><button onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/premier/'"><?php the_field("signup"); ?></button></p>
<?php endif; ?>

</div>

<div class="container">

<h1><?php the_title(); ?></h1>
<div class="bracketpdf"><?php the_content();?></div>

</div>

  <?php endwhile; endif; ?>
  

<?php 

if(is_page(array(4684,4905))){
	
$args = array(
    'cat'=> 517,
    'posts_per_page' => 20,
	'order'=> 'ASC',
  );
  
}


if(is_page(5552)){
	
$args = array(
    'cat'=> 555,
    'posts_per_page' => 20,
	'order'=> 'ASC',
  );
  
}

if(is_page(5594)){
	
$args = array(
    'cat'=> 558,
    'posts_per_page' => 20,
	'order'=> 'ASC',
  );
  
}


  
  query_posts($args);

// The Loop
while ( have_posts() ) : the_post();

if(get_field('date')){
	echo '<div class="bracket clearfix">';
	echo '<h2>';
	the_field('date');
	echo '</h2>';
	
	//GAME ONE
	echo '<div class="time">';
	the_field('time');
	echo '</div>';
	echo '<div class="game">';
	echo '<p>';
	the_field('country-name-1');
	echo '</p>';
	echo '<img src="';
	the_field('country-flag-1');
	echo '">';
	echo '<span class="vstext">vs</span>';
		echo '<img src="';
	the_field('country-flag-2');
	echo '">';
	echo '<p>';
	the_field('country-name-2');
	echo '</p>';
	echo '</div>';
}

if(get_field('finalscore')){
	echo '<div class="final">';
	the_field('finalscore');
	echo '</div>';
}
	
	
	
	//GAME TWO
if (get_field('time2')){	
	echo '<div class="time">';
	the_field('time2');
	echo '</div>';
	echo '<div class="game">';
	echo '<p>';
	the_field('country-name-3');
	echo '</p>';
	echo '<img src="';
	the_field('country-flag-3');
	echo '">';
	echo '<span class="vstext">vs</span>';
		echo '<img src="';
	the_field('country-flag-4');
	echo '">';
	echo '<p>';
	the_field('country-name-4');
	echo '</p>';
	echo '</div>';
	
	if(get_field('finalscore2')){
	echo '<div class="final">';
	the_field('finalscore2');
	echo '</div>';
	}
}
	echo '</div>';

endwhile;
// Reset Query
wp_reset_query();
 ?>

</div>

</div>


 




<section id="greybnr">
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<p><?php the_field("cta"); ?><button onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/premium/'"><?php the_field("signup"); ?></button></p>
<?php else: ?>
<p><?php the_field("cta"); ?><button onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/premier/'"><?php the_field("signup"); ?></button></p>
<?php endif; ?>
</section>



<?php get_footer(); ?>
