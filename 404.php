<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Theme Point-B
 */

get_header(); ?>

	<div class="row">
		<div class="col-md-8 content-area" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! La page que vous cherchez n\'existe pas.', 'pointb' ); ?></h1>
				<!-- .page-header --></header>

				<div class="page-content">
					<p><?php _e( 'Il semble qu\'il n\'y a pas de page à cette adresse. Peut être pouvez-vous faire une recherche ou utiliser un des liens ci-dessous ?', 'pointb' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts', '' , 'before_title=<h3 class="widget-title">&after_title=</h3>' ); ?>

					<?php if ( pointb_categorized_blog() ) : ?>
					<div class="widget widget_categories">
						<h3 class="widget-title"><?php _e( 'Categories', 'pointb' ); ?></h3>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 25,
							) );
						?>
						</ul>
					</div>
					<?php endif; ?>

					<?php
					$archive_content = '<p>' . sprintf( __( 'Archives. %1$s', 'pointb' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', 'before_title=<h3 class="widget-title">&after_title=</h3>' );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud', '' , 'before_title=<h3 class="widget-title">&after_title=</h3>' ); ?>

				<!-- .page-content --></div>
			<!-- .error-404 --></section>

		<!-- .content-area --></div>

		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
