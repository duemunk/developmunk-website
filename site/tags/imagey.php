<?php

kirbytext::$tags['imagey'] = array(
  'attr' => array(
    'relative',
    'marginonlarge',
    'title',
    'detail',
  ),
  'html' => function($tag) {
    $url = $tag->attr('imagey');
    $relative = filter_var( $tag->attr('relative'), FILTER_VALIDATE_BOOLEAN );
    $marginonlarge = filter_var( $tag->attr('marginonlarge'), FILTER_VALIDATE_BOOLEAN );
    $title = $tag->attr('title');
    $detail = $tag->attr('detail');

    $file = $tag->file($url);
    // use the file url if available and otherwise the given url
    $url = $file ? $file->url() : url($url);

    // if ($relative) :
    //     $url = '/assets/images/'.$url.'.jpg';
    // endif;

    $wrapperclasses = 'imagewrapper';
    $titleclasses = '';
    if ($marginonlarge) {
        $wrapperclasses .= ' marginonlarge';
        $titleclasses .= 'marginofflarge smallmarginonlarge';
    }
    else {
        $titleclasses .= 'margin';
    };

    $print = '<div class="imagecontainer"><div class="'.$wrapperclasses.'">';

    $print .= '<img class="regular" src="'.$url.'"/>';

    /* Replace "space" with &nbsp; in the final half of title, so if linebreak is happening, more words will be on last line.  */
    $titleArray = explode(' ',$title);
    $numOfWords = count($titleArray);
    $newTitle = $titleArray[0];
    $maxCountCombine = min(round($numOfWords/2),8);
    for ($i = 1; $i <= $numOfWords; $i++)
    {
        $titleBit = $titleArray[$i];
        // Skip if found element has no length e.g. for \r, \n or both
        if (count($titleBit) == 0) {
            continue;
        }
        if ($i <= $maxCountCombine) {
            $newTitle .= ' ';
        } else {
            $newTitle .= '&nbsp;';
        }
        $newTitle .= $titleBit;
    }
    $title = $newTitle;
    /* Replace hyphen with non-breaking hyphen &#8209; */
    $title = str_replace('-','&#8209;',$title);

    if ($title) :
        $print .= '<div class="imagedescriptionwrapper darkgradbottom"><div class="imagedescription '.$titleclasses.'">'.$title.'</div></div>';
    endif;

    $print .= '</div>';

    if (strlen($detail)>0) : // Prepend detail
        $detail = str_replace('by','<em>by</em>',$detail);
        $detail = str_replace('from','<em>from</em>',$detail);

        $print .= '<div class="imagetextboxdetail margin">'.$detail.'</div>';
    endif;

    $print .= '</div>';

    return $print;
  }
);

?>
