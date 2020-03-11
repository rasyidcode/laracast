<template>
    <div>
        <p>The Counter: {{ counter }}</p>

        <button @click="counter++">Count</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            counter: 0
        }
    }
}
</script>

<style scoped>
div {
    background-color: cyan;
    border: 1px solid #555;
    padding: 20px;
    width: 200px;
    color: #555;
}
</style>