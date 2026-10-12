<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title><?= esc($title) ?></title>
</head>
<body>
    <div class="container mt-3">
        <h1 class="fs-2">POS System</h1>
        <p class="fs-6">Technical Formative Assessment 3: MAKING IT EDITABLE: FORMS, VALIDATION, AND FILE UPLOAD</p>

        <a href="<?= base_url('/') ?>" class="btn btn-danger">Home</a>
        <a href="<?= base_url('about') ?>" class="btn btn-warning">About</a>
        <a href="<?= base_url('customers') ?>" class="btn btn-success">Customers</a>
        <a href="<?= base_url('users') ?>" class="btn btn-primary">Users</a>

        <hr>
