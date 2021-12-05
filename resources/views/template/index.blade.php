<!DOCTYPE HTML>
<html>
	<head>
		@include('template.partials._head')
	</head>

	<body>
		@include('template.partials._header')
		@include('template.partials._nav')
		@include('template.partials._filter')

		<div id="wrapper-container">
			@yield('content')	
			@include('template.partials._footer')
		</div>
		
		@include('template.partials._scripts')
		@include('template.partials._preloader')
	</body>
</html>
