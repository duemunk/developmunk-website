<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <?php echo css('assets/css/slor.css') ?>

  </head>
  <body>

    <header>
      <h1><?php echo $page->title()->html() ?></h1>
    </header>

    <main>
      <div class="margin">
        <p>Slør launches along with iOS 11 mid-September 2017. Sign up to get notified, just this once. I'll never use your e-mail again.</p>

        <form action="//developmunk.us16.list-manage.com/subscribe/post?u=6355a7613325da59aa82b5576&amp;id=7d906bb182" method="post" name="mc-embedded-subscribe-form" class="center" target="_blank" novalidate>

          <input type="email" value="" name="EMAIL" placeholder="E-mail address">
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true">
            <input type="text" name="b_6355a7613325da59aa82b5576_7d906bb182" tabindex="-1" value="">
          </div>
          <div>
            <input type="submit" value="Notify me on launch" name="subscribe">
          </div>
        </form>

        <p>Really, I'll never use your e-mail again for anything. Not even free money offers.</p>

      </div>
    </main>

    <footer class="margin footerheight positionrelative outerbottom">
      <div class="innerbottom fullwidth">
        <?php snippet('icon', array('white' => !$hasImage)) ?>
        <div id="biz" <? if(!$hasImage): echo 'class="inverted"'; endif; ?> >
          <ul>
            <li><a href="maps:q=Skoleholdervej 53, 2.tv., 2400 Copenhagen, Denmark">Skoleholdervej 53 – 2.tv – 2400 København NV</a></li>
            <li><a href="mailto:tobias@developmunk.dk">tobias@developmunk.dk</a></li>
            <li><a href="tel:004560870112">(+45) 60 87 01 12</a></li>
            <li><a href="https://datacvr.virk.dk/data/visenhed?enhedstype=virksomhed&id=34968829">CVR: 34968829</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
