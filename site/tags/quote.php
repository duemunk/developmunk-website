<?php

kirbytext::$tags['quote'] = array(
  'attr' => array(
    'author',
    'url'
  ),
  'html' => function($tag) {
    $quote = $tag->attr('quote');
    $author = $tag->attr('author');
    $url = $tag->attr('url');

    $print = '<div class="quote bluegradcross">
                <div class="margin">
                  <div class="quoteinner">'.$quote.'</div>
                  <div class="author">'.$author.'</div>
                </div>
              </div>';

    if (isset($url)):
      $print = '<a href="'.$url.'">
                '.$print.'</a>';
    endif;

    return $print;
  }
);

?>
