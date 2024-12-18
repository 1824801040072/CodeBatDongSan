<?php
/**
* Header
*/
global $vpw_theme;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php wp_title('-', TRUE, 'right'); ?><?php bloginfo('name'); ?><?php if (is_front_page()) {
echo ' - ';
bloginfo('description');
} ?></title>
<link href="<?php echo $vpw_theme['favi']['url']?>" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,700" rel="stylesheet">

</head>


<body <?php echo body_class()?>>
<div class="warrper wap">
<div id="topmenu">
<div class="container">
<div class="header-content">
<div class="logo">
<a title="<?php echo home_url() ?>" href="<?php echo home_url() ?>"> 

<img src="<?php echo $vpw_theme['logo']['url']?>" alt=""> 
</a>
</div>
<div class="smartmarquee example">
<div class="news-ticker demof">

<!-- <?php
dynamic_sidebar('topheader');
?> -->

</div>
</div>
<div class="top-right">
<div class="topinfo"> <span class="email"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:<?php echo $vpw_theme['email']?>"><?php echo $vpw_theme['email']?></a></span> <span class="phone"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+<?php echo $vpw_theme['hotline']?>"><?php echo $vpw_theme['hotline']?></a></span> </div>
<div class="clear"></div>
<ul class="header-share">
<li>
<a class="share-btn" title="Feed Subscription" href="<?php echo home_url() ?>/feed" target="_blank"> <span class="share-btn-action share-btn-rss"><i class="fa fa-rss"></i> </span> </a>
</li>
<li>
<a href="<?php echo $vpw_theme['gg']?>" target="_blank"> <span class="share-btn-action share-btn-plus"><i class="fa fa-google-plus"></i> </span> </a>
</li>
<li>
<a href="<?php echo $vpw_theme['you']?>" target="_blank"> <span class="share-btn-action share-btn-tweet"><i class="fa fa-youtube"></i></span> </a>
</li>
<li>
<a href="<?php echo $vpw_theme['face']?>" target="_blank"> <span class="share-btn-action share-btn-like"><i class="fa fa-facebook"></i></span> </a>
</li>
</ul>
<div class="clear"></div>
<div id="form_search">
<form action="<?php echo home_url() ?>" method="GET">
<input type="text" name="s" value="" />
<button type="submit"><i class="fa fa-search" aria-hidden="true"></i> </button>
</form>
</div>
</div>
<div class="clear"></div>
</div>
</div>
</div>
<div class="clear"></div>
<div id="header" class="un_sticky_home">
<div class="bg_header">
<div class="container">
<div id="menu">
	<?php
	wp_nav_menu( array(
	'theme_location'    => 'primary',
	'depth'             => 2,
	'container' => false, 
	'menu_id' => '',
	'menu_class'        => 'left'
	)
	); ?>
</div>
</div>
</div>
</div>




