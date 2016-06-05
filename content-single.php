<?php
/**
 * The template used for displaying post content in single.php
 *
 * @package Theme Point-B
 */
 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php pointb_posted_on(); ?>

			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link">
				<?php comments_popup_link( __( '0 Commentaire', 'pointb' ), __( '1 Commentaire', 'pointb' ), __( '% Commentaires', 'pointb' ) ); ?>
			</span>
			<?php endif; ?>
		<!-- .entry-meta --></div>
	<!-- .entry-header --></header>

	<div class="clearfix entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages :', 'pointb' ),
				'after'  => '</div>',
			) );
		?>
	<!-- .entry-content --></div>

	<footer class="entry-meta entry-footer">
		<?php if ( 'post' == get_post_type() ) : ?>
			<?php
				$tags_list = get_the_tag_list( '', __( '', 'pointb' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( '%1$s', 'pointb' ), $tags_list ); ?>
			</span>
			<?php endif; ?>
		<?php endif; ?>
	<!-- .entry-footer --></footer>
<!-- #post-<?php the_ID(); ?> --></article>
