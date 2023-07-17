<?php $__env->startSection('heading'); ?><h1>Таблица bot_users</h1><?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?><b>bot_users</b> - таблица пользователей телеграм бота.<?php $__env->stopSection(); ?>

<?php $__env->startSection('status'); ?>
    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert-danger">
                <?php echo e($error); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <div class="alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>
    <?php if(session('success')): ?>
        <div class="alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('commands'); ?>
    <form action="<?php echo e(route('admin.bot_users.update_balance')); ?>" method="POST" class="admin__command">
        <?php echo csrf_field(); ?>
        <div class="admin__command__part">
            <p>Изменить balance:</p>
        </div>
        <div class="admin__command__part">
            <label for="user">Пользователь: </label>
            <select name="user" id="user" class="admin__command__select">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->username); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="admin__command__part">
            <label for="balance">Изменить: </label>
            <input type="number" name="balance" id="balance" class="admin__command__input" placeholder="сумма изменения">
        </div>
        <input type="submit" value="Обновить" class="admin__button__small">
    </form>
    <form action="<?php echo e(route('admin.bot_users.update_processing')); ?>" method="POST" class="admin__command">
        <?php echo csrf_field(); ?>
        <div class="admin__command__part">
            <p>Сбросить processing:</p>
        </div>
        <div class="admin__command__part">
            <label for="user">Пользователь: </label>
            <select name="user" id="user" class="admin__command__select">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->username); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <input type="submit" value="Сбросить" class="admin__button__small">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rows'); ?>
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
            username
        </p>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="admin__table__item__heading__row"><?php echo e($user->username); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            user_initials
        </p>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="admin__table__item__heading__row"><?php echo e($user->user_initials); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            chat_id
        </p>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="admin__table__item__heading__row"><?php echo e($user->chat_id); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            balance
        </p>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="admin__table__item__heading__row"><?php echo e($user->balance); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            received_beats
        </p>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="admin__table__item__heading__row"><?php echo e($user->received_beats); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            beats_vers_messages
        </p>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="admin__table__item__heading__row"><?php echo e($user->beats_vers_messages); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            processing
        </p>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="admin__table__item__heading__row"><?php echo e($user->processing); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            beats_generating
        </p>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="admin__table__item__heading__row"><?php echo e($user->beats_generating); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/admin/bot_users.blade.php ENDPATH**/ ?>