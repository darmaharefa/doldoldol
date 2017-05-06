import Vue from 'vue'
window.$ = window.jQuery = require('jquery')
require('bootstrap-sass')

import Detail from '../trip/Detail/Detail.vue'

new Vue({
	render(h){
		return (<div><Detail /></div>)
	}
}).$mount('#app')