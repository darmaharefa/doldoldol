<template>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-dolan">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="/img/logo-mini.png" alt="Dolan-Logo">
				</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-dolan">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Buat Trip</a></li>
					<li><a href="#">Private Trip</a></li>
					<li><a href="#">Daftar</a></li>
					<li><a href="#">Masuk</a></li>
				</ul>
			</div>
		</div>
	</nav>
</template>

<style>
	.navbar-brand {
		padding: 0px;
		margin-left: 0px !important;
	}
		.navbar-brand img {
			width: 80%;
		}
</style>
