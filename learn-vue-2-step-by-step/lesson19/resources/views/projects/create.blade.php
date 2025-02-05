<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    </head>
    <body>

        <div id="app">
            <div class="container">
                <h1 class="title is-3">Projects</h1>
                <div class="box">
                    @if(count($projects) > 0)
                        <ul>
                            @foreach($projects as $project)
                                <li>Name : <b>{{ $project->name }}</b></li>
                            @endforeach
                        </ul>
                    @else
                        <p class="subtitle is-5">Tidak ada project saat ini.</p>
                    @endif

                </div>
                <hr>
                <div class="box">
                    <form @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input v-model="name" class="input" type="text" name="name" placeholder="Text input">

                                <p v-show="errors.has('name')" class="help is-danger" v-text="errors.get('name')"></p>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Description</label>
                            <div class="control">
                                <textarea v-model="desc" name="desc" class="textarea" placeholder="Textarea"></textarea>

                                <p v-show="errors.has('desc')" class="help is-danger" v-text="errors.get('desc')"></p>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button :disabled="errors.any()" type="submit" class="button is-link is-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
