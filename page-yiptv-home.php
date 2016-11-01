<?php
/*
Template Name: YipTV-Home
*/
?>

<?php get_header(); ?>



<!-- POST QUERY -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <div class="container homebanner clearfix"> 
 
 <?php if(get_field('full-cta-banner-img')): ?>
 
 
 <a href="<?php the_field('full-cta-url'); ?>">
 <div class="fullbanner">
 <div class="video" id="vid">
<?php if( strstr($_SERVER['HTTP_USER_AGENT'],'Android') ): ?>
	
     <video width="100%" height="auto" controls poster="<?php echo esc_url(get_template_directory_uri());; ?>/logo.png">
  <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/yiptv-promo-1bit.webm" type="video/webm"> 
  <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/yiptv-promo.m4v" type="video/mp4" >
Your browser does not support the video tag.
</video> 


<?php elseif( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ): ?>
 
     <video width="100%" height="auto" poster="<?php echo esc_url(get_template_directory_uri());; ?>/logo.png">
  <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/yiptv-promo-1bit.webm" type="video/webm"> 
  <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/yiptv-promo.m4v" type="video/mp4" >
Your browser does not support the video tag.
</video> 

<?php else: ?>

    <video width="100%" height="auto" autoplay loop>
 
  <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/yiptv-promo.m4v" type="video/mp4" >
Your browser does not support the video tag.
</video> 

<?php endif; ?>
 </div>
 </div>
    
    


 </div>
 </a>
 <?php endif; ?>
  
  
<?php if(get_field('cta-btn-left')): ?>
 
<button class="lftbtn">
<?php the_field('cta-btn-left'); ?>
</button>
   
<?php endif; ?>
  

 
 
  
  <?php if(get_field('cta-banner-img')): ?>
  
  <div class="cta-banner">
 <img src="<?php the_field('cta-banner-img'); ?>" >
   <button class="rtbtn">
   <?php the_field('cta-btn-right'); ?>
   </button>
   </div>
  
    
  <?php endif; ?>

  
  </div>
 
  </header>
 </div> <!-- FROM HEADER-->
<!-- ROW 1 -->

<?php if(get_field('row1_header')): ?>
<div class="container homecontainer clearfix" style="margin-top: 50px;">



<h2><?php the_field('row1_header');?></h2>

<p>
<?php the_content(); ?>

</p>


</div>
<?php endif; ?>




<!--ROW 2-->

<?php if(get_field('row4_header')): ?>

<div class="container homecontainer clearfix" >

<?php if(get_field('row4_header')): ?>

<h2><?php the_field('row4_header');?></h2>







<?php endif; ?>
</div>

<?php endif; ?>


<!-- ROW 3 -->


<?php if(get_field('row2_header')) : ?>

<div class="container homecontainer clearfix">


<?php if(get_field('row2_header')): ?>


<h2><?php the_field('row2_header');?></h2>
<div class="homecol">
<?php the_field('row2');?>
</div>


<?php endif; ?>

</div>

<?php endif; ?>


<!--ROW 4-->
<?php if(get_field('row3_header')): ?>
<div class="container homecontainer clearfix">



<h2><?php the_field('row3_header');?></h2>
<div class="homecol">
<?php the_field('row3');?>
</div>

</div>
<?php endif; ?>



<!-- POPULAR SHOWS -->


   
    
 <?php //Query 
 query_posts('tag=>home-sports'); ?>
 
<section ><div id="whtbnrhome"><p>
<!--SPORTS BANNER-->
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<?php echo ('Sports'); ?>
<?php else: ?>
<?php echo ('Deportes'); ?>
<?php endif; ?>
 </p></div></section>
 

 
<div class="container genre"><?php the_field('genredescr'); ?></div>



<div class="poplanding clearfix"> 

 <?php //The Loop
 if (have_posts()): while (have_posts()) : the_post(); ?>	

	<div class=" landingshow">
	<img src="<?php the_field('popular_show'); ?>">
	<h3><?php the_title(); ?></h3>
	</div>


