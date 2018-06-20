@if(count($errors))
<div class="form-group">
	<p class="text-danger">
		@foreach ($errors->all() as $error) 
		<li>{{ $error }}</li>
		@endforeach
	</p>
</div>	
@endif