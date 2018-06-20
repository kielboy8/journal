@extends ('layouts.master')

@section ('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 border-bottom">
		<h1 class="h2">Edit Task</h1>
	</div>
	<div class="pt-3">
		<form method="POST" action="/tasks/{{ $task->id }}">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}

			@include ('errors.tasks')

			<div class="form-group">
				<label for="title">Title: </label>
				<input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}">
			</div>

			<div class="form-group">
				<label for="body">Body: </label>
				<textarea class="form-control" id="body" name="body" rows="3">{{ $task->body }}</textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</div>
	
</main>
@endsection