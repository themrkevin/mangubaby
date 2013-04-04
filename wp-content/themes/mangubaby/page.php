<?php get_header(); ?>
			
			
			<!-- BEGIN page.php -->
				
				
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<?php the_content(); ?>
				
				<?php endwhile; ?>
				<?php endif; ?>
								

				
				<!-- BEGIN mobile-content
				the purpose of this custom field
				is to provide an area to post content meant for mobile sites ONLY -->
				
				<?php if ( get_post_meta($post->ID, 'mobile-content', true) ) { // CHECKS IF PAGE HAS CUSTOM FIELD NAMED 'mobile-content' ?>
					
					<?php echo get_post_meta($post->ID, 'mobile-content', true); // PRINT VALUE OF 'mobile-content' ?>
				
				<?php } ?>
				
				<!-- END mobile-content -->
				
				
				
			<!-- END page.php -->
			
			
<?php get_footer(); ?>