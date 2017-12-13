<section class="prepend-top append-bottom clearfix">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<?php the_title('<h3 class="title">', '</h3>', true); ?>
			<article class="list-article prepend-top append-bottom">
				<?php
					the_content();
				?>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<h3 class="title">404 Não Encontrado</h3>
		<article class="prepend-top append-bottom">
			<p>Não há arquivos nesta área.</p>
		</article>
	<?php endif; ?>
</section>
<aside id="content-list">
	<ul>
		<?php
			if(get_the_title() !== 'Contato') :
				$category = get_the_category();
				$args = array('category_name' => $category[0]->slug);
				$query = new WP_Query($args);
				if($query->have_posts()) while($query->have_posts()) : $query->the_post();
		?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php
				endwhile;
			endif;
		?>
	</ul>
	<div class="fb-like-box" data-href="http://www.facebook.com/brasilamerica" data-width="270" data-height="350" data-show-faces="true" data-border-color="cccccc" data-stream="false" data-header="false"></div>
</aside>