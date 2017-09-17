const app = new Vue({ // eslint-disable-line
  el: '#app',
  data: {
    blur: {
      min: 1,
      max: 5,
      amount: 1,
    },
    focus: {
      min: 1,
      max: 3,
      position: 1,
    },
    isAnimating: true,
    isBlurring: true,
    isFocusing: false,
    repeaterDelay: 1000,
  },
  methods: {
    animate() {
      this.blur.amount = parseInt(this.blur.amount, 10);
      if (this.isAnimating) {
        if (this.isBlurring) {
          if (this.blur.amount !== this.blur.max) {
            this.blur.amount += 1;
          } else {
            this.isBlurring = false;
            this.isFocusing = true;
          }
        } else if (this.isFocusing) {
          if (this.focus.position !== this.focus.max) {
            this.focus.position += 1;
          } else {
            this.isBlurring = true;
            this.isFocusing = false;
            this.resetBlur();
            this.resetFocus();
          }
        }
      }
      this.repeater();
    },
    repeater() {
      setTimeout(() => {
        this.animate();
      }, this.repeaterDelay);
    },
    startRepeatAfterShortDelay() {
      setTimeout(() => {
        this.isAnimating = true;
      }, this.repeaterDelay);
    },
    stopRepeat() {
      this.isAnimating = false;
    },
    resetBlur() {
      this.blur.amount = this.blur.min;
    },
    resetFocus() {
      this.focus.position = this.focus.min;
    },
    setFocus(position) {
      this.focus.position = position;
      this.isBlurring = false;
      this.isFocusing = true;
    },
  },
  created() {
    this.animate();
  },
});
