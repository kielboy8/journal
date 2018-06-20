@extends ('layouts.master')

@section ('authentication')
<form method="POST" action="/register" class="form-signin text-center">
	{{ csrf_field() }}
	<h1 class="h3 mb-4 font-weight-normal">Start your Journal</h1>

	@include ('errors.register')

	<div class="form-group">
		<label for="inputName" class="sr-only">Name</label>
		<input type="text" id="inputName" name="inputName" class="form-control" placeholder="Name" required autofocus>
	</div>

	<div class="form-group">
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
	</div>
	
	<div class="form-group">
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
	</div>

	<div class="form-group">
		<label for="inputPassword_confirmation" class="sr-only">Confirm Password</label>
		<input type="password" id="inputPassword_confirmation" name="inputPassword_confirmation" class="form-control" placeholder="Confirm Password" required>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-lg btn-primary btn-block mb-4" value="Register">
	</div>
	
	<a href="/login">Go back</a>
	
	<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>
@endsection