@extends('backendtemplate')
@extends('layouts.app')
@section('title','Post Create')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Staff Edit</h1>
<a href="{{route('posts.index')}}" class="btn btn-primary float-md-right mb-3"><i class="icofont-arrow-left"></i>Back</a>

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
<form method="post" action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')


  
  <div class="form-group">
      <label for="InputDepartment">Categories:</label>
      <select name="category_id" class="form-control">
        <optgroup label="Choose Categories">
          @foreach($categories as $row)
          <option value="{{$row->id}}"
            @if($row->id==$post->category_id)
            {{'selected'}}
            @endif
            >{{$row->name}}</option>
          @endforeach
        </optgroup>
      </select>
    </div>

   
    <div class="form-group">
      <label for="InputTitle">Title:</label>
      <input type="text" name="title" class="form-control" id="InputTitle" value="{{$post->title}}">
    </div>

    <div class="form-group">
      <label for="InputProfile">Photo:</label>
      <input type="file" name="photo" class="form-control" id="InputProfile">
      <img src="{{asset($post->photo)}}" alt="profile photo" class="img-fluid mt-3" height="300" width="300">
      <input type="hidden" name="oldphoto" value="{{$post->photo}}">
    </div>

    <div class="form-group">
      <label for="phoneNo">Content:</label>
      <input type="text" name="content" class="form-control" id="summernote" value="{{$post->content}}">
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>
</div>
</div>
@endsection

@section('script')
  <script type="text/javascript" name="content">
    $('#summernote').summernote({
      placeholder: 'Your Content Here!',
      tabsize: 2,
      height: 200
    });
  </script>
@endsection