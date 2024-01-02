<?php
/**
 * Template Name: Home Page Template
 */

get_header(); ?>

        <section class="album-section pb-5">
            <div class="container">
                <div class="alb-head row">
                    <div class="col-lg-7 col-md-7">
                        <div class="alb-title">
                            <span>Songs </span>
                            <h2>by Amber Allen Music</h2>
                        </div><!--alb-title end-->
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <ul class="album-dt">
                            <!--<li>
                                <span>Record Label </span>
                                <h4>Blackmas Music </h4>
                            </li>-->
                            <!--<li>
                                <span>Release Date  </span>
                                <h4>October 2020  </h4>
                            </li>-->
                        </ul>
                    </div>
                </div><!--alb-head end-->
				
				<div class="mycls"> <?php echo do_shortcode('[ai_playlist id="161"]'); ?> </div>
				
                <div class="album-playlist-section" id="jp_container_1">
                    <div class="album-img">
                        <img src="<?php bloginfo('template_url'); ?>/images/albume.jpg" alt="">
                    </div><!--album-img end-->
                    <div class="album-info">
                        <!--<div class="in-head">
                            <span class="ab-name">ALBUM</span>
                            <h2>Written in The Stars</h2>
                            <h5>By <span>Keane</span></h5>
                            <span>15 Songs - 53 Min - 2023</span>
                        </div>-->
                        <div id="jquery_jplayer_1" class="jp-jplayer" style="width: 0px; height: 0px;"><img id="jp_poster_1" style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_1" preload="metadata" src="https://dwstaging.link/cms/allen-music/wp-content/uploads/2023/12/Amber-Allen-Liar.mp3" title="Cro Magnon Man"></audio></div>
						
					
						
                        <div class="jp-audio" role="application" aria-label="media player">
                            <div class="jp-playlist">
                                <ul style="display: block;">
								   <li class="jp-playlist-current">
									  <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">Cro Magnon Man</a></div>
								   </li>
								   <li>
									  <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Your Face</a></div>
								   </li>
								   <li>
									  <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Cyber Sonnet</a></div>
								   </li>
								   <li>
									  <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Tempered Song</a></div>
								   </li>
								   <li>
									  <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Hidden</a></div>
								   </li>
								   <li>
									  <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><span class="jp-free-media">(<a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3" tabindex="-1">mp3</a> | <a class="jp-playlist-item-free" href="http://www.jplayer.org/audio/ogg/Miaow-03-Lentement.ogg" tabindex="-1">oga</a>)</span><a href="javascript:;" class="jp-playlist-item" tabindex="0">Lentement</a></div>
								   </li>
								   <li>
									  <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Lismore</a></div>
								   </li>
								</ul>
                            </div>
                        </div>
                    </div><!--album-info end-->
                    <div class="albm-music-bar">
                        <div class="jp-type-playlist">
                            <div class="jp-gui jp-interface">
                                <div class="jp-progress">
                                    <div class="jp-seek-bar" style="width: 100%;">
                                        <div class="jp-play-bar" style="width: 0%;"></div>
                                    </div>
                                </div>
                                <div class="music-row row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="music-details">
                                            <h3 class="jp-title">Cro Magnon Man</h3>
                                            <span>Keane</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="jp-controls text-center">
                                            <button class="jp-previous" tabindex="0"><i class="fa fa-backward"></i></button>
                                            <button class="jp-play" tabindex="0"><i class="fas fa-play">
												</i></button>
                                            <button class="jp-next" tabindex="0"><i class="fa fa-forward"></i></button>
                                            <button class="jp-stop" tabindex="0">stop</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="oth-controls">
                                            <div class="jp-time-holder">
                                                <div class="jp-current-time" role="timer" aria-label="time">00:00</div>
                                                <div class="jp-duration" role="timer" aria-label="duration">04:27</div>
                                            </div>
                                            <div class="jp-volume-controls">
                                                <button class="jp-mute" tabindex="0">
                                                    <i class="fa fa-volume-up"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--album-playlist-section end-->
                <div class="bottom-text wow slideInUp" data-wow-animation="1000ms" style="visibility: visible; animation-name: slideInUp;">
                   <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy </p> -->
                    <ul class="bt-btns">
                        <li><a class="apple" href="#" title=""><i class="fab fa-apple"></i> Buy on Itunes</a></li>
                        <li><a class="spotify" href="https://open.spotify.com/track/678GjtxbWpQOr76WS1gHJn?si=OWUmunIcQX-sw9Qv8tM8HQ" target="_blank" title=""><i class="fab fa-spotify"></i> Listen on Spotify</a></li>
                    </ul>
                </div><!--bottom-text end-->
            </div>
        </section><!--album-section end-->

        <section class="block">
            <div class="fixed-bg bg1 overlay"></div>
            <div class="container">
                <div class="section-title text-center wow slideInUp" data-wow-duration="1000ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: slideInUp;">
                    <h2>Upcoming Shows</h2>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting  </span>
                </div><!--section-title ned-->
                <div class="shows-list wow slideInUp" data-wow-animation="1000ms" style="visibility: visible; animation-name: slideInUp;">
                    

                    <?php
                    $args = array(
                        'post_type'      => 'upcoming_shows',
                        'posts_per_page' => 10,
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        ?>
                    <div class="shows-row">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="shows-head">
                                    <div class="show-date">
                                        <?php //$datenow = date('Y-m-d H:i:s'); ?>
                                        <h4>16<?php //echo $datenow->format('d'); ?></h4>
                                        <h5>Jan</h5>
                                    </div>
                                    <div class="show-thumb">
                                        <img src="<?php echo $image; ?>" alt="">
                                    </div>
                                    <div class="show-info">
                                        <h3><?php the_title(); ?></h3>
                                        <span><?php the_field('add_sub_heading'); ?></span>
                                    </div>
                                </div><!--shows-head end-->
                            </div>
                            <div class="col-lg-3">
                                <ul class="show-time">
                                    <li>
                                        <div class="sw-icon">
                                            <i class="fa fa-map-marker-alt"></i>
                                        </div>
                                        <?php the_field('add_location'); ?>
                                    </li>
                                    <li>
                                        <div class="sw-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <span><?php the_field('add_time'); ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2">
                                <a href="<?php the_permalink(); ?>" title="" class="theme-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                     <?php } ?>


                    
                    
                    
                    
                </div><!--shows-list end-->
                <div class="full-block text-center">
                    <a href="#" title="" class="sm-btn">See All Shows  </a>
                </div>
            </div>
        </section><!--block end-->

        <?php wp_reset_query(); ?>

        <section class="py-0">
            <div class="container-fluid p-0">
                <div class="about-section row">
                    <div class="col-lg-6">
                        <div class="about-text wow slideInLeft" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: slideInLeft;">
                            <h2 class="sm-title"><?php the_field('artist_bio_heading'); ?></h2>
                            <?php the_field('artist_bio'); ?>
                            
                        </div><!--about-text end-->
                    </div>
                    <div class="col-lg-6">
                        <div class="prz-thumb">
                            <div class="image-thumb">
                                <img src="<?php the_field('bio_photo'); ?>" alt="">
                            </div><!--image-thumb end-->
                        </div>
                    </div>
                </div><!--about-section end-->
            </div>
        </section>

        <section class="block2 d-none">
            <div class="fixed-bg bg2 overlay"></div>
            <div class="container">
                <div class="music-video wow zoomIn" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: zoomIn;">
                    <a href="https://www.youtube.com/watch?v=-B7-Vcdlld8" title="" class="play-btn swipebox"><i class="fa fa-play"></i></a>
                    <h3>New Music Video</h3>
                </div><!--music-video end-->
            </div>
        </section>


        <section class="block  d-none">
            <div class="fixed-bg black-bg"></div>
            <div class="container">
                <div class="gallery-section row">
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <div class="gallery-col overlay2">
                            <img src="<?php bloginfo('template_url'); ?>/musize_template_files/img2.jpg" alt="">
                            <a rel="gallery-1" href="https://www.youtube.com/watch?v=aJOTlE1K90k" title="" class="overlay2 swipebox">
                                <span class="plus-icon"><i class="fa fa-play"></i></span>
                            </a>
                        </div><!--gallery-col end-->
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <div class="gallery-col overlay2">
                            <img src="<?php bloginfo('template_url'); ?>/musize_template_files/img3.jpg" alt="">
                            <a rel="gallery-1" href="./musize_template_files/img3.jpg" title="" class="play-btn v2 swipebox"><i class="fa fa-plus"></i></a>
                        </div><!--gallery-col end-->
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <div class="gallery-col overlay2">
                            <img src="<?php bloginfo('template_url'); ?>/musize_template_files/img4.jpg" alt="">
                            <a rel="gallery-1" href="https://www.youtube.com/watch?v=aJOTlE1K90k" title="" class="overlay2 swipebox">
                                <span class="plus-icon"><i class="fa fa-play"></i></span>
                            </a>
                        </div><!--gallery-col end-->
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <div class="gallery-col overlay2">
                            <img src="<?php bloginfo('template_url'); ?>/musize_template_files/img5.jpg" alt="">
                            <a rel="gallery-1" href="./musize_template_files/img5.jpg" title="" class="play-btn v2 swipebox"><i class="fa fa-plus"></i></a>
                        </div><!--gallery-col end-->
                    </div>
                </div><!--gallery-section end-->
            </div>
        </section>

        <section class="contact-section  d-none">
            <div class="fixed-bg bg3"></div>
            <div class="ct-content">
                <div class="contact-content">
                    <div class="ct-head">
                        <h2>Contact Us</h2>
                        <span>Or come and drink coffee in comfy place</span>
                    </div><!--ct-head end-->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="wd-content">
                                <h3>Booking </h3>
                                <ul>
                                    <li>Jeff Anderson</li>
                                    <li><a href="mailto:example@example.com" title="">booking@music.com</a></li>
                                </ul>
                            </div><!--wd-content end-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="wd-content">
                                <h3>Management  </h3>
                                <ul>
                                    <li>Mack Nolte</li>
                                    <li><a href="mailto:example@example.com" title="">mgnt@music.com</a></li>
                                </ul>
                            </div><!--wd-content end-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="wd-content">
                                <h3>Press Agency  </h3>
                                <ul>
                                    <li>Dana Jean</li>
                                    <li><a href="mailto:example@example.com" title="">press@music.com</a></li>
                                </ul>
                            </div><!--wd-content end-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="dp-text">
                                <h3>Drop us a line or two, we are open for creative minds and music featurings!</h3>
                                <span>Get in Touch</span>
                                <a href="#" title="" class="mail-link">info@music.com</a>
                            </div><!--dp-text end-->
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="wd-content">
                                <h3>Our Music Studio  </h3>
                                <ul>
                                    <li>19 Barlowstone Avenue San Pedro, CA 90731 California</li>
                                </ul>
                            </div><!--wd-content end-->
                        </div>
                    </div>
                    <ul class="lg-social wow slideInLeft" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: slideInLeft;">
                        <li><a href="#" title="" class="spotify-ic"><img src="<?php bloginfo('template_url'); ?>/musize_template_files/spotify.png" alt=""></a></li>
                        <li><a href="#" title="" class="music"><img src="<?php bloginfo('template_url'); ?>/musize_template_files/music.png" alt=""></a></li>
                        <li><a href="#" title="" class="youtube"><img src="<?php bloginfo('template_url'); ?>/musize_template_files/play.png" alt=""></a></li>
                        <li><a href="#" title="" class="soundcloud"><img src="<?php bloginfo('template_url'); ?>/musize_template_files/soundcloud.png" alt=""></a></li>
                    </ul><!--lg-social end-->
                </div><!--contact-content end-->
            </div><!--ct-content end-->
        </section><!--contact-section end-->

        <section class="block  d-none">
            <div class="fixed-bg black-bg"></div>
            <div class="container">
                <div class="subscribe-section text-center wow slideInUp" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: slideInUp;">
                    <h2>Stay in Touch</h2>
                    <span>Subscribe to our newsletter and stay updated on the latest music albums, live shows and music releases.</span>
                    <form class="subs-form">
                        <div class="input-field">
                            <input type="email" name="email" placeholder="Enter your email address">
                            <span class="em-icon"><i class="fa fa-envelope"></i></span>
                        </div>
                        <button type="submit" class="theme-btn"><i class="fa fa-paper-plane"></i>Subscribe</button>
                    </form>
                </div><!--subscribe-section end-->
            </div>
        </section>

<?php get_footer(); ?>
