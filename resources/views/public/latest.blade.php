@extends('template.master')

@section('content')

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 blog-main">
				@foreach($data as $post)
				<div class="blog-post">
					<h2 class="blog-post-title">
						<a href="/post/{{ $post->id }}">{{ $post->title }}</a>
					</h2>
					<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} oleh <a href="#"> Gus Yasin</a></p>

					<p>{{ $post->body }}</p>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection