<?php $__env->startSection('card'); ?>
    <div class="auth__window">
        <?php if($errors->any()): ?>
            <div class="auth__hidden">
                <div class="has-text-danger has-text-weight-bold">
                    <?php echo e(__('auth.error')); ?>

                </div>

                <ul class="has-text-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <h2 class="auth__heading">Забыли пароль?</h2>

        <?php if(session('status')): ?>
            <div class="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('password.email')); ?>">
            <?php echo csrf_field(); ?>

            <label class="auth__label">
                Без проблем. Просто сообщите нам свой адрес электронной почты, и мы пришлем вам
                ссылку для сброса пароля.
            </label>
            <br><br>
            <input
                class="auth__input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="email"
                type="email"
                name="email"
                value="<?php echo e(old('email')); ?>"
                required
                autofocus
                placeholder="Почта"
            >

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="help is-danger"><?php echo e($message); ?></p>
            <br>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <input
                class="auth__input <?php $__errorArgs = ['captcha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="captcha"
                type="text"
                name="captcha"
                required
                placeholder="Введите символы с картинки"
            >
            <br><br>
            <div class="auth__captcha">
                <img class="auth__captcha__img" src="<?php echo e(captcha_src('flat')); ?>" alt="">
            </div>

            <?php $__errorArgs = ['captcha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

            <p class="captcha__wrong"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <br><br>
            <button type="submit" class="auth__button">
                <?php echo e(__('Восстановить пароль')); ?>

            </button>

        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/auth/forgot-password.blade.php ENDPATH**/ ?>