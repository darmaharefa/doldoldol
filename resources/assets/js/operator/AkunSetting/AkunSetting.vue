<template>
	<div>
		<DolanHeader />
		<AkunForm />
		<DolanFooter />
	</div>
</template>

<script>
	
	 import DolanHeader from '../../global/Header.vue'
	 import DolanFooter from '../../global/Footer.vue'

	 import AkunForm from './partial/AkunForm.vue'
	 
	 export default {
        components : {
        	DolanHeader,
        	DolanFooter,
        	AkunForm
        }
    }

</script>