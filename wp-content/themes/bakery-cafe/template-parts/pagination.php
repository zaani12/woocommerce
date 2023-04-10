<?php
	the_posts_pagination( array(
		'prev_text' => esc_html__( 'Previous page', 'bakery-cafe' ),
		'next_text' => esc_html__( 'Next page', 'bakery-cafe' ),
	) );