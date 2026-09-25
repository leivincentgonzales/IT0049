<?php
/** @var array $users User records
 */
?>

<h1>User Accounts</h1>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Full Name</th>
        <th>Created At</th>
    </tr>

    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?= esc($user['id']) ?></td>
            <td><?= esc($user['username']) ?></td>
            <td><?= esc($user['full_name']) ?></td>
            <td><?= esc($user['created_at']) ?></td>
        </tr>
    <?php } ?>
</table>