@extends('layouts.master')

@section('content')

  <div class="col-md-8 blog-main">

    <div class="blog-post">
      
      @foreach ($posts as $post)
      
        @include('blogs.blog')
      
      @endforeach
      
      <nav class="blog-pagination">
      
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      
          </nav>
    
    </div>
  
  </div>

@endsection     