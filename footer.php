<?php
/* FOOTER */
?>
	<footer id="footer-container">
		
		<div class="row full-width k">
			
			<!-- COL1 -->
			<div class="large-3 columns">
				
				<p>found-press is useful for the rapid deployment of responsive WordPress themes. <br><a href="">Learn More &rarr;</a></p>
				
			</div>
			
			
			<!-- COL2 -->
			<div class="large-2 columns">
				
				<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'nav', 'sort_column' => 'menu_order')); ?>
				
			</div>
			
			
			<!-- COL3 -->
			<div class="large-2 columns">
				
				<ul class="no-bullet">
					
					<li>Client</li>
					
					<li><a href="">About</a></li>
					
					<li><a href="">Map</a></li>
					
					<li><a href="">Blog</a></li>
					
					<li><a href="">Privacy</a></li>
					
					<li><a href="">Terms</a></li>
					
				</ul>
				
			</div>
			
			
			<!-- COL4 -->
			<div class="large-2 columns">
				
				<p>Fancy Badges Go Here</p>
				
			</div>
			
			
			<!-- COL5 -->
			<div class="large-3 columns">
				
				<h4>"Let me tell you about how fantastically awesome this business is."</h4>
				
				<p>&mdash;<i>Happy Customer</i></p>
				
			</div>

		</div><!--/.row-->
		
	</footer>

</div>


<!-- COPYRIGHT -->
<div id="copyright" class="row l">
	
	<div class="medium-6 large-6 columns footer-left a">
		
		<p class="copyright">By <a href="https://github.com/CL75">CL75</a>. A work in progress...</p>
		
	</div>
	
	<div class="medium-6 large-6 columns footer-right c">
		
			<a href="https://www.twitter.com/"><i class="social foundicon-twitter"></i></a>
			
			<a href="http://www.instagram.com/"><i class="social foundicon-instagram"></i></a>
			
			<a href="https://www.facebook.com/"><i class="social foundicon-facebook"></i></a>
			
			<a class="scroll" href="#top"><i class="enclosed foundicon-up-arrow"></i></a>
			
			<a href="/"><i class="general foundicon-home"></i></a>
			
	</div>
	
</div> <!--/.row-->

<?php echo '<script src="' . get_template_directory_uri() .'/js/vendor/jquery.js"></script>'; ?>

<script>
// 	SCROLL TO TOP
$(function() {
    $('a.scroll').bind('click',function(event){
        var $anchor = $(this);
 
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        event.preventDefault();
    });
});


//	INITIALIZE FASTCLICK
window.addEventListener('load', function() {
    new FastClick(document.body);
}, false);


//	INITIALIZE FOUNDATION JS
$(document).foundation();
</script>

<?php wp_footer(); ?>
<script>
//	INITIALIZE SLICK SLIDER
$(document).ready(function(){
	$('.single-item').slick({
	  dots: true,
		speed: 500,
		arrows: true,
		autoplay: true
	});
});
</script>
</body>
</html>