<?php if ( get_theme_mod('bakery_cafe_our_story_enable') ) : ?>

  <section id="story" class="py-5">
    <div class="container">
      <?php if ( get_theme_mod('bakery_cafe_our_story_section_title') ) : ?>
        <h3 class="text-center mb-4"><?php echo esc_html(get_theme_mod('bakery_cafe_our_story_section_title')) ?></h3>
      <?php endif; ?>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 align-self-center mb-2 mb-md-2">
          <?php if ( get_theme_mod('bakery_cafe_our_story_image1') ) : ?>
            <img src="<?php echo esc_url(get_theme_mod('bakery_cafe_our_story_image1')) ?>">
          <?php endif; ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 align-self-center mb-2 mb-md-2">
          <?php if ( get_theme_mod('bakery_cafe_our_story_image2') ) : ?>
            <img src="<?php echo esc_url(get_theme_mod('bakery_cafe_our_story_image2')) ?>">
          <?php endif; ?>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 align-self-center">
          <?php $bakery_cafe_slider_pages = array();
            $bakery_cafe_mod = intval( get_theme_mod( 'bakery_cafe_our_story' ));
            if ( 'page-none-selected' != $bakery_cafe_mod ) {
              $bakery_cafe_slider_pages[] = $bakery_cafe_mod;
            }
            if( !empty($bakery_cafe_slider_pages) ) :
              $bakery_cafe_args = array(
                'post_type' => 'page',
                'post__in' => $bakery_cafe_slider_pages,
                'orderby' => 'post__in'
              );
              $bakery_cafe_query = new WP_Query( $bakery_cafe_args );
              if ( $bakery_cafe_query->have_posts() ) :
                $i = 1;
          ?>
          <div class="inner-box p-3">
            <?php  while ( $bakery_cafe_query->have_posts() ) : $bakery_cafe_query->the_post(); ?>
              <?php if ( get_theme_mod('bakery_cafe_our_story_heading_text') ) : ?>
                <span class="pb-2"><?php echo esc_html(get_theme_mod('bakery_cafe_our_story_heading_text')) ?></span>
              <?php endif; ?>
              <h4 class="pb-2"><?php the_title(); ?></h4>
              <div class="border-box">
                <p class="mb-0"><?php echo wp_trim_words( get_the_content(), get_theme_mod('bakery_cafe_story_excerpt_number',50) ); ?></p>
                <p class="slider_btn my-5">
                  <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php esc_html_e('Read More','bakery-cafe'); ?></a>
                </p>
              </div>
            <?php $i++; endwhile;
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
