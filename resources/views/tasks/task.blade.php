<ul class="list-group list-group-flush">
	<li class="list-group-item list-group-item-bg-color d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center no-border-top">

		<div class="align-self-start">
			<a class="h5 text-primary" href="/tasks/{{ $task->id }}">{{ $task->title }}</a> - 
			{{ $task->created_at->toFormattedDateString() }}
		</div>

		<div class="align-self-end btn-toolbar">

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

			<a href="/tasks/{{ $task->id }}/edit" class="btn btn-sm btn-primary mr-2">Update</a>

			<form method="POST" action="/tasks/{{ $task->id }}">
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
				<input type="submit" class="btn btn-sm btn-danger text-light" value="Delete">
			</form>

		</div>
	</li>
</ul>