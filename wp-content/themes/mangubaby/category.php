<?php get_header(); ?>
	
			<!-- BEGIN category.php -->
			<div class="row-fluid bg-standard boxshadow corner-cute">
                <div class="content span8 padding-standard">
					
				<?php the_post(); ?>         
				
				<h1 class="page-title"><?php _e( 'Category Archives:', 'your-theme' ) ?> <span class="category-title"><?php single_cat_title() ?></span></h1>
				<?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>
				<?php rewind_posts(); ?>
				
				<?php while ( have_posts() ) : the_post(); ?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					
					
					<div class="entry-summary">
						<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
					</div>
					
					
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

				</div>
				<!-- #post-<?php the_ID(); ?> -->
				
				<?php endwhile; ?>           

				<?php get_template_part('pagination'); ?>

				</div>
				<div class="sidebar span4 padding-standard">
				</div>
			</div>
					
			
			<!-- END category.php -->
			
			
<?php get_footer(); ?>