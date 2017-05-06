<template>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="footer-block">
			<h6>Tags:</h6>
			<a href="#" class="footer-tags">traveling</a>
			<a href="#" class="footer-tags">publictrip</a>
			<a href="#" class="footer-tags">privatetrip</a>
			<a href="#" class="footer-tags">companytrip</a>
			<a href="#" class="footer-tags">dolanmedan</a>
			<a href="#" class="footer-tags">news</a>
		</div>
	</div>
</template>

<style>
	.footer-block a:hover {
		text-decoration: none;
	}
	.footer-tags {
		position: relative;
	    float: left;
	    margin: 0px 10px 10px 0px;
	    background: #282e3a;
	    border-radius: 30px;
	    padding: 12px 17px;
	    font-size: 12px;
	    line-height: 12px;
	    font-weight: 500;
	    text-transform: capitalize;
	    z-index: 0;
	}

	.footer-tags:before {
	    content: '';
	    position: absolute;
	    left: 0px;
	    top: 0px;
	    width: 100%;
	    height: 100%;
	    background: #ff6600;
	    border-radius: 30px;
	    transform: scale(0);
	    z-index: -1;
	    -moz-transform: scale(0);
	    -ms-transform: scale(0);
	    -webkit-transform: scale(0);
	    transition: all 0.3s ease-in;
	    -webkit-transition: all 0.3s ease-in;
	    -moz-transition: all 0.3s ease-in;
	    -o-transition: all 0.3s ease-in;
	    -ms-transition: all 0.3s ease-in;
	}

	.footer-tags:hover:before {
	    transform: scale(1);
	    -moz-transform: scale(1);
	    -ms-transform: scale(1);
	    -webkit-transform: scale(1);
	}

</style>