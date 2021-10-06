<?php
/**
 * Template Name: Home Page Template
 **/
?>

<?php get_header(); ?>

<section class="wrapper" id="home-wrapper">
    <div class="container">
        <p class="intro-p" >✌ Hi! i am <span class="hor-line"></span> </p>
        <h2 class="intro-h1 name">Luis Gudmalin.</h2>
        <h2 class="intro-h1">I <i class="fa fa-terminal"></i> Code and  Draw.</h2>
        <p class="intro-desc">
          I'm a web developer looking for opportunities to apply my
          skills in design 🖌 and development 🛠.
        </p>
        <a href="<?php echo site_url('/contact'); ?>" class="theme-btn">Contact Me!</a>
    </div>
</section>

<section class="wrapper" id="project-wrapper">
  <div class="container">
    <div class="container-title">
        <h2 class="title"> Recent Projects </h2>
    </div>
      <div class="project-container">
        <?php 
            $args = array (
              'post_type' => 'project',
              'posts_per_page' => 3,
            );
            $blogposts = new WP_Query($args);
            while ($blogposts->have_posts()) {
              $blogposts->the_post();
        ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
              <div class="entry-content">
                <div class="project-content">
                  <p class="theme-site" ><?php echo the_field('what_theme') ?></p>
                  <div class="theme-title">
                    <a href="<?php the_permalink()?>"><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></a>
                    <p><?php echo the_field('version') ?></p>
                  </div> 
                  <p class="theme-desc" ><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                  <div class="theme-tags">
                    <?php echo the_tags('Tags: ', ''); ?>
                  </div>
                  <a href="<?php the_permalink()?>" class="view-proj" >View Project</a>
                </div>	
              </div>
            </article>
        <?php } wp_reset_query(); ?>
      </div>
      <div class="view-btn">
        <a href="<?php echo site_url('/project');?>">
            <button class="theme-btn">View All <i class="fa fa-star-of-life"></i> </button>
        </a>
      </div>
  </div>
</section>

<section class="wrapper" id="coding-wrapper">
  <div class="container">
    <div class="container-title">
        <h2 class="title"> Coding Challenges </h2>
    </div>
    <div class="coding-container project-container">
        <?php 
            $args = array (
              'post_type' => 'coding',
              'posts_per_page' => 3,
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
      <div class="view-btn">
        <a href="<?php echo site_url('/challenges');?>">
            <button class="theme-btn">View All <i class="fa fa-star-of-life"></i> </button>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="wrapper" id="blogs-wrapper">
  <div class="container">
    <div class="container-title">
      <h2 class="title"> Recent Blogs </h2>
    </div>
    <div class="blogs-container">
      <?php 
          $args = array (
            'post_type' => 'post',
            'posts_per_page' => 3,
          );
          $blogposts = new WP_Query($args);
          while ($blogposts->have_posts()) {
            $blogposts->the_post();
      ?>
          <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <div class="entry-content">
              <div class="blog-content">
                <div class="blog-desc">
                  <a href="<?php the_permalink()?>">
                    <h2><?php echo wp_trim_words(get_the_title(), 3); ?></h2>
                  </a>
                  <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
                  <a href="<?php the_permalink()?>" class="the-link">Read More</a>
                </div>
              </div>
            </div>
          </article>
      <?php } wp_reset_query(); ?>
    </div>
    <div class="view-btn">
      <a href="<?php echo site_url('/blog');?>"><button class="theme-btn">View All <i class="fa fa-star-of-life"></i></button></a>
    </div>
  </div>
</section>



<?php get_footer(); ?>