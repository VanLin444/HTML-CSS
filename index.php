<!DOCTYPE html>
<html lang = "ru">
    <head>
        <title>HTML</title>
        <link rel="stylesheet" href = "styles.css">
        <link rel="icon" type="image/x-icon" href="iconka.png">
    </head>
    <body>
        <!-- Заголовок с атрибутом style(исп-ся для добавления стилей к элементу)
         Атрибуты используются для предоставления дополнительной информации об элементах HTML.
         -->
        <h1 id="start" style = "text-align:center; font-size:250%; color:orange; font-family:Verdana">HTML</h2>
        <h2>HTML - это язык разметки, а не язык программирования!!</h2>
        <!-- Изображение из источника с алтьтернативой вывода, если изображение не загрузилось-->
        <img src= "logo_html.png" alt = "HTML logo">  
        <!-- <br> Новая строка-->
        <br>
        <!-- Определяет гиперссылку -->
        <a href = "https://github.com/VanLin444">Мой GitHub</a>
        <br>
        <!-- Предварительно отфарматированный текст(Текст сохранияет все пробелы абзацы и т.д) -->
        <pre style="font-size:200%; color:brown; font-family:Arial, Helvetica, sans-serif">
            Птицей Гермеса меня называют, 
            Cвои крылья пожирая, 
            Cам себя я укрощаю
        </pre>
        <!--Жирный шрифт-->
        <b>Жирный</b>
        <!--Строгий текст с семантической важностью-->
        <strong>ArmStrong</strong>
        <br>
        
        <!--Курсив-->
        <i>Курсив</i>
        <!--Курсив с смысловой важностью-->
        <em>Lupen</em>
        <br>

        <!--Маленький шрифт-->
        <small>Маленький</small>
        <br>

        <!--Выделенный текст-->
        <mark>MARK3</mark>
        <br>

        <!--Перечёрунутый текст-->
        <del>Перечёркнуто</del>
        <br>

        <!--Подчёркнутый текст-->
        <ins>Подчеркнуто</ins>
        <br>

        <!--Подстрочный текст-->
        <h4>H<sub>2</sub>O</h4>
        <!--Надстрочный текст-->
        <h5>E = m*c<sup>2</sup></h5>

        <!--Цитирование из источника-->
        <blockquote cite = "https://www.livelib.ru/story/37594-stihotvoreniya-persi-bishi-shelli">
        Я — Озимандия, великий царь царей. Взгляните на мои деянья и дрожите!
        </blockquote>

        <!--Краткая цитата в кавычках "" <<>> -->
        <h2>Джокер : <q>Я верю, что-то, что тебя не убивает делает тебя страннее!</q></h2>

        <!--Аббревиатура HTML, CSS и т.д-->
        <abbr title = "Cascading Style Sheets" style = "font-size:200%"> CSS</abbr>
        <br>

        <!--Контактная информация-->
        <address>
            Шэрлок Холмс<br>
            Бейкер-стрит, 221Б, Лондон
        </address>
        <br>

        <!--Определяет название творческого произведения-->
        <h3>Ранобэ <cite style = "color:gold">Противостояние Святого</cite> Эр Гена, написана в 2009 году.</h3>
        <br>

        <!--Переопределяет направление текста-->
        <bdo dir = "rtl" style = "font-size:150%">Иван</bdo>
        <br>
        <br>

        <!--Текст в рамке с определёнными границами внутри и снаружи. 
        padding - растояние от текста до рамки. border - ширина рамки. margin - растояние от рамки до других элементов-->
        <h2 style="border: 3px solid green; padding: 2px; margin: 50px; background-color:lime; display: inline">Slime</h2>
        <br>
        <br>
        <!--Кнопка как ссылка-->
        <button type="button" onclick="location='https://github.com/VanLin444'">Мой гит</button>
        <br>

        <!--Закаладка с переходом к ней ввиде ссылки на её id-->
        <a href="#start">Закладка: В начало</a>
        <br>

        <!--Текст с фоновым изображением. background-repeat:no-repeat - отвечает за неповторение изображения(ПО умолчанию повторяется). 
          background-size: 100% 100% - растягивает изображение на весь элемент(100% ширины элемента 100% высоты).  
          background-size: cover - Увеличивает изображение таким образом, чтобы полностью покрыть фоновую часть.-->
        <h1 style="
        background-image: url('https://i.pinimg.com/736x/b1/71/ec/b171ec6c19523d1ee836cd2900af5893.jpg'); 
        background-repeat:no-repeat;
        
        background-size: cover;
        text-align: center;
        width: 800px;
        height: 400px;
        color:orange;
        font-size:500%
        ">Наруто</h1> 

        <!-- Тэг picture используется когда для разных устройств или вариантов отображения нам нужны разые картинки
         в source указывается размер окна при котором выводится именно этот sorce, а именно картинка.
         в srcset указывается ссылка на изображение
         -->
        <picture>
            <source media="(min-width: 1000px)" srcset="https://m.media-amazon.com/images/M/MV5BM2ZjN2MwOTAtMzk2NC00NjFkLTk1ZTMtMDdkNjNhMWRiZTU4XkEyXkFqcGdeQXVyMzExMzk5MTQ@._V1_.jpg">
            <source media="(min-width: 750px)" srcset="https://masterfresok.ru/upload/iblock/5f8/fotooboi-uzumaki-naruto-korol-foto.jpg">
            <source media="(min-width: 500px)" srcset="https://avatars.mds.yandex.net/i?id=68babe051482a9812a2562f55937bb47e6d7ad2c-6950859-images-thumbs&n=13">
            <img src="https://i.ytimg.com/vi/5omrCMG_GQc/maxresdefault.jpg" style="width:auto;">
        </picture>

        <table>
            <tr>
                <th>Имя</th>
                <th>Страна</th>
                <th>Ранг</th>
                <th>Элемент</th>
            </tr>

            <tr>
                <td>Наруто Узумаки</td>
                <td>Огня</td>
                <td>SS</td>
                <td>Ветер</td>
            </tr>

            <tr>
                <td>Нагато Узумаки</td>
                <td>Дождя</td>
                <td>S</td>
                <td>Ветер, Огонь, Молния, Земля, Вода</td>
            </tr>
            

        </table>
        
        <ul style="list-style-type:square">
            <li>Какаши</li>
            <li>Наруто</li>
            <li>Саске</li>
            <li>Сакура</li>
        </ul>

        <ol>
            <li>Сэнджу Хаширама</li>
            <li>Тобирама Сэнджу</li>
            <li>Сарутоби Хирузен</li>
            <li>Намиказе Минато</li>
        </ol>

        <h1 class="important">Breaking News:</h1>
        <p class="news">Эта страница работает!</p>

        <iframe src="https://pomodoro-tracker.com/" height="600" width="1200" name="fr1"></iframe>
        <br>
        <h2><a href="https://blimb.su/" target="fr1">Blimb</a></h2>
        <h2><a href="https://pomodoro-tracker.com/" target="fr1">Pomodoro</a></h2>

        <footer>
            <!-- Горизонтальная линия -->
            <hr>
            <!-- Параграф -->
            <p>© 2024 Моя учебная веб-страница</p>
        </footer>
    </body>
</html>