<form method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
    <?php echo csrf_field(); ?>
    <div>
        <label for="name">Имя пользователя</label>
        <input type="text" id="name" name="name" required autofocus>
    </div>

    <div>
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" required>
    </div>
    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p>Чето неверно</p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <button type="submit">Войти</button>
</form>
<?php /**PATH F:\beatmaker.site\resources\views/admin/login.blade.php ENDPATH**/ ?>