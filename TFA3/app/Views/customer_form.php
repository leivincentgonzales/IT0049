<?php helper('form'); ?>

<h2 class="mb-3">Add Customer</h2>

<form action="<?= site_url('customers/new') ?>" method="post" novalidate>
    <?= csrf_field() ?>

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

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
            type="email"
            name="email"
            id="email"
            class="form-control"
            value="<?= esc(old('email')) ?>"
            required
        >
        <?= validation_show_error('email') ?>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone (Optional)</label>
        <input
            type="text"
            name="phone"
            id="phone"
            class="form-control"
            value="<?= esc(old('phone')) ?>"
        >
        <?= validation_show_error('phone') ?>
    </div>

    <button type="submit" class="btn btn-success">Save Customer</button>
    <a href="<?= site_url('customers') ?>" class="btn btn-secondary">Cancel</a>
</form>