---
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.master')

@section('content')
	<section class="section">
		<div class="container">
			<div class="columns">
				<div class="column is-8">
					<div class="columns is-multiline">
						@include('_components.pagination')

						@foreach (($pagination->items)->where('featured', true) as $post)
							@include('_components.post-preview')
						@endforeach						
					</div>
				</div>

				<div class="column is-4-desktop is-12-tablet">
					<p class="title is-4">Featured Posts</p>
					<div class="columns is-multiline">
						@foreach ($posts->where('featured', false) as $post)
							@include('_partials.sidebar')
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection