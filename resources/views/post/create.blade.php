@extends('template.master')

@section('content')

<div class="main">
	<div class="container">
		<div class="col-sm-8">

			<form method="POST" action="/posts">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>Post Data</label>
					<textarea name="body" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Save" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>

@endsection