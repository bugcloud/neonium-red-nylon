<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<?php if(is_home()) { ?><title><?php bloginfo('name'); ?> &raquo; <?php bloginfo('description'); ?></title>
		<?php } elseif (is_category()) { ?><title><?php bloginfo('name'); ?> &raquo; <?php single_cat_title(); ?></title>
		<?php } elseif (is_page()) { ?><title><?php bloginfo('name'); ?> &raquo; <?php the_title(); ?></title>
		<?php } elseif (is_single()) { ?>
		<title><?php the_title(); ?> &raquo; <?php bloginfo('name'); ?></title>
		<?php } elseif (is_tag()) { ?><title><?php bloginfo('name'); ?> &raquo; <?php single_tag_title(); ?></title>
		<?php }else{ ?><title><?php bloginfo('name'); ?> &raquo; <?php bloginfo('description'); ?></title><?php }?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link href='//fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style.css' ?>" type="text/css" media="screen" />
		<?php wp_enqueue_script('jquery'); ?>
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">




<!-- calling navigation -->
	<div id="navigationWrapper">
		<div id="navigation">



<?php if ( has_nav_menu( 'primary' ) ) : ?>
<?php wp_nav_menu( array( 'container_id' => '', 'depth' => '4', 'menu_class' => 'dropdown', 'theme_location' => 'primary' ) ); ?>
<?php else: ?>
<ul class="dropdown">
			<li class="<?php if (!is_paged() && is_home()) { ?>current_page_item<?php } else { ?>page_item<?php } ?>"><a href="<?php echo home_url(); ?>"  title="Home">Home</a></li>
			<?php wp_list_pages('sort_column=menu_order&sort_order=asc&title_li=&depth=4'); ?>
</ul>
<?php endif; ?>



			<div class="clear"></div>
		</div>
	</div>
<!-- ending navigation -->










<!-- calling header -->
	<div id="headerWrapper">
		<div id="header">
			<h1 title="<?php bloginfo('name'); ?>"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2 title="<?php bloginfo('description'); ?>"><?php bloginfo('description'); ?></h2>



<!-- calling search bar -->
	<div id="searchingWrapper">
			<div id="searching">
				<?php get_search_form(); ?>
					<div class="clear"></div>
			</div>
	</div>
<!-- ending search bar -->

			<div class="clear"></div>


		</div>
	</div>
<!-- ending header -->












<!-- calling main -->
		<div id="mainWrapper">
			<div id="main">
