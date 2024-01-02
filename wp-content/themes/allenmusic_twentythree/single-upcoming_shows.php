<?php get_header(); ?>


<section class="w-100 py-5">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <img src="<?php echo get_the_post_thumbnail_url();?>" class="w-100">
            
         </div>
         <div class="col-md-8">
         	<ul class="detailstimelocation">
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
            <?php the_content();?>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>