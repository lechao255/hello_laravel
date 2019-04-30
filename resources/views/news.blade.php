@extends('layouts.app')

@section('content')
	<h1>News</h1>
	<p>This is my first Laravel web</p>
	<p>Author: SadCreeper</p>
	<p>Timestamp : {{date('Y-m-d H:i:s', time())}}</p>
@endsection