<template>
	<div>
		<div class="col-xs-12 col-sm-4 col-md-3">
			<div class="sidebar bg-white clearfix">

				<!-- Sidebar Pencarian -->
				<div class="sidebar-block">
					<h4 class="sidebar-title color-dark-2">Pencarian</h4>
					<div class="search-inputs">
						<div class="form-block clearfix">
							<div class="input-style-1 b-50 color-3">
								<input type="text" placeholder="Mau trip kemana?">
							</div>
						</div>
					</div>
					<input type="submit" class="c-button b-40 bg-blue-2 hv-blue-2-o" value="search">
				</div>

				<!-- Sidebar Kategori -->
				<div class="sidebar-block">
					<h4 class="sidebar-title color-dark-2">Kategori</h4>
					<ul class="sidebar-category color-1">
						<li class="">
							<a class="cat-drop" href="#">Kat Satu <span class="fr">(10)</span></a>
							<ul style="display: block;">
								<li><a href="#">Jenis Kategori (5)</a></li>
								<li><a href="#">Jenis Kategori(2)</a></li>
								<li><a href="#">Jenis Kategoti (3)</a></li>
							</ul>
						</li>
						<li class="">
							<a class="cat-drop" href="#">Kat Dua <span class="fr">(10)</span></a>
							<ul style="display: block;">
								<li><a href="#">Jenis Kategori (5)</a></li>
								<li><a href="#">Jenis Kategori(2)</a></li>
								<li><a href="#">Jenis Kategoti (3)</a></li>
							</ul>
						</li>
						<li class="active">
							<a class="cat-drop" href="#">Kat Tiga <span class="fr">(10)</span></a>
							<ul style="display: block;">
								<li><a href="#">Jenis Kategori (5)</a></li>
								<li><a href="#">Jenis Kategori(2)</a></li>
								<li><a href="#">Jenis Kategoti (3)</a></li>
							</ul>
						</li>
					</ul>
				</div>	

				<!-- Sidebar Rating -->
				<!-- <div class="sidebar-block">
					<h4 class="sidebar-title color-dark-2">star rating</h4>
					<div class="sidebar-rating">
						<div class="input-entry color-1">
							<input class="checkbox-form" id="star-5" type="checkbox" name="checkbox" value="climat control">
							<label class="clearfix" for="star-5">
								<span class="sp-check"><i class="fa fa-check"></i></span>
								<span class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
								</span>
							</label>
						</div>

						<div class="input-entry color-1">
							<input class="checkbox-form" id="star-4" type="checkbox" name="checkbox" value="climat control">
							<label class="clearfix" for="star-5">
								<span class="sp-check"><i class="fa fa-check"></i></span>
								<span class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
								</span>
							</label>
						</div>

						<div class="input-entry color-1">
							<input class="checkbox-form" id="star-3" type="checkbox" name="checkbox" value="climat control">
							<label class="clearfix" for="star-5">
								<span class="sp-check"><i class="fa fa-check"></i></span>
								<span class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
								</span>
							</label>
						</div>
					</div>
				</div> -->
				
				<!-- Sidebar Fasilitas -->
				<div class="sidebar-block">
					<h4 class="sidebar-title color-dark-2">Fasilitas</h4>
					<div class="sidebar-rating">
						<div class="input-entry color-1">
							<input class="checkbox-form" id="text-1" type="checkbox" name="checkbox" value="climat control">
							<label class="clearfix" for="text-1">
								<!-- <span class="sp-check"><i class="fa fa-check"></i></span> -->
								<span class="checkbox-text">Fasilitas Satu</span>
							</label>
						</div>

						<div class="input-entry color-1">
							<input class="checkbox-form" id="text-2" type="checkbox" name="checkbox" value="climat control">
							<label class="clearfix" for="text-2">
								<!-- <span class="sp-check"><i class="fa fa-check"></i></span> -->
								<span class="checkbox-text">Fasilitas Dua</span>
							</label>
						</div>

						<div class="input-entry color-1">
							<input class="checkbox-form" id="text-3" type="checkbox" name="checkbox" value="climat control">
							<label class="clearfix" for="text-3">
								<!-- <span class="sp-check"><i class="fa fa-check"></i></span> -->
								<span class="checkbox-text">Fasilitas Tiga</span>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<style>
	.sidebar{
		padding: 18px 20px 18px 20px;
		background: white;
	}

	.sidebar-block{
		padding-bottom: 39px;
	    border-bottom: 1px solid #ededed;
	    margin-bottom: 37px;
	}

	.sidebar-title{
		font-size: 22px;
	    line-height: 25px;
	    font-weight: 700;
	    letter-spacing: 2px;
	    text-transform: uppercase;
	    margin-bottom: 27px;   
	    color: #222;
	}

	.search-inputs{
		margin-bottom: 30px;
	}

	.bg-blue-2{
		background: #ff6600;
		border: 2px solid #ff6600;
		color: #fff;
		height: 40px;
	    font-size: 10px;
	    line-height: 36px;
	    padding: 0 18px;
	    border-radius: 25px;
    	text-align: center;
    	text-transform: uppercase;
	}

	.input-style-1 input {
		font-size: 14px;
	    height: 50px;
	    padding: 0px 20px 0px 44px;
	    border-color: #f8f8f8;
	    background: #f8f8f8;
	    color: #b9b9b9;
	    opacity: 1;

	    width: 100%;
	    border: 1px solid rgba(255,255,255,0.5);
	    border-radius: 25px;
	}

	ul {
		list-style: none;
	}

	ul li {
		font-size: 16px;
	    line-height: 32px;
	    font-weight: 300;
	}

	.sidebar-category li {
		margin-bottom: 29px;
	}

	.sidebar-category a {
		display: block;
	    font-size: 14px;
	    line-height: 18px;
	    font-weight: 700;
	    letter-spacing: 1px;
	    text-transform: uppercase;
	    border-radius: 5px;
	    color: #222;
	}

	.fr {
		float: right;
	}

	.sidebar-category li ul {
	    padding-left: 23px;
	    padding-top: 27px;
	}

	.sidebar-category li li {
	    margin-bottom: 30px;
	}

	.sidebar-category li li a {
	    font-size: 12px;
	    line-height: 16px;
	    font-weight: 400;
	    color: #b9b9b9;
	}

	.sidebar-rating .input-entry {
    margin-bottom: 9px;
}

.input-entry .checkbox-form+label {
    display: block;
    font-size: 11px;
    margin-bottom: 6px;
    line-height: 18px;
}

.input-entry.color-1 .checkbox-form{
    background: #f8f8f8;
    border: 1px solid #eaeaea;
}

.input-entry .checkbox-form {
    position: relative;
    display: inline-block;
    float: left;
    width: 19px;
    height: 19px;
    top: 0px;
    margin: 0px 14px 0 0;
    -moz-border-radius: 5px;
    border-radius: 5px;
    cursor: pointer;
}

.input-entry.color-1 .checkbox-text {
    color: #bebebe;
    cursor: pointer;
}

.input-entry .checkbox-text {
    font-size: 14px;
    font-weight: 400;
    padding-top: 2px;
}

</style>
