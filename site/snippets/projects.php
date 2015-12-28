
<div id="projects">

  <?php foreach(page('projects')->children()->visible()->limit(5) as $project): ?>

    <div class="marginonlarge">
      <div class="project">
        <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
          <a href="<?php echo $project->url() ?>">
            <div class="projectimage protectbackgroundsidesbottom fullwrapper" style="background-image: url('<?php echo $image->url() ?>');" alt="<?php echo $project->title()->html() ?>">
              <div class="lightgradbottomhalf full"></div>
            </div>
          </a>
        <?php endif ?>
        <div class="margin project-text-content">
          <h1><?php echo $project->title() ?></h1>
          <?php echo $project->excerpt()->kt() ?>
          <p class="center"><?php echo $project->what_i_did() ?></p>
        </div>
      </div>
    </div>

  <?php endforeach ?>

</div>
