<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <?php echo css('assets/css/slor/slor.css') ?>
    <?php echo js('//unpkg.com/vue') ?>
  </head>
  <body>

    <header>
      <?php snippet('slor-logo') ?>
      <?php snippet('slor-logo-appstore') ?>
    </header>

    <main>
      <?php snippet('slor-ui-animation') ?>

      <div class="section-spacing"></div>

      <?php snippet('slor-form') ?>

      <div class="section-spacing"></div>

      <!-- <?php snippet('slor-quotes') ?> -->

      <div class="section-spacing"></div>

      <?php snippet('slor-features') ?>
    </main>
  </body>
</html>
