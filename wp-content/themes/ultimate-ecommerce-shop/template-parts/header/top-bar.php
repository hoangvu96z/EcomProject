<?php 
/*
* Display Top Bar
*/
?>

<div class="top-header">
  <div class="container-fluid"> 
    <div class="row">   
      <div class="col-md-5 col-sm-5">
        <div class="social-media">
          <?php dynamic_sidebar('social-icon') ?>
        </div>
      </div>
      <div class="col-md-7 col-sm-7">
        <div class="timebox">
          <?php if( get_theme_mod( 'ultimate_ecommerce_shop_discount_text','' ) != '') { ?>
            <span class="phone"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_discount_text',__('New lookbook summer sale discount off 50% !','ultimate-ecommerce-shop') )); ?> <a href="<?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_discount_link',__('#','ultimate-ecommerce-shop') )); ?>"><?php echo esc_html_e('Shop Now','ultimate-ecommerce-shop'); ?></a></span>
           <?php } ?>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>