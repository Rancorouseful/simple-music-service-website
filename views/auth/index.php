<link rel="stylesheet" href="/css/auth.css">
<div class="intro">
    <header class="container header__container">
        <div class="header">
            <a class="logo" href="/">
                <img class="logo_img" src="/img/logotypes/logobeatbot.png">
                <h3 class="logo_text">BeatBot</h3>
            </a>
        </div>
    </header>
    <div class="container">
        <div class="auth__window falling-text">
            <h2 class="auth__heading">Вход в аккаунт:</h2>
        <form action="/login" method="post">
            <label class="auth__label" for="username">Имя пользователя:</label>
            <br>
            <input class="auth__input" type="text" id="username" name="username" required><br><br>
            <label class="auth__label" for="password">Пароль:</label>
            <br>
            <input class="auth__input" type="password" id="password" name="password" required><br><br>
            <br>
            <input class="auth__button" type="submit" value="Войти">
        </form>
        </div> 
    </div>
</div>
