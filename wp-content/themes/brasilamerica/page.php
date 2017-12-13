<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<?php get_header(); ?>
	<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=977472475729200";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<!-- page.php -->
		<?php get_template_part('top'); ?>
		<div id="content-main" class="container" role="main">
			<?php // echo get_post_format(); ?>
			<section class="prepend-top append-bottom clearfix">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php the_title('<h3 class="title">', '</h3>', true); ?>
						<?php if($post->post_name !== 'contato') : ?>
							<div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="true" data-layout="button_count" data-width="200" data-show-faces="false" data-font="lucida grande"></div>
						<?php endif; ?>
						<article class="prepend-top append-bottom">
							<?php
								the_content();
							?>
						</article>
						<?php if($post->post_name !== 'contato') : ?>
							<div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-num-posts="5" data-width="610"></div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php else : ?>
					<h3 class="title">404 Não Encontrado</h3>
					<article class="prepend-top append-bottom">
						<p>Não há arquivos nesta área.</p>
					</article>
				<?php endif; ?>
			</section>
			<?php get_sidebar(); ?>
		</div>
		<?php get_footer(); ?>
	</body>
</html>
