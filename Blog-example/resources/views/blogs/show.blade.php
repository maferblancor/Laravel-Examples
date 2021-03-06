@extends('layouts.master')

@section('content')


	<div class="col-md-8 px-0">
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->title }}</p>

	</div>
	<hr>
	
		<div class="comments">
			<ul class="list-group">
			@foreach ($post->comments as $comment)
				<li class="list-group-item">		
					<strong>
						
						{{ $comment->created_at->diffForHumans() }} : &nbsp; 
					
					</strong>			
					{{ $comment->body }}			
				</li>
			@endforeach
			</ul>
	</div>

	

@endsection