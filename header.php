<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bubbles/bubbles.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.smoothScroll.js"></script>
	<script type="text/javascript">
		if(screen.width<600){
			document.write('<meta name="viewport" content="width=400">');
		}else{
			document.write('<meta name="viewport" content="width=device-width">');			
		}

		jQuery(window).load(function(){
			$('a[href^="#"]').smoothScroll();
		});
	</script>

<!--[if lt IE 9]>
 <script src="<a href="http://html5shiv.googlecode.com/svn/trunk/html5.js" target="_blank" rel="noreferrer" style="cursor:help;display:inline !important;">http://html5shiv.googlecode.com/svn/trunk/html5.js</a>"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body>
	<div class="wrap">
		<header>
			<div class="container">
				<h1><?php bloginfo('name'); ?></h1>
				<p class="description"><?php bloginfo('description'); ?></p>
			</div>
			<nav>
				<?php wp_nav_menu( array( 'menu_class' => 'topmenu', 'theme_location' => 'top_menu' ) ); ?>
			</nav>
		</header>

		<div class="container">