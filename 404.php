<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package luisdev
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'luisdev' ); ?></a>

	<main id="primary" class="site-main">
		<div class="container">
			<section class="error-404 not-found">
                <h1><?php esc_html_e('404 Not Found', 'luisdev'); ?></h1>
                <h2><?php esc_html_e( 'It seems like you are lost, let\'s get you back on track.', 'luisdev'); ?></h2>
                <?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
                <?php get_search_form(); ?>
			</section>
		</div>
	</main>
</div>
<?php wp_footer(); ?>
</body>
</html>