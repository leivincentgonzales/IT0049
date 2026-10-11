<?php
/** @var array $tasks Today's task records */
/** @var string $today Current date */
?>

<h2 class="fs-3">Tasks for Today</h2>
<p>Date: <?= esc($today) ?></p>

<?php if (! empty($tasks)) { ?>
    <table class="table table-bordered">
        <tr>
            <th>Task</th>
            <th>Status</th>
            <th>Task Date</th>
        </tr>

        <?php foreach ($tasks as $task) { ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc(ucfirst($task['status'])) ?></td>
                <td><?= esc($task['task_date']) ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p>No tasks scheduled for today.</p>
<?php } ?>