@extends('_layouts.master')

@section('content')
	<section class="section">
		<div class="container small-container">
			<div class="columns">
				<div class="column is-8">
					<h2 class="title">Posts tagged of category '{{ ucwords($page->name()) }}'</h2>
					<div class="columns is-multiline">
						@forelse (posts_filter_cat($posts, $page) as $post)
							@include('_components.post-preview')
						@empty
							<p>No posts to show.</p>
						@endforelse
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