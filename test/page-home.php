<?php /* Template Name: Homepage */ 

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="hero">
      <img src="<?php the_field("hero_image"); ?>" class="hero__image image-block">
      <div class="hero__text">
        <h1 class="hero__text__header"><?php the_field("hero_title"); ?></h1>
        <h4 class="hero__text__subheader">
          <?php the_field("hero_subheader"); ?> 
        </h4>
      </div>
      <a href="<?php the_field("btn_link"); ?>" class="hero__btn btn"><?php the_field("btn_text"); ?></a>
    </div>
    
    <div class="block2 page-section">
      <div class="wrapper">
        <div class="text-block black">
          <h1><?php the_field("block2_header"); ?></h1>
          <p><?php the_field("block2_subheader"); ?></p>
        </div>
      </div>
    </div>
    
    <img src="<?php the_field("image2"); ?>" class="image2 image-block">
    
    <div class="block3 page-section">
      <div class="wrapper">
        <div class="text-block black">
          <h1><?php the_field("block3_header"); ?></h1>
          <p><?php the_field("block3_subheader"); ?></p>
        </div>
      </div>
      
    </div>
    
    <img src="<?php the_field("block3_image"); ?>" class="image-block">
    <div class="page-section text-slider">
        <?php echo do_shortcode(get_field("text_slider")); ?>
    </div>
    
    <div class="block4 page-section">
      <div class="row">
        <div class="row__6 block4__1">
          <div class="wrapper">
            <div class="text-block white">
              <h1><?php the_field("block4_header"); ?></h1>
              <p><?php the_field("block4_text"); ?></p>
              <a href="<?php the_field("btn_link"); ?>" class="btn white"><?php the_field("btn_text"); ?></a>
            </div>
          </div>
          
        </div>
        <div class="row__6  block4__2">
          <img src="<?php the_field("block4_image"); ?>" class="image-block">
        </div>
      </div>
      
    </div>
    
    <img src="<?php the_field("image5"); ?>" class="image-block">
    
    <div class="block5 page-section">
      <div class="wrapper text-block black ">
        <h1><?php the_field("block5_header"); ?></h1>
        <div class="form">
          <?php the_field("block5_text"); ?>
        </div>
      </div>
      
    
    </div>
    
    

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>