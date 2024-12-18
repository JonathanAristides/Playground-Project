<script lang="ts">
import {defineComponent} from 'vue';

export default defineComponent({
    name: 'OptionsTestComponent',
    data() {
        return {
            count: 0
        };
    },
    methods: {
        increment() {
            this.count++;
        }
    }
});
</script>

<template>
    {{ count }}

    <button @click="increment">
        Add
    </button>
</template>

<style scoped>

</style>
