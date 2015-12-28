<?php

kirbytext::$tags['gist'] = array(
  'attr' => array(
    'user',
    'file'
  ),
  'html' => function($tag) {
    $id = $tag->attr('gist');
    $user = $tag->attr('user');
    $file = $tag->attr('file');

    $script_url = 'https://gist.github.com/';
    if (isset($user)) {
        $script_url .= $user . '/';
    }
    $script_url .= $id . '.js';
    if (isset($file)) {
        $script_url .= "?file=" . $file;
    }

    return '<div class="margin">
      <script src="'.$script_url.'"></script>
    </div>';
  }
);

?>
