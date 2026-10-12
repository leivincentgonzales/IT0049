<?php helper('form'); ?>

<h2 class="mb-3">Edit User</h2>

<form action="<?= site_url('users/edit/' . $user['id']) ?>" method="post" enctype="multipart/form-data" novalidate>
    <?= csrf_field() ?>

    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input
            type="text"
            name="username"
            id="username"
            class="form-control"
            value="<?= esc(old('username', $user['username'])) ?>"
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
            value="<?= esc(old('full_name', $user['full_name'])) ?>"
            required
        >
        <?= validation_show_error('full_name') ?>
    </div>

    <div class="mb-3">
        <label for="avatar" class="form-label">Avatar (JPG or PNG, maximum 2 MB)</label>
        <input
            type="file"
            name="avatar"
            id="avatar"
            class="form-control"
            accept=".jpg,.jpeg,.png"
        >
        <?= validation_show_error('avatar') ?>
    </div>

    <button type="submit" class="btn btn-primary">Update User</button>
    <a href="<?= site_url('users') ?>" class="btn btn-secondary">Cancel</a>
</form>