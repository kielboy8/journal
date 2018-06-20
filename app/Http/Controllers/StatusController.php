<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class StatusController extends Controller
{
    public function update(Task $task) {
    	if($task->where(array('active' => 1))) {
    		$task->update(array('active' => 1));
    	}
    	else {
    		$task->update(array('active' => 0));
    	}

    	return back();
    }
}
