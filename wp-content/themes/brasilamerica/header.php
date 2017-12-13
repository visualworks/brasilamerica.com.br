<head>
        <meta name="google-site-verification" content="oaZ04Wa4gImIWQoz9KtNkIOmvPwvX8p4lWDOFTeelfs" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:site_name" content="Instituto Brasil-América" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo get_bloginfo('name'); ?>" />
        <meta property="og:url" content="<?php echo get_site_url(); ?>" />
        <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>" />
	<title>
		<?php
			wp_title( '|', true, 'right' );
			bloginfo( 'name' ); // Add the blog name.
			
			// Add the blog description for the home/front page.
			$site_description = get_bloginfo('description', 'display');
			if($site_description && (is_home() || is_front_page()))
				echo ' | ' . $site_description;
		?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/javascript/html5shiv.js"></script>
	<![endif]-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<?php
		/**
		 * Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-18205878-21', 'brasilamerica.com.br');
  ga('send', 'pageview');

</script>
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/vworks-brasilamerica/wp-content/themes/brasilamerica/style.css" type="text/css" /> 
<!-- Begin MailChimp Signup Form -->
<style type="text/css">
        #mc_embed_signup{background:transparent; clear:left; font:14px Helvetica,Arial,sans-serif; }
        /* Add your own MailChimp form style overrides in your site stylesheet or in this style blo$
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file.$
</style>
</head>
