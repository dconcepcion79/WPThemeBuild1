<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>
<?php

	wp_title( '|', true, 'right' );

	?>
</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/swiper.min.css" />
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri());; ?>/jquery-ui.css" />

<script type="text/javascript">
    document.addEventListener("touchstart", function() {},false);
</script>




<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri());; ?>/js/mootools-core-1.3.1.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());; ?>/js/mootools-more-1.3.1.1.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo esc_url(get_template_directory_uri());; ?>/js/simple-modal.js"></script>

<?php if( strstr($_SERVER['HTTP_USER_AGENT'],'Android') ): ?>

<link href="<?php echo esc_url(get_template_directory_uri());; ?>/css/android.css" type="text/css" rel="stylesheet" >

<?php elseif( strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ): ?>

<link href="<?php echo esc_url(get_template_directory_uri());; ?>/css/iphone.css" type="text/css" rel="stylesheet" >

<?php endif; ?>



<?php wp_head(); ?>
<script>
 $(function() {

	$("#question").show().accordion({
        autoHeight: false,
		collapsible: true,
		heightStyle: "content",
		header: "h3"

  });
 });
</script>



<style type="text/css">
.countrybg {background-image:url("<?php the_field("custom_country_bkg"); ?>");}
.custom {background-image:url("<?php the_field("custom_channel_bkg"); ?>");}
.homebkg {background-image:url("<?php the_field("full_bkg_image"); ?>");background-repeat:no-repeat;background-size:cover; background-attachment:fixed;position: relative;}
.hero-banner {background-image:url("<?php the_field("hero-banner"); ?>");height:400px; }
.fullbanner {background-image:url("<?php the_field("full-cta-banner-img"); ?>");min-height:440px;}

<?php $currentlang = get_bloginfo('language'); ?>

<?php if($currentlang=="en-US"): ?>
	.video {position: relative;left: 540px;top: 198px;width: 336px;}
	<?php else: ?>
	.video {position: relative;left: 528px;top: 195px;width: 336px;}
<?php endif; ?>

<?php if(is_page(array(10917,10931,11819,11898))): ?>
body, .mainhome {background-color:#f5f5f5;}
<?php endif; ?>


@media only screen and (max-width: 479px){
	.hero-banner {background-image:url("<?php the_field("hero-banner-mobile"); ?>");height:350px;background-size: contain;background-repeat: no-repeat;height: 350px;background-position: 0;}
	.fullbanner {background-image:url("<?php the_field("full-cta-banner-mobile-img"); ?>");/*background-size: contain;background-position: center 50px;min-height: 540px;*/}
}


</style>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url(get_template_directory_uri());; ?>/yip.ico">
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<link href="http://dmp.truoptik.com/tr.gif?ak=fa15d625&dm=<?php echo site_url(); ?>" >

</head>

<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MKGQRV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MG4V7Z');</script>
<!-- End Google Tag Manager -->





<!-- MAIN SITE CONTENT -->

<?php 
  if(get_field("full_bkg_image"))
	echo '<div class="mainhome homebkg" class="clearfix" id="hmbnr">';
  else
 	 echo '<div class="mainhome" class="clearfix">';
  ?>




<header class="tophead">

	
 
  <div class="mainhd">
        	<div class="hdrtop">
            
           <div class="container clearfix">
           
           <?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
         
           
			<a href="https://<?php echo $_SERVER['HTTP_HOST'] ?>" > <div class="logo"></div></a>
            
            <?php else: ?>
            
            <a href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/yiptv-home-2/"><div class="logo"></div></a>
            <?php endif; ?>

        
        <?php
            wp_nav_menu( array(
               'menu'              => 'menu',
                'theme_location'    => 'secondary',
                'depth'             => 1,
                'container'         => 'div',
                'container_class'   => 'topright right',
               'menu_class'        => 'topnav')
            );
			  
        ?>
        
        </div>
        </div>
        
        <div class="hdrbottom">
<div class="container clearfix">

		<div class="topright2">
			
				 <?php
				 
            wp_nav_menu( array(
              'menu'              => 'menu',
                'theme_location'    => 'primary',
             //   'depth'             => 1,
                'menu_class'        => 'mainnav')
            );
			  
        ?>
        
        <?php
         wp_nav_menu( array(
              'menu'              => 'menu',
                'theme_location'    => 'login',
                'depth'             => 1,
				'container'         => 'div',
				 'container_class'   => 'right',
                'menu_class'        => 'loginnav')
            );
			  
        ?>
        
        
        
        
        </div>
        </div>
		</div> <!-- HDR BOTTOM -->
        
        
		</div><!-- END CONTAINER -->
        
        
   <!-- MOBILE HEADER -->     
        
         <div class="mobilehead">
         
         <?php
         wp_nav_menu( array(
              'menu'              => 'menu',
                'theme_location'    => 'mobile',
                'depth'             => 1,
				'container'         => 'div',
				 )
            );
			  
        ?>
        	
            
            <a href="<?php echo esc_url(home_url('/')) ?>/yiptv/"><div class="logo"></div></a>
            
            
            <?php
         wp_nav_menu( array(
              'menu'              => 'menu',
                'theme_location'    => 'mobileham',
                'depth'             => 1,
				'container'         => 'div',
				'menu_class' => 'mainnav',
				 )
            );
			  
        ?>
        
        
       
            
		</div><!-- END CONTAINER -->
</header>