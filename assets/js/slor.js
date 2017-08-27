var repeaterDelay = 1000;

var app = new Vue({
    el: '#app',
    data: {
        blur: {
            min: 1,
            max: 3,
            amount: 3
        },
        focus: {
            min: 1,
            max: 3,
            amount: 1
        },
        isAnimating: true,
        isBlurring: true,
        isFocusing: false
    },
    methods: {
        animate: function () {
            this.blur.amount = parseInt(this.blur.amount);
            if (this.isAnimating) {
                if (this.blur.amount !== this.blur.max) {
                    this.blur.amount += 1
                } else {
                    this.isBlurring = false;
                    this.isFocusing = true;
                    if (this.focus.amount !== this.focus.max) {
                        this.focus.amount += 1
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
        repeater: function () {
            setTimeout(function(){
                this.animate()
            }.bind(this), repeaterDelay);
        },
        startRepeat: function () {
            setTimeout(function(){
                this.isAnimating = true;
            }.bind(this), repeaterDelay);
        },
        stopRepeat: function () {
            this.isAnimating = false;
        },
        resetBlur: function () {
            this.blur.amount = this.blur.min;
        },
        resetFocus: function () {
            this.focus.amount = this.focus.min;
        }
    },
    created: function () {
        this.animate();
    }
})