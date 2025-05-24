<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', Statamic::crumb($collection->title(), 'Collections')); ?>

<?php $__env->startSection('content'); ?>

<header class="mb-6">
    <?php echo $__env->make('statamic::partials.breadcrumb', [
        'url' => cp_route('collections.index'),
        'title' => __('Collections')
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <h1 v-pre><?php echo e(__($collection->title())); ?></h1>
</header>

<div class="card p-4 content">
    <div class="flex flex-wrap">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $collection)): ?>
        <a href="<?php echo e(cp_route('collections.edit', $collection->handle())); ?>" class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 dark:hover:bg-dark-550 rounded-md group">
            <div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800 dark:text-dark-175">
                <?php echo Statamic::svg('icons/light/hammer-wrench') ?>
            </div>
            <div class="flex-1 mb-4 md:mb-0 rtl:md:ml-6 ltr:md:mr-6">
                <h3 class="mb-2 text-blue dark:text-blue-600"><?php echo e(__('Configure Collection')); ?> <?php echo Statamic::cpDirection() === 'ltr' ? '&rarr;' : '&larr;' ?></h3>
                <p><?php echo e(__('statamic::messages.collection_next_steps_configure_description')); ?></p>
            </div>
        </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', ['Statamic\Contracts\Entries\Entry', $collection, \Statamic\Facades\Site::get($site)])): ?>
        <?php $multipleBlueprints = $collection->entryBlueprints()->count() > 1 ?>
        <?php if($multipleBlueprints): ?><div
        <?php else: ?><a href="<?php echo e(cp_route('collections.entries.create', [$collection->handle(), $site])); ?>"
        <?php endif; ?>
            class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 dark:hover:bg-dark-550 rounded-md group"
        >
            <div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800 dark:text-dark-175">
                <?php echo Statamic::svg('icons/light/content-writing') ?>
            </div>
            <div class="flex-1 mb-4 md:mb-0 rtl:md:ml-6 ltr:md:mr-6">
                <h3 class="mb-2 text-blue dark:text-blue-600"><?php echo e($collection->createLabel()); ?> <?php if(!$multipleBlueprints): ?> <?php echo Statamic::cpDirection() === 'ltr' ? '&rarr;' : '&larr;' ?> <?php endif; ?></h3>
                <p><?php echo e(__('statamic::messages.collection_next_steps_create_entry_description')); ?></p>
                <?php if($multipleBlueprints): ?>
                    <?php $__currentLoopData = $collection->entryBlueprints(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blueprint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(cp_route('collections.entries.create', [$collection->handle(), $site, 'blueprint' => $blueprint->handle()])); ?>"
                           class="text-blue text-sm rtl:ml-2 ltr:mr-2"><?php echo e($blueprint->title()); ?> <?php echo Statamic::cpDirection() === 'ltr' ? '&rarr;' : '&larr;' ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        <?php if($multipleBlueprints): ?></div><?php else: ?></a><?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('configure fields')): ?>
        <a href="<?php echo e(cp_route('collections.blueprints.index', $collection->handle())); ?>" class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 dark:hover:bg-dark-550 rounded-md group">
            <div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800 dark:text-dark-175">
                <?php echo Statamic::svg('icons/light/blueprint') ?>
            </div>
            <div class="flex-1 mb-4 md:mb-0 rtl:md:ml-6 ltr:md:mr-6">
                <h3 class="mb-2 text-blue dark:text-blue-600"><?php echo e(__('Configure Blueprints')); ?> <?php echo Statamic::cpDirection() === 'ltr' ? '&rarr;' : '&larr;' ?></h3>
                <p><?php echo e(__('statamic::messages.collection_next_steps_blueprints_description')); ?></p>
            </div>
        </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('store', 'Statamic\Contracts\Entries\Collection')): ?>
        <a href="<?php echo e(cp_route('collections.scaffold', $collection->handle())); ?>" class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 dark:hover:bg-dark-550 rounded-md group">
            <div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800 dark:text-dark-175">
                <?php echo Statamic::svg('icons/light/crane') ?>
            </div>
            <div class="flex-1 mb-4 md:mb-0 rtl:md:ml-6 ltr:md:mr-6">
                <h3 class="mb-2 text-blue dark:text-blue-600"><?php echo e(__('Scaffold Views')); ?> <?php echo Statamic::cpDirection() === 'ltr' ? '&rarr;' : '&larr;' ?></h3>
                <p><?php echo e(__('statamic::messages.collection_next_steps_scaffold_description')); ?></p>
            </div>
        </a>
        <?php endif; ?>
        <div class="hidden first:flex justify-center items-center p-8 w-full">
            <?php echo Statamic::svg($svg ?? 'empty/content') ?>
        </div>
    </div>
</div>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Collections'),
        'url' => Statamic::docsUrl('collections')
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/bujar/Documents/GitHub/ssg-translation/vendor/statamic/cms/src/Providers/../../resources/views/collections/empty.blade.php ENDPATH**/ ?>