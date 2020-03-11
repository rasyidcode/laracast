Vue.component('game', {
    template: '<li>{{ this.gameName }}</li>',
    data() {
        return {
            gameName: 'Dota 3'
        }
    }
})
Vue.component('using-slot', {
    template: '<blockquote><slot></slot></blockquote>'
})

new Vue({
    el: '#root'
})