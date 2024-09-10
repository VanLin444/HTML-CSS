<!DOCTYPE html>
<html lang = "ru">
    <head>
        <title>HTML</title>
        <link rel="stylesheet" href = "styles.css">
    </head>
    <body>
        <!-- Заголовок с атрибутом style(исп-ся для добавления стилей к элементу)
         Атрибуты используются для предоставления дополнительной информации об элементах HTML.
         -->
        <h1 style = "text-align:center; font-size:250%; color:orange; font-family:Verdana">HTML</h2>
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

        <button type="button" onclick="location='https://github.com/VanLin444'">Мой гит</button>
        <footer>
            <!-- Горизонтальная линия -->
            <hr>
            <!-- Параграф -->
            <p>© 2024 Моя учебная веб-страница</p>
        </footer>
    </body>
</html>