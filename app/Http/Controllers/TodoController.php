<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TodoController extends Controller
{


    public function index($filter = 'today')
    {
        return Inertia::render('Task/Index', [
            'filter' => ucfirst($filter),
            'tasks'=>Task::filter($filter)->get()
        ]);
    }


    public function store(TaskRequest $request)
    {
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }


    public function toggleTaskCompletion(Request $request){
        // dd($request->task_id);

        $task = Task::find($request->task_id);
        if ($task->completed_at) {

            $task->update(['completed_at'=>null]);
        } else {

            $task->touch('completed_at');
        }


    }


    public function destroy(Request $request){


        $task = Task::find($request->task_id);

        $task->delete();

    }
}
