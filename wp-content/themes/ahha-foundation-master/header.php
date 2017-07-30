<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://i.icomoon.io/public/temp/3e6d362a29/UntitledProject/style-svg.css">
		<script defer src="https://i.icomoon.io/public/temp/3e6d362a29/UntitledProject/svgxuse.js"></script>

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-103664139-1', 'auto');
		  ga('send', 'pageview');
		</script>

		<div class="page">

		      <nav class="nav">
		      <!-- Logo --><a href="<?php bloginfo('url'); ?>">
		      <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/mbcfullcolorhoriz.svg" width="200" alt="logo" title="Midwest Business Consulting"></a>

		        <button id="hamb">
		          <div id="rect1" class="showRect"></div>
		          <div id="rect2" class="showRect"></div>
		          <div id="rect3" class="showRect"></div>
		        </button>
		        <div id="slideDown" class="hidden">
		        <!-- Navigation -->
						<!--<ul class="pages">
							<li><a href="?page_id=4">About</a></li>
							<li><a href="?page_id=8">Services</a></li>
							<li><a href="?page_id=51">Industries</a></li>
							<li><a href="?page_id=6">Contact</a></li>
							<li><a href="?page_id=12">Knowledge Base</a></li>
						</ul>-->
		          <?php html5blank_nav(); ?>
		          <ul class="social">
		            <!-- Social Media -->
		            <!-- Facebook -->
		            <li><a href="https://www.facebook.com/mbconsultingco/">
		              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
		              <title>facebook</title>
		              <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
		              </svg>
		            </a></li>

		            <!-- Twitter -->
		            <li><a href="https://twitter.com/MBConsultingco">
		              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
		              <title>twitter</title>
		              <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
		              </svg>
		            </a></li>

		            <!-- LinkedIn -->
		            <li><a href="https://www.linkedin.com/company-beta/2862491/">
		              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
		              <title>linkedin2</title>
		              <path d="M12 12h5.535v2.837h0.079c0.77-1.381 2.655-2.837 5.464-2.837 5.842 0 6.922 3.637 6.922 8.367v9.633h-5.769v-8.54c0-2.037-0.042-4.657-3.001-4.657-3.005 0-3.463 2.218-3.463 4.509v8.688h-5.767v-18z"></path>
		              <path d="M2 12h6v18h-6v-18z"></path>
		              <path d="M8 7c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path>
		              </svg>
		            </a></li>

		            <!-- Google Plus -->
		            <li><a href="https://plus.google.com/+Mbconsultingco">
		              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
		              <title>google-plus</title>
		              <path d="M10.181 14.294v3.494h5.775c-0.231 1.5-1.744 4.394-5.775 4.394-3.475 0-6.313-2.881-6.313-6.431s2.838-6.431 6.313-6.431c1.981 0 3.3 0.844 4.056 1.569l2.762-2.662c-1.775-1.656-4.075-2.662-6.819-2.662-5.631 0.006-10.181 4.556-10.181 10.188s4.55 10.181 10.181 10.181c5.875 0 9.775-4.131 9.775-9.95 0-0.669-0.075-1.181-0.163-1.688h-9.613z"></path>
		              <path d="M32 14h-3v-3h-3v3h-3v3h3v3h3v-3h3z"></path>
		              </svg>
		            </a></li>
		          </ul>
		        </div>
		      </nav>
