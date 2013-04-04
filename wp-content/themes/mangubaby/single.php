<?php get_header(); ?>


			<!-- BEGIN single.php -->
			
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<div class="row-fluid">
	                <div class="content span12 margin-standard clearfix">
	                    <article>
					
						<h1 class="post-title"><?php the_title(); ?></h1>
						
						<?php the_content(); ?>	
										
						<div class="entry-meta">
							<p>
								<span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
								<span class="author vcard"><a target="_blank" class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
								<span class="meta-sep"> | </span>
								<span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'your-theme'); ?></span>
								<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
								<?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
								<span class="meta-sep"> | </span>
								<span class="cat-links">
									<span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'your-theme' ); ?></span>
									<?php echo get_the_category_list(', '); ?>
								</span>
								<span class="meta-sep"> | </span>
								<?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'your-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
								<span class="comments-link">
									<?php comments_popup_link( __( 'Leave a comment', 'your-theme' ), __( '1 Comment', 'your-theme' ), __( '% Comments', 'your-theme' ) ) ?>
								</span>
								<?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
							</p>
						</div>

						</article>
					</div>
				</div>

				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php comments_template('', true); ?>
				
				
			
			<!-- END single.php -->


<?php get_footer(); ?>