@extends('layouts.app')

@section('content')

   <div class="container">
      <div class="row">
            
            <!-- Registeration Form -->
      <form method="POST" action="{{ route('transportReg.update',['id' =>$transportReg->id]) }}">
              {{ csrf_field() }}
      <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Update Vehicles</h3>   
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              
           
              <div class="col-md-4">
                <div class="form-group">
                  <label>Model</label>
                  <input type="text" name="model" value="{{$transportReg->model}}"  class="form-control">
                </div>
           
                <div class="form-group">
                  <label>Emr Id</label>
                  <input type="text" name="emr_id" value="{{$transportReg->emr_id}}" class="form-control">
                </div>
              
              </div>
              <!-- /.col -->

              <div class="col-md-4">
                <div class="form-group">
                  <label>Tag Number</label>
                  <input type="text" name="tag_no" value="{{$transportReg->tag_no}}" class="form-control">
                </div>

                <div class="form-group">
                  <label>Owner Name </label>
                  <input type="text" name=" owner_name" value="{{$transportReg->owner_name}}" class="form-control">
                </div>
     
              </div>
              <!-- /.col -->

              <div class="col-md-4">
                <div class="form-group">
                  <label>Plate No</label>
                  <input type="text" name="plat_no" value="{{$transportReg->plat_no}}" class="form-control">
                </div>

                <div class="form-group">
                  <label>Owner passport</label>
                  <input type="text" name="owner_passport" value="{{$transportReg->owner_passport}}" class="form-control">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Owner Number</label>
                  <input type="text" name="owner_mob_number" value="{{$transportReg->owner_mob_number}}" class="form-control">
                </div>

                 <div class="form-group">
                  <label>Chassis No</label>
                  <input type="text" name="chassis_no" value="{{$transportReg->chassis_no}}" class="form-control">
                </div>
              </div> 

               <div class="col-md-4">
                <div class="form-group">
                  <label>Weight</label>
                  <input type="text" name="weight" value="{{$transportReg->weight}}" class="form-control">
                </div> 

                <div class="form-group">
                  <label>Color</label>
                  <input type="text" name='color' value="{{$transportReg->color}}" class="form-control" >
                </div>  
              </div> 

              <div class="col-md-4">
                <div class="form-group">
                  <label>City</label>
                  <input type="text" name="city" value="{{$transportReg->city}}" class="form-control">
                </div> 

                <div class="form-group">
                  <label>Category</label>
                  <input type="text" name='category' value="{{$transportReg->category}}" class="form-control" >
                </div>  
              </div> 

              <div class="col-md-4">
                <div class="form-group">
                  <label>Temperature</label>
                  <input type="text" name="temperature" value="{{$transportReg->temperature}}" class="form-control">
                </div> 
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" name='status' value="{{$transportReg->status}}" class="form-control" >
                </div>
              </div>

              <div class="col-md-4">
                 <div class="form-group">
                  <label>Year</label>
                  <input type="text" name="year" value="{{$transportReg->year}}" class="form-control">
                </div>  
              </div> 

              <div class=" ml-auto" style="margin-top: 5px;">
                  <button type="submit" name="submit" class="btn btn-success">update Vehicles</button>
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