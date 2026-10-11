<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'Complete Task List',
            'tasks' => $taskModel
                ->orderBy('task_date', 'ASC')
                ->findAll()
        ];

        return view('partials/header', $data)
            . view('tasks', $data)
            . view('partials/footer');
    }
}