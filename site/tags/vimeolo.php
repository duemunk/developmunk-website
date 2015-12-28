<?php

kirbytext::$tags['vimeolo'] = array(
  'html' => function($tag) {
    $id = $tag->attr('vimeolo');
    return '<div class="marginonlarge">
              <div class="video-container vimeo">
                <iframe src="http://player.vimeo.com/video/'.$id.'?title=0&portrait=0&color=55c2db&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                </iframe>
              </div>
            </div>';
  }
);

?>