<?php endwhile;endif;
// Reset Post Data
wp_reset_query();
?>


<?php endwhile;endif;?>
</div>
<!-- POPULAR SHOWS -->

<!-- POPULAR SHOWS -->

 <?php //Query 
 query_posts('tag=>home-movies'); ?>
 
<section ><div id="whtbnrhome"><p>
<!--MOVIES BANNER-->
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<?php echo ('Movies'); ?>
<?php else: ?>
<?php echo ('Pel&iacute;culas'); ?>
<?php endif; ?>
 </p></div></section>
 
  <div class="container genre"><?php the_field('genredescr2'); ?></div>
<div class="poplanding clearfix"> 

 <?php //The Loop
 if (have_posts()): while (have_posts()) : the_post(); ?>	

	<div class="landingshow">
	<img src="<?php the_field('popular_show'); ?>">
	<h3><?php the_title(); ?></h3>
	</div>


<?php endwhile;endif;
// Reset Post Data
wp_reset_query();
?>
</div>



<!-- POPULAR SHOWS -->




<!-- POPULAR SHOWS -->

 <?php //Query 
 query_posts('tag=>home-entertainment'); ?>
 
<section  ><div id="whtbnrhome"><p>
<!--ENTERTAINMENT BANNER-->
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<?php echo ('Entertainment'); ?>
<?php else: ?>
<?php echo ('Entretenimiento '); ?>
<?php endif; ?>
 </p></div></section>
 <div class="container genre"><?php the_field('genredescr3'); ?></div>
<div class="poplanding clearfix"> 

 <?php //The Loop
 if (have_posts()): while (have_posts()) : the_post(); ?>	

	<div class="landingshow">
	<img src="<?php the_field('popular_show'); ?>">
	<h3><?php the_title(); ?></h3>
	</div>


<?php endwhile;endif;
// Reset Post Data
wp_reset_query();
?>
</div>



<!-- POPULAR SHOWS -->

<!-- POPULAR SHOWS -->

 <?php //Query 
 query_posts('tag=>home-news'); ?>
 
<section ><div id="whtbnrhome"><p>
<!--NEWS BANNER-->
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<?php echo ('News'); ?>
<?php else: ?>
<?php echo ('Noticias'); ?>
<?php endif; ?>
 </p></div></section>
 
 <div class="container genre"><?php the_field('genredescr4'); ?></div>
 
<div class="poplanding clearfix"> 

 <?php //The Loop
 if (have_posts()): while (have_posts()) : the_post(); ?>	

	<div class="landingshow">
	<img src="<?php the_field('popular_show'); ?>">
	<h3><?php the_title(); ?></h3>
	</div>


<?php endwhile;endif;
// Reset Post Data
wp_reset_query();
?>
</div>
<!-- POPULAR SHOWS -->

<!--TESTIMONIAL-->

<div class="container homecontainer clearfix">

<div class="testimonial">
<?php the_field('testimonial'); ?>
</div>
</div>


<section id="greybnr">
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<p><?php the_field("cta"); ?><button class="green" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/free/'"><?php the_field("cta-btn"); ?></button></p>
<?php else: ?>
<p><?php the_field("cta"); ?><button class="green" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/gratis/'"><?php the_field("cta-btn"); ?></button></p>
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

$( "#channels2" ).click(function() {
  $( "#dialog-message" ).dialog( "open" );
   $( "#dialog-message" ).dialog( "option", "position", "top");
});

$( "#channels3" ).click(function() {
  $( "#dialog-message" ).dialog( "open" );
   $( "#dialog-message" ).dialog( "option", "position", "top");
});

$( "#channels4" ).click(function() {
  $( "#dialog-message" ).dialog( "open" );
   $( "#dialog-message" ).dialog( "option", "position", "top");
});

$( "#channels5" ).click(function() {
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
		
    });
	
	var swiper2 = new Swiper('.swiper-container1', {
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 10,
		
		
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
		
    });

    </script>

<?php get_footer(); ?>