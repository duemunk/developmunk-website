<div id="app">

  <div id="demo-hero">
    <h1>Edit<br>Portrait<br>Mode<br>Photos.</h1>
  </div>

  <div id="demo-phone" class="">
    <div id="demo-phone-bezel">
      <div class="demo-img-wrap">
        <div class="demo-focus demo-focus--top"></div>
        <div class="demo-focus demo-focus--middle"></div>
        <div class="demo-focus demo-focus--bottom"></div>
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
  </div>

  <div id="demo-text">
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
