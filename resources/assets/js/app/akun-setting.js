import Vue from 'vue'
window.$ = window.jQuery = require('jquery')
require('bootstrap-sass')

import AkunSetting from '../operator/AkunSetting/AkunSetting.vue'

new Vue({
	render(h){
		return (<div><AkunSetting /></div>)
	}
}).$mount('#app')