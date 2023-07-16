<?php $__env->startSection('content'); ?>
    <div class="intro">
        <div class="container header__container">
            <div class="header">
                <a class="logo" href="/">

                    <img class="logo_img" src="<?php echo e(asset('build/img/logotypes/logobeatbot.png')); ?>">
                    <p class="logo_text">BeatBot</p>

                    <p class="admin__for__devs">Админ-панель</p>
                </a>
            </div>
        </div>
        <div class="container admin__window__longer">
            <div class="admin__heading">

                <?php echo $__env->yieldContent('heading'); ?>

                <form action="/admin">
                    <button class="home__button">К таблицам</button>
                </form>
            </div>
            <p class="admin__description">
                <?php echo $__env->yieldContent('description'); ?>
            </p>
            <br>
            <h3>
                Статус:
            </h3>
            <br>
            <div class="admin__commands">
                <?php echo $__env->yieldContent('status'); ?>
            </div>
            <br>
            <h3>
                Команды:
            </h3>
            <br>
            <div class="admin__commands">
                <?php echo $__env->yieldContent('commands'); ?>
            </div>
            <br>
            <h3>
                Все записи:
            </h3>
            <div class="admin__table">
                <?php echo $__env->yieldContent('rows'); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/admin/layout.blade.php ENDPATH**/ ?>