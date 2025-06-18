<?php

namespace App\Services\Impl;

use App\Models\Project;
use App\Services\ProjectService;

class ProjectServiceImpl implements ProjectService
{
    //
    public function create(array $data)
    {
        return Project::create($data);
    }

    public function getAll()
    {
        return Project::all();
    }
}
