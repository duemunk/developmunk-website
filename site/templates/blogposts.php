<?php snippet('header') ?>

  <main>

    <?php foreach($page->children()->visible() as $blogpost): ?>

      <div class="marginonlarge">
        <div class="project">
          <?php if($image = $blogpost->images()->sortBy('sort', 'asc')->first()): ?>
            <a href="<?php echo $blogpost->url() ?>">
          <div class="projectimage protectbackgroundsidestop fullwrapper" style="background-image: url('<?php echo $image->url() ?>');" alt="<?php echo $blogpost->title()->html() ?>"></div>
        </a>
          <?php endif ?>
          <div class="margin project-text-content">
            <h1><?php echo $blogpost->title() ?></h1>
            <p><?php echo $blogpost->excerpt() ?> <a href="<?php echo $blogpost->url()?>">Read.</a></p>
          </div>
        </div>
      </div>

    <?php endforeach ?>

  </main>

<?php snippet('footer') ?>
