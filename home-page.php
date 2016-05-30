<?php
/**
* Template Name: Home Page
*
* The template for displaying homepage with no sidebar.
*
* @package Theme Point-B
*/

get_header(); ?>

<div class="row">
	<div class="col-xs-12 content-area" role="main">
		<!-- Content area -->
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</div>

<!-- 3 pages enfant de la page courante trié par le champs Ordre-->
<h2><div class="home-theme">Services / Compétences</div></h2>
<div class="row">
	<?php
	$query = new WP_query(array('post_type'=>'page', 'post_parent'=>get_the_ID(), 'order'=> 'ASC'));
	while($query->have_posts()): $query->the_post(); global $post;
	?>
	<div class="col-xs-12 col-md-4 col-sm-4 content-area">
		<h3><center><?php the_title(); ?></center></h3>
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
</div>

<!-- 3 derniers billets du blog -->
<h2><div class="home-theme">Les dernières actualités</div></h2>
<div class="row">
	<?php
	$query = new WP_query(array('post_type'=>'post','post_per_page'=>3));
	while($query->have_posts()): $query->the_post(); global $post;
	?>
	<div class="col-xs-12 col-md-4 col-sm-4 content-area">
		<h3><div class="home-actu-title"><?php the_title(); ?></div></h3>
		<?php
		// Check if the post has a Post Thumbnail assigned to it.
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'medium' );
		}
		?>
		<?php the_excerpt(); ?>
	</div>
	<?php endwhile; ?>
</div>


<?php get_footer(); ?>
