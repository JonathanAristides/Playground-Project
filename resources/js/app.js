import './bootstrap';
import {createApp} from 'vue'
import CompositionTestComponent from './vue-components/CompositionTestComponent.vue'
import OptionsTestComponent from "./vue-components/OptionsTestComponent.vue";


// Vuetify
import {createVuetify} from 'vuetify'
import 'vuetify/styles'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

import.meta.glob(
    '../images/**'
)

const app = createApp();

const vuetify = createVuetify({
    components,
    directives
})

app.component('composition-test-component', CompositionTestComponent)
app.component('options-test-component', OptionsTestComponent)

app.use(vuetify)
app.mount('#app')
