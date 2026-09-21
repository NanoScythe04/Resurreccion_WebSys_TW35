<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>

    <h1>Tasks for Today</h1>

    <nav>
        <a href="/">Welcome</a> |
        <a href="/tasks">Task List</a> |
        <a href="/profile">Profile</a> |
        <a href="/about">About</a>
    </nav>

    <hr>

    <?php if (!empty($tasks)): ?>

        <?php foreach ($tasks as $task): ?>

            <div>
                <h3><?= esc($task['title']) ?></h3>
                <p>Status: <?= esc($task['status']) ?></p>
                <p>Date: <?= esc($task['task_date']) ?></p>
            </div>

            <hr>

        <?php endforeach; ?>

    <?php else: ?>

        <p>No tasks for today.</p>

    <?php endif; ?>

</body>
</html>