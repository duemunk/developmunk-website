<?php
  $footer1 = '';
  $hasImage = !$page->isHomePage() && $image = $page->images()->sortBy('sort', 'asc')->first();

  if($hasImage) {
    $footer1 .= '<div class="coverbackground fullwrapper footerimage" style="background: url(' .$image->url(). ');">';
  } else {
    $footer1 .= '<div class="coverbackground fullwrapper footer">';
  }
  $footer1 .= '<footer class="margin footerheight positionrelative outerbottom">';
  $footer1 .= '<div class="innerbottom fullwidth">';

  $footer2 = '<div id="biz"';
  if(!$hasImage) $footer2 .= 'class="inverted"';
  $footer2 .= '>';
  $footer2 .= '<ul>';
  $footer2 .= '<li><a href="maps:q=Skoleholdervej 53, 2.tv., 2400 Copenhagen, Denmark">Skoleholdervej 53 – 2.tv – 2400 København NV</a></li>';
  $footer2 .= '<li><a href="mailto:tobias@developmunk.dk">tobias@developmunk.dk</a></li>';
  $footer2 .= '<li><a href="tel:004560870112">(+45) 60 87 01 12</a></li>';
  $footer2 .= '<li><a href="https://datacvr.virk.dk/data/visenhed?enhedstype=virksomhed&id=34968829">CVR: 34968829</a></li>';
  $footer2 .= '</ul>';
  $footer2 .= '</div>';
  $footer2 .= '</div>';
  $footer2 .= '</footer>';
  $footer2 .= '</div>';
  $footer2 .= '</div>';

  echo $footer1;
  snippet('icon', array('white' => !$hasImage));
  echo $footer2;
?>