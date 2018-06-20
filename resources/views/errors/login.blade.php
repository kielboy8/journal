@if(count($errors))
@foreach ($errors->all() as $error)
<div class="form-group">
	<p class="text-danger">
		{{ $error }}
	</p>	
</div>
@endforeach
@endif