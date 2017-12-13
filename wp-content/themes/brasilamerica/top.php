<div class="hide"><input type="hidden" id="BASE_URL" value="<?php echo get_template_directory_uri(); ?>" /></div>
<header>
	<div class="container">
		<h1><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-brasil-america.png" alt="IBA Instituto Brasil-América" title="IBA Instituto Brasil-América" /></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
	</div>
	<div id="nav-wrap">
		<nav id="nav-main" class="container">
			<?php wp_nav_menu(array('menu' => 'nav-main')); ?>
		</nav>
	</div>
</header>
