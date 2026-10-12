<h2 class="mb-3">User Accounts</h2>

<div class="d-flex justify-content-end mb-3">
    <a href="<?= site_url('users/new') ?>" class="btn btn-primary">
        Add User
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th class="text-center">Avatar</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user) { ?>
                <?php
                    $avatarFile = ! empty($user['avatar'])
                        ? basename($user['avatar'])
                        : '';

                    if ($avatarFile === '' || ! is_file(FCPATH . 'uploads/' . $avatarFile)) {
                        $avatarFile = 'user-placeholder.svg';
                    }
                ?>
                <tr>
                    <td><?= esc($user['id']) ?></td>
                    <td class="text-center align-middle">
                        <img
                            src="<?= esc(base_url('uploads/' . $avatarFile), 'attr') ?>"
                            alt="Avatar for <?= esc($user['username'], 'attr') ?>"
                            width="60"
                            height="60"
                            class="rounded-circle"
                        >
                    </td>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['created_at']) ?></td>
                    <td>
                        <a
                            href="<?= site_url('users/edit/' . $user['id']) ?>"
                            class="btn btn-warning btn-sm"
                        >
                            Edit
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>