<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('CP Nav Preferences')); ?>

<?php $__env->startSection('content'); ?>

    <div class="flex justify-between items-center mb-6">
        <h1><?php echo $__env->yieldContent('title'); ?></h1>
    </div>

    <div class="card p-0 mb-4">
        <table class="data-table">
            <tr>
                <td>
                    <div class="flex items-center">
                        <div class="w-4 h-4 rtl:ml-4 ltr:mr-4"><?php echo Statamic::svg('icons/light/earth') ?></div>
                        <a href="<?php echo e(cp_route('preferences.nav.default.edit')); ?>"><?php echo e(__('Default')); ?></a>
                    </div>
                </td>
                <td class="rtl:text-left ltr:text-right text-2xs text-gray-500">
                    <?php if(Statamic\Facades\Preference::default()->hasPreference('nav')): ?>
                        <?php echo e(__('Modified')); ?>

                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </div>

    <?php if(Statamic\Facades\Role::all()->isNotEmpty()): ?>
        <h3 class="little-heading rtl:pr-0 ltr:pl-0 mb-2"><?php echo e(__('Override For Role')); ?></h3>
        <div class="card p-0 mb-4">
            <table class="data-table">
                <?php $__currentLoopData = Statamic\Facades\Role::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="flex items-center">
                                <div class="w-4 h-4 rtl:ml-4 ltr:mr-4"><?php echo Statamic::svg('icons/light/shield-key') ?></div>
                                <a href="<?php echo e(cp_route('preferences.nav.role.edit', [$role->handle()])); ?>"><?php echo e(__($role->title())); ?></a>
                            </div>
                        </td>
                        <td class="rtl:text-left ltr:text-right text-2xs text-gray-500">
                            <?php if($role->hasPreference('nav')): ?>
                                <?php echo e(__('Modified')); ?>

                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    <?php endif; ?>

    <h3 class="little-heading rtl:pr-0 ltr:pl-0 mb-2"><?php echo e(__('Override For User')); ?></h3>
    <div class="card p-0 mb-4">
        <table class="data-table">
            <tr>
                <td>
                    <div class="flex items-center">
                        <div class="w-4 h-4 rtl:ml-4 ltr:mr-4"><?php echo Statamic::svg('icons/light/user') ?></div>
                    <a href="<?php echo e(cp_route('preferences.nav.user.edit')); ?>"><?php echo e(__('My Nav')); ?></a>
                    </div>
                </td>
                <td class="rtl:text-left ltr:text-right text-2xs text-gray-500">
                    <?php if(Statamic\Facades\User::current()->hasPreference('nav')): ?>
                        <?php echo e(__('Modified')); ?>

                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </div>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Customizing the Control Panel Nav'),
        'url' => Statamic::docsUrl('customizing-the-cp-nav')
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/bujar/Documents/GitHub/ssg-translation/vendor/statamic/cms/src/Providers/../../resources/views/nav/index.blade.php ENDPATH**/ ?>