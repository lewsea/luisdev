<?php
/**
 * Template Name: Project Page Template
 **/
?>

<?php get_header(); ?>

<div class="wrapper" id="project-wrapper">
  <div class="container">
    <div div class="container-title page-title">
      <h2 class="title "> Projects </h2>
    </div>
    <div class="container-desc">
      <p>Simple and clean User Interface for users.</p>
    </div>
    <div class="project-container page-project">
        <?php 
            $args = array (
              'post_type' => 'project',
              'posts_per_page' => 5,
            );
            $blogposts = new WP_Query($args);
            while ($blogposts->have_posts()) {
              $blogposts->the_post();
        ?>  
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
              <div class="entry-content">
                <div class="project-img">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>"> 
                </div>  
                <div class="project-content">
                  <p class="theme-site" ><?php echo the_field('what_theme') ?></p>
                  <div class="theme-title">
                    <a href="<?php the_permalink()?>"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
                    <p><?php echo the_field('version') ?></p>
                  </div> 
                  <p class="theme-desc" ><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                  <div class="theme-tags">
                    <?php echo the_tags(); ?>
                  </div>
                  <a href="<?php the_permalink()?>" class="view-proj" >View Project</a>
                </div>	
              </div>
            </article>
        <?php } wp_reset_query(); ?>
      </div>
  </div>
</div>
<?php get_footer(); ?>