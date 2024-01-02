<?php if (is_front_page()) {?>
<!-- Hero Section  Start -->
        <section id="slider" class="slider slide-overlay-black">
            
        	<?php 


            if( have_rows('home_page_slider') ):
                $slidecount = 0;
             ?>
            <div class="owl-carousel owl-theme"> 
               
                <?php while( have_rows('home_page_slider') ): the_row();
                    $slidecount++;
                    if($slidecount>1)
                        {break;}
                 ?>
                <div class="item">
                    <img src="<?php the_sub_field('add_slider_image'); ?>">
                </div>
                <?php endwhile; ?>
               </div>
            <?php endif; ?>

            <div class="music-player">
                <div class="container">
                    <div class="ms-player-content">
                        <div class="ms-album">
                            <div class="ms-thumb">
                                <img src="<?php echo get_home_url(); ?>" title="" class="white-logo"><img src="<?php echo get_field('logo','option'); ?>" alt="">
                            </div>
                            <div class="ms-th-info">
                                <h4>HOOKED</h4>
                                <span>Song by Amber Allen Music</span>
                            </div>
                        </div>
                        <div class="ms-player" id="jp_container_2">
                            <div class="jp-controls text-center">
<!--                                 <button class="jp-previous" tabindex="0"><i class="fa fa-backward"></i></button> -->
                                <button class="jp-play" tabindex="0"><i class="fas fa-play">
									</i></button>
<!--                                 <button class="jp-next" tabindex="0"><i class="fa fa-forward"></i></button> -->
                            </div>
                            <div class="title-bar">
                                <div class="ms-top">
                                    <h4 class="jp-title">Bubble</h4>
                                    <div class="jp-time-holder">
                                        <div class="jp-current-time" role="timer" aria-label="time">00:00</div>
                                        <div class="jp-duration" role="timer" aria-label="duration">03:29</div>
                                    </div>
                                </div>
                                <div class="jp-progress">
                                    <div class="jp-seek-bar" style="width: 100%;">
                                        <div class="jp-play-bar" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-volume-controls">
                                <button class="jp-mute" tabindex="0">
                                    <i class="fa fa-volume-up"></i>
                                </button>
                            </div>
                        </div><!--ms-player end-->
                    </div><!--ms-player-content end-->
                </div>
            </div><!--music-player end-->
        </section>
        <!-- Hero Section End -->


<?php //} elseif(is_page('Privacy Policy')) { ?>



<?php } else { ?>

<!-- <section class="pager-section">
	<div class="fixed-bg bg4"></div>
	<div class="container">
		<div class="pager-content text-center">
			<h2><?php //the_title(); ?></h2>
		</div>
	</div>
</section> -->

<section id="slider" class="slider slide-overlay-black">
	<div class="owl-carousel owl-theme">
                <div class="item">
					
					<div class="image">
						<img src="https://dwstaging.link/cms/allen-music/wp-content/uploads/2023/12/COVER-PHOTO-landscape-cover-centered-1-scaled.jpg">
					</div>
					<div class="img_title">
						<h2><?php the_title(); ?></h2>
					</div>
                    
                </div>
            </div>
</section>

<?php } ?>