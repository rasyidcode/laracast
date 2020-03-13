class Errors {
    constructor() {
        this.errors = {}
    }

    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0]
        }
    }

    record(errors) {
        this.errors = errors
    }

    clear(field) {
        delete this.errors[field]
    }

    has(field) {
        return this.errors.hasOwnProperty(field)
    }

    any() {
        return Object.keys(this.errors).length > 0
    }
}

new Vue({
    el: '#app',

    data: {
        name: '',
        desc: ''
    },

    methods: {
        onSubmit() {
            axios.post('/projects', this.$data)
                .then(this.onSuccess)
                .catch(err => this.errors.record(err.response.data.errors))
        },

        onSuccess(res) {
            alert(res.data.message)

            this.name = ''
            this.desc = ''
        }
    }
})