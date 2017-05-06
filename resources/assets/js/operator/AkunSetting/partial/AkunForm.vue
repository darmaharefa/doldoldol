<template>
	<div>
		<div class="form-bg container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 bottom2p bg-white nopad">
					<div class="form-horizontal bottom2p">
						<h3 style="margin: 5%;" class="center orange">Setting - Trip Operator</h3>
					</div>
					<ul class="nav nav-pills nav-justified" style="margin-bottom: -1%;">
						<li class="active"><a data-toggle="tab" href="#home">Operator</a></li>
						<li><a data-toggle="tab" href="#payment">Payment</a></li>
					</ul>
					<hr/>
					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<form class="form-horizontal">
								
								<div class="form-content">
									<h4 class="heading">Your Details</h4>
									<div class="form-group">
										<div class="col-sm-6">
											<label class="control-label" for="username"><i class="fa fa-user"></i></label>
											<input class="form-control" id="username" placeholder="Username" type="text" required>
										</div>
										<div class="col-sm-6">
											<label class="control-label" for="lokasi"><i class="fa fa-map-marker"></i></label>
											<input class="form-control" id="lokasi" placeholder="Lokasi" type="text" required>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<label class="control-label" for="phone"><i class="fa fa-phone"></i></label>
											<input class="form-control" id="phone" placeholder="Phone" type="number" required>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-6">
											<label class="control" for="photo">Photo Operator</label>
											<br/>
											<img src="http://www.soaptheme.net/html/travelo/images/shortcodes/team/david.png" width="150" height="150">
											<input class="form-control" id="photo" placeholder="photo" type="file">
										</div>
										<div class="col-sm-6">
											<label class="control" for="photo">Photo Sampul</label>
											<br/>
											<img src="http://www.soaptheme.net/html/travelo/images/cruise/gallery/7.jpg" width="300" height="150">
											<input class="form-control" id="photo" placeholder="photo" type="file">
										</div>
									</div>
									<div class="clearfix">
										<button type="submit" class="btn btn-default" name="saveoperator"> Save Data</button>
									</div>
								</div>
							</form>
						</div>
						<div id="payment" class="tab-pane fade">
							<form class="form-horizontal">
								
								<div class="form-content">
									<h4 class="heading">Payment Details</h4>
									<div class="form-group">
										<div class="col-sm-6">
											<label class="control-label" for="bank"><i class="fa fa-bank"></i></label>
											<input class="form-control" id="bank" placeholder="Nama Bank" type="text">
										</div>
										
										<div class="col-sm-6">
											<label class="control-label" for="cab"><i class="fa fa-map-marker"></i></label>
											<input class="form-control" id="cab" placeholder="Lokasi Cabang Bank" type="text">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-6">
											<label class="control-label" for="rek"><i class="fa fa-credit-card"></i></label>
											<input class="form-control" id="rek" placeholder="No Rekening" type="number">
										</div>
										<div class="col-sm-6">
											<label class="control-label" for="name"><i class="fa fa-user"></i></label>
											<input class="form-control" id="name" placeholder="Rekening Atas Nama" type="text">
										</div>
									</div>
									<div class="clearfix">
										<button type="submit" class="btn btn-default" name="savepayment"> Save Data</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	
</script>

<style>
	.container {
		margin-top: 65px;
	}
</style>