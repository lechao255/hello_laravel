@extends('layouts.blog')

@section('content')
	<a href="{{ route('articles.create') }}" style="padding: 5px; border: 1px dashed gray">
		+ New Article
	</a>

	{{-- 循环输出文章列表 --}}

	@foreach ($articles as $list)
	<div style="border: 1px solid gray;margin-top: 20px;padding: 20px;">
		<h2>{{ $list->title }}</h2>
		<p>{{ $list->content }}</p>
		<a href="{{ route('articles.edit', $list->id) }}">Edit</a>
		<form action="{{ route('articles.destroy', $list->id) }}" method="post" style="display: inline-block;">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<button type="submit" style="color: #F08080;background-color: transparent;border: none;">Delete</button>
		</form>
	</div>
	@endforeach
@endsection