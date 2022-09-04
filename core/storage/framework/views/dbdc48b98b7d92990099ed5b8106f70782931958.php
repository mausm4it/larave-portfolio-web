<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('installer_messages.license.templateTitle')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <i class="fa fa-key fa-fw" aria-hidden="true"></i>
    License Verification
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
 
<a href="<?php echo e(route('LaravelInstaller::licenseCheck')); ?>"> next</a>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('vendor.installer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\file\core\resources\views/vendor/installer/license.blade.php ENDPATH**/ ?>