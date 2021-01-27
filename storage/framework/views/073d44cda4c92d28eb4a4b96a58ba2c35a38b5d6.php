<?php $__env->startSection('title'); ?>
Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('error'); ?>
<?php if($errors->any()): ?>
  <div class="alert alert-danger">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('conf1')); ?>" method="post">
	<?php echo csrf_field(); ?>
	<div class="form-group">
		<lable for="name">login</lable>
		<input type="text" name="LoginForm" placeholder="login" id="LoginForm" class="form-control">

    <lable for="name">password</lable>
		<input type="text" name="PasswordForm" placeholder="Password" id="PasswordForm" class="form-control">
	</div>
<button type="submit" class="btn btn-success">Create</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\maslo\Downloads\OpenServer\domains\project.loc\resources\views/home.blade.php ENDPATH**/ ?>