<nav class="nav-single margin">
  <span>
    <?php if($prev = $page->prevVisible()): ?>
    <a href="<?php echo $prev->url() ?>">&larr; <?php echo $prev->title() ?></a>
    <?php endif ?>
    &nbsp;
  </span>
  <span class="nav-next">
    <?php if($next = $page->nextVisible()): ?>
    <a href="<?php echo $next->url() ?>"><?php echo $next->title() ?> &rarr;</a>
    <?php endif ?>
  </span>
</nav>
