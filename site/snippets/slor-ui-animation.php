<div id="app">

  <div>
    <div id="logo">
      <a href="/slor">
        <?php snippet('slor-logo') ?>
      </a>
    </div>
    <h1>Edit<br>Portrait<br>Mode<br>Photos.</h1>
  </div>

  <div id="demo-phone" class="">
    <div class="img-wrap">
      <div class="focus focus--top"></div>
      <div class="focus focus--middle"></div>
      <div class="focus focus--bottom"></div>
      <img v-bind:src="'assets/images/slor/' + focus.amount + '.' + blur.amount + '.jpg'" />
    </div>
    <input 
      type="range"
      v-model.number="blur.amount"
      v-bind:min="blur.min"
      v-bind:max="blur.max"
      v-on:mouseover="stopRepeat"
      v-on:mouseleave="startRepeat"
      v-on:touchstart="stopRepeat"
      v-on:touchend="startRepeat">
  </div>

  <div>
    <div id="aperture" class="demo-text" v-bind:class="{ dimmed: !isBlurring }">
      <h2>Change Aperture.</h2>
      <p>Change the aperture and see the amount of background blur adapt just as the bokeh effect on a DSLR.</p>
    </div>
    <div id="focus" class="demo-text" v-bind:class="{ dimmed: !isFocusing }">
      <h2>Change Focus.</h2>
      <p>Move the focus point to any place in the photo. Quickly fix mistaken auto focus.</p>
    </div>
  </div>

</div>
<?php echo js('assets/js/slor.js') ?>
