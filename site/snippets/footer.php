
    <? $hasImage = !$page->isHomePage() && $image = $page->images()->sortBy('sort', 'asc')->first(); ?>
    <? if($hasImage): ?>
    <div class="coverbackground fullwrapper footerimage" style="background: url(<?php echo $image->url() ?>);">
    <? else: ?>
    <div class="coverbackground fullwrapper footer">
    <? endif; ?>

        <footer class="margin footerheight positionrelative outerbottom">

          <div class="innerbottom fullwidth">
            <?php snippet('icon', array('white' => !$hasImage)) ?>

            <div id="biz" <? if(!$hasImage): echo 'class="inverted"'; endif; ?> >
              <ul>
                <li><a href="maps:q=Skoleholdervej 53, 2.tv., 2400 Copenhagen, Denmark">Skoleholdervej 53 – 2.tv – 2400 København NV</a></li>
                <li><a href="mailto:tobias@developmunk.dk">tobias@developmunk.dk</a></li>
                <li><a href="tel:004560870112">(+45) 60 87 01 12</a></li>
                <li><a href="http://www.cvr.dk/Site/Forms/PublicService/DisplayCompany.aspx?cvrnr=34968829">CVR: 34968829</a></li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <?php snippet('piwik') ?>
  </body>
</html>
