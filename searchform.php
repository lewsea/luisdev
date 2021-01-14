<?php
/**
 * The template for displaying search forms
 */
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="input-group">
		<input class="field form-control" id="s" name="s" type="text"
			placeholder="<?php esc_attr_e( 'Search &hellip;' ); ?>" value="<?php the_search_query(); ?>">
			<button class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit">
                <i class="fa fa-search"></i>
            </button>
	</div>
</form>
