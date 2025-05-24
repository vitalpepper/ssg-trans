<?php $__env->startSection('content'); ?>

<nav-builder
    title="<?php echo e($title); ?>"
    index-url="<?php echo e(Statamic\Statamic::pro() && Statamic\Facades\User::current()->can('manage preferences') ? cp_route('preferences.nav.index') : false); ?>"
    update-url="<?php echo e($updateUrl); ?>"
    destroy-url="<?php echo e($destroyUrl); ?>"
    :save-as-options="<?php echo e(json_encode($saveAsOptions)); ?>"
    :nav="<?php echo e(json_encode($nav)); ?>"
></nav-builder>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/bujar/Documents/GitHub/ssg-translation/vendor/statamic/cms/src/Providers/../../resources/views/nav/edit.blade.php ENDPATH**/ ?>