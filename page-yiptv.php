<?php
/*
Template Name: YipTV
*/
?>

<?php get_header(); ?>
<!-- POST QUERY -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container yiptop clearfix">
<h2><?php the_field('header');?></h2>

<div class="yiptv">
<img src="<?php the_field('col-img-1'); ?>" >
<p><?php the_field('col-text-1');?></p>
</div>

<div class="yiptv">
<img src="<?php the_field('col-img-2'); ?>" >
<p><?php the_field('col-text-2');?></p>
</div>

<div class="yiptv">
<img src="<?php the_field('col-img-3'); ?>" >
<p><?php the_field('col-text-3');?></p>
</div>



</div>

<div class="container clearfix">

<h2><?php the_field('header2');?></h2>

<div class="yiptv">
<img src="<?php the_field('col-img-4'); ?>" >
<p><?php the_field('col-text-4');?></p>
</div>

<div class="yiptv">
<img src="<?php the_field('col-img-5'); ?>" >
<p><?php the_field('col-text-5');?></p>
</div>

<div class="yiptv">
<img src="<?php the_field('col-img-6'); ?>" >
<p><?php the_field('col-text-6');?></p>
</div>



</div>



<!-- MORE CHANNELS -->

<?php
// The Query

$categories = get_the_category(); 


if($categories){

foreach($categories as $category){
$args = array(
    'cat'=> $category->cat_ID,
    'posts_per_page' => 8,
  );



query_posts($args);

	echo '<section ><div id="whtbnr"><p>';
	
	if(!get_field('channel-type')){
	echo 'More ';
	echo $category->cat_name;
	echo ' Channels';
	}
	
	if(get_field('channel-type')){
	the_field('channel-type');
	}
	
	echo '</p></div></section>';


echo '<div class="poplanding clearfix">';
// The Loop
while ( have_posts() ) : the_post();
	echo '<div class="networkicons clearfix">';
	echo '<div class="networklogo">';
	echo '<a href="';
	echo esc_url(home_url('/'));
	echo '/tv-channels/';
	echo $category->cat_name;
	echo '/';
	echo( basename(get_permalink()) ); 
	echo '/">';
	the_post_thumbnail('singlepost-thumb');
	echo '</a>';
	echo '</div>';
    echo '<h2>';
    the_content();
    echo '</h2>';
	echo '</div>';
endwhile;

echo '</div>';
	
}

echo '</section>';	
// Reset Query
wp_reset_query();
}
?>



<!-- MORE CHANNELS -->


<!-- POPULAR SHOWS -->

<?php

$pagetags = get_the_tags();

if ($pagetags) {
	
  foreach($pagetags as $tag) {
    
	$args = array(
    'category_name'=> $tag->name,
    'posts_per_page' => 4,
  );

  
  query_posts($args);


echo '<div class="popcontainer clearfix">';
// The Loop
while ( have_posts() ) : the_post();
	echo '<div class="sports">';
	echo '<img src="';
	the_field('popular_show');
	echo '">';
	echo '<h3>';
	echo the_title();
	echo '</h3>';
	echo '</div>';
endwhile;

echo '</div>';

  
  }
  
  // Reset Query
wp_reset_query();
}

?>


<!-- POPULAR SHOWS -->


<?php endwhile;endif; ?>

<section id="greybnr">
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<p><?php the_field("cta"); ?><button onClick="window.location.href='https://www.yiptv.com/sign-up/paid'"><?php the_field("cta-btn"); ?></button></p>
<?php else: ?>
<p><?php the_field("cta"); ?><button onClick="window.location.href='https://www.yiptv.com/sign-up/paid?lang=es'"><?php the_field("cta-btn"); ?></button></p>
<?php endif; ?>
</section>
<!-- POST QUERY -->
<?php get_footer(); ?>