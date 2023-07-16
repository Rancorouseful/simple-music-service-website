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
                    Таблица orders
                </h1>
                <form action="/admin">
                    <button class="home__button">К таблицам</button>
                </form>
            </div>
            <p>
                <b>orders</b> - отдельная таблица для хранения параметров бита, выбранных пользователями бота.
            </p>
            <div class="admin__table">
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        id
                    </p>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="admin__table__item__heading__row"><?php echo e($order->id); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        chat_id
                    </p>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="admin__table__item__heading__row"><?php echo e($order->chat_id); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        chosen_style
                    </p>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="admin__table__item__heading__row"><?php echo e($order->chosen_style); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        chosen_bpm
                    </p>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="admin__table__item__heading__row"><?php echo e($order->chosen_bpm); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        chosen_extension
                    </p>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="admin__table__item__heading__row"><?php echo e($order->chosen_extension); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>











<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/admin/orders.blade.php ENDPATH**/ ?>