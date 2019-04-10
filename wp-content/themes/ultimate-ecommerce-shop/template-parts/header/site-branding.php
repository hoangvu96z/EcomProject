<?php 
/*
* Display Logo and contact details
*/
?>

<div class="headerbox">
  <div class="container-fluid">
    <div class="row">
      <div class="call col-md-4 col-sm-4">
        <?php if( get_theme_mod( 'ultimate_ecommerce_shop_call','' ) != '') { ?>
          <i class="fas fa-phone"></i><span class="infotext"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_call_text',__('Have Any Questions?','ultimate-ecommerce-shop')) ); ?></span>
          <p><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_call',__('+91 968 923 9632','ultimate-ecommerce-shop')) ); ?></p>
        <?php } ?>
      </div>
      <div class="col-md-4 col-sm-4">
          <div class="logo">
              <?php if( has_custom_logo() ){ ultimate_ecommerce_shop_the_custom_logo();
               }else{ ?>
              <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?> 
                  <p class="site-description"><?php echo esc_html($description); ?></p> 
              <?php endif; }?>
          </div>
      </div>    
      <div class="email col-md-4 col-md-offset-2 col-sm-4">
        <?php if( get_theme_mod( 'ultimate_ecommerce_shop_mail','' ) != '') { ?>
          <i class="far fa-envelope"></i><span class="infotext"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_mail_text',__('Free Support','ultimate-ecommerce-shop')) ); ?></span>
          <p><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_mail',__('info@example.com','ultimate-ecommerce-shop')) ); ?></p>
        <?php } ?>
      </div>
      <div class="clear"></div>
    </div>
  </div> 
</div>