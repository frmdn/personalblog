@extends('template.master')

@section('content')
<div class="header">
	<img src="img/header2.jpg" style="width: 100%">
</div>

<div class="links mb-3">
	<ul class="links-home">
		<li class="l1">
			<a href="">
				<div class="container">Kehidupan</div>
			</a>
		</li>
		<li class="l2">
			<a href="">
				<div class="container">Proyek</div>
			</a>
		</li>
		<li class="l3">
			<a href="">
				<div class="container">Visi</div>
			</a>
		</li>
		<li class="l4">
			<a href="">
				<div class="container">Catatan</div>
			</a>
		</li>
	</ul>
</div>

<div class="container mb-4 index-article">
	<h3 class="mb-4" style="padding:10px 0;border-bottom: 1px solid rgba(0,0,0,.2)">Latest Article</h3>
	<div class="row">
		<div class="col-sm-4">
			<div class="row">
				<div class="col-sm-12">
					<a href = "#">
						<div class="row">
							<div class="col-sm-4">
								<img class="img-thumbnail" src="img/thumb.jpg" alt="Generic placeholder thumbnail">
							</div>
							<div class="col-sm-8">
								<p class="font-weight-bold">Post title</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="row">
				<div class="col-sm-12">
					<a href = "#">
						<div class="row">
							<div class="col-sm-4">
								<img class="img-thumbnail" src="img/thumb.jpg" alt="Generic placeholder thumbnail">
							</div>
							<div class="col-sm-8">
								<p class="font-weight-bold">Post title</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="row">
				<div class="col-sm-12">
					<a href = "#">
						<div class="row">
							<div class="col-sm-4">
								<img class="img-thumbnail" src="img/thumb.jpg" alt="Generic placeholder thumbnail">
							</div>
							<div class="col-sm-8">
								<p class="font-weight-bold">Post title</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection