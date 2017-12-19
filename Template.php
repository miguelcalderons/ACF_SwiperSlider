<?php
/**
 * Template Name: Advanced Custom Field + Swiper By Idangerous
 *
 * This is the template that displays a custom slider using
 * ACF and Swiper Above in a Wordpress Environment
 */

// Get your header here
get_header( $name );


// Get the css from the slider
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
<div class="swiper-container">
    <div class="swiper-wrapper">
<?php
 	// loop through the rows of data
    while ( have_rows('slider') ) : the_row();
     // Here is the Sub-Field to get the background Image using a Repeater and image. ?>
		<div class="swiper-slide" style="background-image:url('<?php the_sub_field('slide'); ?>')">
		    <div class="overlay"></div>
			<div class="row" style="z-index: 999;">
				<div class="col-md-12">

					<!-- Main Content inside of the slider -->
				</div>
			</div>
		</div>

	<?php
	    endwhile;
	?>
</div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<?php while ( have_posts() ) : the_post(); ?>
	
	<!-- 960 Container -->
	<div class="container page-container home-page-container">
	    <article <?php post_class(); ?>>
	        <?php the_content(); ?>
	    </article>
	</div>
  
  </script>
<?php endwhile; // end of the loop. ?>

<!-- Get the js from the swiper, remember to check first the last version in http://idangero.us/swiper/  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>

  <!-- After you call the library, start the slider and add the properties that you want, u used the infinite loop and the navigation -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

<?php get_footer(); ?>