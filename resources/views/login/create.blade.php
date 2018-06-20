@extends ('layouts.master')

@section ('authentication')
<form method="POST" action="/login" class="form-signin text-center">
	{{ csrf_field() }}
	<h1 class="h3 mb-4 font-weight-normal">Sign in to your Journal</h1>

	@include ('errors.login')

	<div class="form-group">
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
	</div>
	
	<div class="form-group">
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-lg btn-primary btn-block mb-4" value="Sign in">
	</div>
	
	<a href="/register">Register</a>

	<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>
@endsection