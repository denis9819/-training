
<!DOCTYPE>
<html lang="ru">
    <head>
        <title>Денис</title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
        </style>
    </head>
    <body>
    <?php
    $userName = 'Денис';
    $userAge = 20;
    $userEmail = 'denisozar@gmail.com';
    $userCity= 'Одесса';
    $userAbout = 'Будущий программист';
    ?>
        <h1>Страница пользователя Денис</h1>
        <dl>
            <dt>Имя</dt>
            <dd><strong><?= $userName ?></strong></dd>
            <dt>Возраст</dt>
            <dd><strong><?= $userAge ?></strong></dd>
            <dt>Адрес электронной почты</dt>
            <dd><a href="mailto:denisozar@gmail.com"><strong><?= $userEmail ?></strong></a></dd>
            <dt>Город</dt>
            <dd><strong><?= $userCity ?></strong></dd>
            <dt>О себе</dt>
            <dd><strong><?= $userAbout ?></strong></dd>
        </dl>
    </body>
</html>