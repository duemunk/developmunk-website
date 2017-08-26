var app = new Vue({
    el: '#app',
    data: {
        step: {
            min: 1,
            max: 3,
            value: 3
        },
        isAnimating: true
    },
    methods: {
        animateValue: function () {
            if (this.isAnimating) {
                this.step.value = parseInt(this.step.value);
                this.step.value < this.step.max 
                    ? this.step.value += 1
                    : this.step.value = this.step.min
            }
            this.repeater();
        },
        repeater: function () {
            setTimeout(function(){
                this.animateValue()
            }.bind(this), 1000);
        },
        stopRepeat: function () {
            this.isAnimating = false;
        },
        startRepeat: function () {
            setTimeout(function(){
                this.isAnimating = true;
            }.bind(this), 3000);
        }
    },
    created: function () {
        this.animateValue();
    }
  })