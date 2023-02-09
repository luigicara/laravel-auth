@extends('layouts.main-layout')

@section('content')

<section class="card_bg">
	<div class="container py-4">
		<article>

			<a href="#">
				<img src="https://picsum.photos/300/300" alt="Image Title" />
			</a>

			<div>
				<h1>{{ $project -> name }}</h1>
				<div>
					{{ $project -> release_date }}
				</div>
			
				<div>
          			{{ $project -> description }}
				</div>
			</div>
			
		</article>
  	</div>
</section>


@endsection