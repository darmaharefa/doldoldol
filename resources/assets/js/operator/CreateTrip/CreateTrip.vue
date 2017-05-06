<template>
	<div>
		<DolanHeader />
		<FormTrip />
		<DolanFooter />
	</div>
</template>

<script>
	
	 import DolanHeader from '../../global/Header.vue'
	 import DolanFooter from '../../global/Footer.vue'

	 import FormTrip from './partial/FormTrip.vue'
	 
	 export default {
        components : {
        	DolanHeader,
        	DolanFooter,
        	FormTrip
        }
    }

</script>