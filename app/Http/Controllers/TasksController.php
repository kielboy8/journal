<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

	// Create
    public function store() {
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

        auth()->user()->publish(
            new Task(request(['title', 'body']))
        );

    	return redirect()->home();
    }

    // Read
    public function index() {
        $tasks = Task::where('user_id', auth()->id())->latest()->get();
    	// $tasks = Task::latest()->get();
        $mostRecentTasks = Task::where('user_id', auth()->id())->latest()->take(4)->get();
    	return view('tasks.index', compact(['tasks', 'mostRecentTasks']));
    }

    public function show(Task $task) {
        $mostRecentTasks = Task::where('user_id', auth()->id())->latest()->take(4)->get();
    	return view('tasks.showtask', compact(['task', 'mostRecentTasks']));
    }

    public function create(Task $task) {
        $mostRecentTasks = Task::where('user_id', auth()->id())->latest()->take(4)->get();
        return view('tasks.create', compact(['tasks', 'mostRecentTasks']));
    }

    public function edit(Task $task) {
        $mostRecentTasks = Task::where('user_id', auth()->id())->latest()->take(4)->get();
    	return view('tasks.edit', compact(['task', 'mostRecentTasks']));
    }

    // Update
    public function update(Task $task) {
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);
        
    	$task->update(request(['title', 'body']));
    	return redirect()->home();
    }

    // Delete
    public function delete(Task $task) {
    	$task->delete();
    	return back();
    }
}
