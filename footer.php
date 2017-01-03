					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div id="footer-info" class="large-4 medium-4 columns">
								<p>ICAN Austria ist der österreichische Zweig der weltweit aktiven <strong>Internationalen Kampagne zur Abschaffung von Nuklearwaffen</strong>. Mit der Unterstützung durch die Öffentlichkeit und Entscheidungsträger*innen setzen wir uns für einen Vertrag ein, der Nuklearwaffen endgültig verbietet.</p>
								<a href="http://www.facebook.com/ICAN-Austria" title="Like on Facebook" target="_blank"><i class="fi-social-facebook large"></i></a>		
								<a href="http://twitter.com/@icanaustria" title="Follow on Twitter" target="_blank"><i class="fi-social-twitter large"></i></a>
								<a href="http://www.youtube.com/user/ICANinAction" title="Subscribe to Youtube Channel" target="_blank"><i class="fi-social-youtube large"></i></a>					
								<p><a href="http://www.icanaustria.at/kontakt/"><strong>Kontakt &amp; Impressum</strong></a></p>
		    				</div>
							<div class="large-4 medium-4 columns footer-widget">
								<?php if ( is_active_sidebar( 'footbar1' ) ) : ?>

									<?php dynamic_sidebar( 'footbar1' ); ?>
		
								<?php else : ?>

								<div>
									<p>Please add a Widget!</p>
								</div>
								
								<?php endif; ?>
							</div>							
							<div class="large-4 medium-4 columns footer-widget">
								<?php if ( is_active_sidebar( 'footbar2' ) ) : ?>

									<?php dynamic_sidebar( 'footbar2' ); ?>
		
								<?php else : ?>
								
								<h4>Viele Partner in vielen Ländern</h4>
								<p class="map"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-map.png" alt="ICAN Partner Weltkarte" /></a></p>
								
								<?php endif; ?>
								
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->