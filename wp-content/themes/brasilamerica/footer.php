<footer>
	<div class="container">
		<?php strtoupper(bloginfo('name')); ?> &copy; <?php echo date('Y'); ?>
	</div>
	<?php
	   /**
	    * Always have wp_footer() just before the closing </body>
	    * tag of your theme, or you will break many plugins, which
	    * generally use this hook to reference JavaScript files.
	    */
	    wp_footer();
	?>
</footer>
