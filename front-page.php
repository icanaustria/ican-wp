<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
<!--			<div id="tweetmap" class="" style="margin-bottom:20px">
				<iframe align="middle" frameborder="0" height="600" name="map" scrolling="no" src="//tweetmap.icanaustria.at" width="100%"></iframe>
			</div>-->
		    <main id="main" class="large-8 medium-8 columns" role="main">
			    
			    <div class="orbit" role="region" aria-label="Featured Posts" data-orbit>
				  <ul class="orbit-container">
				    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
				    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
				    
				    
				    <?php	$myQuery = new WP_Query(
							array(
								'cat' => 77,
								'showposts' => 3
							)
						);
					while ( $myQuery->have_posts() ) : $myQuery->the_post(); ?>
	
					<li class="is-active orbit-slide">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
						<figcaption class="orbit-caption"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></figcaption>
											
					<?php endwhile; ?>
				  </ul>
				  <nav class="orbit-bullets">
					  
				    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
				    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
				    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
				  </nav>
				</div>
			    
			
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
							<p class="front-article-meta"><?php echo the_time( 'j. F Y' ); ?> von <?php the_author(); ?></p>
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