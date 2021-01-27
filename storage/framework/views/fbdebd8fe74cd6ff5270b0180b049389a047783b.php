<?php
namespace App\Http\Controllers;
use resources\views\tasks;
?>



<?php $__env->startSection('content'); ?>

<form action="<?php echo e(url('task')); ?>" method="POST" class="form-horizontal">
    <?php echo e(csrf_field()); ?>


    <!-- Task Name -->
    <div class="form-group">
        <label for="task-name" class="col-sm-3 control-label">New task</label>

        <div class="col-sm-6">
            <input type="text" name="name" id="task-name" class="form-control" value="<?php echo e(old('task')); ?>">
        </div>
    </div>

    <!-- Add Task Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Change Task
            </button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\maslo\Downloads\OpenServer\domains\project.loc\resources\views/update.blade.php ENDPATH**/ ?>