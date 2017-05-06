<template>
	<div class="triplocation-container">
		<div class="row col-no-padd">
			<TripLocation />
			<TripLocation />
			<TripLocation />
			<TripLocation />
			<TripLocation />
			<TripLocation />
		</div>
	</div>
</template>

<style>
	.col-no-padd>div{
		padding-left: 0px;
    	padding-right: 0px;
	}
</style>

<script>
	import TripLocation from './TripLocation.vue'

	export default {
		components : {
			TripLocation
		}
	}
</script>