<div class="column is-12">
						<nav class="pagination is-centered">
							@if ($pagination->pages->count() > 1)
								<p class="pagination-previous" style="padding: 0">
									@if ($previous = $pagination->previous)
										<a
											href="{{ $previous }}"
											title="Previous Page"
										 	style="padding: 12px">&LeftArrow;</a>
									@else
										<a class="button" title="No Previous" disabled>&LeftArrow;</a>
									@endif
								</p>								
								<p class="pagination-next" style="padding: 0">
									@if ($next = $pagination->next)
										<a
											href="{{ $next }}"
											title="Next Page"
											style="padding: 12px"
										>&RightArrow;</a>
									@else
										<a class="button is-default" title="No Next" disabled>&RightArrow;</a>
									@endif									
								</p>
								<ul class="pagination-list">
									<li>
										@foreach ($pagination->pages as $pageNumber => $path)
											<a
												href="{{ $path }}"
												title="Go to Page {{ $pageNumber }}"
												class="pagination-link is-current"
											>{{ $pageNumber }}</a>
										@endforeach
									</li>
								</ul>
							@endif
						</nav>						
					</div>