<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>

    <?php if($showBreadcrumb): ?>
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('preferences.index'),
            'title' => __('Preferences'),
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <preferences-edit-form
        title="<?php echo e($title); ?>"
        :blueprint='<?php echo json_encode($blueprint, 15, 512) ?>'
        :meta='<?php echo json_encode($meta, 15, 512) ?>'
        :values='<?php echo json_encode($values, 15, 512) ?>'
        action="<?php echo e($actionUrl); ?>"
        :save-as-options="<?php echo e(json_encode($saveAsOptions)); ?>"
    ></preferences-edit-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/bujar/Documents/GitHub/ssg-translation/vendor/statamic/cms/src/Providers/../../resources/views/preferences/edit.blade.php ENDPATH**/ ?>