<?php
/**
 * Template Name: Home Custom Page
 */
?>

<?php get_header(); ?>

<?php do_action( 'ultimate_ecommerce_shop_above_slider' ); ?>

<?php /** slider section **/ ?>
  <div class="slider-main">
    <?php
      $pages = array();
      for ( $count = 1; $count <= 5; $count++ ) {
        $mod = absint( get_theme_mod( 'ultimate_ecommerce_shop_slidersettings-page-' . $count ) );
        if ( 'page-none-selected' != $mod ) {
          $pages[] = $mod;
        }
      }
      
      if( !empty($pages) ) :
        $args = array(
          'posts_per_page' => 5,
          'post_type' => 'page',
          'post__in' => $pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $count = 1;
          ?>
          <div id="slider" class="nivoSlider">
            <?php
              $ultimate_ecommerce_shop_n = 0;
            while ( $query->have_posts() ) : $query->the_post();
                
                $ultimate_ecommerce_shop_n++;
                $ultimate_ecommerce_shop_slideno[] = $ultimate_ecommerce_shop_n;
                $ultimate_ecommerce_shop_slidetitle[] = get_the_title();
                $ultimate_ecommerce_shop_slidecontent[] = get_the_excerpt();
                $ultimate_ecommerce_shop_slidelink[] = esc_url( get_permalink() );
                ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $ultimate_ecommerce_shop_n ); ?>" />
                <?php
              $count++;
            endwhile; wp_reset_postdata(); ?>
          </div>

          <?php
          $ultimate_ecommerce_shop_k = 0;
            foreach( $ultimate_ecommerce_shop_slideno as $ultimate_ecommerce_shop_sln ){ ?>
              <div id="slidecaption<?php echo esc_attr( $ultimate_ecommerce_shop_sln ); ?>" class="nivo-html-caption">
                <div class="slide-cap  ">
                  <h2><?php echo esc_html( $ultimate_ecommerce_shop_slidetitle[$ultimate_ecommerce_shop_k] ); ?></h2>
                  <p><?php echo esc_html( $ultimate_ecommerce_shop_slidecontent[$ultimate_ecommerce_shop_k] ); ?></p>
                  <div class="read-more">
                    <a href="<?php echo esc_url( $ultimate_ecommerce_shop_slidelink[$ultimate_ecommerce_shop_k] ); ?>"><?php esc_html_e( 'EXPLORE NOW','ultimate-ecommerce-shop' ); ?></a>
                  </div>
                </div>
              </div>
              <?php $ultimate_ecommerce_shop_k++;
          }          
        else : ?>
            <div class="header-no-slider"></div>
          <?php
        endif;
      else : ?>
          <div class="header-no-slider"></div>
      <?php
      endif; 
    ?>
  </div>

<?php do_action( 'ultimate_ecommerce_shop_after_slider' ); ?>

<section id="top_products">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <?php $pages = array();
        for ( $count = 0; $count <= 3; $count++ ) {
          $mod = intval( get_theme_mod( 'ultimate_ecommerce_shop_product_title' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $pages[] = $mod;
          }
        }
        if( !empty($pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $count = 0;
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="title-sec">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
              </div>
            <?php $count++; endwhile; 
            wp_reset_postdata();?>
          <?php else : ?>
          <div class="no-postfound"></div>
          <?php endif;
        endif;?>
      </div>
      <div class=" col-md-9">
        <?php $pages = array();
          for ( $count = 0; $count <= 0; $count++ ) {
          $mod = absint( get_theme_mod( 'ultimate_ecommerce_shop_top_products' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $pages[] = $mod;
            }
          }
          if( !empty($pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
            $count = 0;
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php the_content(); ?>
              <?php $count++; endwhile; ?>
            <?php else : ?>
              <div class="no-postfound"></div>
          <?php endif;
        endif;
        wp_reset_postdata()?>
      </div>
    </div>
  </div>
</section>

<?php do_action( 'ultimate_ecommerce_shop_below_top_product' ); ?>

<div id="main-content" class="container-fluid">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>