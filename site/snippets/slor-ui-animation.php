<div id="app">
    <img v-bind:src="'assets/images/slor/mid' + step.value + '.jpg'" />
    <input 
        type="range"
        v-model.number="step.value"
        v-bind:min="step.min"
        v-bind:max="step.max"
        v-on:mouseover="stopRepeat"
        v-on:mouseleave="startRepeat"
        v-on:touchstart="stopRepeat"
        v-on:touchend="startRepeat">
</div>
<?php echo js('assets/js/slor.js') ?>