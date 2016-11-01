<?php
/*
Template Name: Video

*/
?>

<?php get_header();?>




<!--HERO BANNER-->
<div class="landing">
<div class="landinghero vid">

<div class="container hero-banner">
<!-- IMAGE PLACEMENT -->
<iframe width="960" height="540" src="https://www.youtube.com/embed/voSjcE8aano?rel=0&hd=1&controls=0&showinfo=0&autoplay=1&loop=1&mute=1&playlist=voSjcE8aano" frameborder="0" allowfullscreen ></iframe>
<div class="anime">
<button class="videobtn" onClick="window.location.href='<?php the_field('cta-url'); ?>'"><?php the_field('cta-btn');?></button>
</div>
</div>

</div>
<!--HERO BANNER-->

<!-- MAIN CTA -->
<section id="maincta">
<div class="container clearfix">
<div class="right landingleftcol">
<img src="<?php the_field('cta-banner'); ?>" >
</div>

<div class="left landingrightcol">
<?php the_content(); ?>
</div>
</div>

<div class="container clearfix">
<div class="left landingbox">
<img src="<?php the_field('leftbox-img'); ?>">
<p><?php the_field('leftbox'); ?></p>

</div>
<div class="left landingbox center">
<img src="<?php the_field('midbox-img'); ?>">
<p><?php the_field('midbox'); ?></p>

</div>
<div class="left landingbox">
<img src="<?php the_field('rightbox-img'); ?>">
<p><?php the_field('rightbox'); ?></p>

</div>
</div>
</section>
<!-- MAIN CTA -->


<!-- MODULE ONE -->
<?php

$tag = get_query_var('pagename');


// The Query
query_posts('cat=534&tag=' . $tag);

while ( have_posts() ) : the_post(); ?>

<?php if('cat=534&tag=' . $tag): ?>

	
	<section id="greybnr"><div class="container clearfix">
	<p>
	<?php the_field("cta"); ?>
	<button onClick="window.location.href='<?php the_field('cta-btn-url'); ?>'" >
	
	<?php the_field('cta-btn');	?>

	</button>
	</p>
	</div></section>
	<section id="mod1">
	<h2><?php the_title(); ?></h2>
    <div class="col">
    <?Php the_content(); ?>
    </div>
	
<?php	if(get_field('col-two')): ?>
	<div class="col">
		<?php the_field('col-two'); ?>
	</div>
	<?php endif; ?>
    
<?php	if(get_field('col-three')): ?>
		<div class="col">
		<?php the_field('col-three'); ?>
		</div>
	<?php endif; ?>
	
	
	
	
	</section>

<?php endif; ?>

<?php
endwhile;
// Reset Query
wp_reset_query();

?>

<!--MODULE TWO-->
<?php

$tag = get_query_var('pagename');


// The Query
query_posts('cat=536&tag=' . $tag);

while ( have_posts() ) : the_post(); ?>

<?php if('cat=536&tag=' . $tag): ?>
	
	<section id="greybnr"><div class="container clearfix">
	<p>
	<?php the_field("cta"); ?>
	<button onClick="window.location.href='<?php the_field('cta-btn-url'); ?>'" >
	
	<?php the_field('cta-btn');	?>

	</button>
	</p>
	</div></section>
	<section id="mod2">
	<h2><?php the_title(); ?></h2>
    <div class="col">
    <?php the_content(); ?>
    </div>
	
<?php	if(get_field('col-two')): ?>
		<div class="col">
		<?php the_field('col-two'); ?>
		</div>
	<?php endif; ?>
	
<?php 	if(get_field('col-three')): ?>
		<div class="col">
		<?php the_field('col-three'); ?>
		</div>
	<?php endif; ?>
	
	</section>
	
<?php endif; ?>

<?php endwhile;
// Reset Query
wp_reset_query();

?>

<!--MODULE THREE-->


<?php

$tag = get_query_var('pagename');


// The Query
query_posts('cat=538&tag=' . $tag); 

while ( have_posts() ) : the_post(); ?>

<?php if('cat=538&tag=' . $tag): ?>
	
	<section id="greybnr"><div class="container clearfix">
	<p>
	<?php the_field("cta"); ?>
	<button onClick="window.location.href='<?php the_field('cta-btn-url'); ?>'" >
	
	<?php the_field('cta-btn');	?>

	</button>
	</p>
	</div></section>
	<section id="mod3" class="clearfix">
    <div class="container">
    <?php the_content(); ?>
    </div>

<?php endif; ?>

<?php
endwhile;
wp_reset_query();

?>


<!-- POPULAR SHOWS -->

<?php
// The Query

$categories = get_the_category(); ?>


 <?php if($categories) ?>
	
<div class="poplanding clearfix">

<?php foreach($categories as $category) { ?>

<?php
$args = array(
    'cat'=> $category->cat_ID,
    'posts_per_page' => 4,
  );

query_posts($args); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="landingshow">
	<img src="<?php the_field('popular_show'); ?>">
	<h3><?php the_title(); ?></h3>
	</div>
 


<?php endwhile; ?>

<?php } ?>
 
<?php
// Reset Query
wp_reset_query();
?>

 </div> 



</section>


<!-- POPULAR SHOWS -->


</div>

	<section id="greybnr"><div class="container">
 <p>
	<?php the_field("cta"); ?>
	<button onClick="window.location.href='<?php the_field('cta-btn2-url'); ?>'">
	<?php the_field('cta-btn2'); ?>
</button>
	</p>
	</div></section>


<?php get_footer(); ?>