<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Cairnie Wheeber Fabrics</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/cairniewheeber.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css"></style>
<?php wp_head(); ?>
</head>

<body>
<div class="container">
<div class="row sasha ">
  <div class="page-header  ">
    <div class="col-md-2 text-center"><img src="<?php echo get_stylesheet_directory_uri() ?>/logo.png" alt="Oval logo with the letters C W" class="logo" /></div>
    <h1 class="text-center col-md-8 blue">Cairnie Wheeber <br />
      <small class="blue-secondary">fabric design by Ruth Hyde</small> </h1>
    <nav class="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="">menu</span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav nav-justified">
            <?php wp_list_pages('title_li='); ?>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
  </div>
  <!-- page-header -->
</div>
<!--row-->
