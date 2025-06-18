<?php

namespace App\Services\Impl;

use App\Models\Task;
use App\Services\TaskService;

class TaskServiceImpl implements TaskService
{
    public function create(array $data)
    {
        return Task::create($data);
    }
}
