<?php
/*
* This template for displaying the header
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="header_area">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href=""><img src="<?php echo get_theme_mod('ali_logo'); ?>" alt=""></a>
        </div>
        <div class="col-md-9">
          <?php wp_nav_menu(); ?>
        </div>
      </div>
    </div>
  </div>
  <div id="header_area">
    <div class="container">
      <p>this is p tag</p>
      <div class="row">
        <div class="col-md-9">
          <?php the_content(); ?>
        </div>
        <div class="col-md-3">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-md-9">
          <a href=""><img src="<?php the_content(); ?>" alt=""></a>
        </div>
        <div class="col-md-3">
            <a href=""><img src="<?php the_content(); ?>" alt=""></a>
        </div>
    </div>     
</div>
  


  <?php wp_footer(); ?>
</body>
</html>