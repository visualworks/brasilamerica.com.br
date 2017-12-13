<section id="content-featured">
	<div class="container">
		<article class="content-courses alignleft">
		</article>
		<article class="content-level alignright">
		</article>
	</div>
</section>
<div id="content-main" class="container" role="main">
	<div id="home-left" class="alignleft">
		<section id="news-last">
			<h3 class="title">Notícias</h3>
			<?php 
				$args = array('category_name' => 'noticias');
				$query = new WP_Query($args);
				if($query->have_posts()) while($query->have_posts()) : $query->the_post();
			?>
				<article>
                                        <p class="bottom"><small><?php the_date(); ?></small></p>
					<a href="<?php echo the_permalink(); ?>" class="highlight"><?php the_title('<h4 class="top">', '</h4>', true); ?></a>
					<!-- <p class="top"><?php // the_excerpt(); ?></p> -->
				</article>
			<?php endwhile; ?>
		</section>
		<section id="testmonials">
		
		</section>
	</div>
	<div id="home-banner" class="alignleft"><img src="http://www.brasilamerica.com.br/wp-content/uploads/2014/01/04-Galhardete-Brasil-MENOR.jpg" alt="O inglês TOP de Niterói" title="O inglês TOP de Niterói" /></div>
	<div id="home-right" class="alignright">
		<section id="newsletter">
			<h3 class="title bottom">Newsletter</h3>
			<p class="top bottom">Cadastre-se agora e receba novidades e descontos exclusivos por e-mail.</p>
<div id="mc_embed_signup">
<form action="http://visualworks.us1.list-manage.com/subscribe/post?u=cda58dc856caf642f51606118&amp;id=d9104eb71b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div class="indicates-required"><span class="asterisk">*</span> campos obrigatórios</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">E-mail <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">Primeiro Nome </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Último Nome </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_cda58dc856caf642f51606118_d9104eb71b" value=""></div>
	<div class="clear"><input type="submit" value="Cadastrar" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->



		</section>
	</div>
</div>
