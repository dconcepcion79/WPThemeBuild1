<?php
/*
Template Name: Channels
*/
?>


<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  <?php if(get_field("custom_channel_bkg")): ?>
	<section class="main custom" class="clearfix">
 <?php else: ?>
 	 <section class="main" class="clearfix">
<?php endif; ?>

<!-- TWO COLUMN -->


<div class="container">
<div class="leftcol left"><img src="<?php the_field("logo_image"); ?>" class="responsive" /></div>
<div class="rightcol right">
<div class="bubble">
<h2><?php the_title();?></h2>
<?php the_content();?>
<table width="100%">
<tr>
<td class="box"><?php the_field("top-left"); ?></td>
<td class="box"><?php the_field("top-right"); ?></td>
</tr>
<tr>
<td class="box"><?php the_field("bottom-left"); ?></td>
<td class="box"><?php the_field("bottom-right"); ?></td>
</tr>
</table>
</div>
</div>

</div>
<div class="purplebnr">
<div class="container">

<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>

	<?php $type = get_field('cta-color');

	if($type == "green"): ?>

	<p><?php the_field("channel_cta"); ?>
		<button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/free/'"><?php the_field("signup_cta"); ?></button></p>

	<?php else: ?>

	<p><?php the_field("channel_cta"); ?>
		<button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/premium/'"><?php the_field("signup_cta"); ?></button></p>

	<?php endif; ?>
   <?php endif; ?>

<?php 
$currentlang = get_bloginfo('language');
if($currentlang=="es-US"): ?>

<?php 
$type = get_field('cta-color');

if($type == "green"): ?>
<p><?php the_field("channel_cta"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/inscribite/gratis/'"><?php the_field("signup_cta"); ?></button></p>

<?php else: ?>

<p><?php the_field("channel_cta"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/inscribite/premier/'"><?php the_field("signup_cta"); ?></button></p>

<?php endif; ?>
 <?php endif; ?>
</div>
</div>





<!-- POPULAR SHOWS -->

<?php
// The Query

$category = get_the_category(); ?>


<?php if($category){ ?>

<?php $args = array(
    'cat'=> $category[0]->cat_ID,
    'posts_per_page' => 4,
	'posts__not_in' => array(198,184,192,196,208,182,188,202),
  );
 


$query = new WP_Query($args); ?>

	<section ><div id="whtbnr"><p>
	<?php the_field('channel_cta_2'); ?>
	</p></div></section>


<div class="popcontainer clearfix">

<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	<div class="sports">
	<img src="<?php the_field('popular_show'); ?>">
	<h3>
	<?php  the_title(); ?>
	</h3>
    <p>
    <?php the_content(); ?>
    </p>
	</div>

<?php endwhile; ?>

</div>
<?php
// Reset Query
wp_reset_query();
}
?>

<!-- POPULAR SHOWS -->

</section>




<!-- RELATED CHANNELS -->

<div id="whtbnr" style="clear:both">
<p><?php the_field("channel_cta_3"); ?></p>
</div>

<div id="related" class="container clearfix">
<?php /*?><?php echo "Path:"  . $_SERVER['HTTP_REFERER'] . $_SERVER['PATH_INFO'] . $_SERVER['REQUEST_URI']; ?><?php */?>
<?php
if(get_field('channel_logo_a'))
{
	echo '<a href="';
	the_field('logo-a-url');
	echo '">';
	echo '<img src="';
	the_field('channel_logo_a');
    echo '" class="responsive">';
	echo '</a>';
}
?>

<?php
if(get_field('channel_b'))
{
	echo '<a href="';
	the_field('logo-b-url');
	echo '">';
	echo '<img src="';
	the_field('channel_b');
    echo '" class="responsive">';
	echo '</a>';
}
?>

<?php
if(get_field('channel_logo_c'))
{
	echo '<a href="';
	the_field('logo-c-url');
	echo '">';
	echo '<img src="';
	the_field('channel_logo_c');
    echo '" class="responsive">';
	echo '</a>';
}
?>

<?php
if(get_field('channel_logo_d'))
{
	echo '<a href="';
	the_field('logo-d-url');
	echo '">';
	echo '<img src="';
	the_field('channel_logo_d');
    echo '" class="responsive">';
	echo '</a>';
}
?>

<?php
if(get_field('channel_logo_e'))
{
	echo '<a href="';
	the_field('logo-e-url');
	echo '">';
	echo '<img src="';
	the_field('channel_logo_e');
    echo '" class="responsive">';
	echo '</a>';
}
?>

<?php
if(get_field('channel_logo_f'))
{
	echo '<a href="';
	the_field('logo-f-url');
	echo '">';
	echo '<img src="';
	the_field('channel_logo_f');
    echo '" class="responsive">';
	echo '</a>';
}
?>

<?php
if(get_field('channel_logo_g'))
{
	echo '<a href="';
	the_field('logo-g-url');
	echo '">';
	echo '<img src="';
	the_field('channel_logo_g');
    echo '" class="responsive">';
	echo '</a>';
}
?>


</div>



<section id="greybnr">
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>

	<?php $type = get_field('cta-color');

	if($type == "green"): ?>

	<p><?php the_field("channel_cta_4"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/free/'"><?php the_field("signup_cta"); ?></button></p>

	<?php else: ?>

	<p><?php the_field("channel_cta_4"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/premium/'"><?php the_field("signup_cta"); ?></button></p>

	<?php endif; ?>
   <?php endif; ?>

<?php 
$currentlang = get_bloginfo('language');
if($currentlang=="es-US"): ?>

<?php 
$type = get_field('cta-color');

if($type == "green"): ?>
<p><?php the_field("channel_cta_4"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/inscribite/gratis/'"><?php the_field("signup_cta"); ?></button></p>

<?php else: ?>

<p><?php the_field("channel_cta_4"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/inscribite/premier/'"><?php the_field("signup_cta"); ?></button></p>

<?php endif; ?>
 <?php endif; ?>
</section>
<?php endwhile;endif; ?>

<?php get_footer(); ?>
