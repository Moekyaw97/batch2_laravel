@extends('backendtemplate')
@extends('layouts.app')
@section('title','Post List')

@section('content')
<div class="row">
  <div class="col-md-12 mt-5"><h1>Post Detail</h1>
<a href="{{route('posts.index')}}" class="btn btn-primary mt-3 float-md-right"><i class="icofont-arrow-left"></i>Back</a>
<form class="mt-5">
<h1>Title : {{$post->title}}</h1>
<img src="{{asset($post->photo)}}" alt="Post Photo" class="img-fluid mb-4" height="300" width="300">

<h3>Content : {!!$post->content!!}</h3>

</form>
</div>
</div>
@endsection