<template>
	<div class="jumbotron">
		<div class="jumbotron-text">
			<h1>
				<span>Mau kemana?</span>
				Mulai tripmu dengan Dolan.
			</h1>
		</div>
		<div class="jumbotron-search">
		  	<div class="input-group stylish-input-group">
            	<input type="text" class="form-control"  placeholder="Search" >
            	<span class="input-group-addon">
                	<button type="submit">
                    	<span class="glyphicon glyphicon-search"></span>
                	</button>  
            	</span>
            </div>
		</div>
	</div>
</template>

<style>
	.jumbotron{
		background: url('/img/welcome3.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		height: 500px;
		text-align: center;
	}

	.jumbotron-text {
		color: #484848;
	}

	.jumbotron-text h1 span {
		font-weight: 700;
		color: #ff6600;
	}

	@media(max-width: 743px){
		.jumbotron-text h1{
			font-size: 30px;
			line-height: 40px;
			letter-spacing: -0.6px;
			font-weight: 400;
			margin-top: 100px;
		}

		.jumbotron-search .input-group {
			width: 70%;
			margin: 0 auto;
		}
	}

	@media(min-width: 744px){
		.jumbotron-text h1{
			font-size: 48px;
			line-height: 55px;
			letter-spacing: -0.8px;
			font-weight: 300;
			margin-top: 100px;
		}

		.jumbotron-search .input-group {
			width: 50%;
			margin: 0 auto;
		}
	}

	.jumbotron-search {
		padding-top: 30px;
	}
	
	.jumbotron-search input{
		padding: 25px;
		border: 0px;
	}

	.jumbotron-search .input-group-addon {
		background: #ff6600;
		border: 0px;
	}
	.jumbotron-search .input-group-addon button{
		background: transparent;
		border: 0px;
		color: white;
	}
	
	@media(max-width: 320px){
		.jumbotron-text h1{
			font-size: 30px;
			line-height: 45px
		}

		.jumbotron-search .input-group {
			width: 80%;
		}
	}


</style>

<script>
	
</script>