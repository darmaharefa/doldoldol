<template>
	<div class="swiper-slide trip-card">
		<div class="trip-item">
			<div class="trip-img">
				<img src="img/trip1.jpg" alt="">
			</div>
			<div class="trip-caption">
				<div class="trip-label">
					<span class="label label-primary label-trip">Opentrip</span>
					<span class="trip-location color-grey-1">
						<i class="fa fa-map-marker"></i>sibayak
					</span>
				</div>
				<span class="trip-title">Gunung Sibayak Berastagi</span>
				<span class="trip-price">MULAI <strong>Rp. 250.000</strong> / ORANG</span>
				<p class="color-grey-2">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed laudantium quasic veritatis suscipit odio?
				</p>
				<div class="trip-button">
					<a href="#" class="trip-button-detail">details</a>
					<a href="#" class="trip-button-booking">booking</a>
				</div>
			</div>
		</div>
	</div>
</template>

<style>
	.trip-card {
		padding: 0px 15px;
	}
	.trip-item{
		position: relative;
	    width: 100%;
	    float: left;
	    display: inline-block;
	    -moz-box-shadow: 4px 3px 5px 0px rgba(0,0,0,0.03);
	    box-shadow: 4px 3px 5px 0px rgba(0,0,0,0.03);
	}

	.trip-img img {
		width: 100%;
    	height: auto;
    	display: block;
	}

	.trip-caption {
		position: relative;
    	width: 100%;
    	padding: 15px 20px;
    	border: 1px solid #efefef;
    	display: flex;
    	flex-direction: column;
	}

	.trip-caption .trip-label {
		display: flex;
    	justify-content: space-between;
    	padding-bottom: 15px;
	}

	.label-trip{
		line-height: 2;
	}

	.trip-label .trip-location{
		text-transform: uppercase;
		font-size: 13px;
		font-weight: 500;
	}

	.trip-label .trip-location .fa{
		padding-right: 10px;
	}

	.trip-caption .trip-title{
		text-transform: uppercase;
		font-size: 16px;
		font-weight: 700;
		letter-spacing: 1px;
	}

	.trip-caption .trip-price {
		font-weight: 300;
		padding: 10px 0px;
	}

	.trip-caption .trip-price strong{
		font-size: 17px;
	}

	.trip-button {
		display: flex;
		flex-direction: row;
		justify-content: space-around;
		padding: 10px 0px;
	}

	.trip-button a{
		padding: 10px;
		border-radius: 5px;
		text-transform: uppercase;
	}

	.trip-button-detail{
		border: 1px solid #bebebe;
		color: #bebebe;
		font-weight: 700;
		webkit-transition: all 0.35s ease-in-out;
    	-moz-transition: all 0.35s ease-in-out;
    	-o-transition: all 0.35s ease-in-out;
    	transition: all 0.35s ease-in-out;
	}

	.trip-button-detail:hover{
		color: #ffffff;
		background-color: #bebebe
	}

	.trip-button-booking{
		background-color: #ff6600;
		color: #ffffff;
		border: 2px solid #ff6600;
		webkit-transition: all 0.35s ease-in-out;
    	-moz-transition: all 0.35s ease-in-out;
    	-o-transition: all 0.35s ease-in-out;
    	transition: all 0.35s ease-in-out;
	}

	.trip-button-booking:hover {
		background-color: #ffffff;
		color: #ff6600;
	}
</style>