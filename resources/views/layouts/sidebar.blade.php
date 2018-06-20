<nav class="col-md-2 d-none d-md-block bg-light sidebar">
	<div class="sidebar-sticky">
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
					<span class="oi oi-home"></span>
					Home <span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ Request::is('tasks/create') ? 'active' : '' }}" href="/tasks/create">
					<span class="oi oi-pencil"></span>
					Create a Task
				</a>
			</li>
		</ul>

		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
			<span>Recent Tasks</span>
		</h6>
		<ul class="nav flex-column mb-2">
			@foreach ($mostRecentTasks as $task)
			<li class="nav-item">
				<a class="nav-link" href="/tasks/{{ $task->id }}">
					<span class="oi oi-task"></span>
					{{ $task->title }}
				</a>
			</li>
			@endforeach
		</ul>
	</div>
</nav>