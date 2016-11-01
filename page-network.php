<?php
/*
Template Name: Network
*/
 get_header(); ?>

<section id="mainnetwork" class="clearfix">

<!-- TWO COLUMN -->
<div class="container canales"><?php the_content(); ?></div>

  <!-- SPORTS -->
  <section id="contentslide">
<div class="container clearfix">

<h3><?php the_field("sports"); ?></h3>


<?php if (is_page(array(2609,2639))) : ?>

<!-- Slider main container -->
<!-- Slider main container -->
<div class="swiper-container4">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">


<?php
// The Query

if(is_page(2609) || is_page(309)){
	
	
$args = array(
    'cat'=> 202,
    'posts_per_page' => 20
  );
  query_posts($args); ?>

<?php // The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/tv-channels/sports/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2>
    <?php the_content(); ?>
    </h2>
	</div>
<?php endwhile; ?>
<?php } elseif (is_page(2639)) { 
	
	$args = array(
    'cat'=> 51,
    'posts_per_page' => 20
  );
  query_posts($args);
  ?>

<?php // The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/redes-y-canales/deportes/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2>
    <?php the_content(); ?>
    </h2>
	</div>
<?php endwhile;
}
// Reset Query
wp_reset_query();
?>

</div>
</div>
<div class="swiper-button-prev4"></div>
    <div class="swiper-button-next4"></div>


</div>
</section>

 <!-- NEWS CHANNEL ICONS -->
 <section id="contentslide1">
<div class="container clearfix">
<h3><?php the_field("news"); ?></h3>

<!-- Slider main container -->
<!-- Slider main container -->
<div class="swiper-container1">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
<?php
// The Query

if(is_page(2609)){
	
$args = array(
    'cat'=> 182,
    'posts_per_page' => 20
  );
  query_posts($args);

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class=" swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/tv-channels/news/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
<?php endwhile; ?>

<?php }elseif (is_page(2639)){
	
	$args = array(
    'cat'=> 64,
    'posts_per_page' => 20
  );
  query_posts($args);

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/redes-y-canales/noticias/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
<?php endwhile;
	
}
// Reset Query
wp_reset_query();
?>
</div>

</div>
<div class="swiper-button-prev1"></div>
    <div class="swiper-button-next1"></div>
</div>



</section>




<!-- ENTERTAINMENT CHANNEL ICONS -->
<section id="contentslide2">
<div class="container clearfix">
<h3><?php the_field("entertainment"); ?></h3>


<!-- Slider main container -->
<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
<?php

if(is_page(2609)){
// The Query
$args = array(
    'cat'=> 184,
    'posts_per_page' => 35
  );
  query_posts($args);

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/tv-channels/entertainment/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
<?php endwhile; ?>

<?php }elseif (is_page(2639)){
	
	$args = array(
    'cat'=> 68,
    'posts_per_page' => 35
  );
  query_posts($args);

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/redes-y-canales/entretenimiento/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
<?php endwhile;
}
// Reset Query
wp_reset_query();
?>
</div>

</div>
<div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>



</section>



<!-- MUSIC CHANNEL ICONS -->
<div class="container clearfix">
<h3><?php the_field("music"); ?></h3>

<!-- Slider main container -->
<!-- Slider main container -->
<div class="swiper-container3">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

<?php

if (is_page(2609)){
// The Query
$args = array(
    'cat'=> 188,
    'posts_per_page' => 20
  );
  query_posts($args);

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/tv-channels/music/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
<?php
endwhile;
?>
<?php }elseif (is_page(2639)){
	
	// The Query
$args = array(
    'cat'=> 76,
    'posts_per_page' => 20
  );
  query_posts($args);

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/redes-y-canales/musica/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?>
    </h2>
	</div>

<?php endwhile;
}
// Reset Query
wp_reset_query();
?>
</div>

</div>
<div class="swiper-button-prev2"></div>
    <div class="swiper-button-next2"></div>
</div>

<!-- EDUCATIONAL CHANNEL ICONS-->
<div class="container clearfix">
<h3><?php the_field("education"); ?></h3>

<!-- Slider main container -->
<!-- Slider main container -->
<div class="swiper-container2">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
<?php

if (is_page(2609)){
// The Query
$args = array(
    'cat'=> 198,
    'posts_per_page' => 20
  );
  query_posts($args);

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/tv-channels/education/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
    
<?php endwhile; ?>

<?php }elseif (is_page(2639)){
	
	// The Query
$args = array(
    'cat'=> 395,
    'posts_per_page' => 20
  );
  query_posts($args);

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/redes-y-canales/educacional/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?>
    </h2>
	</div>
    <?php
endwhile;
}
// Reset Query
wp_reset_query();
?>

</div>
</div>
</div>





