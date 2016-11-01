<?php get_header(); ?>



<section id="main" class="clearfix">
<!-- TWO COLUMN -->

<?php while ( have_posts() ) : the_post(); ?>

<div class="container">

<div class="general">

<?php if (is_page(2312) || is_page(4025) || is_page(4029) || is_page(4031) || is_page(12159) || is_page(4526) || is_page(12148) || is_page(12153)): ?>
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
<?php endif; ?>

  <h2><?php the_title();?></h2>

<?php if(is_page(1621)): ?>


<!-- <div style="float:left;text-align:center;font-weight:bold">

<video width="300" height="180" controls>
  <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/English-What-is-YipTVvid1.mp4" type="video/mp4" >
Your browser does not support the video tag.
</video> 
<p>What is YipTV?</p>
</div>


<div style="float:left;text-align:center;font-weight:bold;margin:0 15px">
<video width="300" height="180" controls>
  <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/English-How-YipTV-Worksvid2.mp4" type="video/mp4" >
Your browser does not support the video tag.
</video> 
<p>How does YipTV work?</p>
</div>


<div style="float:left;text-align:center;font-weight:bold">
<video width="300" height="180" controls>
  <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/English-Core-Value-vid3.mp4" type="video/mp4" >
Your browser does not support the video tag.
</video> 
<p>Why get YipTV?</p>
</div> -->



<?php endif; ?>


<?php if(is_page(2574)): ?>

<!-- <div id="video" style="float:left;text-align:center;font-weight:bold">
<video width="300" height="180" controls>
  <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/Spanish-What-is-YipTVvid1.mp4" type="video/mp4" >
Your browser does not support the video tag.
</video> 
<p>&iquest;Qu&eacute; es YipTV?</p>
</div>

<div style="float:left;text-align:center;font-weight:bold;margin:0 15px">
<video width="300" height="180" controls>
  <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/Spanish-How-YipTV-Worksvid2.mp4" type="video/mp4" >
Your browser does not support the video tag.
</video> 
<p>&iquest;Como funciona YipTV?</p>
</div>

<div style="float:left;text-align:center;font-weight:bold">
<video width="300" height="180" controls>
  <source src="http://blogyiptvcom.c.presscdn.com/wp-content/uploads/2015/07/Spanish-Core-Valuevid3.mp4" type="video/mp4" >
Your browser does not support the video tag.
</video> 
<p>&iquest;Por qu&eacute; obtener YipTV?</p>
</div> -->
<?php endif; ?>





<?php the_content();?>
</div>

</div>


 <?php endwhile; wp_reset_postdata();?>


<section id="greybnr">
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
<p><?php the_field("cta"); ?>
    <button class="green" onClick="window.location.href='<?php echo esc_url(home_url('/')); ?>/sign-up/free/'"><?php the_field("signup"); ?></button></p>


<?php else: ?>
<p><?php the_field("cta"); ?>
    <button class="green" onClick="window.location.href='<?php echo esc_url(home_url('/')) ?>/sign-up/gratis/'"><?php the_field("signup"); ?></button></p>
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

<!-- End Modal -->

<script type="text/javascript">

// Humberto trying to insert the Modal Pop up

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

// End Humberto Test

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
		  
		  $(this).get(0).stopVideo();
		  
        }
      }
	 });



$( "#video" ).click(function() {
	
	var position = $( "#dialog-message" ).dialog( "option", "position" );
	
  $( "#dialog-message" ).dialog( "open" );
  $( "#dialog-message" ).dialog( "option", "position", "top");
});

$( "#video2" ).click(function() {
	
	var position = $( "#dialog-message" ).dialog( "option", "position" );
	
  $( "#dialog-message" ).dialog( "open" );
  $( "#dialog-message" ).dialog( "option", "position", "top");
});

$( "#video3" ).click(function() {
	
	var position = $( "#dialog-message" ).dialog( "option", "position" );
	
  $( "#dialog-message" ).dialog( "open" );
  $( "#dialog-message" ).dialog( "option", "position", "top");
});
</script>

<?php get_footer(); ?>
