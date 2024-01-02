<?php
/**
 * Template Name: Contact Page Template
 */

get_header();?>

<section class="contact-section">
            <div class="fixed-bg bg3"></div>
            <div class="ct-content">
                <div class="contact-content">
                    <div class="ct-head">
                        <h2>Contact Us</h2>
                    </div><!--ct-head end-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="wd-content">
                                <h3>Email Us </h3>
                                <ul>
                                    <li><a href="mailto:<?php the_field('add_email_address', 'option'); ?>" title=""><?php the_field('add_email_address', 'option'); ?></a></li>
                                </ul>
                            </div><!--wd-content end-->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="wd-content">
                                <h3>Phone Number  </h3>
                                <ul>
                                    <li><a href="tel:<?php the_field('add_phone_number', 'option'); ?>"><?php the_field('add_phone_number', 'option'); ?></a></li>
                                </ul>
                            </div><!--wd-content end-->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="wd-content">
                               <!-- <h3>Address  </h3>-->
                                <ul>
                                    <li><a href="#" title=""><?php the_field('add_address', 'option'); ?></a></li>
                                </ul>
                            </div><!--wd-content end-->
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="dp-text">
                                <h3>Drop us a line or two, we are open for creative minds and music featurings!</h3>
                                <span>Get in Touch</span>
                                <a href="#" title="" class="mail-link">info@music.com</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="wd-content">
                                <h3>Our Music Studio  </h3>
                                <ul>
                                    <li>19 Barlowstone Avenue San Pedro, CA 90731 California</li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <ul class="lg-social wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                        <li><a href="#" class="facebookColor"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" class="twitterColor"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#" class="instagramColor"><i class="fab fa-instagram"></i></a></li>
                    </ul><!--lg-social end-->
                </div><!--contact-content end-->
            </div><!--ct-content end-->
        </section>


<section class="block">
    <div class="fixed-bg black-bg"></div>
    <div class="container">
        <div class="subscribe-section text-center">
            <h2>Submit Your Query</h2>
            <?php echo do_shortcode('[contact-form-7 id="27" title="Contact page form"]'); ?>
        </div><!--subscribe-section end-->
    </div>
</section>



<?php get_footer(); ?>
