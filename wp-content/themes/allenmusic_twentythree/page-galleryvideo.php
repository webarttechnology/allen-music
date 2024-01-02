<?php

/**

 * Template Name: Gallery Page Template

 */



get_header(); ?>



<section class="galleryvideo py-5 vid1">

    <div class="container">

        
        <div class="row d-none">
			<div class="owl-carousel owl-theme gal-slider">
            <?php 

            $images = get_field('gallery_contain');

            if($images):

                foreach($images as $image):



             ?>

            <div class="col-md-12">

                <a href="<?php echo esc_url($image['url']); ?>" class="example-image-link" data-fancybox="images">
					<div class="gal_image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="">
					</div>
                    </a>

            </div>

            <?php

        endforeach;

        endif;

            ?>

            
			</div>
        </div>





    </div>







<!-- <img src="https://img.youtube.com/vi/h_D3VFfhvs4/hqdefault.jpg"> -->


<section class="animate-slider">
<div class="carousel" data-gap="80">
  <figure>
    <?php 
            $images = get_field('gallery_slide');
            if($images):
                foreach($images as $image):
             ?>  
            <img src="<?php echo esc_url($image['url']); ?>" alt="slide 1">
        <?php
        endforeach;
        endif;
            ?>
  </figure>
  <nav>
    <button class="nav prev">Prev</button>
    <button class="nav next">Next</button>
  </nav>
</div>
</section>

<section class="animate-slider animate-slider2">
  <h2 style="text-align: center;">Video Section</h2>
  <div class="carousel" data-gap="50">
    <figure>
      <iframe width="523" height="523" src="https://www.youtube.com/embed/x00jwcl5Xfg" title="AMBER ALLEN &quot;HOOKED&quot; LYRIC VIDEO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

      <iframe width="523" height="523" src="https://www.youtube.com/embed/4o0VqbwvU8k" title="Amber Allen Reel" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

       <iframe width="523" height="523" src="https://www.youtube.com/embed/-8gRLxdwSVA" title="AmbDyn Alley   Addicted Official Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

       <iframe width="523" height="523" src="https://www.youtube.com/embed/4o0VqbwvU8k" title="Amber Allen Reel" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

       <iframe width="523" height="523" src="https://www.youtube.com/embed/x00jwcl5Xfg" title="AMBER ALLEN &quot;HOOKED&quot; LYRIC VIDEO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

       <iframe width="523" height="523" src="https://www.youtube.com/embed/x00jwcl5Xfg" title="AMBER ALLEN &quot;HOOKED&quot; LYRIC VIDEO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

      <iframe width="523" height="523" src="https://www.youtube.com/embed/4o0VqbwvU8k" title="Amber Allen Reel" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

       <iframe width="523" height="523" src="https://www.youtube.com/embed/-8gRLxdwSVA" title="AmbDyn Alley   Addicted Official Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <!-- Add more <video> tags for each video -->
    </figure>
    <nav>
      <button class="nav prev">Prev</button>
      <button class="nav next">Next</button>
    </nav>
  </div>
</section>


 <!-- Swiper -->
 <div class="container">
  <div class="swiper-container two d-none">
    <div class="swiper-wrapper">

        <?php 

            $images = get_field('gallery_contain');

            if($images):

                foreach($images as $image):



             ?>
              <div class="swiper-slide">
                <a href="<?php echo esc_url($image['url']); ?>" class="example-image-link" data-fancybox="images">
          <div class="slider-image">
            <img src="<?php echo esc_url($image['url']); ?>" alt="slide 1">
          </div>
      </a>
        </div>

        <?php

        endforeach;

        endif;

            ?>

              <!-- <div class="swiper-slide">
          <div class="slider-image">
            <img src="http://localhost/allen_music/wp-content/uploads/2023/04/MG_3030.jpg" alt="slide 2">
          </div>
        </div>
              <div class="swiper-slide">
          <div class="slider-image">
            <img src="http://localhost/allen_music/wp-content/uploads/2023/04/PicsArt_1429696685156_resized.jpg" alt="slide 3">
          </div>
        </div>
              <div class="swiper-slide">
          <div class="slider-image">
            <img src="http://localhost/allen_music/wp-content/uploads/2023/04/MG_3030.jpg" alt="slide 4">
          </div>
        </div>
              <div class="swiper-slide">
          <div class="slider-image">
            <img src="http://localhost/allen_music/wp-content/uploads/2023/04/PicsArt_1429696685156_resized.jpg" alt="slide 5">
          </div>
        </div> -->

            <!-- Add Pagination -->
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
</section>





<section class="galleryvideo py-5 vid2 d-none">

    <div class="container">

        <h2 class="text-center">Video Section</h2>

        

        <div class="row d-none">
			<div class="owl-carousel owl-theme gal-slider2">
				
			
            <?php 

            $videos = get_field('video_contain');

            if($videos){

                foreach($videos as $video){



             ?>

            <div class="col-md-12">

                <a href="https://www.youtube.com/watch?v=<?php echo $video['video_id']; ?>" class="example-image-link" data-fancybox="vdo">

                        <img src="https://img.youtube.com/vi/<?php echo $video['video_id']; ?>/hqdefault.jpg" alt="">

                    </a>

            </div>

            <?php

        }}

            ?>

			</div>
        </div>





    </div>



    



<!-- <img src="https://img.youtube.com/vi/h_D3VFfhvs4/hqdefault.jpg"> -->



<!-- Swiper -->
 <div class="container">
  <div class="swiper-container2 two">
    <div class="swiper-wrapper">
            <?php 

            $videos = get_field('video_contain');

            if($videos){

                foreach($videos as $video){



             ?>

              <div class="swiper-slide">
          <div class="slider-image">
            <a href="https://www.youtube.com/watch?v=<?php echo $video['video_id']; ?>" class="example-image-link" data-fancybox="vdo">
            <img src="https://img.youtube.com/vi/<?php echo $video['video_id']; ?>/hqdefault.jpg" alt="slide 1">
        </a>
          </div>
        </div>

        <?php

        }}

            ?>
              <!-- <div class="swiper-slide">
          <div class="slider-image">
            <img src="http://localhost/allen_music/wp-content/uploads/2023/04/MG_3030.jpg" alt="slide 2">
          </div>
        </div>
              <div class="swiper-slide">
          <div class="slider-image">
            <img src="http://localhost/allen_music/wp-content/uploads/2023/04/PicsArt_1429696685156_resized.jpg" alt="slide 3">
          </div>
        </div>
              <div class="swiper-slide">
          <div class="slider-image">
            <img src="http://localhost/allen_music/wp-content/uploads/2023/04/MG_3030.jpg" alt="slide 4">
          </div>
        </div>
              <div class="swiper-slide">
          <div class="slider-image">
            <img src="http://localhost/allen_music/wp-content/uploads/2023/04/PicsArt_1429696685156_resized.jpg" alt="slide 5">
          </div>
        </div> -->

            <!-- Add Pagination -->
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>


</section>



<?php get_footer(); ?>