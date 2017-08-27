<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <?php echo css('assets/css/slor/slor.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <?php echo js('//unpkg.com/vue') ?>
  </head>
  <body>

    <header>
      <div id="logo">
        <a href="/slor">
          <?php snippet('slor-logo') ?>
        </a>
      </div>
      <div id="appstore">
        <a href=""> <!-- TODO: Add link to appstore -->
          <?php snippet('slor-appstore') ?>
        </a>
      </div>
    </header>

    <main>
      <div id="demo">
        <div id="demo-hero">
          <h1>Edit<br>Depth<br>Effect<br>Photos.</h1>
        </div>

        <div id="demo-phone" class="">
          <?php snippet('slor-demo') ?>
        </div>

        <div id="demo-text">
          <div id="aperture">
            <h2>Change Aperture.</h2>
            <p>Change the aperture and see the amount of background blur adapt just a the bokeh effect on a DSLR.</p>
          </div>
          <div id="focus" class="dimmed">
            <h2>Change Focus.</h2>
            <p>Move the focus point to any place in the photo. Quickly fix mistaken auto focus.</p>
          </div>
        </div>
      </div>

      <?php snippet('slor-form') ?>

      <p>Slør launches along with iOS 11 mid-September 2017.</p>

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

      <div id="features" class="equal-columns">
        <div class="feature">
          <h3>Lens Blur.</h3>
          <p>Add a radial effect for blurring everything around the subject for dramatic effect.</p>
        </div>
        <div class="feature">
          <h3>Tilt.</h3>
          <p>Adjust the focal plane by tilting it, just like a super expensive tilt-shift lens does on a DSLR.</p>
        </div>
        <div class="feature">
          <h3>Photo Editing Extension.</h3>
          <p>Open Add a radial effect for blurring everything around the subject for dramatic effect.</p>
        </div>
        <div class="feature">
          <h3>Deep iOS Integration.</h3>
          <p>...</p>
        </div>
        <div class="feature">
          <h3>Depth Map.</h3>
          <p>...</p>
        </div>
        <div class="feature">
          <h3>High Quality.</h3>
          <p>...</p>
        </div>
      </div>
    </main>
  </body>
</html>
