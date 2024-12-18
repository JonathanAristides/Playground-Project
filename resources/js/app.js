import './bootstrap';
import {createApp} from 'vue'
import CompositionTestComponent from './vue-components/CompositionTestComponent.vue'
import OptionsTestComponent from "./vue-components/OptionsTestComponent.vue";

import.meta.glob(
    '../images/**'
)

const app = createApp();
app.component('composition-test-component', CompositionTestComponent)
app.component('options-test-component', OptionsTestComponent)

app.mount('#app')
