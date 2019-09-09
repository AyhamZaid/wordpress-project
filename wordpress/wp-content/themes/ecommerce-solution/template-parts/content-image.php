<?php
/**
 * The template part for displaying image post
 * @package Ecommerce Solution
 * @subpackage ecommerce_solution
 * @since 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>    
  <h3><?php the_title();?></h3>  
  <div class="box-image">
    <?php 
      if(has_post_thumbnail()) { 
        the_post_thumbnail(); 
      }
    ?>
  </div>
  <div class="new-text">
    <p><?php the_excerpt();?></p>
  </div>
  <div class="postbtn">
    <a href="<?php the_permalink(); ?>" alt="<?php esc_html_e( 'View More','ecommerce-solution' );?>"><?php esc_html_e('View More','ecommerce-solution'); ?><span class="screen-reader-text"><?php esc_html_e( 'View More','ecommerce-solution' );?></span></a>
  </div>
</article>