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
                <h1>
                    Таблица users
                </h1>
                <form action="/admin">
                    <button class="home__button">К таблицам</button>
                </form>
            </div>
            <p>
                <b>users</b> - таблица пользователей сайта.
            </p>
            <div class="admin__table">
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        id
                    </p>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="admin__table__item__heading__row"><?php echo e($user->id); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        name
                    </p>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="admin__table__item__heading__row"><?php echo e($user->name); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        email
                    </p>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="admin__table__item__heading__row"><?php echo e($user->email); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>








                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        created_at
                    </p>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="admin__table__item__heading__row"><?php echo e($user->created_at); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        updated_at
                    </p>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="admin__table__item__heading__row"><?php echo e($user->updated_at); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>











<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/admin/users.blade.php ENDPATH**/ ?>