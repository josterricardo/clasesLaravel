@extends ('layouts.login')
@section('page_title')	Login @stop
@section('left_content') Welcome to the Dashy Admin Theme @stop

@section('errors')
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
@endsection

@section('page-content')

<div class="heading">Login to your Account</div>
<div class="input">
	<form class="form-horizontal" role="form" method="POST" action="{{ url ('/auth/login') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="login-input-group">
			<span class="login-input-group-addon"><i class="fa fa-at fa-fw"></i></span>
			<input type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}">
		</div>
		<div class="login-input-group">
			<span class="login-input-group-addon"><i class="fa fa-key fa-fw"></i></span>
			<input type="password" class="form-control" placeholder="password" name="password">
		</div>
		<button type="submit" class="btn btn-default btn-lg submit">Login</button>
	</form>				
	<div class="login-other text-right">Or Login with
		<a href="javascript:;" class="m-l-sm"><i class="fa fa-facebook"></i></a>
		<a href="javascript:;" class="m-l-sm"><i class="fa fa-twitter"></i></a>
		<a href="javascript:;" class="m-l-sm"><i class="fa fa-google-plus gplus"></i></a>
	</div>
</div>
<div class="rightFooter">
	<a href="{{ url ('/auth/register') }}">Don't have an Account?</a>
	<a href="javascript:;" class="m-l">Forgot Password?</a>
</div>

@stop

@section('js')
	@parent
<script type="text/javascript">
	$(".alert-danger").click(function(){
    $(".alert-danger").hide();
});
</script>

@endsection