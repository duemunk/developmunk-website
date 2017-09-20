<div class="quote">
  <p class="quotation">”</p>
  <div class="text">
    <p><?php echo $description?></p>
    <?php if (isset($url)) { ?>
      <p class="author">
        <a href=<?php echo $url ?>>
          —<?php echo $author?>.</p>
        </a>
    <?php } else { ?>
      <p class="author">—<?php echo $author?>.</p>
    <?php } ?>
  </div>
</div>
