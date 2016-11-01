<?php
/*
Template Name: Country
*/
?>


<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  <?php if(get_field("custom_country_bkg")): ?>
	<section class="main countrybg" class="clearfix">
 <?php else: ?>
 	 <section class="main" class="clearfix">
<?php endif; ?>

<!-- TWO COLUMN -->


<div class="container">

<!-- HZ Code Change -->

	<div class="country-container clearfix">
		<div class="ltcol-flag-container"><img src="<?php the_field("country_flag"); ?>" class="responsive" /></div>
		<div class="rtcol-country-copy">
			<?php the_field("country_title"); ?>
		</div>
	</div>
</div>

<div class="purplebnr-2">
	<div class="container">

		<?php

		$currentlang = get_bloginfo('language');
		if($currentlang=="en-US"):?>

			<?php $type = get_field('cta-color-country-1');

			if($type == "green"): ?>

			<p><?php the_field("country-cta-1"); ?><button class="<?php the_field('cta-color-country-1') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/free/'"><?php the_field("cta-text-country-1"); ?></button></p>

			<?php else: ?>

			<p><?php the_field("country-cta-1"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/premium/'"><?php the_field("cta-text-country-1"); ?></button></p>

			<?php endif; ?>
		   <?php endif; ?>

		<?php 
		$currentlang = get_bloginfo('language');
		if($currentlang=="es-US"): ?>

		<?php 
		$type = get_field('cta-color-1');

		if($type == "green"): ?>
		<p><?php the_field("country-cta-1"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/inscribite/gratis/'"><?php the_field("cta-text-country-1"); ?></button></p>

		<?php else: ?>

		<p><?php the_field("country-cta-1"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/inscribite/premier/'"><?php the_field("cta-text-country-1"); ?></button></p>

		<?php endif; ?>
		 <?php endif; ?>
	</div>
</div>

</section>

<div class="container">
	<div class="copy-block">
		<?php the_content();?>
	</div>
</div>

<!-- POPULAR SHOWS -->

<div id="whtbnr" style="clear:both">
<p><?php the_field("banner_title_1"); ?></p>
</div>
<!-- <div id="related" class="container clearfix">
			<div class="popular-show-country">
				<?php the_field("popular_show_1"); ?>
			</div>
			<div class="popular-show-country">
				<?php the_field("popular_show_2"); ?>
			</div>

</div> -->

<div id="related" class="container clearfix">

	<div class="swiper-container1">
	    <!-- Additional required wrapper -->
	    <div class="swiper-wrapper">
	      
		  	<?php
				if(get_field('popular_show_1'))
				{
					echo '<div class="networkicons clearfix swiper-slide">';
					the_field('popular_show_1');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('popular_show_2'))
				{
					echo '<div class="networkicons clearfix swiper-slide">';
					the_field('popular_show_2');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('popular_show_3'))
				{
					echo '<div class="networkicons clearfix swiper-slide">';
					the_field('popular_show_1');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('popular_show_4'))
				{
					echo '<div class="networkicons clearfix swiper-slide">';
					the_field('popular_show_4');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('popular_show_5'))
				{
					echo '<div class="networkicons clearfix swiper-slide">';
					the_field('popular_show_5');
					echo '</div>';
				}
			?>
			  
		  	<?php
				if(get_field('popular_show_6'))
				{
					echo '<div class="popular-show-country swiper-slide">';
					the_field('popular_show_6');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('popular_show_7'))
				{
					echo '<div class="popular-show-country swiper-slide">';
					the_field('popular_show_7');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('popular_show_8'))
				{
					echo '<div class="popular-show-country swiper-slide">';
					the_field('popular_show_8');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('popular_show_9'))
				{
					echo '<div class="popular-show-country swiper-slide">';
					the_field('popular_show_9');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('popular_show_10'))
				{
					echo '<div class="popular-show-country swiper-slide">';
					the_field('popular_show_10');
					echo '</div>';
				}
			?>

		</div>
	</div>
	<div class="swiper-button-prev1"></div>
    <div class="swiper-button-next1"></div>
</div>

<!-- COUNTRY CHANNELS -->

<div id="whtbnr" style="clear:both">
<p><?php the_field("banner_title_2"); ?></p>
</div>

<div id="related" class="container clearfix">
<div class="swiper-container2">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

		  	<?php
				if(get_field('country-channel-1'))
				{
					echo '<div class="networkicons clearfix swiper-slide">';
					the_field('country-channel-1');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('country-channel-2'))
				{
					echo '<div class="networkicons clearfix swiper-slide">';
					the_field('country-channel-2');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('country-channel-3'))
				{
					echo '<div class="networkicons clearfix swiper-slide">';
					the_field('country-channel-3');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('country-channel-4'))
				{
					echo '<div class="networkicons clearfix swiper-slide">';
					the_field('country-channel-4');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('country-channel-5'))
				{
					echo '<div class="networkicons clearfix swiper-slide">';
					the_field('country-channel-5');
					echo '</div>';
				}
			?>	

		  	<?php
				if(get_field('country-channel-6'))
				{
					echo '<div class="popular-show-country swiper-slide">';
					the_field('country-channel-6');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('country-channel-7'))
				{
					echo '<div class="popular-show-country swiper-slide">';
					the_field('country-channel-7');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('country-channel-8'))
				{
					echo '<div class="popular-show-country swiper-slide">';
					the_field('country-channel-8');
					echo '</div>';
				}
			?>	

		  	<?php
				if(get_field('country-channel-9'))
				{
					echo '<div class="popular-show-country swiper-slide">';
					the_field('country-channel-9');
					echo '</div>';
				}
			?>

		  	<?php
				if(get_field('country-channel-10'))
				{
					echo '<div class="popular-show-country swiper-slide">';
					the_field('country-channel-10');
					echo '</div>';
				}
			?>	



			</div>
			</div>

			<div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>

<section id="greybnr">
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>

	<?php $type = get_field('cta-color-country-2');

	if($type == "green"): ?>

	<p><?php the_field("country-cta-2"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/free/'"><?php the_field("cta-text-country-2"); ?></button></p>

	<?php else: ?>

	<p><?php the_field("country-cta-2"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/premium/'"><?php the_field("cta-text-country-2"); ?></button></p>

	<?php endif; ?>
   <?php endif; ?>

<?php 
$currentlang = get_bloginfo('language');
if($currentlang=="es-US"): ?>

<?php 
$type = get_field('cta-color-country-2');

if($type == "green"): ?>
<p><?php the_field("country-cta-2"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/inscribite/gratis/'"><?php the_field("cta-text-country-2"); ?></button></p>

<?php else: ?>

<p><?php the_field("country-cta-2"); ?><button class="<?php the_field('cta-color') ?>" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/inscribite/premier/'"><?php the_field("cta-text-country-2"); ?></button></p>

<?php endif; ?>
 <?php endif; ?>
</section>
<?php endwhile;endif; ?>

<script src="<?php echo esc_url(get_template_directory_uri());; ?>/js/swiper.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());; ?>/js/swiper.jquery.min.js"></script>

 <script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 10,
		nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
		
    });
	
	var swiper2 = new Swiper('.swiper-container1', {
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 10,
		nextButton: '.swiper-button-next1',
        prevButton: '.swiper-button-prev1'
		
    });
	var swiper3 = new Swiper('.swiper-container2', {
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 10,
    });
	var swiper4 = new Swiper('.swiper-container3', {
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 10,
		nextButton: '.swiper-button-next2',
        prevButton: '.swiper-button-prev2'
    });
	var swiper5 = new Swiper('.swiper-container4', {
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 10,
		nextButton: '.swiper-button-next4',
        prevButton: '.swiper-button-prev4'
    });
    </script>


<?php get_footer(); ?>