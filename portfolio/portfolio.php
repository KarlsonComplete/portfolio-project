<!doctype html>
<html lang="ru">
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="robots" content="all"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Портфолио программиста , программист на час.">
    <meta name="keywords" content="Портфолио,портфолио программиста, программист по суточно.">
    <title>Веб-портфолио</title>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php require "../uttermost parts/header.html" ?>
<main>
    <h1 class="name-project">Веб-портфолио</h1>
    <div class="contentment">
        <img  src='../img/20210815_181612.jpg' alt="Моя фотография">
        <section class="content">
            <div class="resume-header-main">
                <h2><strong>Храмов Кирилл</strong></h2>
                <p>Мужчина, 20 лет, родился 10 декабря 2001</p>
            </div>

            <div class="skills">
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

            <div class="education">
                <strong>Неоконченное высшее образование</strong>
                <br>
                <p>Год выпуска: 2023 <br> Севастопольский национальный технический университет, Севастополь <br> Институт информационных технологий и управления в технических системах, Управление в технических системах</p>
            </div>

            <div class="content__skills-table">
                <span class="resume-skills-language"><strong>Ключевые навыки</strong></span>
                <ul class="language">
                    <li>Русский — Родной</li>
                    <li>Английский — B1 — Средний</li>
                </ul>
            </div>

            <div class="content__about-me">
                <strong>Обо мне</strong>
                <p>
                    Я учусь в Севастопольском государственном институте на 3 курсе. На данный момент в коммерческих проектах не участвовал, но есть большое желание. На данный момент знания беру в университете, а также стараюсь учиться дома. На протяжении года изучаю язык программирования PHP, в данный момент осваиваю фреймворк к этому языку(laravel), поверхностно изучал SQL. Также знаю основы верстки (html/css/bootstrap). В планах изучить Javascript. В институте изучаю С++. В рамках дисциплины Инженерный проект в университете, разрабатывали небольшое приложение по поиску изображений. Есть большое желание работать и развиваться в IT.
                </p>
            </div>

            <div class="js-form"><h2>Форма обратной связи.</h2>
                <form v-if="state === null" @submit.prevent="onSubmit" name="MyForm" class=" form" action="" method="post">
                    <fieldset class="form__fieldset">
                        <label for="name" class="form_label">Ваше имя
                         <p><input class="form__input" v-model.trim="name" name="name" ENGINE="text" style="width:15%"/></p>
                        </label>
                        <label class="form__label" for="email">Электронная почта
                         <p><input class="form_input" v-model.trim="email" name="email" type="text" style="width:15%" /></p>
                        </label>
                        <label class="form__label" for="phone">Номер телефона
                         <p><input class="form__input" v-model.trim="phone" type="tel" id="phone" name="phone" style="width:15%" placeholder="Телефон 79788045001" title="Номер должен содержать 11 цифр и начинаться с 7" pattern="7\[0-9]{3}\[0-9]{3}[0-9]{2}[0-9]{2}"> {{11 - phone.length}}</p>
                        </label>
                    </fieldset>
                    <p><button class="form-submit" type="submit" >Отправить</button></p>
                </form>
                <div v-if="state === 401">Ошибка! Форма не отправлена</div>
                <div v-if="state === 201">Форма отправлена успешно</div>
                <div v-if="state === 500">Форма отправлена успешно</div>

            </div>
         </section>
    </div>
</main>
<?php require "../uttermost parts/footer.html" ?>


<script>
    Vue.createApp({
created(){
    console.log("Hello, Vue!")
},
data: ()=>({
  name: "",
  email: "",
  phone: "",
    state: null
}),
        methods:{
            onSubmit(){
                axios.post("https://jsonplaceholder.typicode.com/posts",{
                    data:{
                        type:"posts",
                        attributes:{
                            name: this.name,
                            email: this.email,
                            phone: this.phone,
                        }
                    },
                }).then((r)=>{
                    this.state = r.status;
                    setTimeout(()=>{
                        this.state = r.status;
                    },5000)
                }).catch((e)=>{
                    this.state = 500;
                })
            }
        },
        watch:{
            phone:()=>{

            }
        }
    }).mount(".js-form")
</script>
</body>
</html>
