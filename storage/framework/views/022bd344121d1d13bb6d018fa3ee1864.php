<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Configure Sites')); ?>

<?php $__env->startSection('content'); ?>

    <sites-edit-form
        :blueprint="<?php echo e(json_encode($blueprint)); ?>"
        :initial-values="<?php echo e(json_encode($values)); ?>"
        :meta="<?php echo e(json_encode($meta)); ?>"
        url="<?php echo e(cp_route('sites.update')); ?>"
        class="-mb-8"
    ></sites-edit-form>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Multi-Site'),
        'url' => Statamic::docsUrl('multi-site')
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/bujar/Documents/GitHub/ssg-translation/vendor/statamic/cms/src/Providers/../../resources/views/sites/configure.blade.php ENDPATH**/ ?>