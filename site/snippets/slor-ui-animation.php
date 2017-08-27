<div id="app">

  <h1 class="demo-headline">Edit<br>Portrait Mode<br>Photos.</h1>

  <div class="demo-phone">
    <div 
      class="demo-phone-device"
      v-on:mouseover="stopRepeat"
      v-on:mouseleave="startRepeat"
      v-on:touchstart="stopRepeat"
      v-on:touchend="startRepeat">
      <div class="demo-phone-device-content">
        <div class="demo-img-wrap">
          <div 
            class="demo-focus demo-focus--top"
            v-on:click="setFocus(3)">
            <div 
              v-if="focus.position == 3"
              class="demo-focus-square"></div>
          </div>
          <div 
            class="demo-focus demo-focus--middle"
            v-on:click="setFocus(2)">
            <div class="demo-focus-square" v-if="focus.position == 2"></div>
          </div>
          <div
            class="demo-focus demo-focus--bottom"
            v-on:click="setFocus(1)">
            <div class="demo-focus-square" v-if="focus.position == 1"></div>
          </div>
          <img v-bind:src="'assets/images/slor/' + focus.position + '.' + blur.amount + '.jpg'" />
        </div>
        <input
          type="range"
          v-model.number="blur.amount"
          v-bind:min="blur.min"
          v-bind:max="blur.max">
      </div>
    </div>
  </div>

  <div class="demo-text">
    <div v-bind:class="{ dimmed: !isBlurring }">
      <h2>Change Aperture.</h2>
      <p>Change the aperture and see the amount of background blur adapt just as the bokeh effect on a DSLR.</p>
    </div>
    <div v-bind:class="{ dimmed: !isFocusing }">
      <h2>Change Focus.</h2>
      <p>Move the focus point to any place in the photo. Quickly fix mistaken auto focus.</p>
    </div>
  </div>

</div>
<?php echo js('assets/js/slor.js') ?>
