<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mfc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="jumbotron jumbotron-fluid" style="background: center / cover no-repeat linear-gradient(170deg, rgba(134,188,218,0.4), rgba(134,188,218,0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/park.jpg') center;">
			<div class="container">
				<p class="lead"><?php the_date(); ?></p>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				
			</div>
		</div>
	</header>
		
	<section class="container-fluid">	
		<div class="row entry-meta">
			<div class="col-sm-10 offset-sm-1">
				<p><?php mfc_posted_on(); ?> <?php mfc_posted_by(); ?></p>
			</div>
		</div>

		<div class="row entry-content">
			<div class="col-sm-10 offset-sm-1">
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mfc' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
				?>
			</div>
		</div>
	</section>

	<footer class="entry-footer container-fluid">
		<div class="row">
			<div class="col-sm-10 offset-sm-1">
				<?php the_category( ', ' ); ?>
			</div>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
