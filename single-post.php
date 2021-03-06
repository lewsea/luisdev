<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package luisdev
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="wrapper single-post-wrapper">
        <div class="container">
            <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content');

                endwhile; // End of the loop.
            ?>

            <div class="single-blog-pagination">
                <?php previous_post_link( $format = '<div class="prev-link"> <i class="fa fa-long-arrow-alt-left"></i> %link </div>' ) ?>
                <?php next_post_link($format = '<div class="next-link"> %link <i class="fa fa-long-arrow-alt-right"></i> </div>'); ?>
            </div>
            
            <h2 class="related-title">Related Blogs</h2>
            <?php
                $tags = wp_get_post_tags($post->ID);
                if ($tags) {
                    echo '<div class="related-blog">';
                    $first_tag = $tags[0]->term_id;
                    $args=array(
                    'tag__in' => array($first_tag),
                    'post__not_in' => array($post->ID),
                    'posts_per_page'=>3,
                    'caller_get_posts'=>1
                );
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <div class="related-blog-block">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                            <div class="blog-inner">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
                }
                wp_reset_query();
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
