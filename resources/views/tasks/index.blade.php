@extends ('layouts.master')

@section ('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
		<h1 class="h2">Active Tasks</h1>
	</div>

	@foreach ($tasks->where('active', 1) as $task)
    	@include ('tasks.task')
    @endforeach

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
		<h1 class="h2">Completed Tasks</h1>
	</div>

	@foreach ($tasks->where('active', 0) as $task)
    	@include ('tasks.task')
    @endforeach
</main>
@endsection