<!--LIFESTYLE CHANNEL ICONS-->
<div class="container clearfix">
<h3><?php the_field("lifestyle"); ?></h3>
<!-- Slider main container -->
<!-- Slider main container -->
<div class="swiper-container2">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
<?php
// The Query

if (is_page(2609)){
query_posts( 'cat=196' );

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/tv-channels/lifestyle/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
<?php endwhile; ?>

<?php }elseif(is_page(2639)){
	
	query_posts( 'cat=196' );

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/redes-y-canales/estilo-de-vida/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
<?php     
endwhile;
}
// Reset Query
wp_reset_query();
?>
</div>
</div>
</div>

<!--KIDS CHANNEL ICONS-->

<div class="container clearfix">
<h3><?php the_field("kids"); ?></h3>
<!-- Slider main container -->
<!-- Slider main container -->
<div class="swiper-container2">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
<?php

if (is_page(2609)){
// The Query
query_posts( 'cat=208' );

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/tv-channels/kids/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
    
<?php endwhile; ?>

<?php
}elseif(is_page(2639)){
	
	// The Query
query_posts( 'cat=404' );

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/redes-y-canales/ninos/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
    
    <?php
endwhile;
}
// Reset Query
wp_reset_query();
?>
</div>
</div>
</div>

<!--GENERAL CHANNEL ICONS -->
<div class="container clearfix">
<h3><?php the_field("general"); ?></h3>

<!-- Slider main container -->
<div class="swiper-container2">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
<?php

if(is_page(2609)){
// The Query

$args = array(
    'cat'=> 200,
    'posts_per_page' => 10
  );


query_posts( $args );

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/tv-channels/general/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
    
<?php endwhile; ?>

<?php
}elseif(is_page(2639)){
	// The Query
$args = array(
    'cat'=> 407,
    'posts_per_page' => 10
  );	
	
	
query_posts( $args );

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/redes-y-canales/general/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
    
    <?php
endwhile;
	
}
// Reset Query
wp_reset_query();
?>
</div>
</div>
</div>

<!--FAITH CHANNEL ICONS-->
<div class="container clearfix">
<h3><?php the_field("faith"); ?></h3>
<!-- Slider main container -->
<!-- Slider main container -->
<div class="swiper-container2">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
<?php

if (is_page(2609)){
// The Query
query_posts( 'cat=192&posts_per_page=-1' );

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/tv-channels/faith/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
  <?php  
endwhile;
}elseif(is_page(2639)){
	
	// The Query
query_posts( 'cat=86&posts_per_page=-1' );

// The Loop
while ( have_posts() ) : the_post(); ?>
	
	<div class="swiper-slide networkicons clearfix">
	<div class="networklogo">
	<a href="<?php echo esc_url(home_url('/')); ?>/redes-y-canales/fe/<?php echo( basename(get_permalink()) ); ?>/">
	<?php the_post_thumbnail('singlepost-thumb'); ?>
	</a>
	</div>
    <h2><?php the_content(); ?></h2>
	</div>
    
    <?php
endwhile;
}
// Reset Query
wp_reset_query();
?>
<?php endif; ?>

</div>
</div>
</div>

</section>


<section id="greybnr">
<?php
$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<p><?php the_field("network_cta"); ?><button class="green" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/free/'"><?php the_field("signup"); ?></button></p>
<?php else: ?>
<p><?php the_field("network_cta"); ?><button class="green" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/gratis/'"><?php the_field("signup"); ?></button></p>
<?php endif; ?>
</section>

<!-- MODAL -->
<?php if($currentlang=="en-US"):?>
<div id="dialog-message" title="Channel Lineup" style="background-color:#fff;">
<div class="closebtn"></div>
<?php else: ?>
<div id="dialog-message" title="Canales" style="background-color:#fff;">
<?php endif; ?>
<div id="modaltop" >


<?php if($currentlang=="en-US"):?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/F.png" > FREE MEMBERSHIP</p>
<?php else: ?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/F.png" > membres&iacute;a gratis</p>
<?php endif; ?>

<?php if($currentlang=="en-US"):?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/7.png" > FREE FOR FIRST 7 DAYS</p>
<?php else: ?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/7.png" > gratis por los primeros 7 dias</p>
<?php endif; ?>

<?php if($currentlang=="en-US"):?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Premium.png" > INCLUDED WITH PREMIUM MEMBERSHIP</p>
<?php else: ?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Premium.png" > membres&iacute;a premier</p>
<?php endif ?>
<br style="clear:left">
</div>
<div class="col">


<?php if($currentlang=="en-US"):?>
  <p><strong>Sports</strong></p>
  <?php else: ?>
   <p><strong>Deportes</strong></p>
  <?php endif; ?>
  
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">beIN Sports</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">beIN Sports &ntilde;</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">TyC Sports</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">PXTV Action LATAM</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">AYM Sports</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">LAS</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">HRTV</p>
<p></p>

