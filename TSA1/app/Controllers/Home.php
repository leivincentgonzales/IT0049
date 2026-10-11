<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => 'Tasks for Today',
            'today' => date('Y-m-d'),
            'tasks' => $taskModel
                ->where('task_date', date('Y-m-d'))
                ->orderBy('id', 'ASC')
                ->findAll()
        ];

        return view('partials/header', $data)
            . view('index', $data)
            . view('partials/footer');
    }
}