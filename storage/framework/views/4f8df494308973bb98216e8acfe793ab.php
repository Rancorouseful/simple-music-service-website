<?php $__env->startSection('card'); ?>

    <div class="auth__window falling-text">
        <h2 class="auth__heading"><?php echo e(__('Login')); ?></h2>


        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <label for="email" class="auth__label"><?php echo e(__('Email Address')); ?></label>

            <input id="email" type="email" class="auth__input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

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

            <label for="password" class="auth__label"><?php echo e(__('Password')); ?></label>

            <input id="password" type="password"
                   class="auth__input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required
                   autocomplete="current-password">

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


            <div class="auth__flex">
                <div class="checkbox-rect">
                    <input type="checkbox" name="remember"
                           id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label class="form-check-label" for="remember">
                        <?php echo e(__('Remember Me')); ?>

                    </label>
                </div>
                <?php if(Route::has('password.request')): ?>
                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Forgot Your Password?')); ?>

                    </a>
                <?php endif; ?>
            </div>

            <button type="submit" class="auth__button">
                <?php echo e(__('Login')); ?>

            </button>
        </form>
        <p class="auth__switch">У вас нет аккаунта? <a href="<?php echo e(route('register')); ?>">Зарегистрироваться</a></p>



    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/auth/login.blade.php ENDPATH**/ ?>