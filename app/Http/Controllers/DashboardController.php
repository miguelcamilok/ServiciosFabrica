<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Services\ProjectService;
use App\Services\TaskService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $taskService;
    protected $projectService;

    public function __construct(TaskService $taskService, ProjectService $projectService)
    {
        $this->taskService = $taskService;
        $this->projectService = $projectService;
    }

    public function index()
    {
        $tasks = $this->taskService->getAll();
        $projects = $this->projectService->getAll();

        return view('dashboard.index', compact('tasks', 'projects'));
    }


    public function createProject(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:50',
        ]);

        $this->projectService->create($request->all());

        return redirect()->back()->with('success', 'Proyecto creado correctamente');
    }

    public function createTask(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'state' => 'required|string|in:Earring,Filled',
            'project_id' => 'required|integer|exists:projects,id',
        ]);


        $this->taskService->create($request->all());

        return redirect()->back()->with('success', 'Tarea creado correctamente');
    }
}
