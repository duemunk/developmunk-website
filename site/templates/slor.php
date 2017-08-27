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
      <div id="logo">
        <a href="/slor">
          <?php snippet('slor-logo') ?>
        </a>
      </div>
      <?php snippet('slor-appstore') ?>
    </header>

    <main>
      <?php snippet('slor-ui-animation') ?>

      <div class="section-spacing"></div>

      <div class="signup">
        <?php snippet('slor-form') ?>
        <p>Slør launches along with iOS 11 mid-September 2017.</p>
      </div>

      <div class="section-spacing"></div>

      <div id="quotes" class="margin equal-columns">
        <div class="quote">
          <p>This app is very awesome. You should buy it this very instant.</p>
          <p class="author">Federici Viticci</p>
        </div>
        <div class="quote">
          <p>This app is very awesome. You should buy it this very instant.</p>
          <p class="author">Federici Viticci</p>
        </div>
        <div class="quote">
          <p>This app is very awesome. You should buy it this very instant.</p>
          <p class="author">Federici Viticci</p>
        </div>
      </div>

      <div class="section-spacing"></div>

      <?php snippet('slor-features') ?>
    </main>
  </body>
</html>
