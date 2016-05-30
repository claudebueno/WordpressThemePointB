<?php
/**
 * The template part for displaying content.
 *
 * @package Theme Point-B
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix row'); ?>>
	<header class="col-xs-12 entry-header">
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta entry-cats">
			<?php
				$category = get_the_category(); 
				if ( $category[0] ) {
					echo '<span class="cat-links"><a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a></span>';
				}
			?>
		<!-- .entry-meta --></div>
		<?php endif; ?>

		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php pointb_posted_on(); ?>
			<?php pointb_posted_by(); ?>

			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link">
				<?php comments_popup_link( __( '0 Commentaire', 'pointb' ), __( '1 Commentaire', 'pointb' ), __( '% Commentaires', 'pointb' ) ); ?>
			</span>
			<?php endif; ?>
		<!-- .entry-meta --></div>
		<?php endif; ?>
	<!-- .entry-header --></header>

	<div class="col-sm-5 entry-thumbnail">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php if ( has_post_thumbnail() ): ?>
				<?php the_post_thumbnail( 'thumb-medium' ); ?>
			<?php else: ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-medium.png" alt="<?php the_title(); ?>" />
			<?php endif; ?>
		</a>
	<!-- .entry-thumbnail --></div>

	<div class="col-sm-7 entry-summary">
		<?php the_excerpt(); ?>
	<!-- .entry-summary --></div>
<!-- #post-<?php the_ID(); ?> --></article>