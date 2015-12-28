<?php snippet('header') ?>

<header>

  <? if($image = $page->images()->sortBy('sort', 'asc')->first()): ?>
  <div class="coverbackground fullwrapper headerimage" style="background: url(<?php echo $image->url() ?>);">
  </div>
  <? endif; ?>

    <h1 class="margin"><a href="http://developmunk.dk/blog/developing-for-the-myo-alpha/" rel="bookmark"><?php echo $page->title()->html() ?></a></h1>
</header>

<section id="content">
  <article>
    <?php echo $page->text()->kirbytext() ?>
  </article>
  <? snippet('follow') ?>
</section>

<? snippet('pagenavigation') ?>

<? snippet('footer') ?>
