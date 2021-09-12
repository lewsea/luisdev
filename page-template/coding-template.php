<?php
/**
 * Template Name: Coding Page Template
 **/
?>

<?php get_header(); ?>

<div class="" id="coding-wrapper">
  <div class="container">
    <div div class="container-title page-title">
      <h2 class="title "> Coding Challenges </h2>
    </div>
    <div class="container-desc">
      <p>Things I started but never finished.</p>
    </div>
    <div class="coding-container project-container">
        <?php 
            $args = array (
              'post_type' => 'coding',
              'posts_per_page' => -1,
            );
            $blogposts = new WP_Query($args);
            while ($blogposts->have_posts()) {
              $blogposts->the_post();
        ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
              <div class="entry-content">
                    <div class="coding-image">
                        <a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="project-content">
                        <p class="theme-site" ><?php echo the_field('what_theme') ?></p>
                        <a href="<?php the_permalink()?>"><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></a>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                        <a href="<?php the_permalink()?>" class="view-coding" >View Challenge</a>
                    </div>	
              </div>
            </article>
        <?php } wp_reset_query(); ?>
      </div>
</div>

<?php get_footer(); ?>