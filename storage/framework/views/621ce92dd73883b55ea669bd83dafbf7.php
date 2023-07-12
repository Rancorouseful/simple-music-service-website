<?php $__env->startSection('card'); ?>
  <div class="card-content">
    <?php if(session('status') === 'verification-link-sent'): ?>
      <div class="has-text-success mb-4">
        На адрес электронной почты, который вы указали при регистрации, была отправлена новая ссылка для подтверждения.
      </div>
    <?php endif; ?>
    <label class="label">
      Спасибо за регистрацию! Прежде чем начать, вам необходимо подтвердить свой адрес электронной почты, щелкнув
      ссылку, которую мы отправили вам на почту. Если вы не получили письмо, мы с радостью отправим вам другое.
    </label>
    <hr>
    <form method="POST" action="<?php echo e(route('verification.send')); ?>">
      <?php echo csrf_field(); ?>

      <button type="submit" class="button">
        <?php echo e(__('Отправить еще раз')); ?>

      </button>
    </form>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/auth/verify-email.blade.php ENDPATH**/ ?>