<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskProductRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
   public function index()
    {
        $tasks = Task::all();
        return response()->json([
            'status' => true,
            'tasks' => $tasks
        ]);
    }

 public function store(TaskProductRequest $request)
    {
        $task = new Task;
        $task->name = $request->input('name');
        $task->status =  $request->input('status');
        $task->save();
 
        return response()->json([
            'status' => 1,
            'message' => "User Created successfully!",
            'product' => $task
        ], 200);
    }
}
