<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mfc
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
			<section class="container-fluid bright-bkgr centered">
				<div class="row">
					<div class="col-sm-12">
						<button class="btn btn-hero">donate</button>
					</div>
				</div>
			</section>
			<section class="container-fluid white-bkgr centered">
				<div class="row">
					<div class="col-sm-12">
						<h2>Stay up to date</h2>
						<p>Sign up for our newsletter</p>
						<form class="form-inline">
  							<label class="sr-only" for="inlineFormInputName2">Name</label>
  							<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
  							<button type="submit" class="btn btn-primary mb-2">Submit</button>
						</form>
					</div>
				</div>
			</section>
			<section class="container-fluid site-info">
				<div class="row">
					<div class="col-sm-3 flex-container flex-center">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-link">
         					<?php include('assets/logo_no_text.svg'); ?>
        					<h2 class="site-title">Embrace<br>Families</h2>
        				</a>
					</div>
					<div class="col-sm-6">
						<nav class="footer-nav">
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Get Involved</a></li>
								<li><a href="#">Get Help</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Donate</a></li>
								<li><a href="#">Resources</a></li>
								<li><a href="#">Give Feedback</a></li>
								<li><a href="#">Careers</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-sm-3 flex-container flex-center">
						<a href="#">Contact Us</a>
					</div>
				</div><!-- .row -->
			</section><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
