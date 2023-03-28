<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
		@vite('resources/css/app.css')
    <title>@yield('title', 'Online Store')</title>
    @livewireStyles

		<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
	</head>
	<body>
		@include('partials.header') 
		@yield('content')
		@include('partials.footer') 
	</body>
</html>

<style>
	html {
		font-family: Urbanist, sans-serif;
		scroll-behavior: smooth;
	}

	body {
		margin: 0;
	}
</style>