Vue.component('bulma-message', {
    props: ['title', 'body'],
    data() {
        return {
            'isShow': true
        }
    },
    template: `
        <article class="message" v-show="isShow">
            <div class="message-header">
                <p>{{ title }}</p>
                <button class="delete" aria-label="delete" @click="isShow = false"></button>
            </div>
            <div class="message-body">
                {{ body }}
            </div>
        </article>
    `
})

new Vue({
    el: '#root'
})