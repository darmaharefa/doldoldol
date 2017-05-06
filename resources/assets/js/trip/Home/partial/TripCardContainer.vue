<template>
	<div class="tripcard-container">
		<!-- Swiper -->
	    <div class="swiper-container">
	        <div class="swiper-wrapper">
				<TripCard />
				<TripCard />
				<TripCard />
				<TripCard />
				<TripCard />
	        </div>
	         <!-- Add Arrows -->
	        <div class="swiper-button-prev trip-arrow trip-arrow-left">
	        	<span class="fa fa-angle-left"></span>
	        </div>

	          <div class="swiper-button-next trip-arrow trip-arrow-right">
	        	<span class="fa fa-angle-right"></span>
	        </div>
	    </div>
	</div>
</template>

<style>
	.trip-arrow{
		background: transparent;
		text-align: center;
	    z-index: 5;
	    width: 40px;
	    height: 40px;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
	    position: absolute;
	    top: 50%;
	    border: 2px solid #ff6600;
	}

	.trip-arrow span{
	    font-size: 16px;
	    line-height: 21px;
	    padding-top: 9px;
	    color: #ff6600;
	}
</style>

<script>
	import TripCard from './TripCard.vue'
	
	export default {
		mounted(){
			require('swiper')

			var swiper = new Swiper('.swiper-container', {
		        slidesPerView: 3,
		        spaceBetween: 10,
		        nextButton: '.swiper-button-next',
        		prevButton: '.swiper-button-prev',

        		// Responsive breakpoints
				breakpoints: {
				    // when window width is <= 467px
				    467: {
				      slidesPerView: 1,
				      spaceBetween: 10
				    },
				    // when window width is <= 992px
				    992: {
				      slidesPerView: 2,
				      spaceBetween: 20
				    },
				    // when window width is <= 1120px
				    1120: {
				      slidesPerView: 3,
				      spaceBetween: 30
				    }
				}
		    });
		},
		components : {
			TripCard
		}
	}
</script>