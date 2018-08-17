<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap-example
 */

$nav_heading = get_post_meta(8 , 'nav_heading', true);
$link1 = get_post_meta(8 , 'link1', true);
$link2 = get_post_meta(8 , 'link2', true);
$link3 = get_post_meta(8 , 'link3', true);

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<title><?php echo bloginfo('name')?></title>

	<!-- Bootstrap core CSS -->
  <link href="<?php echo bloginfo('template_directory') ?>/assets/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo bloginfo('template_directory') ?>/assets/carousel.css" rel="stylesheet">

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Domine:400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap-example' ); ?></a>

	 <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
        <a class="navbar-brand" href="https://getbootstrap.com/docs/4.1/examples/carousel/#"><?php echo $nav_heading; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="https://getbootstrap.com/docs/4.1/examples/carousel/#"><?php echo $link1; ?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://getbootstrap.com/docs/4.1/examples/carousel/#"><?php echo $link2; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="https://getbootstrap.com/docs/4.1/examples/carousel/#"><?php echo $link3; ?></a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        </div>
      </nav>
    </header>
