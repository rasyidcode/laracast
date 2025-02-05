Vue.component('tabs', {
    template: `
        <div>
            <div class="tabs">
                <ul>
                    <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">
                        <a :href="tab.href" @click="selectTab(tab)">{{ tab.name }}</a>
                    </li>
                </ul>
            </div>

            <div class="tab-detail">
                <slot></slot>
            </div>
        </div>
    `,
    data() {
        return {
            tabs: []
        }
    },
    created() {
        this.tabs = this.$children
    },
    methods: {
        selectTab(selectedTab) {
            this.tabs.forEach(tab => {
                tab.isActive = selectedTab.name == tab.name
            })
        }
    },
})

Vue.component('tab', {
    template: `
        <div v-show="isActive"><slot></slot></div>
    `,
    props: {
        name: { required: true },
        selected: { default: false }
    },
    data() {
        return {
            isActive: false
        }
    },
    mounted() {
        this.isActive = this.selected
    },
    computed: {
        href() {
            return '#' + this.name.toLowerCase().replace(/ /g, '-')
        }
    }
})

new Vue({
    el: '#root',
    data: {
        showModal: false
    }
})