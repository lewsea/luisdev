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
	</header>
	<?php luisdev_post_thumbnail(); ?>
	<div class="btn-links">
		<a href="<?php echo the_field('code_link') ?>" target="_blank" class="demo-link" ><i class="fa fa-code"></i> Code on Github</a>
		<a href="<?php echo the_field('demo_link') ?>" target="_blank" class="demo-link" ><i class="fa fa-eye"></i> View Demo</a>
	</div>
	<div class="entry-content">
		<div class="entry-block" id="design-development">
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
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->