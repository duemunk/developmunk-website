<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <?php echo css('assets/css/main.css') ?>
  <link rel="stylesheet" id="googlefonts-css" href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,700|Titillium+Web:400,600|Inconsolata&subset=latin" type="text/css" media="all"/>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
  <?php echo js('assets/js/main.js') ?>
  <?php echo js('assets/js/jquery.scrollTo.min.js', true) ?>
  <link rel="shortcut icon" type="image/x-icon" href="assets/favicons/favicon.ico"/>
  <link rel="shortcut icon" type="image/png" href="assets/favicons/favicon16.png"/>
  <link rel="shortcut icon" type="image/png" href="assets/favicons/favicon32.png"/>
  <link rel="shortcut icon" type="image/png" href="assets/favicons/favicon64.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/touch-icon-ipad-retina.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/images/touch-icon-phone-ios7.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/touch-icon-iphone-retina.png" />
</head>
<body>
  <?php snippet('menu') ?>
