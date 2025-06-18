<?php

namespace App\Http\Controllers;
use App\Services\ProjectService;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

        public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:50',
        ]);

        $project = $this->projectService->create($request->all());

        return response()->json([
            'message' => 'Proyecto creado correctamente',
            'data' => $project,
        ], 201);
    }

}
