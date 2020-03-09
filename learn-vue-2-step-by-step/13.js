window.Event = new Vue()
window.Event2 = new class {

    constructor() {
        this.vue = new Vue()
    }

    fire(event, data = null) {
        this.vue.$emit(event, data)
    }

    listen(event, callback) {
        this.vue.$on(event, callback)
    }

}


Vue.component('coupon', {
    template: `<input @blur="couponApplied" />`,
    methods: {
        couponApplied() {
            Event.$emit('applied')
        }
    }
})

Vue.component('coupon2', {
    template: `<input @blur="couponApplied" />`,
    methods: {
        couponApplied() {
            Event2.fire('applied')
        }
    }
})

new Vue({
    el: "#app",
    data: {
        isCouponApplied: false,
        isCouponApplied2: false
    },
    created() {
        Event.$on('applied', () => {
            this.isCouponApplied = true
        })
        Event2.listen('applied', () => {
            this.isCouponApplied2 = true
        })
    }
})