<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
?>
	<div class="clearfix"></div>
</div>
<!-- #main --> 

<!-- #footer -->
<div id="footer" class="instaapp-section">
	<div class="container">
		<div class="row-fluid">
			<div class="second_wrapper">
				<?php dynamic_sidebar( 'Footer Sidebar' ); ?>
				<div class="clearfix"></div>
			</div><!-- second_wrapper -->
		</div>
	</div>

	<div class="third_wrapper">
		<div class="container">
			<div class="row-fluid" align=center>
				<?php $sktURL = 'http://www.sketchthemes.com/'; ?>
				
				© 2018 HellFitness All rights reserved.<br>
				
				<font style="
    font-size: 10px;
    text-transform:  uppercase;
">
				Developed by Bruno Caruso
				</font>
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!-- third_wrapper --> 
</div>
<!-- #footer -->

</div>
<!-- #wrapper -->
	<a href="JavaScript:void(0);" title="<?php _e('Ir hacia arriba','instaappointment-lite'); ?>" id="backtop"></a>
	
	<?php wp_footer(); ?>
</body>
</html>