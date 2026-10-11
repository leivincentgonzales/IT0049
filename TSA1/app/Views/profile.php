<?php
/** @var array|null $user User record */
?>

<div class="row">
    <div class="col col-md-12">
        <h1>User Profile</h1>

        <?php if ($user) { ?>
            <p>Username: <?= esc($user['username']) ?></p>
            <p>Full Name: <?= esc($user['full_name']) ?></p>
            <p>Email: <?= esc($user['email']) ?></p>
            <p>Created At: <?= esc($user['created_at']) ?></p>
        <?php } ?>
    </div>
</div>