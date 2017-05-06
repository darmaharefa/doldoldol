<template>
	<div>
		<div class="container">
		<div class="row">
			<div class="col-md-12 bottom2p bg-white nopad">
				<div class="form-horizontal bottom2p">
					<h3 style="margin: 5%;" class="center orange"><i class="fa fa-edit"></i> Buat Trip</h3>
				</div>

		        <div class="stepwizard">
		            <div class="stepwizard-row setup-panel">
		                <div class="stepwizard-step">
		                    <a class="btn btn-primary btn-circle" href="#step-1" type="button">1</a>
		                    <p>General Info</p>
		                </div>
		                <div class="stepwizard-step">
		                    <a class="btn btn-default btn-circle" href="#step-2" type="button">2</a>
		                    <p>Itinerary</p>
		                </div>
		                <div class="stepwizard-step">
		                    <a class="btn btn-default btn-circle" href="#step-3" type="button">3</a>
		                    <p>Price Details</p>
		                </div>
		                <div class="stepwizard-step">
		                    <a class="btn btn-default btn-circle" href="#step-4" type="button">4</a>
		                    <p>Additional Info</p>
		                </div>
		            </div>
		        </div>

		        <form action="" method="post" role="form" class="form-horizontal bg-white pad1p">
		            <div class="row setup-content form-content" id="step-1">
		                <div class="col-md-12">
		                    <h5 class="orange">General Info</h5>
		                    <div class="form-group">
		                    	<div class="col-sm-6">
			                        <label class="control-label"><i class="fa fa-pencil-square"></i></label>
			                        <input class="form-control" id="judul" maxlength="100" placeholder="Judul Trip" required="required" type="text">
		                        </div>

		                    	<div class="col-sm-6">
			                        <label class="control-label"><i class="fa fa-map-marker"></i></label>
			                        <input class="form-control" id="tujuan" maxlength="100" placeholder="Tujuan" required="required" type="text">
		                        </div>
		                    </div>

		                    <div class="form-group">
		                    	<div class="col-sm-6">
			                        <label class="control-label"><i class="fa fa-calendar"></i></label>
			                        <input class="form-control" maxlength="100" id="datefrom" placeholder="Tanggal Mulai" required="required" type="text">
		                        </div>

		                    	<div class="col-sm-6">
			                        <label class="control-label"><i class="fa fa-calendar-check-o"></i></label>
			                        <input class="form-control" id="dateto" maxlength="100" placeholder="Tanggal Selesai" required="required" type="text">
		                        </div>
		                    </div>

		                    <div class="form-group">
		                    	<div class="col-sm-6">
			                        <label class="control-label"><i class="fa fa-map-pin"></i></label>
			                        <input class="form-control" id="meetpoint" maxlength="100" placeholder="Titik Bertemu" required="required" type="text">
		                        </div>

		                    	<div class="col-sm-6">
			                        <label class="control-label"><i class="fa fa-group"></i></label>
			                        <input class="form-control" id="jlhkuota" maxlength="100" min="1" placeholder="Kuota (Jumlah Peserta)" required="required" type="number">
		                        </div>
		                    </div>

		                    <div class="form-group">
		                    	<div class="col-sm-12">
			                        <label class="control-label"><i class="fa fa-book"></i></label> 
			                        <textarea class="form-control" placeholder="Deskripsi (Opsional)"></textarea>
			                    </div>
		                    </div>

		                    <div class="form-group">
		                    	<div class="col-sm-6">
	                                <h5 class="orange">Gambar</h5>
	                                <br/>
	                                <img src="http://www.soaptheme.net/html/travelo/images/shortcodes/team/david.png" width="150" height="150">
	                                <input class="form-control" id="photo" placeholder="photo" type="file">
	                            </div>
		                    </div>

		                    <div class="form-group">

		                    	<div class="col-sm-12">
									<h5 class="orange">Aktivitas <i>(Pilih. minimal 1 pilihan)</i></h5>
				                    	<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Backpacking
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Beach Exploring
												</label>
											</div>
										</div>
				                    	<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Cave Exploring
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													City Walk
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Culinary
												</label>
											</div>
										</div>
				                    	<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Cultural Trip
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Diving
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Family Vacation
												</label>
											</div>
										</div>
				                    	<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Hiking
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Historical Places
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Island Hopping
												</label>
											</div>
										</div>
				                    	<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Mountain Climbing
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Photography
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Rafting
												</label>
											</div>
										</div>
				                    	<div class="col-md-4">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes">
													Snorkeling
												</label>
											</div>
										</div>
	
								</div>
		                    </div>

		                    <button class="btn btn-warning nextBtn btn-lg pull-right" type="button" id="next1">Next</button>
		                </div>
		            </div>

		            <div class="row setup-content form-content" id="step-2">
						
		                    <div class="col-md-12">
		                    	<h5 class="orange">Itinerary</h5>
		                        <div class="controls"> 
									<div class="form-group">
										<div class="entry input-group">
											<div class="col-sm-12">
												<label class="control-label"><i class="fa fa-pencil-square"></i></label>
												<input class="form-control" name="data[]" id="itin" type="text" placeholder="Judul, e.g Hari 1 - Pergi Diving" required>
											</div>

											<div class="col-sm-12">
												<label class="control-label"><i class="fa fa-book"></i></label>
												<input class="form-control" name="data2[]" id="itindetail" type="text" placeholder="Detail Itinerary" required>
											</div>
											
											<span class="input-group-btn">
												<button class="btn btn-success btn-add" type="button" style="font-size: 8px; padding: 5px;">
													<i class="glyphicon glyphicon-plus"></i>
												</button>
											</span>
										</div>
								   </div>
								</div>
		                        <button class="btn btn-orange prevBtn btn-lg pull-left" type="button">Previous</button> <button class="btn btn-warning nextBtn btn-lg pull-right" id="next2" type="button">Next</button>
		                    </div>
		 
		            </div>

		            <div class="row setup-content form-content" id="step-3">
		                <div class="col-md-12">
		                    <h5 class="orange">Price Details</h5>
		                    <div class="form-group">
		                    	<div class="col-sm-6">
			                        <label class="control-label"><i class="fa fa-money"></i></label>
			                        <input class="form-control" id="prices" min="10000" placeholder="Harga Trip /Pax" required="required" type="text">
		                        </div>

		                    	<div class="col-sm-12">
			                        <label class="control-label"><i class="fa fa-check-square"></i></label>
			                        <textarea class="form-control" maxlength="100" id="includes" placeholder="Harga Termasuk (Opsional)"></textarea>
		                        </div>

		                        <div class="col-sm-12">
			                        <label class="control-label"><i class="fa fa-times-rectangle"></i></label>
			                        <textarea class="form-control" maxlength="100" id="notincludes" placeholder="Harga Tidak Termasuk (Opsional)"></textarea>
		                        </div>

		                        <div class="col-sm-12">
			                        <label class="control-label"><i class="fa fa-tags"></i></label>
			                        <textarea class="form-control" maxlength="100" id="terms" placeholder="Ketentuan dan Persyaratan (Opsional)"></textarea>
		                        </div>
		                    </div>
		                </div>
	                    <div class="col-md-12">
	                        <button class="btn btn-orange prevBtn btn-lg pull-left" type="button">Previous</button>
	                        <button class="btn btn-warning nextBtn btn-lg pull-right" id="next3" type="button">Next</button>
	                    </div>

		            </div>


		            <div class="row setup-content form-content" id="step-4">
		                <div class="col-md-12">
		                    <h5 class="orange">Additional Info</h5>
		                    <div class="form-group">
		                    	<div class="col-sm-12">
			                        <label class="control-label"><i class="fa fa-suitcase"></i></label>
			                        <textarea class="form-control" maxlength="100" placeholder="Perlengkapan yang Dibutuhkan (Opsional)"></textarea>
		                        </div>

		                        <div class="col-sm-12">
			                        <label class="control-label"><i class="fa fa-bullhorn"></i></label>
			                        <textarea class="form-control" maxlength="100" placeholder="Informasi Lainnya (Opsional)"></textarea>
		                        </div>

		                        <div class="col-sm-12">
		                        	<div class="form-group">
				                        <div class="col-md-12">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes" required>
													Saya telah membaca dan menyetujui Ketentuan Layanan.
												</label>
											</div>
										</div>
									</div>
		                        </div>
		                    </div>
		                </div>
	                    <div class="col-md-12">
	                        <button class="btn btn-orange prevBtn btn-lg pull-left" type="button">Previous</button> <button class="btn btn-warning btn-lg pull-right" id="createtrip" type="submit">Submit</button>
	                    </div>

		            </div>

		        </form>

		    </div>
		</div>
	</div>
	</div>
</template>

<style>
	.container	{
		margin-top: 65px;
	}
</style>
<script>

	export default {
      
    }

</script>