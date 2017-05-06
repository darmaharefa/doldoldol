<template>
	<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="photo-block hover-aqua">
			<div class="location-layer delay-1"></div>
			<img src="img/location1.jpg" alt="">
			<div class="vertical-align">
				<div class="photo-title">
					<a class="hover-it" href="#"><h3>Medan</h3></a>
				</div>
			</div>
		</div>
	</div>
</template>

<style>
	.photo-block {
	    text-align: center;
	    color: #fff;
	    position: relative;
	    width: 100%;
	}

	.photo-block img {
	    width: 100%;
	    height: auto;
	    display: block;
	}

	.location-layer {
	    position: absolute;
	    left: 0px;
	    top: 0px;
	    width: 100%;
	    height: 100%;
	    background: rgba(0,0,0,0.6);
	    opacity: 0;
	    transition: all 0.3s ease-in;
	    -webkit-transition: all 0.3s ease-in;
	    -moz-transition: all 0.3s ease-in;
	    -ms-transition: all 0.3s ease-in;
	}

	.photo-block:hover .location-layer {
	    opacity: 1;
	}

	.photo-block:hover .hover-it h3{
	    color: #ff6600;
	}

	.vertical-align {
	    -webkit-transform: translateY(-50%);
	    -moz-transform: translateY(-50%);
	    -o-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	    transform: translateY(-50%);
	    top: 50%;
	    position: absolute;
	    width: 100%;
	    left: 0px;
	}

	.photo-title a h3{
		font-size: 22px;
	    line-height: 30px;
	    font-weight: 700;
	    text-transform: uppercase;
	    letter-spacing: 5px;
	    color: #ffffff;
	}
	.delay-1 {
	    -webkit-transition: all 800ms cubic-bezier(0.23,1,0.32,1);
	    -moz-transition: all 800ms cubic-bezier(0.23,1,0.32,1);
	    -o-transition: all 800ms cubic-bezier(0.23,1,0.32,1);
	    transition: all 800ms cubic-bezier(0.23,1,0.32,1);
	}

</style>