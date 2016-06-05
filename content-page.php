<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Theme Point-B
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
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
	<?php edit_post_link( __( 'Modifier', 'pointb' ), '<footer class="entry-meta entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
<!-- #post-<?php the_ID(); ?> --></article>
