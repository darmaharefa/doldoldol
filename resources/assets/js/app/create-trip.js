import Vue from 'vue'
window.$ = window.jQuery = require('jquery')
require('bootstrap-sass')

import CreateTrip from '../operator/CreateTrip/CreateTrip.vue'

new Vue({
	render(h){
		return (<div><CreateTrip /></div>)
	}
}).$mount('#app')