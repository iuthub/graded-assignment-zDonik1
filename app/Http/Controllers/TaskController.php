<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function getIndex() {
        return view('index', [
            'tasks' => Task::all()
        ]);
    }

    public function postAddTask(TaskRequest $request) {
        $task = new Task(['title' => $request->input('taskTitle')]);
        $user = Auth::user();
        $user->tasks()->save($task);
        return redirect()->back();
    }

    public function getEditTask($id) {
        return view('edit', ['task' => Task::find($id)]);
    }

    public function postEditTask(TaskRequest $request) {
        $task = Task::find($request->input('id'));
        $task->title = $request->input('taskTitle');
        $task->save();
        return redirect()->route('index');
    }

    public function getDeleteTask($id) {
        Task::find($id)->delete();
        return redirect()->back();
    }
}
