Vue.component('lang-list', {
    template: `
        <div>
            <lang v-for="lang in langs">
                {{ lang.name }} <input type="checkbox" :checked="lang.isMastered">
            </lang>
        </div>
    `,
    data() {
        return {
            langs: [
                { name: 'Javascript', isMastered: true },
                { name: 'PHP', isMastered: false },
                { name: 'Dart', isMastered: false },
                { name: 'Kotlin', isMastered: false },
                { name: 'Python', isMastered: false },
                { name: 'C++', isMastered: false }
            ]
        }
    }
})
Vue.component('lang', {
    template: '<li><slot></slot><li>'
})

new Vue({
    el: '#root'
})