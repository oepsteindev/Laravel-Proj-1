@extends('layout')


@section('content')

<h1>Create a Post</h1>
<div class="col-sm-8">
<form method="POST" action="/posts">
	{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputTitle">Title</label>
    <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="emailHelp" placeholder="Title" name="title">
   
  </div>
  <div class="form-group">
    <label for="exampleInputBody">Body</label>
    <textarea class="form-control" id="exampleInputBody" placeholder="Body" name="body"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Publish</button>
</form>
@include('layouts.errors')
</div>

@endsection