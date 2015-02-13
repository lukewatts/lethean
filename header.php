<?php
/*-----------------------------------------------------------------------------------*/
/* This template will be called by all other template files to begin
/* rendering the page and display the header/nav
/*-----------------------------------------------------------------------------------*/
?><!-- START OF header.php -->
<!DOCTYPE html>
<html <?php language_attributes(); // Get the language to be used from the admin > settings ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(':', true, 'right'); /* Show the site name and post/page name
    filtered through functions.php */ ?></title>

		<!-- META, STYLES & SCRIPTS -->
<?php wp_head();
// This funtion allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website.
// Removing this function call will disable all kinds of plugins and Wordpress default insertions.
// Our scripts and style.css will be inserted here from our functions.php files
?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class();
  /* This will display a class specific to whatever is being loaded by Wordpress i.e. on a home page, 
   * it will return [class="home"] on a single post, it will return [class="single postid-{ID}"] etc.
   */ ?>>
	<header>
		<a id="affinity4-logo" class="affinity4-logo" href="<?php echo home_url(); ?>"><img src="<?php echo PARENT_THEME_ASSETS_URI . '/img/logo/logo.svg'; ?>" title="Homepage" alt="Logo"></a>

		<?php 
			
			$top_nav_atts = array(
				'theme_location'  => 'top-nav',
				'container'       => 'nav',
				'container_class' => 'affinity4-top-nav',
				'container_id'    => 'affinity4-top-nav',
				'menu_class'      => 'menu-top-nav',
				'depth'           => 0
			);
			
			wp_nav_menu( $top_nav_atts );

		?>
		<a id="affinity4-menu-trigger" class="affinity4-menu-trigger" href="#"><span class="affinity4-menu-text">Menu</span><span class="affinity4-menu-icon"></span></a>

	</header>