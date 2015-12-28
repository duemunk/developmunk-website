<?php

kirbytext::$tags['youtubey'] = array(
  'html' => function($tag) {
    $id = $tag->attr('youtubey');
    return '<div class="marginonlarge">
              <div class="video-container youtube">
                <iframe width="1080" height="720" src="http://www.youtube.com/embed/'.$id.'?rel=0&controls=2&autohide=1&showinfo=0&modestbranding=1&iv_load_policy=3&theme=light" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                </iframe>
              </div>
            </div>';
  }
);

?>
