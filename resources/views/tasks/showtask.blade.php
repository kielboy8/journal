@extends ('layouts.master')

@section ('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4">
		<h1 class="h2">
			{{ $task->title }}
		</h1>
		<div class="btn-toolbar">
			@if ( $task->active )
			<form method="POST" action="/tasks/{{ $task->id }}/complete">
				{{ method_field('PATCH') }}
				{{ csrf_field() }}
				<input type="submit" class="btn btn-sm btn-success mr-2" value="Complete">
			</form>
			@else
			<form method="POST" action="/tasks/{{ $task->id }}/setactive">
				{{ method_field('PATCH') }}
				{{ csrf_field() }}
				<input type="submit" class="btn btn-sm btn-success mr-2" value="Set Active">
			</form>
			@endif
			<div class="btn-group">
				<a href="/tasks/{{ $task->id }}/edit" class="btn btn-sm btn-primary mr-2">Update</a>
			</div>
			<form method="POST" action="/tasks/{{ $task->id }}">
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
				<input type="submit" class="btn btn-sm btn-danger text-light" value="Delete">
			</form>
		</div>
	</div>
	<p class="text-success">
		{{ $task->active === 1 ? "Active" : "Complete" }}
	</p>
	<p class="border-bottom pb-3">
		{{ $task->created_at->toDayDateTimeString() }}
	</p>
	<p>
		{{ $task->body }}
	</p>
</main>
@endsection