<?php get_header(); ?>
<div id="contentWrap">
    <div class="container" style="margin-top:150px;min-height:400px;">

    <?php get_sidebar(); ?>
        <?php if ( have_posts() ) : ?>
        
        
        <?php 
$year = get_the_date('Y');
$month = get_the_date('m');
?>
        <?php query_posts('category_name=yip-now&monthnum=' . $month); ?>
        
      
			<?php if (is_month()) { ?>
                <h2 id="archiveTitle">Archive for &#8216;<?php single_cat_title(); ?>&#8217; in <?php the_time('F') ?> </h2>
            <?php } elseif( is_tag() ) { ?>
                <h3 id="archiveTitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>
            <?php } elseif (is_day()) { ?>
                <h3 id="archiveTitle">Archive for <?php the_time('F jS, Y'); ?></h3>
            <?php } elseif (is_month()) { ?>
                <h3 id="archiveTitle">Archive for <?php the_time('F, Y'); ?></h3>
            <?php } elseif (is_year()) { ?>
                <h3 id="archiveTitle">Archive for <?php the_time('Y'); ?></h3>
            <?php } elseif (is_author()) { ?>
                <h3 id="archiveTitle">Author Archive</h3>
            <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h3 id="archiveTitle">Archives</h3>
            <?php } ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    <div class="meta">
                        <em>Posted on:</em> <?php the_time('F jS, Y') ?>
                        <em>by</em> <?php the_author() ?>
                    </div>
                   
                    <div class="postmetadata" style="margin-bottom:25px;">
                        <?php the_tags('Tags: ', ', ', '<br />'); ?>
                        Posted in <?php the_category(', ') ?> | 
                        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                    </div>
                </article>
              
             
            <?php endwhile; ?>

            <?php
            /* Added Previous/next page navigation per theme checker requirements */
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'yiptv' ),
                'next_text'          => __( 'Next page', 'yiptv' ),
                'before_page_number' => '<span class="meta-nav">' . __( 'Page', 'yiptv' ) . ' </span>',
            ) );
            ?>
              
        <?php else : ?>
            <h2>Not Found</h2>
        <?php endif; ?>
    </div> <!-- end contentWrap -->

</div> <!-- end content -->
<?php get_footer(); ?>
