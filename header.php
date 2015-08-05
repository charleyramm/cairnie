<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/cairniewheeber.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css"></style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
<div class="row sasha ">
  <div class="page-header  ">
    <div class="col-md-2 text-center"><img src="<?php echo get_stylesheet_directory_uri() ?>/logo.png" alt="Oval logo with the letters C W" class="logo" /></div>
    <h1 class="text-center col-md-8 blue">Cairnie Wheeber <br />
      <small class="blue-secondary">fabric design by Ruth Hyde</small>
    </h1>
    <nav class="navbar col-md-12">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="">menu</span> </button>
        </div>

        <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
       'container_id'      => 'navbar',
               'menu_class'        => 'nav nav-justified',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>


      </div>
    </nav>
  </div>
  <!-- page-header -->
</div>
<!--row-->
