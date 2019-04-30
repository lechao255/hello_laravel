@extends('layouts.app')

@section('content')
	<h1>Myspace</h1>
	<p>Welcome to Myspace Page</p>
	<p>Version : {{$version}}</p>
	{{-- this is a manual --}}
@include('shared.author')

@endsection