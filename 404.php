<?php get_header(); ?>
<div id="container">
    <div class="general" id="content">
    	<h2 style="text-align: center;">Woops...</h2>
        <?php $upload_dir = wp_upload_dir(); ?>
  <img width="634px" style="display: block; margin: 0 auto; margin-top:50px;" src="<?php echo $upload_dir['baseurl']; ?>/2015/08/StayTuned-4041.jpg">
  <p style="text-align: center; font-size: .9em; margin-top: 25px;">Sorry we couldn't find what you were looking for. Try the links below to get more info on YipTV</p>
  <p style="text-align: center; font-size: .9em;">
    <a href="<?php echo esc_url(home_url('/')); ?>/channels/">
      Channels</a> | 
    <a href="<?php echo esc_url(home_url('/')); ?>/how-to-watch/">
      How to Watch</a> | 
    <a href="<?php echo esc_url(home_url('/')); ?>/sign-up/free">
      Join Free</a> | 
    <a href="<?php echo esc_url(home_url('/')); ?>/faqs/">
      FAQs</a>
  </p>
    </div> <!-- end contentWrap -->
</div> <!-- end content -->
<?php get_footer(); ?>