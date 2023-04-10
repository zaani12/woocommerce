<?php if ( get_theme_mod('bakery_cafe_blog_box_enable') ) : ?>

<?php $bakery_cafe_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('bakery_cafe_blog_slide_category'),
  'posts_per_page' => get_theme_mod('bakery_cafe_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $bakery_cafe_arr_posts = new WP_Query( $bakery_cafe_args );
    if ( $bakery_cafe_arr_posts->have_posts() ) :
      while ( $bakery_cafe_arr_posts->have_posts() ) :
        $bakery_cafe_arr_posts->the_post();
        ?>
        <div class="blog_box text-center">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            endif;
          ?>
          <div class="blog_inner_box">
            <?php if ( get_theme_mod('bakery_cafe_slide_title_enable_disable', true) == true ) : ?>
              <h3 class="post-title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
            <?php endif; ?>
            <?php if ( get_theme_mod('bakery_cafe_slide_text_enable_disable', true) == true ) : ?>
              <p class="slider-text"><?php echo wp_trim_words( get_the_content(), get_theme_mod('bakery_cafe_slide_excerpt_number','20') ); ?></p>
            <?php endif; ?>
            <?php if ( get_theme_mod('bakery_cafe_slider_button_text','') ) : ?>
              <p class="slider_btn my-5">
                <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html( get_theme_mod('bakery_cafe_slider_button_text' ) ); ?></a>
              </p>
            <?php endif; ?>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>
