<!DOCTYPE html>
<html lang="is">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://event.thekking.is/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="http://event.thekking.is/favicon-wh.png" type="image/png">
    <link rel="icon" href="http://event.thekking.is/favicon.png" type="image/x-icon" />
    <?php wp_head(); ?>
    <title>
      <?php bloginfo('name'); ?>
    </title>
    <!-- <link rel="stylesheet" href="http://basehold.it/24"> -->
  </head>
  <body>

      <div class="page-title">
        <h1><?php echo bloginfo(); ?></h1>
        <h2>- allt sem þú þarft að vita -</h2>
        <?php
          if(!is_home()) {
        ?>
            <a href="http://event.thekking.is"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-home-24px.svg"></a>
        <?php
          }
        ?>
      </div>
      <div id="wrapper">
