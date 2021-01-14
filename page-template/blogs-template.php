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
    <div class="blogs-container blogs-page">
      <?php 
          $args = array (
            'post_type' => 'post',
            'posts_per_page' => 10,
          );
          $blogposts = new WP_Query($args);
          while ($blogposts->have_posts()) {
            $blogposts->the_post();
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
      <?php } wp_reset_query(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>