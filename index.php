<?php get_header(); ?>
<section class="body">
<?php
    $showposts = -1; // -1 shows all posts
    $do_not_show_stickies = 1; // 0 to show stickies
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args=array(
        'showposts' => $showposts,
        'caller_get_posts' => $do_not_show_stickies,
        'paged' => $paged
       );
    $my_query = new WP_Query($args); ?>
    <?php query_posts($args); if( have_posts() ) :?>
	<?php while (have_posts()): the_post(); ?>
        <div id="post">
            <div id="postcontent">
                <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
                    <h2><?php the_title(); ?></h2>
                    <span class="meta"><strong><?php the_time('F jS, Y'); ?></strong></span>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php else: ?>

            <div id="post-404" class="noposts">

                <p><?php _e('None found.', 'example'); ?></p>

            </div>

<?php endif;
wp_reset_query(); ?>
</section>

<?php get_footer(); ?>