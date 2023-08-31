<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import model Tasks
use App\Models\Tasks;


class TasksController extends Controller
{
    //
    // create index method for display all data from tasks;
    public function index()
    {
        // get all data from tasks
        // $tasks = Tasks::all();
        // using eager loading to get all of the data
        $tasks = Tasks::with('user', 'image', 'status')->get();
        // return view with tasks
        return view('tasks.index')->with('tasks', $tasks);
    }
}
