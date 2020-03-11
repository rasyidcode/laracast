<template>
  <div id="app">
    <Message>
      Hello boy!
    </Message>

    <Message>
      Hello boy!
    </Message>

    <Message>
      Hello boy!
    </Message>
  </div>
</template>

<script>
import Message from './components/Message.vue'

export default {
  name: 'App',
  components: {
    Message
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
