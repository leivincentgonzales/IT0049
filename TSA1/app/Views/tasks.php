<?php
/** @var array $tasks Task records */
?>

<div class="row">
    <div class="col col-md-12">
        <h1>Complete Task List</h1>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Task</th>
                <th>Status</th>
                <th>Task Date</th>
                <th>Created At</th>
            </tr>

            <?php foreach ($tasks as $task) { ?>
                <tr>
                    <td><?= esc($task['id']) ?></td>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc($task['status']) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                    <td><?= esc($task['created_at']) ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>