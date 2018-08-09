@extends('layout')


@section('content')
<div class="col-sm-8 blog-main">

	{{$post->user->name}}
	{{$post->created_at->toFormattedDateString()}} &nbsp;
	<h1> {{ $post->title }}</h1> 

	@if($post->tags):

		<ul>
			@foreach($post->tags as $tag):

			<li> 
				<a href="/posts/tags/{{ $tag->name }}"> 
					{{ $tag->name }}
				</a>
			 </li>

			@endforeach
			
		</ul>

	@endif

	{{ $post->body}}
	</div>
	
	<hr>
	<div class="comments">
		

		<ul class="list-group"> 

			@foreach($post->comments as $comment):

			<li class="list-group-item">
				<article>
					{{$comment->created_at->diffForHumans()}} &nbsp;
					{{ $comment->body}}
				</article>
			</li>

			@endforeach
		</ul>

	</div>

	<hr>

	<div class="card">
		<div class="card-block">
			<form method="POST" action="/posts/{{ $post->id }}/comments">
				{{csrf_field()}}
				<div class="form-group">
					<textarea name="body" placeholder="Comment here...  " class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Comment</button>
				</div>
			</form>
		</div>
	</div>

	@include('layouts.errors')

@endsection