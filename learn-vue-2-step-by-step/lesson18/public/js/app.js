Vue.prototype.$http = axios

new Vue({
    el: '#app',
    data: {
        skills: []
    },
    mounted() {
        this.$http.get('/skills').then(res => this.skills = res.data)
    }
})