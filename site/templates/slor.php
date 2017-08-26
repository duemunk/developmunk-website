<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <?php echo css('assets/css/slor/slor.css') ?>
  </head>
  <body>

    <header>
      <div id="logo">
        <a href="/slor">
          <?php snippet('slor-logo') ?>
        </a>
      </div>
      <h1>Edit<br>Portrait Mode<br>Photos.</h1>

      <div id="aperture" class="demo-text">
        <h2>Change Aperture.</h2>
        <p>Change the aperture and see the amount of background blur adapt just a the bokeh effect on a DSLR.</p>
      </div>
      <div id="focus" class="demo-text">
        <h2>Change Focus.</h2>
        <p>Move the focus point to any place in the photo. The selected focus point will stay sharp and anything further back the to motiv will be blurred. Any Portrait Mode photo taken in iOS 11 can be edited in Slør.</p>
      </div>

    </header>

    <main>
      <div class="margin">
        <form action="//developmunk.us16.list-manage.com/subscribe/post?u=6355a7613325da59aa82b5576&amp;id=7d906bb182" method="post" name="mc-embedded-subscribe-form" class="center" target="_blank" novalidate>

          <input type="email" value="" name="EMAIL" placeholder="E-mail address">
          <input type="submit" value="Notify me on launch" name="subscribe">
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>
        </form>
        <p>Slør launches along with iOS 11 mid-September 2017.</p>
      </div>

      <div id="quotes" class="margin">
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

      <div id="features">
        <div class="feature">
          <h3>Lens Blur.</h3>
          <p>Add a radial effect for blurring everything around the subject for dramatic effect.</p>
        </div>
        <div class="feature">
          <h3>Tilt.</h3>
          <p>Adjust the focal plane by tilting it, just like a super expensive tilt-shift lens does on a DSLR.</p>
        </div>
        <div class="feature">
          <h3>Lens Blur.</h3>
          <p>Add a radial effect for blurring everything around the subject for dramatic effect.</p>
        </div>
        <div class="feature">
          <h3>Tilt.</h3>
          <p>Adjust the focal plane by tilting it, just like a super expensive tilt-shift lens does on a DSLR.</p>
        </div>
        <div class="feature">
          <h3>Lens Blur.</h3>
          <p>Add a radial effect for blurring everything around the subject for dramatic effect.</p>
        </div>
        <div class="feature">
          <h3>Tilt.</h3>
          <p>Adjust the focal plane by tilting it, just like a super expensive tilt-shift lens does on a DSLR.</p>
        </div>
      </div>
    </main>
  </body>
</html>
