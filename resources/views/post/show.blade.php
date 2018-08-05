@extends('template.master')

@section('content')

<div class="main">
	<div class="container">
		<h1 class="text-center header-center">{{ $data->title }}</h1>
		<p>{{ $data->body }}</p>
	</div>
</div>

@endsection