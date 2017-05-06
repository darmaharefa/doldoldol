import Vue from 'vue'
window.$ = window.jQuery = require('jquery')
require('bootstrap-sass')

import Home from '../trip/Home/Home.vue'

new Vue({
	render(h){
		return (<div><Home /></div>)
	}
}).$mount('#app')