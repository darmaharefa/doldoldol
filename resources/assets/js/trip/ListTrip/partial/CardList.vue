<template>
	<div>
		<div class="col-xs-12 col-sm-8 col-md-9">
			<div class="row">
				<div class="col-md-5">
					<TripCard/>
				</div>

				<div class="col-md-5">
					<TripCard/>
				</div>

				<div class="col-md-5">
					<TripCard/>
				</div>

				<div class="col-md-5">
					<TripCard/>
				</div>
			</div>
		</div> 
	</div>
</template>

<script>
	import TripCard from './TripCard'

	export default {
		components : {
			TripCard
		}
	}
</script>