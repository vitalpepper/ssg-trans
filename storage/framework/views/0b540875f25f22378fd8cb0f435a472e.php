<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Global Sets')); ?>

<?php $__env->startSection('content'); ?>

    <?php if (! ($globals->isEmpty())): ?>

        <div class="flex items-center mb-6">
            <h1 class="flex-1"><?php echo e(__('Globals')); ?></h1>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', 'Statamic\Contracts\Globals\GlobalSet')): ?>
                <a href="<?php echo e(cp_route('globals.create')); ?>" class="btn-primary"><?php echo e(__('Create Global Set')); ?></a>
            <?php endif; ?>
        </div>

        <global-listing :globals="<?php echo e(json_encode($globals)); ?>"></global-listing>

    <?php else: ?>

        <?php echo $__env->make('statamic::partials.empty-state', [
            'title' => __('Globals'),
            'description' => __('statamic::messages.global_set_config_intro'),
            'svg' => 'empty/globals',
            'button_url' => cp_route('globals.create'),
            'button_text' => __('Create Global Set'),
            'can' => $user->can('create', 'Statamic\Contracts\Globals\GlobalSet')
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php endif; ?>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Global Variables'),
        'url' => Statamic::docsUrl('globals')
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/bujar/Documents/GitHub/ssg-translation/vendor/statamic/cms/src/Providers/../../resources/views/globals/index.blade.php ENDPATH**/ ?>