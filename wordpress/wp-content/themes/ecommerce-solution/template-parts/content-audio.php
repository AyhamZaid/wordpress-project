<?php
/**
 * The template part for displaying audio post
 * @package Ecommerce Solution
 * @subpackage ecommerce_solution
 * @since 1.0
 */
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>    
  <h3><?php the_title();?></h3>  
  <div class="box-image">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
      };
    ?>
  </div>
  <div class="new-text">
    <p><?php the_excerpt();?></p>
  </div>
  <div class="postbtn">
    <a href="<?php the_permalink(); ?>" alt="<?php esc_html_e( 'View More','ecommerce-solution' );?>"><?php esc_html_e('View More','ecommerce-solution'); ?><span class="screen-reader-text"><?php esc_html_e( 'View More','ecommerce-solution' );?></span></a>
  </div>
</article>