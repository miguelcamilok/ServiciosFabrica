<?php

namespace App\Services\Impl;

use App\Models\Task;

interface TaskServiceImpl
{
    //
    public function create(array $data)
    {
        return Task::create($data);
    }
}
