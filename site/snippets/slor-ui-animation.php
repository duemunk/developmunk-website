<div id="app">
    <div class="img-wrap">
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
<?php echo js('assets/js/slor.js') ?>