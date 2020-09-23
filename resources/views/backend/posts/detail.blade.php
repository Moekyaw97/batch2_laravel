@extends('backendtemplate')
@section('title','Staff List')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Staff Detail</h1>
<a href="{{route('staff.index')}}" class="btn btn-primary mt-3 float-md-right"><i class="icofont-arrow-left"></i>Back</a>
<form class="mt-5">
<img src="{{asset($staff->profile)}}" alt="Staff Profile" class="img-fluid mb-4" height="300" width="300">
<p>Name :{{$staff->name}}</p>
<p>Phone no :{{$staff->phoneno}}</p>
<p>Salary :{{$staff->salary}}</p>
<p>Address :{{$staff->address}}</p>
<p>Department :{{$staff->department_id}}</p>
<p>Position :{{$staff->position_id}}</p>
</form>
</div>
</div>
@endsection