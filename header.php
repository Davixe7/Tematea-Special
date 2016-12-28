<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<title><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<?php wp_head(); ?>
  </head>
  <body>
	<header>
		<div class="container">
			<h3><?php bloginfo('name') ?></h3>
		</div>
	</header>
	<div id="banner">
		<h1><?php the_title(); ?></h1>
	</div>