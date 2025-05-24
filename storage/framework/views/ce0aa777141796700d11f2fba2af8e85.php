<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Configure Collection')); ?>

<?php $__env->startSection('content'); ?>

    <collection-edit-form
        :blueprint="<?php echo e(json_encode($blueprint)); ?>"
        :initial-values="<?php echo e(json_encode($values)); ?>"
        :meta="<?php echo e(json_encode($meta)); ?>"
        url="<?php echo e(cp_route('collections.update', $collection->handle())); ?>"
    ></collection-edit-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/bujar/Documents/GitHub/ssg-translation/vendor/statamic/cms/src/Providers/../../resources/views/collections/edit.blade.php ENDPATH**/ ?>