<?php


$bakery_cafe_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$bakery_cafe_text_transform = get_theme_mod( 'menu_text_transform_bakery_cafe','UPPERCASE');
    if($bakery_cafe_text_transform == 'CAPITALISE'){

		$bakery_cafe_custom_css .='#main-menu ul li a{';

			$bakery_cafe_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$bakery_cafe_custom_css .='}';

	}else if($bakery_cafe_text_transform == 'UPPERCASE'){

		$bakery_cafe_custom_css .='#main-menu ul li a{';

			$bakery_cafe_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$bakery_cafe_custom_css .='}';

	}else if($bakery_cafe_text_transform == 'LOWERCASE'){

		$bakery_cafe_custom_css .='#main-menu ul li a{';

			$bakery_cafe_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$bakery_cafe_custom_css .='}';
	}

		/*---------------------------Container Width-------------------*/

	$bakery_cafe_container_width = get_theme_mod('bakery_cafe_container_width');

			$bakery_cafe_custom_css .='body{';

				$bakery_cafe_custom_css .='width: '.esc_attr($bakery_cafe_container_width).'%; margin: auto;';

			$bakery_cafe_custom_css .='}';

			/*---------------------------Slider-content-alignment-------------------*/

		$bakery_cafe_slider_content_alignment = get_theme_mod( 'bakery_cafe_slider_content_alignment','CENTER-ALIGN');

		 if($bakery_cafe_slider_content_alignment == 'LEFT-ALIGN'){

				$bakery_cafe_custom_css .='.blog_inner_box{';

					$bakery_cafe_custom_css .='text-align:left;';

				$bakery_cafe_custom_css .='}';


			}else if($bakery_cafe_slider_content_alignment == 'CENTER-ALIGN'){

				$bakery_cafe_custom_css .='.blog_inner_box{';

					$bakery_cafe_custom_css .='text-align:center;';

				$bakery_cafe_custom_css .='}';


			}else if($bakery_cafe_slider_content_alignment == 'RIGHT-ALIGN'){

				$bakery_cafe_custom_css .='.blog_inner_box{';

					$bakery_cafe_custom_css .='text-align:right;';

				$bakery_cafe_custom_css .='}';

			}
