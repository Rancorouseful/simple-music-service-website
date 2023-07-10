<?php $__env->startSection("content"); ?>
    <div class="intro">
        <div class="container header__container">
            <div class="header">
                <a class="logo" href="/">
                    <img class="logo_img" src="/img/logotypes/logobeatbot.png">
                    <p class="logo_text">BeatBot</p>
                </a>
            </div>
        </div>
        <div class="container falling-text">
            <div class="intro__heading">
                <div class="intro__heading__text">
                    <h1>Нейронная сеть генерирует музыку</h1>

                    <p>Удобный сервис для создания качественной музыки на основе обученной нейронной сети</p>
                    <!-- <div class="intro__buttons">
                        <a href="https://t.me/NeuralBeatBot" class="intro__button falling-text">
                            <p>Перейти к боту</p>
                        </a>
                        <a href="/auth" class="intro__button falling-text">
                            <p>Создать бит</p>
                        </a>
                    </div> -->
                </div>
                <!-- <div class="intro__heading_slider floating-animation">
                    <div class="carousel falling-text">
                        <div class="slide active">
                            <div class="slide__style__container">
                                <p>Old School</p>
                            </div>
                        </div>

                        <div class="slide">
                            <div class="slide__style__container">
                                <p>Jersey Club</p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide__style__container">
                                <p>Trap</p>
                            </div>
                        </div>
                    </div>

                    <div class="navbar falling-text">
                        <div class="nav-indicator active"></div>
                        <div class="nav-indicator"></div>
                        <div class="nav-indicator"></div>
                    </div>

                </div> -->
            </div>
        </div>

        <div class="billet falling-text">
            <div class="container">
                <div class="billet__flex">
                    <div class="billet__href falling-text">
                        <a class="billet__button" href="">
                            <p>Перейти к боту</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cards">
        <div class="container">
            <div class="cards__flex">
                <div class="card">
                    <div class="card__header">
                        <img src="/img/dollar-icon.svg" class="card__header__img">
                        <h2>Для рекламы</h2>
                    </div>
                    <p class="card__text">Хотите, чтобы ваша реклама звучала профессионально и запоминалась? Наш
                        Telegram-бот поможет вам создать качественный бит, который подчеркнет уникальность вашего
                        продукта и
                        привлечет внимание аудитории.</p>
                </div>
                <div class="card">
                    <div class="card__header">
                        <img src="/img/music-icon.svg" class="card__header__img">
                        <h2>Бит под голос</h2>
                    </div>
                    <p class="card__text">Вы являетесь исполнителем и хотите, чтобы ваша музыка звучала на высшем
                        уровне?
                        Наш Telegram-бот поможет вам создать идеальный бит, который подойдет под ваш стиль и поможет вам
                        выделиться на фоне конкурентов. Зачитывайте свои тексты под нашими битами и получайте
                        качественный
                        звук.</p>
                </div>
                <div class="card">
                    <div class="card__header">
                        <img src="/img/play-icon.svg" class="card__header__img">
                        <h2>Фон для видео</h2>
                    </div>
                    <p class="card__text">Хотите создать профессиональное видео, которое будет привлекать внимание
                        зрителей?
                        Применяйте наши биты как фон для разных видео: от рекламы до видеообзоров и получайте
                        качественный
                        звук.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="about falling-text">
        <div class="container">
            <div class="about__flex about__styles">
                <p class="about__text">Генерация битов с помощью <span class="highlight">Neural Networks</span>, <span
                        class="highlight">AI</span>. Не имеет аналогов. Множество стилей на выбор. </p>
                <img class="about__svg" src="/img/illustrations/Styles.svg">
            </div>
            <div class="about__flex about__formats">
                <div class="about__text">
                    <p>Качество звука: PLATINUM</p>
                    <br>
                    <p>Quality 512-point sinc</p>
                    <p>HQ for all plugins</p>
                    <p>Disable maximum polyphony</p>
                    <br>
                    <p>Все основные форматы: <span class="highlight">.wav</span>, <span class="highlight">.mp3</span>.
                    </p>
                </div>
                <img class="about__svg" src="/img/illustrations/Formats.svg">
            </div>
            <div class="about__flex about__versions">
                <p class="about__text"><span class="highlight">ALL RIGHTS</span> на все биты созданные в beatbot.</p>
                <img class="about__svg" src="/img/illustrations/Versions.svg">
            </div>
        </div>
    </div>
    <div class="meeting">
        <div class="container">
            <div class=" meeting__flex">
                <div class="meeting__phone">

                    <div class="screen__chat">
                        <div class="message from__user">
                            <div class="message__user">
                                Сделай мне бит
                            </div>
                        </div>
                        <div class="message from__bot">
                            <div class="message__bot">
                                Скидываю примеры...
                            </div>
                        </div>
                        <div class="message from__bot">
                            <div class="message__bot message__player">
                                <audio id="audio" src="/audio/examplebeat1.wav"></audio>
                                <button id="play-pause" class="btn-round">
                                    <img id="play-pause-icon" src="/img/play.png" alt="Play">
                                </button>
                                <input id="seek-bar" type="range" min="0" max="100" value="0" class="audio-track">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="meeting__text">
                    <h1>Почему телеграм-бот?</h1>
                    <br>
                    Создание уникальной музыки может быть сложной задачей, но с помощью нашего Telegram-бота вы сможете
                    создавать качественные биты быстро и легко.<br><br>Наш бот предоставляет простой и интуитивно
                    понятный
                    интерфейс, который позволяет вам выбирать из множества стилей и жанров, настраивать звук и
                    микширование,
                    а также экспортировать готовый трек для дальнейшего использования.<br><br>

                    Благодаря нашему боту вы можете создавать уникальные биты в любое время и в любом месте, используя
                    только свой мобильный телефон или планшет.<br>Наш Telegram-бот является лучшим инструментом для
                    начинающих музыкантов и продюсеров, которые хотят создавать качественную музыку, не тратя много
                    времени
                    и усилий.<br><br>

                    Попробуйте наш бот сегодня и начните создавать свою уникальную музыку уже сейчас!<br><br>
                </div>
            </div>
        </div>
    </div>


    <script src="/js/script.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\beatmaker.site\resources\views/index.blade.php ENDPATH**/ ?>
