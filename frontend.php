<?php

$args = array(

	'post_type'       	=> 'ejemplos',	// Identificador del Custom post type
	'posts_per_page'  	=> 5,
	'orderby'			=> 'date',

);

$custom_query = new WP_Query($args); ?>

<?php if ( $custom_query->have_post() ) : while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
<?php 	// Dentro del while podremos sacar los datos como cualquier otro post
 endwhile; endif; ?>