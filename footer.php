<footer>
<div class="container clearfix">

<div class="ftrchannels social clearfix" >

<a href="https://www.facebook.com/pages/Yiptv/670093559720356?fref=ts" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Facebook.png" alt="Facebook" ></a>
<a href="https://twitter.com/YipTV" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Twitter.png" alt="Twitter" ></a>
<a href="http://linkedin.com/company/yiptv" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Linkedin.png" alt="Linkedin" ></a>
<a href="https://plus.google.com/110377468150377213884" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Google.png" alt="Google+" ></a>
<h4 style="clear:left;margin:55px 0 15px">Yip Now Blog</h4>
<?php 
//the query

$args = array(
    'cat'=> 491,
    'posts_per_page' => 3
  );

query_posts($args); ?>
<?php //the loop
while ( have_posts() ) : the_post(); ?>
<div id="yipnow">
<p>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</p>
<?php the_excerpt(); ?>
</div>
<?php endwhile; 
// Reset Query
wp_reset_query();
?>
</div>


<div class="ftrchannels">
<div>
<h4>
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
Sports
<?php else: ?>
Deportes
<?php endif; ?>
</h4>
<?php
            wp_nav_menu( array(
                'menu'              => 'menu',
                'theme_location'    => 'sports',
                'depth'             => 2)
            );
			  
        ?>
        
        </div>
        <div>
<h4>
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
Kids
<?php else: ?>
Ni&ntilde;os
<?php endif; ?>

</h4>
<?php
            wp_nav_menu( array(
                'theme_location'    => 'kids',
                'depth'             => 2)
            );
			  
        ?>
     </div>
     <div>   
        
<h4>General</h4>
<?php
            wp_nav_menu( array(
  
                'theme_location'    => 'general',
                'depth'             => 2)
            );
			  
        ?>




</div>
</div>

<div class="ftrchannels">
<h4>
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
News
<?php else: ?>
Noticias
<?php endif; ?>


</h4>
<?php
            wp_nav_menu( array(

                'theme_location'    => 'news',
                'depth'             => 2)
            );
			  
        ?>

</div>

<div class="ftrchannels">
<h4>
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
Music
<?php else: ?>
M&uacute;sica
<?php endif; ?>


</h4>
<?php
            wp_nav_menu( array(

                'theme_location'    => 'music',
                'depth'             => 2)
            );
			  
        ?>
<h4>
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
Educational
<?php else: ?>
Educaci&oacute;n
<?php endif; ?>

</h4>
<?php
            wp_nav_menu( array(

                'theme_location'    => 'educational',
                'depth'             => 2)
            );
			  
        ?>



</div>

<div class="ftrchannels">
<h4>
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
Lifestyle
<?php else: ?>
Estilo de Vida
<?php endif; ?>

</h4>
<?php
            wp_nav_menu( array(

                'theme_location'    => 'lifestyle',
                'depth'             => 2)
            );
			  
        ?>
<h4>
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
Faith
<?php else: ?>
Fe
<?php endif; ?>

</h4>
<?php
            wp_nav_menu( array(

                'theme_location'    => 'faith',
                'depth'             => 2)
            );
			  
        ?>



</div>


<div class="ftrchannels">
<h4>
<?php

$currentlang = get_bloginfo('language');
if($currentlang=="en-US"):?>
Entertainment
<?php else: ?>
Entretenimiento
<?php endif; ?>


</h4>
<?php
            wp_nav_menu( array(
  
                'theme_location'    => 'entertainment',
                'depth'             => 2)
            );
			  
        ?>

</div>




</div><!-- END CONTAINER -->

</footer>


<section id="greybnr">

<?php
            wp_nav_menu( array(
             
                'theme_location'    => 'footer',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'container clearfix')
            );
			  
        ?>

</section>

<section id="bottom">
<div class="container">

<?php
            wp_nav_menu( array(
              
                'theme_location'    => 'legalfooter',
                'depth'             => 2)
            );
			  
        ?>

<p>Copyright &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>. Use of the YipTV Service and this website constitutes acceptance of our terms of service and privacy policy.</p>
</div>
</section>
<!-- MAIN SITE CONTENT -->
</div>

</footer>


</body>
</html>