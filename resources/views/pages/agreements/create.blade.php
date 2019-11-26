@extends('layouts.app')

<style type="text/css">
	body {
    margin-top:40px;
}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>


@section('content')

   <div class="container">
  
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary  btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn  btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
    </div>
  </div>
		<!-- <div class="row">  -->
   			   	
   			   	<!-- Registeration Form -->
   	  <form method="POST" action="{{ route('agreement.store') }}">
   			   		{{ csrf_field() }}
   		<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add New Agreements</h3>   
          </div>

          <div class="card-body">
          	<div class="row setup-content"  id="step-1">
          		<!-- <div class="tab-content" id="myTabContent"> -->
          		<div class="col-md-6">
          			<div class="form-group">
          				<label for="">contruct_with_driver</label>
          				<input type="text" name="contruct_with_driver" class="form-control">
          			</div>
                <div class="form-group">
                  <label for="">start_date</label>
                  <input type="date" name="start_date" class="form-control">
                </div>

          		</div>
          		<div class="col-md-6">
          			 <div class="form-group">
                  <label for="">company_name</label>
                  <input type="text" name="company_name" class="form-control">
                </div>
          			<div class="form-group">
          				<label for="">end_date</label>
          				<input type="date" name="end_date" class="form-control">
          			</div>
          		</div>
          		<div class="col-md-6">
          			<div class="form-group">
          				<label for="">comp_address</label>
          				<input type="text" name="comp_address" class="form-control">
          			</div>
          			<div class="form-group">
          				<label for="">comp_office_no</label>
          				<input type="text" name="comp_office_no" class="form-control">
          			</div>
          		</div>
          		<div class="col-md-6">
          			<div class="form-group">
          				<label for="">comp_licence</label>
          				<input type="text" name="comp_licence" class="form-control">
          			</div>
          			<div class="form-group">
          				<label for="">com_mob_no</label>
          				<input type="text" name="com_mob_no" class="form-control">
          			</div>
          		</div>
          		<div class="ml-auto">
          			<button class="btn btn-primary nextBtn  ml-auto" type="button" >Next</button>
          		</div>   		
          		<!-- </div> -->
          	</div>

          		<div class="row setup-content"  id="step-2">
          		<!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> -->
          		<div class="col-md-6">
          			<div class="form-group">
          				<label for="">meter_reding</label>
          				<input type="text" name="meter_reding" class="form-control">
          			</div>
          			<div class="form-group">
                        <label>select_price</label>
                        <select class="form-control" name="select_price">
                          <option value="per day">per day</option>
                          <option value="per month">per month</option>
                        </select>
                      </div>

          		</div>
          		<div class="col-md-6">
          			<div class="form-group">
          				<label>Amount</label>
          				<input type="text" name="price" class="form-control">
          			</div>
          			<div class="form-group">
          				<label for="">cheques</label>
          				<input type="text" name="cheques" class="form-control">
          			</div>
          		</div>

              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Enter month & days</label>
                  <input type="text" name="month_days" class="form-control month_days">
                </div>
              </div>
          		<div class="col-md-6">
          			<div class="form-group">
          				<label for="">Plate No</label>
          				<select class="form-control" name="plat_no">
          				 @foreach($transports as $key => $transport)
          				  <option value="{{$key}}">{{$transport}}</option>
          				@endforeach
          				</select>
          			</div>
          		</div>
          		<div class="col-md-6">
          			<button class="btn btn-primary nextBtn ml-auto" type="button" style="margin-top: 30px;">Next</button>
          		</div> 
          	</div>

          	<div class="row setup-content"  id="step-3">
          		 <!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"> -->
          		<div class="col-md-6">
          			<div class="form-group">
          				<label for="">agent</label>
          				<input type="text" name="agent" class="form-control">
          			</div>
          			<div class="form-group">
          				<label for="">agent_name</label>
          				<input type="text" name="agent_name" class="form-control">
          			</div>

          		</div>
          		<div class="col-md-6">
          			<div class="form-group">
          				<label for="">agent_email</label>
          				<input type="email" name="agent_email" class="form-control">
          			</div>
          			<div class="form-group">
          				<label for="">agent_address</label>
          				<input type="text" name="agent_address" class="form-control">
          			</div>
          		</div>
          		<div class="col-md-6">
          			<div class="form-group">
          				<label for="">agent_emr_id</label>
          				<input type="text" name="agent_emr_id" class="form-control">
          			</div>
          		</div>
          		<div class="col-md-6">
          			<div class="form-group">
          				<label for="">agent_company_name</label>
          				<input type="text" name="agent_company_name" class="form-control">
          			</div>
          		</div>
       
          		<button class="btn btn-success pull-right ml-auto" type="submit">Submit</button>
          		
          		<!-- </div> -->
          	</div>
           

            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
        </div>
  

   			   	</form>
   			 <!--   </div> -->
   		</div>

@stop

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function (event) {
  if(event.keyCode == 13) return false;
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

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

$(document).ready(function () {
$(".month_days").on('change',function(){
 var getMonths = $(".month_days").val();
  console.log(getMonths);

// alert(getMonths);
});
});
</script>