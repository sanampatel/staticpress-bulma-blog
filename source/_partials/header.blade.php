<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ $page->title }}</title>
	
	<meta name="keywords" content="{{ $page->seokeywords ?? $page->seokeywords }}">
	<meta name="description" content="{{ $page->seodescription ?? $page->seodescription }}">
	<meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ $page->getUrl() }}"/>
	<meta property="og:keywords" content="{{ $page->sitekeywords }}" />
	<meta property="og:description" content="{{ $page->sitedescription }}" />

	<link rel="home" href="{{ $page->baseUrl }}">
	<link rel="icon" href="/favicon.ico">
	<link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

	<!-- Bulma CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">

	<script src="{{ mix('js/main.js', 'assets/build') }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.4.5/fuse.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>

	@yield('meta')

	@include('_partials.cms.identity_widget')

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ $page->mainUrl }}/assets/build/css/main.css">
</head>
<body>

	@include('_custom.custom-header')

	<header>
		@include('_partials.nav')
	</header>