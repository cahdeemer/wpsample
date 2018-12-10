<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mfc
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

		<section class="container-fluid extra-padding">
		<?php
		/* 
		*
		*#my-api-div pulls placeholder data from the api referenced in myapi.js
		* in the for loop, we are looping through the posts and only showing them if the index is less than 3
		*/ 
		?>
			<div id="my-api-div" class="row">
				<div class="col-sm-10 offset-sm-1">
					<h2 class="centered">Related posts</h2>
					<div class="card-wrapper">
						<div v-for="(post, index) in posts" :key="post.id" class="card col-md-4 col-sm-12" v-if="index < 3">
							<div>
								<h3>{{ post.title}}</h3>
								<p>{{ post.body}}</p>
							</div>
							<button class="btn btn-secondary">Learn More</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
