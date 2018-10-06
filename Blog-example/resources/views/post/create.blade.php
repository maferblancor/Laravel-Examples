@extends('layouts.master')
<!---->
@section('content')
<div class="col-md-6 px-0">
	
	<form method="POST" action="/posts"> <!--Aca digo que voy a /post despues de terminar de crear-->
		{{ csrf_field() }}
		<h1>Create post</h1>
		<hr>
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" placeholder="" name="title" >
	  </div>

	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea id="body" name="body" class="form-control" ></textarea>	
	    <!--
 		 <textarea id="body" name="body" class="form-control" required></textarea> Esto funciona bien para algunos exploradores pero no para todos con respecto a la validacion asi que es posible hacer una funcion validate en el controlador.
	    -->    
	  </div>

	  <div class="form-group">
		  <button type="submit" class="btn btn-primary">Publish</button>
	  </div>
	</form>

	@include('layouts.errors')
</div>	

@endsection