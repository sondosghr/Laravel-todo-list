<form action="<?php echo e(route('tasks.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>
    </div>
    <div>
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="pending">Pending</option>
            <option value="in_progress">In Progress</option>
            <option value="completed">Completed</option>
        </select>
    </div>
    <button type="submit">Create Task</button>
</form><?php /**PATH D:\كورس لارافيل\To_do_list\resources\views/create.blade.php ENDPATH**/ ?>