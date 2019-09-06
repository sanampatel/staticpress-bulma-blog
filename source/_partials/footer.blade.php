<script src="{{ $page->mainUrl }}/assets/build/js/main.js"></script>

	@include('_partials.cms.identity_redirect')
	@include('_custom.custom-footer')

	<footer class="footer">
		<div class="container">
			<div class="content has-text-centered">
				<p>This project is build on <a href="https://bulma.io/">Bulma</a> made by <a class="text-white" href="https://staticpress.io">StaticPress</a>.</p>
			</div>
		</div>
	</footer>


<script async src="https://www.googletagmanager.com/gtag/js?id={{ $page->google_analytic_code }}"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', '{{ $page->google_analytic_code }}');
	
	var disqus_config = function () {
	this.page.url = getUrl();  // Replace PAGE_URL with your page's canonical URL variable
	this.page.identifier = getUrl(); // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};
	
	(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://{{ $page->disqus_code }}.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
</script>

@yield('footer-scripts')
</body>
</html>