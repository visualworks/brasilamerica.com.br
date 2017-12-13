<aside id="content-list">
    <?php if (is_page() && is_active_sidebar('contact_sidebar')) : ?>
	    <div id="contact-sidebar" class="widget-area">
	    	<?php dynamic_sidebar('contact_sidebar'); ?>
	    </div><!-- #contact-sidebar .widget-area -->
    <?php endif; ?>
	<ul>
		<?php
			if($post->post_name !== 'contato') :
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
<div class="fb-page" data-href="https://www.facebook.com/brasilamerica" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/brasilamerica" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/brasilamerica">IBA - Instituto Brasil-América</a></blockquote></div>
</aside>
