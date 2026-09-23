<html >

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
 <?php echo csrf_field(); ?>
    <tr>
      <th scope="row"><?php echo e($task->id); ?></th>
      <td><?php echo e($task->title); ?></td>
      <td><?php echo e($task->description); ?></td>
      <td><?php echo e($task->status); ?></td>
      <td>
       <a class="btn btn-primary" href="<?php echo e(route('tasks.edit', $task->id)); ?>" role="button">Edit</a>
       <a class="btn btn-danger" href="<?php echo e(route('tasks.destroy', $task->id)); ?>" role="button" method="DELETE">Delete</a>
      </td>
    </tr>
   
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
        </body>
</html>    

















<?php /**PATH D:\كورس لارافيل\To_do_list\resources\views\tasks\index.blade.php ENDPATH**/ ?>