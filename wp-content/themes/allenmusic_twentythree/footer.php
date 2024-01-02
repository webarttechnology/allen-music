<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<footer>
<div class="container">
	<div class="row footer-content">
		<div class="col-lg-4 col-md-4">
			<div class="copyright">
				<p>© By AmberAllenMusic 2023-24</p>
			</div>
		</div>
		<div class="col-lg-4 col-md-4">
			<div class="ft-logo text-center">
				<img src="images/logo.png" alt="">
			</div><!--ft-logo end-->
		</div>
		<div class="col-lg-4 col-md-4">
			            <ul class="social-links v2">
                                    <li><a target="_blank" href="http://Twitter.com/aaplus100" title=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://m.facebook.com/AmbDynAlley" title=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/amber_allen_music/" title=""><i class="fab fa-instagram"></i></a></li>
							
							<li><a target="_blank" href="https://www.youtube.com/@queengqueen100" title=""><i class="fab fa-youtube"></i></a></li>
							
                            </ul>
            		</div>
		</div>
	</div>

<div class="staticPlay jp-controls">
	<audio id="track">
	  <source src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/12/Hooked-Clip-for-play-button.mp3" type="audio/mpeg" />
	</audio>
	<div id="player-container" class="jp-controls">
	  <button id="play-pause" class="play jp-play"></button>
	</div>
</div>	
</footer><!--footer end-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-migrate-1.4.1.min.js.download"></script>

<!-- Vendor -->
<script src="<?php bloginfo('template_url'); ?>/js/vendor.js.download"></script>

<!-- Revolution Slider -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.themepunch.tools.min.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.themepunch.revolution.min.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/revolution.extensions.all.js.download"></script>

<!-- Custom scripts -->
<script src="<?php bloginfo('template_url'); ?>/js/main.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.jplayer.min.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jplayer.playlist.min.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/popper.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.swipebox.min.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/wow.min.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/playlist.js.download"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js.download"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>

<script type="text/javascript">
var swiper = new Swiper( '.swiper-container.two', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    effect: 'coverflow',
    loop: true,
    centeredSlides: true,
    autoplay:true,
    slidesPerView: 'auto',
    coverflow: {
      rotate: 0,
      stretch: 100,
      depth: 150,
      modifier: 1.5,
      slideShadows : false,
    }
} );
</script>

<script type="text/javascript">
var swiper = new Swiper( '.swiper-container2.two', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    effect: 'coverflow',
    loop: false,
    centeredSlides: true,
    autoplay:true,
    slidesPerView: 'auto',
    coverflow: {
      rotate: 0,
      stretch: 100,
      depth: 150,
      modifier: 1.5,
      slideShadows : false,
    }
} );
</script>


<script>
	
	var track = document.getElementById('track');
	var controlBtn = document.getElementById('play-pause');
	function playPause() {
		if (track.paused) {
			track.play();
			//controlBtn.textContent = "Pause";
			controlBtn.className = "pause jp-play";
		} else { 
			track.pause();
			 //controlBtn.textContent = "Play";
			controlBtn.className = "play jp-play";
		}
	}
	
	controlBtn.addEventListener("click", playPause);
	track.addEventListener("ended", function() {
	  controlBtn.className = "play";
	});
	
</script>


<script>
// 	$(document).ready(function() {
  $('[data-fancybox]').fancybox({
  // Options will go here
  wheel : false,
  transitionEffect: "fade",
   // thumbs          : false,
  // hash            : false,
  loop            : false,
  // keyboard        : true,
  toolbar         : true,
  // animationEffect : false,
  arrows          : true,
  clickContent    : false
});
// 	});
</script>
<script>
    $(document).ready(function() {
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: false,
            margin: 20
          }
        }
      })
    })
  </script>

<script>
$('.gal-slider').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
	autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>

<script>
$('.gal-slider2').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
	autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>



<script type="text/javascript">
    window.addEventListener('load', () => {
  var
  carousels = document.querySelectorAll('.carousel');


  for (var i = 0; i < carousels.length; i++) {
    carousel(carousels[i]);
  }
});

function carousel(root) {
  var
  figure = root.querySelector('figure'),
  nav = root.querySelector('nav'),
  images = figure.children,
  n = images.length,
  gap = root.dataset.gap || 0,
  bfc = ('bfc' in root.dataset),

  theta = 2 * Math.PI / n,
  currImage = 0;


  setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
  window.addEventListener('resize', () => {
    setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
  });

  setupNavigation();

  function setupCarousel(n, s) {
    var
    apothem = s / (2 * Math.tan(Math.PI / n));


    figure.style.transformOrigin = `50% 50% ${-apothem}px`;

    for (var i = 0; i < n; i++)
    images[i].style.padding = `${gap}px`;
    for (i = 1; i < n; i++) {
      images[i].style.transformOrigin = `50% 50% ${-apothem}px`;
      images[i].style.transform = `rotateY(${i * theta}rad)`;
    }
    if (bfc)
    for (i = 0; i < n; i++)
    images[i].style.backfaceVisibility = 'hidden';

    rotateCarousel(currImage);
  }

  function setupNavigation() {
    nav.addEventListener('click', onClick, true);

    function onClick(e) {
      e.stopPropagation();

      var t = e.target;
      if (t.tagName.toUpperCase() != 'BUTTON')
      return;

      if (t.classList.contains('next')) {
        currImage++;
      } else
      {
        currImage--;
      }

      rotateCarousel(currImage);
    }

  }

  function rotateCarousel(imageIndex) {
    figure.style.transform = `rotateY(${imageIndex * -theta}rad)`;
  }

}
</script>



<?php wp_footer(); ?>

</body>
</html>
