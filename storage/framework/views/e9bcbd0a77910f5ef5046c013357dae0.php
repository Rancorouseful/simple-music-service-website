<?php $__env->startSection('content'); ?>

    <div class="intro">
        <div class="container header__container">
            <div class="header">
                <div class="logo">
                    <img class="logo_img" src="<?php echo e(asset('build/img/logotypes/logobeatbot.png')); ?>">
                    <p class="logo_text">BeatBot</p>
                    <p class="for_devs">админка</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="auth__window falling-text">
                <h2 class="auth__heading">Вход:</h2>
                <form method="POST" action="<?php echo e(route('admin.login_process')); ?>">
                    <?php echo csrf_field(); ?>

                    <label class="auth__label" for="name">Имя пользователя:</label>
                    <br>

                    <input class="auth__input" type="text" id="name" name="name" required autofocus>

                    <label class="auth__label" for="password">Пароль:</label>
                    <br>
                    <input class="auth__input" type="password" id="password" name="password" required><br><br>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p><?php echo e($error); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                    <br>
                    <input class="auth__button" type="submit" value="Войти">



                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>