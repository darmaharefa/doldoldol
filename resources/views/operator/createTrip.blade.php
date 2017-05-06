@extends('layouts.trip')

@section('css')
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">
@endsection

@section('content')
	
	<div id="app">
		
	</div>

@endsection

@section('js')
	<script src="{{ mix('js/create-trip.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.min.js"></script>
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.1.1/jquery.rateyo.min.js"></script>

	<script type="text/javascript">

      	var dates = $("#datefrom, #dateto").datepicker({
          minDate: "0",
          maxDate: "+2Y",
          defaultDate: "+1w",
          dateFormat: 'yy-mm-dd',
          changeMonth: true,
          changeYear: true,
          numberOfMonths: 1,
          onSelect: function(date) {
              for(var i = 0; i < dates.length; ++i) {
                  if(dates[i].id < this.id)
                      $(dates[i]).datepicker('option', 'maxDate', date);
                  else if(dates[i].id > this.id)
                      $(dates[i]).datepicker('option', 'minDate', date);
              }
          } 
      	});


      	$('#next1').click(function(e)
      	{
          if($.trim($('#judul').val()).length ==0 || $.trim($('#tujuan').val()).length ==0|| $.trim($('#datefrom').val()).length ==0|| $.trim($('#dateto').val()).length ==0 || $.trim($('#meetpoint').val()).length ==0 ) {
            e.preventDefault();
            sweetAlert("Oops...", "Ada yang belum diisi, Mohon periksa inputan kamu", "error");
          }
      	});

      	$('#next2').click(function()
      	{
          if($('#itin').val() == '') {
            sweetAlert("Oops...", "Ada yang belum diisi, Mohon periksa inputan kamu", "error");
            $("#itin").focus();
          }

          if($('#itindetail').val() == ''){
            sweetAlert("Oops...", "Ada yang belum diisi, Mohon periksa inputan kamu", "error");
            $("#itindetail").focus();
          }
      	});

      	$('#next3').click(function()
      	{
          if($.trim($('#prices').val()).length ==0) {
            sweetAlert("Oops...", "Mohon isi kolom harga", "error");
          }
      	});

        $(document).ready(function(){
          $('#prices').mask('000.000.000.000.000', {reverse: true});
        });

        $(document).ready(
         function()
          {
            
           $(document).on('click', '.btn-add', function(e)
           {
          e.preventDefault();

          var controlForm = $('.controls:first'),
           currentEntry = $(this).parents('.entry:first'),
           newEntry = $(currentEntry.clone()).appendTo(controlForm);

          newEntry.find('input').val('');
          controlForm.find('.entry:not(:last) .btn-add')
           .removeClass('btn-add').addClass('btn-remove')
           .removeClass('btn-success').addClass('btn-danger')
           .html('<span class="glyphicon glyphicon-minus"></span>');
           }).on('click', '.btn-remove', function(e)
           {
          $(this).parents('.entry:first').remove();

          e.preventDefault();
          return false;
           });
          }
        );

        $(document).ready(
            function () {
              $("#rateYo").rateYo({
                rating: 5,
                numStars: 5,
                starWidth: "20px",
                fullStar: true
              }).on("rateyo.set", function (e, data) {
                    $("#rate").val(data.rating);         
                });
            }
        );

        $(document).ready(function () {
          var navListItems = $('div.setup-panel div a'),
                  allWells = $('.setup-content'),
                  allNextBtn = $('.nextBtn'),
                allPrevBtn = $('.prevBtn');

          allWells.hide();

          navListItems.click(function (e) {
              e.preventDefault();
              var $target = $($(this).attr('href')),
                      $item = $(this);

              if (!$item.hasClass('disabled')) {
                  navListItems.removeClass('btn-primary').addClass('btn-default');
                  $item.addClass('btn-primary');
                  allWells.hide();
                  $target.show();
                  $target.find('input:eq(0)').focus();
              }
          });
          
          allPrevBtn.click(function(){
              var curStep = $(this).closest(".setup-content"),
                  curStepBtn = curStep.attr("id"),
                  prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

                  prevStepWizard.removeAttr('disabled').trigger('click');
          });

          allNextBtn.click(function(){
              var curStep = $(this).closest(".setup-content"),
                  curStepBtn = curStep.attr("id"),
                  nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                  curInputs = curStep.find("input[type='text'],input[type='url']"),
                  isValid = true;

              $(".form-group").removeClass("has-error");
              for(var i=0; i<curInputs.length; i++){
                  if (!curInputs[i].validity.valid){
                      isValid = false;
                      $(curInputs[i]).closest(".form-group").addClass("has-error");
                  }
              }

              if (isValid)
                  nextStepWizard.removeAttr('disabled').trigger('click');
          });

          $('div.setup-panel div a.btn-primary').trigger('click');
        });

        $(function()
        {
            $(document).on('click', '.btn-add', function(e)
            {
                e.preventDefault();

                var controlForm = $('.controls.rpt:first'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('Remove Friend');
            }).on('click', '.btn-remove', function(e)
            {
            $(this).parents('.entry:first').remove();

            e.preventDefault();
            return false;
          });
        });
   
    </script>

@endsection