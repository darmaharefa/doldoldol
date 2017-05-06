<template>
	<div class="footer">
		<div class="row">
			<FooterSatu/>
			<FooterDua/>
			<FooterTiga/>
			<FooterEmpat/>
		</div>
	</div>
</template>

<style>
	.footer {
		margin-top: 70px;
		overflow: hidden;
	}
	.footer-block {
	    position: relative;
	    width: 100%;
	    margin-bottom: 70px;
	    float: left;
	    padding-right: 15px;
	    padding-left: 15px;
	}
</style>

<script>
	import FooterSatu from './partial/FooterSatu.vue'
	import FooterDua from './partial/FooterDua.vue'
	import FooterTiga from './partial/FooterTiga.vue'
	import FooterEmpat from './partial/FooterEmpat.vue'

	export default {
		components : {
			FooterSatu,
			FooterDua,
			FooterTiga,
			FooterEmpat
		}
	}
</script>