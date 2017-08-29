<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
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

      <!-- <div class="section-spacing"></div> -->

      <!-- <?php snippet('slor-quotes') ?> -->

      <?php snippet('slor-section-image', array('id'=>'fish')) ?>

      <?php snippet('slor-features') ?>

      <?php snippet('slor-section-image', array('id'=>'tree')) ?>

    </main>

    <footer>
       <?php snippet('slor-footer') ?>
    </footer>
  </body>
</html>
