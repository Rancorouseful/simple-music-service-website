<header class="has-border-bottom">
  <div class="container">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="/">
          <img src="<?php echo e(asset('img/logo.svg')); ?>" width="114" alt="PriceHype" class="h-20">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMain">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarMain" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="<?php echo e(route('shops')); ?>" title="Список магазины">
            Магазины
          </a>

          <a class="navbar-item" href="<?php echo e(route('brands')); ?>" title="Список бренды">
            Бренды
          </a>

          <a class="navbar-item is-hidden-desktop" href="<?php echo e(route('search')); ?>" title="Найти товары">
            Найти товары
          </a>

        </div>

        <?php if(!isset($hideSearch)): ?>
          <div class="navbar-item w-full is-flex-1 is-hidden-touch">
            <form action="<?php echo e(route('search')); ?>" method="GET" class="w-full">
              <label for="search" aria-hidden="true" class="is-hidden">Посик товаров</label>
              <input id="search" type="text" class="input" name="query" placeholder="Найти товары">
            </form>
          </div>
        <?php endif; ?>

        <div class="navbar-end">
          <?php
            $lovedProducts = array_filter(explode(',', request()->cookie('loved_products', '')));
            $lovedCount = count($lovedProducts);
          ?>
          <a class="navbar-item is-hidden-desktop" href="<?php echo e(route('favorites')); ?>" title="Избранные товары">
            Избранные товары <?php if($lovedCount > 0): ?> <span class="tag is-rounded is-danger"><?php echo e($lovedCount); ?></span> <?php endif; ?>
          </a>

          <div class="navbar-item is-hidden-touch">
            <a class="button" href="<?php echo e(route('favorites')); ?>" title="Избранные товары">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-heart" viewBox="0 -1 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
              </svg>
              <span
                id="lovedProductCount"
                class="tag is-danger is-small is-rounded ml-1 <?php echo e($lovedCount > 0 ? '' : 'is-hidden'); ?>"
              >
                <?php echo e($lovedCount); ?>

              </span>
            </a>
          </div>

          <div class="navbar-item">
              <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('profile')); ?>" class="has-text-black">
                  👋 <span class="ml-2"><?php echo e(Auth::user()->name); ?></span>
                </a>
              <?php endif; ?>
              <?php if(auth()->guard()->guest()): ?>
                <div class="buttons">
                  <a href="<?php echo e(route('login')); ?>" class="button" title="Войти на сайт">
                    Войти
                  </a>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
<?php /**PATH F:\beatmaker.site\resources\views/layouts/header.blade.php ENDPATH**/ ?>