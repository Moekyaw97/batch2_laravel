@extends('backendtemplate')
@extends('layouts.app')
@section('title','Post List')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Post List</h1>
      <a href="{{route('posts.create')}}" class="btn btn-success"><i class="icofont-plus-square"></i>Add New Post</a>
      {{-- Table --}}
      <table class="table my-3">
        <thead>
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Category</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($posts as $row)
            <tr>
              <td>{{$row->id}}</td>
              <td>{{$row->title}}</td>
              <td>{{$row->category_id}}</td>
              <td>
                <a href="{{route('posts.show',$row->id)}}" class="btn btn-info"><i class="icofont-ui-file"></i> Detail</a>
                <a href="{{route('posts.edit',$row->id)}}" class="btn btn-warning"><i class="icofont-edit"></i>Edit</a>
                <form method="post" action="{{route('posts.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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