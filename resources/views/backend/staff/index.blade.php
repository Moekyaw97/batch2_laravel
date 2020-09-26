
@extends('backendtemplate')
@extends('layouts.app')
@section('title','Staff List')

@section('content')
<div class="row">
	<div class="col-md-12 mt-5"><h1>Staff List</h1>
		
		<a href="{{route('staff.create')}}" class="btn btn-primary float-md-right mb-3"><i class="icofont-plus-square"></i>  Add</a>
		{{-- table --}}
		<table class="table my-3">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Phone No</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($staff as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->name}}</td>
					<td>{{$row->phoneno}}</td>
					<td>
						<a href="{{route('staff.show',$row->id)}}" class="btn btn-info"><i class="icofont-ui-file"></i> Detail</a>
						<a href="{{route('staff.edit',$row->id)}}" class="btn btn-warning"><i class="icofont-edit"></i> Edit</a>
						<form method="post" action="{{route('staff.destroy',$row->id)}}" onsubmit="return confirm('Are u sure ?')" class=" d-inline-block">
							@csrf
							@method('DELETE')

							<button class="btn btn-danger" type="submit"> 
								<i class="icofont-ui-delete"></i> Delete</i>
							</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

	@endsection