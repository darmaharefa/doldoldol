<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dolan - Dolanan Indonesia</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,80">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/custom2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>  

    
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.1.1/jquery.rateyo.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
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

</body>
</html>
