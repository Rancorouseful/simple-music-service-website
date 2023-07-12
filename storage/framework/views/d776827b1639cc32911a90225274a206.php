<?php $__env->startSection('content'); ?>
    <div class="intro">
        <div class="container header__container">
            <div class="header">
                <a class="logo" href="/">
                    <img class="logo_img" src="<?php echo e(asset('build/img/logotypes/logobeatbot.png')); ?>">
                    <p class="logo_text">BeatBot</p>
                </a>
            </div>
        </div>
        <div class="container falling-text">
            <div class="home">
                <p style='color: #797979;'><a href='/'>Главная</a> / Личный кабинет</p>
                <div class="home__flex">
                    <div class="home__heading">
                        <h1 class="home__username">
                            Приветствуем, <?php echo e($username); ?>.
                        </h1>
                        <p class="home__info">Это ваш личный кабинет.<br>Здесь будет появляться информация об активности на вашем аккаунте.</p>
                    </div>
                    <div class="home__functionality">
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button class="home__button">Выйти</button>
                        </form>
                    </div>
                </div>
                <div class="home__grid__container">
                    <div class="home__grid">
                        <div class="grid__item item__for_ad">
                            <h2>
                                Сайт в разработке!
                            </h2>
                            <br>
                            <p>
                                На данный момент сайт находится в процессе <span class="highlight">разработки.</span><br>
                                <br>
                                В дальнейшем вы сможете связать свой чат в телеграме с аккаунтом на сайте для сохранения данных и учётности, а также <span class="highlight">генерировать</span> биты прямо на сайте!
                            </p>

                        </div>
                        <div class="grid__item item__for_voice">
                            <h2>
                                Канал в телеграме
                            </h2>
                            <br>
                            <p>
                                Наш бот уже запущен в работу и генерирует биты всем желающим!<br><br>За новостями о разработке сервиса вы можете следить в нашем <span class="highlight">телеграм-канале</span>:
                            </p>
                            <br>
                            <form action="https://t.me/beatbotnews" target="_blank">
                                <?php echo csrf_field(); ?>
                                <button class="home__button">Канал</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/home.blade.php ENDPATH**/ ?>