<?php if($currentlang=="en-US"):?>
<p><strong>Kids</strong></p>
<?php else: ?>
<p><strong>Ni&ntilde;os</strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Smile of a Child</p>
<p></p>


<p><strong>General</strong></p>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Bolivia TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Canal Am&eacute;rica</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Outdoor Sport Channel</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Promovision</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">TV Chile</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">CBTV</p>
<p></p>

<?php if($currentlang=="en-US"):?>
<p><strong>News</strong></p>
<?php else: ?>
<p><strong>Noticias</strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Canal Tiempo</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">CB24</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Maya TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">MeioNorte</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">NTN24</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">One America News</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">RT Espa&ntilde;ol</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">RT News</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Telesur</p>
</div>

<div class="col">
<?php if($currentlang=="en-US"):?>
<p><strong>Music</strong></p>
<?php else: ?>
<p><strong>Musica</strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">AZ Clic</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Clubbing TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">El Cantinazo</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">Mi Gente TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Mi Musica</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Mi Musica Romantica</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Mi Musica Tropical</p>
<!-- <p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Nusic</p> -->
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Video Rola</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">JCTV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tempo</p>
<p></p>

<?php if($currentlang=="en-US"):?>
<p><strong>Educational</strong></p>
<?php else: ?>
<p><strong>Educacional </strong></p>
<?php endif; ?>

<!--p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Yes</p-->
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Zoom</p>
<p></p>

<?php if($currentlang=="en-US"):?>
<p><strong>Lifestyle</strong></p>
<?php else: ?>
<p><strong>Estilo de Vida </strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Destinos TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Men 7</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Trendy</p>
<p></p>

<?php if($currentlang=="en-US"):?>
<p><strong>Faith</strong></p>
<?php else: ?>
<p><strong>Fe</strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Enlace Juvenil</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">TBN</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">TBN Enlance</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tele Vid</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">The Church Channel</p>
</div>

<div class="col">

<?php if($currentlang=="en-US"):?>
<p><strong>Entertainment</strong></p>
<?php else: ?>
<p><strong>Entretenimiento </strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">Hola! TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">RCN Novelas</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Caribvision</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Latele Novela</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">Canal 52 MX</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Mis Pel&iacute;culas</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Films on Reel</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">TVC Latino</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">TV Quisqueya</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">A 3 Series</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Teleformula</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tele Pac&iacute;fico</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tele Medellin</p>
<!--p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tele Caribe</p-->
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tele Antioquia</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">JBN</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">HITN</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Cosmovisi&oacute;n</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Canal Tro</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Canal Sur</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Canal Antiestres</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">Antena3</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">AZ Coraz&oacute;n</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Telemicro Internacional</p>
  </div>
  
  <div style="clear:left;padding:15px;color:#fff;text-align:center;font-size:24px;background-color:#2e095b">
  <?php if($currentlang=="en-US"):?>
  More Channels added all the time
  <?php else: ?>
  <?php endif; ?>
  </div>
</div>

<script type="text/javascript">

$( "#dialog-message" ).dialog({ 
	autoOpen: false, 
	modal:true, 
	width: 'auto', 
	height: 'auto', 
	maxWidth: 960,    
	responsive: true, 
	fluid: true, 
	draggable: false,
	buttons: {
        Close: function() {
          $( this ).dialog( "close" );
        }
      }
	 });



$( "#channels" ).click(function() {
	
	var position = $( "#dialog-message" ).dialog( "option", "position" );
	
  $( "#dialog-message" ).dialog( "open" );
  $( "#dialog-message" ).dialog( "option", "position", "top");
});


// run function on all dialog opens
$(document).on("dialogopen", ".ui-dialog", function (event, ui) {
    fluidDialog();
});

// remove window resize namespace
$(document).on("dialogclose", ".ui-dialog", function (event, ui) {
    $(window).off("resize.responsive");
});

function fluidDialog() {
    var $visible = $(".ui-dialog:visible");
    // each open dialog
    $visible.each(function () {
        var $this = $(this);
        var dialog = $this.find(".ui-dialog-content").data("dialog");
        // if fluid option == true
        if (dialog.options.maxWidth && dialog.options.width) {
            // fix maxWidth bug
            $this.css("max-width", dialog.options.maxWidth);
            //reposition dialog
            dialog.option("position", dialog.options.position);
        }

        if (dialog.options.fluid) {
            // namespace window resize
            $(window).on("resize.responsive", function () {
                var wWidth = $(window).width();
                // check window width against dialog width
                if (wWidth < dialog.options.maxWidth + 50) {
                    // keep dialog from filling entire screen
                    $this.css("width", "90%");
                    
                }
              //reposition dialog
              dialog.option("position", dialog.options.position);
            });
        }

    });
}

</script>

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
