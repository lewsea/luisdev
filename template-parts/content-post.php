<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package luisdev
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="entry-content">
    <!-- <div class="blog-img">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
    </div> -->
    <div class="blog-content">
        <div class="blog-desc">
        <a href="<?php the_permalink()?>"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
        <p><?php echo wp_trim_words(get_the_excerpt(), 40); ?></p>
        <a href="<?php the_permalink()?>" class="the-link">Read More</a>
        </div>
    </div>
    </div>
</article>