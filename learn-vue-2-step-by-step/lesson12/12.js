Vue.component('coupon', {
    template: `<input @blur="couponApplied" />`,
    methods: {
        couponApplied() {
            this.$emit('applied')
        }
    }
})

new Vue({
    el: "#app",
    data: {
        isCouponApplied: false
    },
    methods: {
        onCouponApplied() {
            this.isCouponApplied = true
        }
    }
})