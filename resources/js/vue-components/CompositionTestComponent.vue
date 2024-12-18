<script setup lang="ts">
import {ref} from 'vue'

const count = ref<number>(0)
</script>

<template>
    <button @click="count++">
        Add
    </button>
    {{ count }}
</template>

<style scoped>

</style>
