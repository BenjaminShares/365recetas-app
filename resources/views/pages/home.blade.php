@extends('layouts.app')

@section('content')
	<div class="hero">
		<div class="hero-content">
			<h1>Daily Fresh Recipes</h1>
			<h2>Only $10/mo</h2>
			<div class="cta">
				<p>Feel Better, Be Better.</p>
				<a href="/subscribe" class="btn btn-success btn-large">Let's Get Started!</a>
			</div>
		</div>
	</div>

	<section>
		<div class="container">
			<div class="section-header">
				<h2>Latest Recipes</h2>
			</div>

			<!-- Put Posts Here -->
			<div class="row">
					
					@foreach ($posts as $post)
						<div class="col-sm-6 col-md-4 col-lg-3">
							@include('partials.post-card', ['post' => $post])
						</div>
					@endforeach

			</div>
		</div>
	</section>
@endsection