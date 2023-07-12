<?php $__env->startSection('content'); ?>
    <div class="intro">
        <header class="container header__container">
            <div class="header">
                <a class="logo" href="/">
                    <img class="logo_img" src="<?php echo e(asset('build/img/logotypes/logobeatbot.png')); ?>">
                    <h3 class="logo_text">BeatBot</h3>
                </a>
            </div>
        </header>
        <div class="container">
            <?php echo $__env->yieldContent('card'); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/auth/layout.blade.php ENDPATH**/ ?>