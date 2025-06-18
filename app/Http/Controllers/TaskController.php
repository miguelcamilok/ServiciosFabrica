<?php

namespace App\Http\Controllers;
use App\Services\TaskService;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'state' => 'required|string|in:Earring,Filled',
            'project_id' => 'required|integer|exists:projects,id',
        ]);


        $task = $this->taskService->create($request->all());

        return response()->json([
            'message' => 'Usuario creado correctamente',
            'data' => $task,
        ], 201);
    }
}
