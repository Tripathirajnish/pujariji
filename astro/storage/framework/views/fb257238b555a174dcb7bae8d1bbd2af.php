<?php $__env->startSection('subhead'); ?>
    <title>Blog Details</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('subcontent'); ?>
    <div id="loader" class="center">
    </div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Blog Details</h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-start justify-start lg:justify-start">
                <div class="w-20 h-40 h-40 w-60 image-fit" style="height:200px;width:280px">
                    <?php if(
                        $blogDetail['extension'] == 'jpg' ||
                            $blogDetail['extension'] == 'jpeg' ||
                            $blogDetail['extension'] == 'gif' ||
                            $blogDetail['extension'] == 'png'): ?>
                        <img alt="Blog image" class="rounded-t-md" src="/<?php echo e($blogDetail['blogImage']); ?>">
                    <?php else: ?>
                        <video controls preload="metadata"
                            style="height:100%;width:100%;object-fit:cover;position:absolute;z-index:10">
                            <source src="/<?php echo e($blogDetail['blogImage']); ?>" type="video/mp4">
                            <track label="English" kind="subtitles" srclang="en" default />
                        </video>
                    <?php endif; ?>
                </div>
                <div class="intro-y  col-span-12 lg:col-span-12">
                    <div class="flex items-center p-2 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto"><?php echo e($blogDetail['title']); ?></h2>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center">
                            <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Posted By :<span
                                class="  ml-1"><?php echo e($blogDetail['author']); ?></span>
                        </div>
                        <div class="flex items-center mt-3">
                            <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Posted Date :
                            <?php echo e(date('d-m-Y', strtotime($blogDetail['postedOn']))); ?>

                        </div>
                        <div class="flex items-center mt-3">
                            <i data-lucide="eye" class="w-4 h-4 text-slate-500 mr-2"></i> Read By : <span
                                class=" px-2 ml-1"><?php echo e($blogDetail['viewer'] ? $blogDetail['viewer'] : 0); ?></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END: Profile Info -->
    <div class="intro-y tab-content mt-5">
        <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="grid grid-cols-12 gap-6">

                <!-- BEGIN: Top Categories -->
                <div class="intro-y box col-span-12 lg:col-span-12">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Description</h2>
                    </div>
                    <div class="p-5">
                        <?php echo $blogDetail['description']; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layout/' . $layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/resources/views/pages/blog-detail.blade.php ENDPATH**/ ?>