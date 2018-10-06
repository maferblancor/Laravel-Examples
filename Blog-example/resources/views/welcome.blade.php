@extends('layouts.master')



@section('content')
    <h2>My fisrt web site</h2>

    <ul>
    	@foreach($tasks as $task)
    		<li> {{$task ->body}} </li>
    	@endforeach
    </ul>
@endsection
