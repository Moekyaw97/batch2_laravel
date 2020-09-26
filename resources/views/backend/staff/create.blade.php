@extends('backendtemplate')
@extends('layouts.app')
@section('title','Staff Create')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Staff Create</h1>
<a href="{{route('staff.index')}}" class="btn btn-primary float-md-right mb-3"><i class="icofont-arrow-left"></i>Back</a>

{{-- error --}}
 @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
{{-- form --}}
<form method="post" action="{{route('staff.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="InputDepartment">Department:</label>
      <select name="department" class="form-control">
        <optgroup label="Choose Department">
          @foreach($departments as $row)
          <option value="{{$row->id}}">{{$row->name}}</option>
          @endforeach
        </optgroup>
      </select>
    </div>

    <div class="form-group">
      <label for="InputPosition">Position:</label>
      <select name="position" class="form-control">
        <optgroup label="Choose Position">
          @foreach($positions as $row)
          <option value="{{$row->id}}">{{$row->name}}</option>
          @endforeach
        </optgroup>
      </select>
    </div>
    
    <div class="form-group">
      <label for="InputName">Name:</label>
      <input type="text" name="name" class="form-control" id="InputName">
    </div>

    <div class="form-group">
      <label for="InputProfile">Profile:</label>
      <input type="file" name="profile" class="form-control-file" id="InputProfile" class="img-fluid">
    </div>

    <div class="form-group">
      <label for="phoneNo">Phone No</label>
      <input type="text" name="phoneno" class="form-control" id="phoneNo">
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" name="address" id="address"></textarea>
    </div>

    <div class="form-group">
      <label for="Salary">Salary</label>
      <input type="number" name="salary" class="form-control" id="Salary">
    </div>

    <button type="submit" class="btn btn-success">Create</button>
</form>
</div>
</div>
@endsection