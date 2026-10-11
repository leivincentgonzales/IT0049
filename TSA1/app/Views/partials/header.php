<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title><?= $title ?></title>
</head>
<body>
    <div class="container mt-3">
        <h1 class="fs-2">Tasks for Today Management System</h1>
        <p class="fs-6">Technical Summative Assessment 1: Module 1 and Module 2</p>

        <a href="<?= base_url('/') ?>" class="btn btn-danger">
            Today
        </a>

        <a href="<?= base_url('tasks') ?>" class="btn btn-warning">
            All Tasks
        </a>

        <a href="<?= base_url('profile') ?>" class="btn btn-success">
            Profile
        </a>

        <a href="<?= base_url('about') ?>" class="btn btn-primary">
            About
        </a>

        <hr>