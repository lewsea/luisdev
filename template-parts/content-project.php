<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package luisdev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <p class="theme-site" ><?php echo the_field('what_theme') ?></p>
        <p><?php echo the_field('version') ?></p>
	</header>
	<?php luisdev_post_thumbnail(); ?>
	<div class="btn-links">
		<a href="<?php echo the_field('code_link') ?>" class="demo-link" ><i class="fa fa-code"></i> View on Github</a>
		<a href="<?php echo the_field('demo_link') ?>" class="demo-link" ><i class="fa fa-eye"></i> Demo</a>
	</div>
	<div class="entry-content">
        <div class="entry-block">
            <div class="project-navigation">
                <h2>Contents</h2>
                <ul>
                    <li><a href="#desc">Description</a></li>
                    <li><a href="#design-development">Design And Development</a></li>
                    <li><a href="#tools">Tools Used</a></li>
                    <li><a href="#directory">Directory Structure</a></li>
                </ul>
            </div>
        </div>
        <div class="entry-block" id="description">
            <h4 class="entry-desc" >Description</h4>
            <p><?php echo get_the_excerpt() ?></p>
        </div>
		<div class="entry-block" id="design-development">
            <h4 class="entry-desc" >Design & Development</h4>
            <div class="design-img">
                <img src="<?php echo the_field('design_image'); ?>" alt="<?php echo the_title();?>" title="<?php echo the_title(); ?>"> 
            </div>
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'luisdev' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );
            ?>
        </div>
        <div class="entry-block" id="tools">
            <h4 class="entry-desc" >Tools Used</h4>
            <div class="tools-used">
                <?php echo the_field('tools_used'); ?>
            </div>
        </div>
        <div class="entry-block" id="directory">
            <h4 class="entry-desc" >Directory Structure</h4>
            <div class="directory-structure">
                <?php echo the_field('file_structure'); ?>
            </div>
        </div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->