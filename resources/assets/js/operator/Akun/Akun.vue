<template>
	<div>
		<DolanHeader />
		<AkunPhoto />
		<DolanFooter />
	</div>
</template>

<script>
	
	 import DolanHeader from '../../global/Header.vue'
	 import DolanFooter from '../../global/Footer.vue'

	 import AkunPhoto from './partial/AkunPhoto.vue'
	 
	 export default {
        components : {
        	DolanHeader,
        	DolanFooter,
        	AkunPhoto
        }
    }

</script>