@extends ('layouts.login')
@section('page_title') 404 @stop
@section('left_content') Oops! The page you are looking for does not exist. @stop

@section('page-content')
<div class="login-right fright striped-bg">
	<h1 align="center">404</h1>
	<p  class="oops">	Page not found. </p>
		<div class="frightFooter">
			<a href="{{ url ('') }}">Go to home page.</a>
		</div>
</div>
@stop
