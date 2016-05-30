<?php
/**
 * The template for displaying search forms
 *
 * @package Theme Point-B
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Chercher &hellip;', 'placeholder', 'pointb' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php echo esc_attr_x( 'Recherche pour :', 'label', 'pointb' ); ?>">
	</div>
	<div class="form-submit">
		<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
	</div>
</form>