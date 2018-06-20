@if(count($errors))
<div class="form-group">
	<div class="text-danger">
		<ul>
			@foreach ($errors->all() as $error) 
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
</div>	
@endif