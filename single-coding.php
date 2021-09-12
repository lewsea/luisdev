<?php
/**
 * The template for displaying all single coding chanllenges
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package luisdev
 */

get_header();
?>
	<main id="primary" class="site-main">
		<div class="wrapper single-coding-wrapper">
			<div class="container">
                <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile; // End of the loop.
                ?>

                <div class="single-pagination single-coding-pagination">
                    <?php 
                        if ( !empty($prev = get_previous_post()) ) {
                            $prev_title = $prev->post_title;
                            $prev_img = get_the_post_thumbnail_url($prev->ID);
                    ?>
                    <div class="prev">
                        <a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>">
                            <div class="prev-link">
                                <i class="fa fa-long-arrow-alt-left"></i>
                                <h4><?php echo $prev_title; ?></h4>
                            </div>
                            
                            <img src="<?php echo $prev_img; ?>" alt="<?php echo $prev_title; ?>">
                        </a>
                    </div>
                    <?php }?>

                    <?php 
                        if ( !empty($next = get_next_post()) ) {
                            $next_title = $next->post_title;
                            $next_img = get_the_post_thumbnail_url($next->ID);
                        ?>
                        <div class="next">
                            <a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>">
                                <div class="next-link">
                                    <h4><?php echo $next_title; ?></h4>
                                    <i class="fa fa-long-arrow-alt-right"></i>
                                </div>
                                <img src="<?php echo $next_img; ?>" alt="<?php echo $next_title; ?>">
                            </a>
                        </div>
                    <?php }; ?>
                </div>

                <div class="container-title">
                    <h3 class="title">More of my Projects</h3>
                </div>

                <div class="project-container">
                    <?php 
                        $args = array (
                        'post_type' => 'project',
                        'posts_per_page' => 3,
                        'orderby' => 'rand',
                        );
                        $blogposts = new WP_Query($args);
                        while ($blogposts->have_posts()) {
                        $blogposts->the_post();
                    ?>
                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <div class="entry-content" style="border: none; padding: 0; margin: 0">
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
	</main>
<?php
get_footer();
