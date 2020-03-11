<template>
    <div>
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: 'Message'
}
</script>

<style scoped>
div {
    width:50%;
    background-color: yellowgreen;
    border: 1px solid #555;
    padding: 20px;
    margin-bottom: 12px;
}
</style>