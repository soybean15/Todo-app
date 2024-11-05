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

        $totalTasks = Task::filter($filter)->count();
        $completedTasks = Task::filter($filter)->whereNotNull('completed_at')->count();
        $progress = $totalTasks > 0 ? ($completedTasks / $totalTasks) * 100 : 0;

        return Inertia::render('Task/Index', [
            'filter' => ucfirst($filter),
            'tasks' =>  Task::filter($filter)
            ->orderBy('completed_at', 'asc') // Sort by completed_at in ascending order
            ->get(),
            'progress'=>$progress
        ]);
    }


    public function store(TaskRequest $request)
    {
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'due_date' => $request->due_date
        ]);
    }


    public function update(TaskRequest $request)
    {

        $task = Task::find($request->id);
        $task->update($request->all());

    }

    public function show(Task $task)
    {

        return Inertia::render('Task/Task', [

            'task' => $task,

        ]);
    }


    public function toggleTaskCompletion(Request $request)
    {
        // dd($request->task_id);

        $task = Task::find($request->task_id);
        if ($task->completed_at) {

            $task->update(['completed_at' => null]);
        } else {

            $task->touch('completed_at');
        }
    }


    public function destroy(Request $request)
    {

        $task = Task::find($request->task_id);

        // dd($task);
        $task->delete();
    }
    public function restore(Request $request)
    {
        $task = Task::withTrashed()->find($request->task_id);
        if ($task && $task->trashed()) {
            $task->restore();
        }
    }
}
