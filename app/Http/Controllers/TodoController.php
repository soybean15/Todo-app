<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TodoController extends Controller
{


    public function index($filter='today'){
        return Inertia::render('Task/Index', [
            'filter' => ucfirst($filter)
          ]);
    }


    public function store(TaskRequest $request){


   // Access validated data directly from the request
   $task = Task::create([
    'title' => $request->title, // Access validated title
    'description' => $request->description, // Access validated description
    'status' => 'pending', // Default status
    'order' => 0, // You can set this based on your requirements
    // Add other fields if necessary
]);

        // return to_route('task.index');
    }
}
