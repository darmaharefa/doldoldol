<template>
	<div>
		<DolanHeader />
		
		<DetailContainer />

		<DolanFooter />

	</div>
</template>

<style>
	
</style>

<script>

	 import DolanHeader from '../../global/Header.vue'
	 import DolanFooter from '../../global/Footer.vue'

	 import DetailContainer from './partial/DetailContainer.vue'
	 
	 export default {
        mounted() {
        	require('swiper')
        },
        components : {
        	DolanHeader,
        	DolanFooter,
        	DetailContainer
        }
    }
</script>