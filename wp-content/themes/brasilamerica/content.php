<section class="prepend-top append-bottom clearfix">
	<?php if(have_posts()) : ?>
		<h3 class="title"><?php single_cat_title(); ?></h3>
		<?php while(have_posts()) : the_post(); ?>
			<article class="list-article prepend-top">
				<div class="featured-image">
					<?php echo get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
				</div>
				<div class="content-description">
					<?php
						the_title('<h3 class="bottom"><a href="' .  get_permalink() . '">', '</a></h3>', true);
						// the_content();
					?>
					<p class="top"><a href="<?php the_permalink(); ?>">Saiba mais...</a></p>
				</div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<h3 class="title">404 Não Encontrado</h3>
		<article class="prepend-top append-bottom">
			<p>Não há arquivos nesta área.</p>
		</article>
	<?php endif; ?>
</section>
<?php get_sidebar(); ?>