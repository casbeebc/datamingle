<?php			
/*
			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		          <hr />
		          <div id="widget-footer" class="clearfix row-fluid">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
					<p class="pull-right"></p>
			
					<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
*/			
?>			


<footer>
  <div class="container">
    <div id="contact" class="contact">
      <div class="row">
         <div class="span12">
            <div class="up"><a href="#top" class="anchorLink"><i class="icon-caret-up"></i></a></div>
         </div>
      </div>
      <div class="row">
         <div class="span6">
            <div class="form padd">
               <!-- Contact title -->
              <h4>Contact Us</h4>
              <hr />
              <!-- Contact form -->
              <?php echo do_shortcode( '[contact-form-7 id="41" title="Contact form 1"]' ); ?>
            </div>
         </div>
         <div class="span6">
               <!-- Google maps -->
               <div class="gmap">
                   <img src="/wp-content/themes/bootstrap/images/datamingle_map.jpg"/>
               </div>
               <hr />
               <!-- Address -->
               <div class="address">
                  <div class="row">
                     <div class="span3">
                        <address class="small">
                          <span style="font-weight:bold;">DataMingle</span><br>
                          2720 East Evans Road<br>
                          San Diego, CA 92106<br>
                        </address>
                     </div>
                  </div>
               </div>
         </div>
      </div>
    </div>
    <hr />
    <!-- Copyright info -->
    <div class="row copy">
      <div class="span5">
         <div class="padd">
            <p>Copyright &copy; <a href="#">DataMingle</a></p>
         </div>
      </div>
      <div class="span3 offset4">
         <div class="padd">
            <!-- Social media icons. Replace # with your profile link -->
            <div class="social">
               <a href="#"><i class="icon-facebook"></i></a>
               <a href="#"><i class="icon-twitter"></i></a>
               <a href="#"><i class="icon-linkedin"></i></a>
               <a href="#"><i class="icon-google-plus"></i></a>
            </div>
         </div>
      </div>
    </div>
  <div class="clearfix"></div>
  </div>
</footer>				
			
			
			
			
			
			
			
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>