<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<?php get_header(); ?>
	<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=977472475729200";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<!-- index.php -->
		<?php get_template_part('top'); ?>
		<?php
		if(is_front_page()) :
			get_template_part('content', 'home');
		else :
		?>
			<div id="content-main" class="container" role="main">
				<?php // echo get_post_format(); ?>
				<?php get_template_part('content'); ?>
			</div>
		<?php endif; ?>
		<?php get_footer(); ?>
	</body>
</html>
