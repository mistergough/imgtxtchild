<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<script src="//use.typekit.net/vlm3npu.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name='viewport' content='width=device-width' />
<title><?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( has_nav_menu( 'header-top' ) ) : ?>
<div id="over-header">
<div class="inner">
<?php wp_nav_menu( array('theme_location' => 'header-top', 'fallback_cb' => '', 'container' => false )); ?>
</div>
</div>
<?php endif; ?>

<div id="header">
<div class="inner">
<?php wp_nav_menu( array('menu_class' => 'center-menu-left','theme_location' => 'header-left','fallback_cb' => '', 'container' => false )); ?>

<h1>
	<?php
	if (function_exists('category_image_src')) {
	$category_image = category_image_src( array( 'size' => 'full' ) , false );
	} else {
	$category_image = '';
	}
	?>
	<?php if ($category_image)
	{
	echo "<img src='$category_image'/>";
	}
	else
	{
	the_post_thumbnail( 'full' );
	}
	?>	
</h1>

<?php wp_nav_menu( array('menu_class' => 'center-menu-right','theme_location' => 'header-right','fallback_cb' => '', 'container' => false )); ?>
</div>
</div>

<?php if ( has_nav_menu( 'header-bottom' ) ) : ?>
<div id="under-header">
<div class='inner'>
<?php wp_nav_menu( array('theme_location' => 'header-bottom', 'fallback_cb' => '', 'container' => false )); ?>
</div>
</div>
<?php endif; ?>