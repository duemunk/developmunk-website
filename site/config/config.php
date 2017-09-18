<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-7cb34d9c559fa2182b2811bfc7501676');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

// Fix for slor being a projects, but links to /projects/slor should go to /slor
c::set('routes', array(
  array(
    'pattern' => 'projects/slor',
    'action'  => function() {
      return go('slor');
    }
  )
));


// Enable caching
c::set('cache', true);
