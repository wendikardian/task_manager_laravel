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
        // get all tasks from others relational table to
        $tasks = Tasks::with('statuses')->get();
        // using eager loading to get all of the data
        // $tasks = Tasks::with('users', 'images', 'statuses')->get();
        // return view with tasks
        // add links pagination
        $tasks = Tasks::paginate(10);
        // dd($tasks);

        return view('tasks.index')->with('tasks', $tasks);
    }
}
