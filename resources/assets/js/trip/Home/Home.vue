<template>
	<div>
		<DolanHeader />
		<Jumbotron />
		
		<div class="container">
			<SubHeader />
			<TripCardContainer />
		</div>
		
		<SubHeader />
		<TripLocationContainer />

		<div class="container">
			<SubHeader />
			<TripSpecialContainer/>
		</div>

		<DolanFooter />

	</div>
</template>

<style>
	
</style>

<script>

	 import DolanHeader from '../../global/Header.vue'
	 import Jumbotron from '../../global/Jumbotron'
	 import TripCardContainer from './partial/TripCardContainer.vue'
	 import SubHeader from '../../global/SubHeader.vue'
	 import TripLocationContainer from './partial/TripLocationContainer.vue'
	 import TripSpecialContainer from './partial/TripSpecialContainer.vue'
	 import DolanFooter from '../../global/Footer.vue'
	 
	 export default {
        mounted() {
        	require('swiper')
        },
        components : {
        	DolanHeader,
        	Jumbotron,
        	DolanFooter,
        	TripCardContainer,
        	SubHeader,
        	TripLocationContainer,
        	TripSpecialContainer
        }
    }
</script>