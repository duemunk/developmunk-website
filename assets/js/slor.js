var repeaterDelay = 1000;

var app = new Vue({
    el: '#app',
    data: {
        blur: {
            min: 1,
            max: 5,
            amount: 1
        },
        focus: {
            min: 1,
            max: 3,
            position: 1
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
                    if (this.focus.position !== this.focus.max) {
                        this.focus.position += 1
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
            this.focus.position = this.focus.min;
        },
        setFocus: function (position) {
            this.focus.position = position;
            this.isBlurring = false;
            this.isFocusing = true;
        }
    },
    created: function () {
        this.animate();
    }
})
