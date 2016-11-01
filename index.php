<?php get_header(); ?>
<div id="contentWrap">
    <div id="container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="meta">
                        <em>Posted on:</em> <?php the_time('F jS, Y') ?>
                        <em>by</em> <?php the_author() ?>
                    </div>
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                    <div class="postmetadata">
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
