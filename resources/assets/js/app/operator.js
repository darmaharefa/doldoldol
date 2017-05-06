import Vue from 'vue'
window.$ = window.jQuery = require('jquery')
require('bootstrap-sass')

import Akun from '../operator/Akun/Akun.vue'

new Vue({
	render(h){
		return (<div><Akun /></div>)
	}
}).$mount('#app')