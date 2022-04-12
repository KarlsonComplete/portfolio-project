<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Портфолио программиста , программист на час.">
    <meta name="keywords" content="Портфолио,портфолио программиста, программист по суточно.">
    <title>Веб-портфолио</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php require "../uttermost parts/header.html" ?>

<div class='contentment'>
    <img  src='../img/20210815_181612.jpg' alt="Моя фотография">
    <section class="content">
        <div class="resume-header-main">
            <h2><strong>Храмов Кирилл</strong></h2>
            <p>Мужчина, 20 лет, родился 10 декабря 2001</p>
        </div>

        <div class="skills-table">
            <span class="resume-skills"><strong>Ключевые навыки</strong></span>
            <ul class="skills">
                <li>Обучаемость</li>
                <li>Отзывчивость</li>
                <li>PHP</li>
                <li>HTML</li>
                <li>MySQL</li>
                <li>Работа в команде</li>
                <li>CSS</li>
                <li>Bootstrap</li>
                <li>Git</li>
            </ul>
        </div>

        <div class="resume-block-education">
            <strong>Неоконченное высшее образование</strong>
            <br>
            <p>Год выпуска: 2023 <br> Севастопольский национальный технический университет, Севастополь <br> Институт информационных технологий и управления в технических системах, Управление в технических системах</p>
        </div>

        <div class="skills-table">
            <span class="resume-skills-language"><strong>Ключевые навыки</strong></span>
            <ul class="language">
                <li>Русский — Родной</li>
                <li>Английский — B1 — Средний</li>
            </ul>
        </div>


        <div class="card__body">
            <strong>Обо мне</strong>
            <p>
                Я учусь в Севастопольском государственном институте на 3 курсе. На данный момент в коммерческих проектах не участвовал , но есть большое желание. На данный момент знания беру в университете ,а также стараюсь учиться дома. На протяжении года изучаю язык программирования PHP, в данный момент осваиваю фреймворк к этому языку(laravel),поверхностно изучал SQL.Также знаю основы верстки (html/css/bootstrap).В планах изучить Javascript. В институте изучаю С++. В рамках дисциплины Инженерный проект в университете , разрабатывали небольшое приложение по поиску изображений. Есть большое желание работать и развиваться в IT.
            </p>
        </div>

        <div><h2>Форма обратной связи.</h2>
            <form name="MyForm" action="" method="post">
                <p><input class="input" name="name" ENGINE="text" style="width:15%"/>Ваше имя</p>

                <p><input class="input" name="email" type="text" style="width:15%" /> Электронная почта</p>

                <p><input type="tel" id="phone" name="phone" style="width:15%" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required> Номер телефона</p>

                <p><input id="submit" value="Отправить" type="submit" /></p>
            </form>
        </div>

    </section>
</div>
<?php require "../uttermost parts/footer.html" ?>
</body>
</html>