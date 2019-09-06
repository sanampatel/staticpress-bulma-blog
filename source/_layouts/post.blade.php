@extends('_layouts.master')

@section('content')

	@if ($page->image)
		<section class="hero is-large is-bold is-primary"  style="background: url('{{ $page->mainUrl }}/images/{{ basename($page->image) }}') no-repeat center center; background-size: cover;" >
			<div class="hero-body">
				<div class="container">
					<p class="title is-2 has-text-centered">
						{{ ucwords($page->title) }}
					</p>
					<p class="subtitle is-3"></p>
				</div>
			</div>
		</section>
	@endif

	<section class="section">
		<div class="container">
			<div class="columns">
				<div class="column is-8">
					<div class="content">
						<h2 class="article-title-main uk-text-bold">
							{{ ucwords($page->title) }}
						</h2>
						<p>Published: {{ date('M j, Y', $page->date) }} 
							@if ($page->author)
								by {{ $page->author }}
							@endif
						</p>
						@if ($page->tags)
							<div class="tags">
								@foreach ($page->tags as $i => $tag)
									<a class="tag is-primary" 
										href="{{ '/tags/' . $tag }}"
										title="View posts in {{ $tag }}"
									>{{ ucwords($tag) }}
									</a>
								@endforeach
							</div>
						@endif
						@if ($page->categories)
							Category: <a 
								href="{{ '/categories/' . $page->categories }}"
								title="View posts in {{ $category }}"
							>{{ ucwords($page->categories) }}
							</a>
						@endif
						<p>
							@yield('postContent')
						</p>
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
            @include('_partials.comments')
        </div>
    </section>

@endsection
