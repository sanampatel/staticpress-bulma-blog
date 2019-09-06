<div class="column is-12">
							<div class="card">
								<div class="card-image">
									<img class="has-shadow" src="{{ $post->mainUrl }}/images/{{ basename($post->image) }}">
								</div>
								<div class="card-content">
									<div class="content">
										<a class="title is-4" href="{{ $post->getUrl() }}"
											title="Read more - {{ $post->title }}">{{ ucwords($post->title) }}</a>
										<p>
											<p>{!! $post->excerpt(250) !!}</p>
										</p>
									</div>
									<div class="has-text-centered">
										<a href="{{ $post->getUrl() }}" class="button is-link">Read more</a>
									</div>
								</div>
								<div class="card-footer">
									<p class="card-footer-item">Published: {{ date('M j, Y', $post->date) }}</p>
								</div>
							</div>
						</div>