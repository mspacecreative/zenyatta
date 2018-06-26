<?php $loop = new WP_Query( array( 'post_type' => 'press_releases', 'order' => 'ASC' ) );
		if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
		<div class="press-quote">
			<h4><?php _e('&ldquo;'); ?><?php the_field('press_quote'); ?><?php _e('&rdquo;'); ?></h4>
		</div>
		
		<div class="press-date">
			<p><?php the_field('press_date'); ?></p>
		</div>
		
		<div class="press-description">
			<p><?php the_field('press_description'); ?></p>
		</div>
		
		<div class="press-release-divider"></div>

		<?php endwhile;
		endif; 
wp_reset_postdata(); ?>