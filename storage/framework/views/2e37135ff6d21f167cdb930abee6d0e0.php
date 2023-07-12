<?php $__env->startSection('card'); ?>
    <div class="auth__window falling-text">
        <h2 class="auth__heading"><?php echo e(__('Register')); ?></h2>
        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <label class="auth__label" for="username"><?php echo e(__('Name')); ?></label>

            <input class="auth__input <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" type="text" name="name"
                   value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus><br>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </p>
            <br>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label class="auth__label" for="email"><?php echo e(__('Email Address')); ?></label>

            <input class="auth__input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" id="email" name="email" required autocomplete="email" placeholder="example@mail.ru"><br>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </p>
            <br>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label class="auth__label" for="password"><?php echo e(__('Password')); ?></label>

            <input id="password" type="password" class="auth__input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password" placeholder="Не менее 8 символов"><br>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </p>
            <br>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label class="auth__label" for="password"><?php echo e(__('Confirm Password')); ?></label>

            <input id="password-confirm" type="password" class="auth__input"
                   name="password_confirmation" required autocomplete="new-password"><br>
            <br><br>
            <button class="auth__button" type="submit" value="Войти"><?php echo e(__('Register')); ?></button>
        </form>
        <p class="auth__switch">Уже есть аккаунт? <a href="<?php echo e(route('login')); ?>">Войти</a></p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/auth/register.blade.php ENDPATH**/ ?>