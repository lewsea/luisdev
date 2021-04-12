<?php
/**
 * Template Name: Blogs Page Template
 **/
?>

<?php get_header(); ?>

<div class="wrapper" id="blogs-wrapper">
  <div class="container">
    <div div class="container-title page-title">
      <h2 class="title"> Blogs </h2>
    </div>
    <div class="container-desc">
      <p>My thoughts and learning experience in a written way.</p>
    </div>
    <div class="blogs-page">
        <div class="blogs-container blogs-wrapper-page">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts(array(
                'post_type' => 'post', // You can add a custom post type if you like
                'paged' => $paged,
                'posts_per_page' => 3 // limit of posts
            ));
            if ( have_posts() ) :  while ( have_posts() ) : the_post();
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
            <?php
            endwhile;
            endif;
            ?>
        </div>
        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
  </div>
    <div class="blogs-pagination">
        <?php post_pagination($prev_text = false) ?>
    </div>
</div>

<?php
get_footer();