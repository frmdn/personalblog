@extends('template.master')

@section('content')

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 blog-main">
				@foreach($data as $post)
				<div class="blog-post">
					<h2 class="blog-post-title">{{ $post->title }}</h2>
					<p class="blog-post-meta">January 1, 2018 by <a href="#"> Gus Yasin</a></p>

					<p>{{ $post->body }}</p>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection