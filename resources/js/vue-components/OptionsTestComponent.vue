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

    <v-btn variant="elevated" @click="increment">
        Vuetify Button
    </v-btn>
</template>

<style scoped>

</style>
