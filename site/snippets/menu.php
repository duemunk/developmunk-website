<nav id="menu" class="floating">
  <div class="margin">
    <?php snippet('icon', array('vertical' => false)) ?>
    <ul class="menu">
      <?php
        $isHome = $page->isHomePage();
        $preHome = $isHome ? '' : $site->url();
        $isBlog = $page->title() == 'Blog';
      ?>
      <li><a href="<?php echo $preHome ?>#main">Home</a></li>
      <li><a href="<?php echo $preHome ?>#projects">Projects</a></li>
      <li><a href="<?php echo $preHome ?>#contact">Contact</a></li>
      <li <?php ecco($isBlog, ' class="active"') ?>><a href="<?php echo $site->url() ?>/blog">Blog</a></li>
    </ul>
  </div>
</nav>
