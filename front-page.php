<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
<!--			<div id="tweetmap" class="" style="margin-bottom:20px">
				<iframe align="middle" frameborder="0" height="600" name="map" scrolling="no" src="//tweetmap.icanaustria.at" width="100%"></iframe>
			</div>-->
		    <main id="main" class="large-8 medium-8 columns" role="main">
			    
			    
			
			    <h2 class="front-title"><?php echo get_cat_name( 6 ); ?></h2>
			    
				<?php	$myQuery = new WP_Query(
							array(
								'cat' => 6,
								'showposts' => 6,
								'paged' => $paged
							)
						);
					while ( $myQuery->have_posts() ) : $myQuery->the_post(); ?>
	
					<article class="front-article">
					<div class="row">
						<div class="large-4 columns">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
						</div>
						<div class="large-8 columns">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="front-article-meta"><?php echo the_time( 'j. F Y' ); ?> von <?php the_author_posts_link(); ?></p>
							<?php the_excerpt(); ?>	
						</div>
					</div>		
					</article>
											
				<?php endwhile; ?>
					
					<?php joints_page_navi(); ?>
							
			</main> <!-- end #main -->
	
			<?php get_sidebar(); ?>
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>