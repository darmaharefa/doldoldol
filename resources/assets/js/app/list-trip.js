import Vue from 'vue'
window.$ = window.jQuery = require('jquery')
require('bootstrap-sass')

import ListTrip from '../trip/ListTrip/ListTrip.vue'

new Vue({
	render(h){
		return (<div><ListTrip /></div>)
	}
}).$mount('#app')