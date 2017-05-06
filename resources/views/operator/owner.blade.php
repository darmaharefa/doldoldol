@extends('app2')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 bg-white bottom2p nopad">

				<div class="col-md-4 bg-white">
					<div class="col-md-12 bg-white">
						<div class="content">
							<div class="content center pad10p">
								<img src="http://www.soaptheme.net/html/travelo/images/shortcodes/team/david.png" class="img-circle" style="width: 50%;">
								<p>Username</p>
								<p>Pemilik</p>
								<p>
									<i class="glyphicon glyphicon-home" style="color: rgb(255, 96, 0);font-size: 22px;"></i>
									<br/>
									<a href="operator"><u>Sabang Trip</u></a>
								</p>
								<button type="button" class="btn btn-default widthfull noborder top4p"><i class="glyphicon glyphicon-envelope"></i> Kirim Pesan</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-8 bg-white"> 
					<div class="media full">
						<div class="wrapper">
							<img src="http://www.soaptheme.net/html/travelo/images/cruise/gallery/7.jpg" style="height: 350px; width: 100%;"/>
							
	    						<div class="col-md-12 post-content">
	    							<div class="col-md-3 center">
		    							<h5 class="white"><i class="glyphicon glyphicon-map-marker"></i> Medan</h5>
	                				</div>
	                				<div class="col-md-3 center">
		    							<h5 class="white"><i class="glyphicon glyphicon-user"></i> 100</h5>
	                				</div> 
	                				<div class="col-md-3 center">
		    							<h5 class="white"><i class="glyphicon glyphicon-ok"></i> 55</h5>
	                				</div> 
	                				<div class="col-md-3">
		    							<h5 class="white"><div id="rateYo" style="margin: 0 auto;"></div></h5>
	                				</div>  
	    						</div>
    					</div>
					</div>
				</div>

			</div>
		</div>
	

		</div>
	</div>
@endsection