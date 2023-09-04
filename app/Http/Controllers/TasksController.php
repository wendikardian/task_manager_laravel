<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import model Tasks
use App\Models\Tasks;


class TasksController extends Controller
{
    //
    // create index method for display all data from tasks;
    public function index(Request $request)
    {
        // get all data from tasks
        // $tasks = Tasks::all();
        // get all tasks from others relational table to
        $tasks = Tasks::with('statuses')->get();
        if ($request->has('search')) {
            // get search value
            $search = $request->search;
            // search by title or author or publisher or category or subjects or desc
            $tasks = Tasks::where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('description', 'LIKE', '%' . $search . '%')
                ->paginate(12);
            // $books = Books::where('title', 'LIKE', '%' . $search . '%')->paginate(12);
        } else {
            // get all data
            $tasks = Tasks::paginate(12);
        }
        // using eager loading to get all of the data
        // $tasks = Tasks::with('users', 'images', 'statuses')->get();
        // return view with tasks
        // add links pagination
        // dd($tasks);

        return view('tasks.index')->with('tasks', $tasks);
    }

    public function show($id)
    {
        // get data by id
        $tasks = Tasks::find($id);
        // return view with tasks
        return view('tasks.show')->with('tasks', $tasks);
    }
}
