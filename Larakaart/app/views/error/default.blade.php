<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Error - {{ $code }}</title>
  {{HTML::style('assets/css/error.css?version=1.000')}}
</head>
<body>
	<section>
		<p class="hidden">{{ $exception }}</p>
		<article class="left">
		 	<p class="errorImage">ERROR</p>
		 	<p class="errorCode">#{{ $code }}</p>
		</article>
		<div id="space"></div>
		<article class="right">
			<h3>Something went wrong..</h3>
			<p>When you've reached this page, it means that something went wrong.</p>

			<p class="errorStatus">
				@if($code == '400')
				Error: Bad request
				@elseif($code == '401')
				Error: Unauthorized
				@elseif($code == '403')
				Error: Forbidden
				@elseif($code == '404')
				Error: Page not found
				@elseif($code == '500')
				Error: Internal server error
				@endif
			</p>

			<p>Click <a href="{{ URL::route('Home') }}">here</a> to go back to the home page.</p>

		</article>
		<div class="clear"></div>
	</section>
</body>
</html>