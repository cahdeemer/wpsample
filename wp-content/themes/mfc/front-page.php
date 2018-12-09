<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package  mfc
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

        <div class="jumbotron jumbotron-fluid" style="background: center / cover no-repeat linear-gradient(rgba(245,162,47,0.6), rgba(255,255,255,0.4)), url('<?php echo get_template_directory_uri(); ?>/assets/family_flowers_bkgr.jpg') center;">
            <div class="container">
                <button class="btn btn-hero">Give Feedback</button>
                <h1 class="display-4">Stronger Families.<br>Stronger Communities</h1>
                <p class="lead">Every child deserves a safe, loving, and nurturing home.</p>
                <p class="lead">Together we can make that happen.</p>
            </div>
        </div>

        <section class="container-fluid bottom-border extra-padding">
            <div class="row">
                <div class="col-sm-10 col-md-5 offset-sm-1 offset-md-1 border-right">
                    <h2>Make a Difference</h2>
                    <p class="slim-p">Mentor or volunteer. Foster or adopt. Become a partner or give financially. Your help is critical to our mission -- however you can give.</p>
                    <button class="btn btn-secondary">Learn More</button>
                </div>
                <div class="col-sm-10 col-md-5 offset-sm-1 offset-md-1">
                    <h2>Find Support</h2>
                    <p class="slim-p">For families, youth and providers already working with CBC, or caregivers and parents seeking family strengthening services, we can help you find the information, forms and support you need.</p>
                    <button class="btn btn-secondary">Learn More</button>
                </div>

            </div>
        </section>

         <section class="container-fluid bottom-border extra-padding">
            <div class="row">
                <div class="col-sm-10 col-md-5 offset-sm-1 offset-md-1">
                    <h2>Key Resources</h2>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                        <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                        <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                        <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                        <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                        <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                    </ul>            
                </div>
                <div class="col-sm-10 col-md-4 offset-sm-1 offset-md-1">
                    <h2>What's New</h2>
                    <figure class="figure callout-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/kids-playing-outside.jpg" class="figure-img img-fluid" alt="A generic square placeholder imagein a figure.">
                        <figcaption class="figure-caption">Kids playing outside. Credit: Shutterstock.</figcaption>
                    </figure>
                    <p>For families, youth and providers already working with CBC, or caregivers and parents seeking family strengthening services, we can help you find the information, forms and support you need.</p>
                </div>

            </div>
        </section>

        <section class="container-fluid bottom-border extra-padding">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <h2 class="centered">Our Impact</h2>
                    <div class="flex-container">
                        <div class="stat flex-item">
                            <p class="flex-container flex-center flex-column">
                                <span class="circle-img primary-dark-bkgr flex-container flex-center">1000</span>
                                <span>facilitated adoptions</span>
                            </p>
                        </div>
                        <div class="stat flex-item">
                            <p class="flex-container flex-center flex-column">
                                <span class="circle-img primary-light-bkgr flex-container flex-center">69%</span>
                                <span> of families reunited</span>
                            </p>
                        </div>
                        <div class="stat flex-item">
                            <p class="flex-container flex-center flex-column">
                                <span class="circle-img bright-bkgr flex-container flex-center">50%</span>
                                <span>increase in available foster homes</span>
                            </p>
                        </div>
                        <div class="stat flex-item">
                            <p class="flex-container flex-center flex-column">
                                <span class="circle-img secondary-light-bkgr flex-container flex-center">25%</span>
                                <span>decrease in child removal rate</span>
                            </p>
                        </div>

                    </div><!-- .flex-container -->
                </div><!-- .col-sm-12 -->
            </div><!-- .row -->
        </section>

         <section class="container-fluid border-bottom extra-padding">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <h2 class="centered">How We Do It</h2>
                    <p class="centered">CBC Operates as a Family of Companies to meet the diverse needs of the clients we serve.<p>
                    <p class="centered">Our major companies include<p>
                </div>
                <div class="flex-container flex-wrap flex-between col-sm-10 offset-sm-1 ">
                <div class="col-md-3 col-sm-12">
                    <h3>CBC of Central Florida</h3>
                    <p>As the region's lead child welfare agency, CBCCF works with a collaborative network of state, local and private partners to ensure that every child in our community has a safe and happy home. CBCCF provides strategic management, support, and advocacy for a child welfare operation network serving more than 3,000 youths each day.</p>
                    </div>
                    <div class="circle-container">
                        <div class="circle-img circle-1" style="background: center / cover no-repeat linear-gradient(rgba(245,162,47,0.6), rgba(255,255,255,0.4)), url('<?php echo get_template_directory_uri(); ?>/assets/father_son_thumb.jpg') center;"></div>
                        <div class="circle-img circle-2" style="background: center / cover no-repeat linear-gradient(rgba(245,162,47,0.6), rgba(255,255,255,0.4)), url('<?php echo get_template_directory_uri(); ?>/assets/brothers.jpg') center;"></div>
                        <div class="circle-img circle-3" style="background: center / cover no-repeat linear-gradient(rgba(245,162,47,0.6), rgba(255,255,255,0.4)), url('<?php echo get_template_directory_uri(); ?>/assets/sisters.jpg') center;"></div>
                        <div class="circle-img circle-4" style="background: center / cover no-repeat linear-gradient(rgba(245,162,47,0.6), rgba(255,255,255,0.4)), url('<?php echo get_template_directory_uri(); ?>/assets/summer_kids.jpg') center;"></div>
                    </div>
                    <div class="col-md-3 col-sm-12 text-alignright">
                        <h3>Community Initiatives</h3>
                        <p>Through grants, programs and system enhancements, Community Initiatives builds and supports networks of collaborative resources to strengthen the child-welfare system and fill critical gaps. At-risk families and youth are served before entering the welfare system through diversion services like homelessness prevention, mental health services, and substance-abuse support.</p>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <h3>CBC of Central Florida</h3>
                        <p>As the region's lead child welfare agency, CBCCF works with a collaborative network of state, local and private partners to ensure that every child in our community has a safe and happy home. CBCCF provides strategic management, support, and advocacy for a child welfare operation network serving more than 3,000 youths each day.</p>
                    </div>
                    <div class="col-md-3 col-sm-12 text-alignright">
                        <h3>CBC of Central Florida</h3>
                        <p>As the region's lead child welfare agency, CBCCF works with a collaborative network of state, local and private partners to ensure that every child in our community has a safe and happy home. CBCCF provides strategic management, support, and advocacy for a child welfare operation network serving more than 3,000 youths each day.</p>
                    </div>
                </div><!-- .flex-container -->
                <div class="col-sm-10 offset-sm-1 centered">
                    <button class="btn btn-primary">View our Financial Statements</button>
                </div>
            </div>
        </section>

         <section class="container-fluid extra-padding">
            <div class="row">
                    <div class="col-sm-10 offset-sm-1">
                    <h2 class="centered">Get Involved</h2>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <figure class="figure callout-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/birthday_party.jpg" class="figure-img img-fluid" alt="A generic square placeholder image in a figure.">
                                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                                </figure>
                                <h3>Mentor</h3>
                                <p>Mentor or volunteer. Foster or adopt. Become a partner or give financially. Your help is critical to our mission -- however you can give.</p>
                                <button class="btn btn-secondary">Learn More</button>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <figure class="figure callout-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/mom_and_baby.jpeg" class="figure-img img-fluid" alt="A generic square placeholder image in a figure.">
                                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                                </figure>
                                <h3>Foster</h3>
                                <p>For families, youth and providers already working with CBC, or caregivers and parents seeking family strengthening services, we can help you find the information, forms and support you need.</p>
                                <button class="btn btn-secondary">Learn More</button>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <figure class="figure callout-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/moms_and_baby.jpg" class="figure-img img-fluid" alt="A generic square placeholder image in a figure.">
                                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                                </figure>
                                <h3>Adopt</h3>
                                <p>For families, youth and providers already working with CBC, or caregivers and parents seeking family strengthening services, we can help you find the information, forms and support you need.</p>
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