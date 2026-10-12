<?php helper('form'); ?>

<h2 class="mb-3">Add User</h2>

<form action="<?= site_url('users/new') ?>" method="post" novalidate>
    <?= csrf_field() ?>

    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input
            type="text"
            name="username"
            id="username"
            class="form-control"
            value="<?= esc(old('username')) ?>"
            required
        >
        <?= validation_show_error('username') ?>
    </div>

    <div class="mb-3">
        <label for="full_name" class="form-label">Full Name</label>
        <input
            type="text"
            name="full_name"
            id="full_name"
            class="form-control"
            value="<?= esc(old('full_name')) ?>"
            required
        >
        <?= validation_show_error('full_name') ?>
    </div>

    <button type="submit" class="btn btn-primary">Save User</button>
    <a href="<?= site_url('users') ?>" class="btn btn-secondary">Cancel</a>
</form>