<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Create Collection')); ?>

<?php $__env->startSection('content'); ?>
    <collection-create-form
        route="<?php echo e(cp_route('collections.store')); ?>">
    </collection-create-form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/bujar/Documents/GitHub/ssg-translation/vendor/statamic/cms/src/Providers/../../resources/views/collections/create.blade.php ENDPATH**/ ?>