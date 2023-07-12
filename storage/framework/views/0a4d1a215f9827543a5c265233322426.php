<?php $__env->startSection('card'); ?>
    <div class="auth__window">


        <h2 class="auth__heading">
            <?php echo e(__('Восстановить доступ')); ?>

        </h2>

        <?php if($errors->any()): ?>
            <div class="auth__hidden">
                <div class="has-text-danger has-text-weight-bold">
                    <?php echo e(__('auth.error')); ?>

                </div>

                <ul class="">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('password.update')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">
            <input type="hidden" name="email" value="<?php echo e(old('email', $request->email)); ?>">


            <input
                class="auth__input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="Новый пароль"
            >

            <input
                class="auth__input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
                placeholder="Повторите пароль"
            >

            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class=""><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <br><br>
            <button type="submit" class="auth__button">
                <?php echo e(__('Сбросить пароль')); ?>

            </button>

        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/auth/reset-password.blade.php ENDPATH**/ ?>