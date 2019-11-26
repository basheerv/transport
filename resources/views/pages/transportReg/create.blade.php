@extends('layouts.app')

@section('content')

   <div class="container">
   		<div class="row">
   			   	
   			   	<!-- Registeration Form -->
   	  <form method="POST" action="{{ route('transportReg.store') }}">
   			   		{{ csrf_field() }}
   		<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add New Vehicles</h3>   
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
            	
           
              <div class="col-md-4">
                <div class="form-group">
                  <label>Model</label>
                  <input type="text" name="model" class="form-control">
                </div>
           
                <div class="form-group">
                  <label>Emr Id</label>
                  <input type="text" name="emr_id" class="form-control">
                </div>
              
              </div>
              <!-- /.col -->

              <div class="col-md-4">
                <div class="form-group">
                  <label>Tag Number</label>
                  <input type="text" name="tag_no" class="form-control">
                </div>

                <div class="form-group">
                  <label>Owner Name </label>
                  <input type="text" name=" owner_name" class="form-control">
                </div>
     
              </div>
              <!-- /.col -->

              <div class="col-md-4">
                <div class="form-group">
                  <label>Plate No</label>
                  <input type="text" name="plat_no" class="form-control">
                </div>

                <div class="form-group">
                  <label>Owner passport</label>
                  <input type="text" name="owner_passport" class="form-control">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Owner Number</label>
                  <input type="text" name="owner_mob_number" class="form-control">
                </div>

                 <div class="form-group">
                  <label>Chassis No</label>
                  <input type="text" name="chassis_no" class="form-control">
                </div>
              </div> 

               <div class="col-md-4">
                <div class="form-group">
                  <label>Weight</label>
                  <input type="text" name="weight" class="form-control">
                </div> 

                <div class="form-group">
                  <label>Color</label>
                  <input type="text" name='color' class="form-control" >
                </div>  
              </div> 

              <div class="col-md-4">
                <div class="form-group">
                  <label>City</label>
                  <input type="text" name="city" class="form-control">
                </div> 

                <div class="form-group">
                  <label>Category</label>
                  <input type="text" name='category' class="form-control" >
                </div>  
              </div> 

              <div class="col-md-4">
                <div class="form-group">
                  <label>Temperature</label>
                  <input type="text" name="temperature" class="form-control">
                </div> 
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" name='status' class="form-control" >
                </div>
              </div>

              <div class="col-md-4">
                 <div class="form-group">
                  <label>Year</label>
                  <input type="text" name="year" class="form-control">
                </div>  
              </div> 

              <div class="col-md-4">
                 <div class="form-group">
                  <label>Start Date</label>
                  <input type="date" name="start_date" class="form-control">
                </div>  
              </div> 
              <div class="col-md-4">
                 <div class="form-group">
                  <label>End Date</label>
                  <input type="date" name="end_date" class="form-control">
                </div>  
              </div> 

              <div class=" ml-auto" style="margin-top: 5px;">
                  <button type="submit" name="submit" class="btn btn-success">Add Vehicles</button>
                </div> 
  
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
        </div>
        <!-- /.card -->	

   			   	</form>
      	
   			   	
   			</div>
   		</div>

@stop