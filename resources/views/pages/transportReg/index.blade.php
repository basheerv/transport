@extends('layouts.app')

@section('content')  
<div class="container">
	<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Registration Show</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover table-responsive">
                <thead>
               		<tr>
               			<th>#</th>
               			<th>Model No</th>
               			<th>Tag No</th>
               			<th>Plate No</th>
               			<th>Emr Id</th>
               			<th>Owner Name</th>
               			<th>Owner Passport</th>
               			<th>Owner Number</th>
                    <th>City</th>
                    <th>Year</th>
                    <th>Chassis No</th>
                    <th>Category</th>
                    <th>Color</th>
                    <th>Weight</th>
                    <th>temperature</th>
                    <th>Status</th>
               			<th>Edit</th>
               			<th>Delete</th>
               		</tr>
                </thead>
                <tbody>
 					
 					@if(count($transportReg) > 0)
 					@foreach($transportReg as $tranReg)
 						<tr>
 							<th>{{$tranReg->id}}</th>
 							<td>{{$tranReg->model}}</td>
              <td>{{$tranReg->tag_no}}</td>
 							<td>{{$tranReg->plat_no}}</td>
              <td>{{$tranReg->emr_id}}</td>
 							<td>{{$tranReg->owner_name}}</td>
 							<td>{{$tranReg->owner_passport}}</td>
 							<td>{{$tranReg->owner_mob_number}}</td>
              <td>{{$tranReg->city}}</td>
              <td>{{$tranReg->year}}</td>
              <td>{{$tranReg->chassis_no}}</td>
              <td>{{$tranReg->category}}</td>
              <td>{{$tranReg->color}}</td>
              <td>{{$tranReg->weight}}</td>
              <td>{{$tranReg->temperature}}</td>
              <td>{{$tranReg->status}}</td>
 							<td><a href="{{ route('transportReg.edit', ['id' => $tranReg->id]) }}" class="btn btn-info btn-sm">Edit</a></td>
 							<td><form method="POST" action="{{ route('transportReg.destroy', ['id' => $tranReg->id] )}}">
                @method('DELETE')
                 @csrf
                <button type="submit" name="submit" onclick="return confirm('Are you sure you want to delete this item?'); "
                class="btn btn-danger btn-sm">Delete</button>      
              </form>
              </td>
 						</tr>

 					@endforeach
 					
 					@else
 					<tr><td valign="top" colspan="20" class="dataTables_empty" style="padding-left: 30px;">No data available in table</td></tr>
 					@endif

                </tbody>
              </table>
              
              <div class="text-center mt-1" align="content">{!! $transportReg ?? ''->links() !!}</div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
</div>
		</div>
</div>
    



@stop