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
        isAnimating: true
    },
    methods: {
        animateBlur: function () {
            this.blur.amount = parseInt(this.blur.amount);
            if (this.isAnimating) {
                if (this.blur.amount === this.blur.max) {
                    if (this.focus.amount === this.focus.max) {
                        this.resetBlur();
                        this.resetFocus();
                    } else {
                        this.focus.amount += 1
                    }
                } else {
                    this.blur.amount += 1
                }
            }
            this.repeater();
        },
        repeater: function () {
            setTimeout(function(){
                this.animateBlur()
            }.bind(this), 1000);
        },
        stopRepeat: function () {
            this.isAnimating = false;
        },
        startRepeat: function () {
            setTimeout(function(){
                this.isAnimating = true;
            }.bind(this), 3000);
        },
        resetBlur: function () {
            this.blur.amount = this.blur.min;
        },
        resetFocus: function () {
            this.focus.amount = this.focus.min;
        }
    },
    created: function () {
        this.animateBlur();
    }
})