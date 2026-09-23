<form action="<?php echo e(route('tasks.update', $task->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo e($task->title); ?>" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required><?php echo e($task->description); ?></textarea>
    </div>
    <div>
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="pending" <?php echo e($task->status === 'pending' ? 'selected' : ''); ?>>Pending</option>
            <option value="in_progress" <?php echo e($task->status === 'in_progress' ? 'selected' : ''); ?>>In Progress</option>
            <option value="completed" <?php echo e($task->status === 'completed' ? 'selected' : ''); ?>>Completed</option>
        </select>
    </div>
    <button type="submit">Update Task</button>
</form><?php /**PATH D:\كورس لارافيل\To_do_list\resources\views\update.blade.php ENDPATH**/ ?>