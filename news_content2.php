<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГКУ "Центр социальной защиты населения по городу Фролово и Фроловскому району"</title>
    <link rel="icon" type="image/png" href="files/images/main_page/1.png" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start();
    ?>
    <header>
        <div id="block_one">
            <div class="lk">
                <div class="block_one_one">
                    <a href="https://soc.volganet.ru/">Единый интернет-сайт центров социальной защиты населения
                        &nbsp;&#10004;</a>
                </div>
                <div class="block_noone">
                    <div class="block_one_two">
                        <a href="https://www.volgograd.ru/requests/">&#9993;&nbsp;Интернет-приемная</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="block_two">
            <div class="lk2">
                <div class="kl">
                    <div class="block_two_img">
                        <a href="index.php"><img src="files/images/main_page/1.png"></a>
                    </div>
                    <div class="block_two_txt">
                        <h4>ГКУ "Центр социальной защиты населения по городу Фролово и Фроловскому району"</h4>
                    </div>
                </div>

                <div class="block_two_navigation">
                    <ul>
                        <li><a href="http://localhost/about.php?five=true">Об учреждении</a>
                            <ul>
                                <li><a href="http://localhost/about.php?one=true">Полномочия (задачи и функции)</a></li>
                                <li><a href="http://localhost/about.php?two=true">Структура</a></li>
                                <li><a href="http://localhost/about.php?three=true">Руководство</a></li>
                                <li><a href="http://localhost/about.php?four=true">График личного приема граждан</a></li>
                                <li><a href="http://localhost/about.php?five=true">Контакты</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/activity.php?one=true">Деятельность</a>
                            <ul>
                                <li><a href="http://localhost/activity.php?one=true">Правовая основа деятельности</a></li>
                                <li><a href="http://localhost/activity.php?two=true">Государственные услуги</a></li>
                                <li><a href="http://localhost/activity.php?three=true">Калькулятор расчета среднедушевого дохода</a></li>
                                <li><a href="http://localhost/activity.php?four=true">Услуги через МФЦ</a></li>
                                <li><a href="http://localhost/activity.php?five=true">Список МФЦ</a></li>
                                <li><a href="http://localhost/activity.php?six=true">Социальное обслуживание граждан</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/news_content.php">Пресс-центр</a>
                            <ul>
                                <li><a href="http://localhost/news_content.php">Новости</a></li>
                                <li><a href="http://localhost/news.php?two=true">Доска объявлений</a></li>
                                <li><a href="http://localhost/news.php?trhee=true">Социальная реклама</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/documents.php?one=true">Документы</a>
                            <ul>
                                <li><a href="http://localhost/documents.php?one=true">Финансирование</a></li>
                                <li><a href="http://localhost/documents.php?two=true">Противодействие коррупции</a></li>
                                <li><a href="http://localhost/documents.php?three=true">Противодействие терроризму</a></li>
                                <li><a href="http://localhost/documents.php?four=true">Обеспечение условий доступности учреждения</a></li>
                                <li><a href="http://localhost/documents.php?five=true">Региональный проект "Старшее поколение"</a></li>
                                <li><a href="http://localhost/documents.php?six=true">Региональный проект "Финансовая поддержка семей при рождении детей"</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/social_contract.php?one=true">Социальный контракт</a>
                            <ul>
                                <li><a href="http://localhost/social_contract.php?one=true">Поиск работы</a></li>
                                <li><a href="http://localhost/social_contract.php?two=true">Осуществление индивидуальной предпринимательской деятельности</a></li>
                                <li><a href="http://localhost/social_contract.php?three=true">Ведение личного подсобного хозяйства</a></li>
                                <li><a href="http://localhost/social_contract.php?four=true">Осуществление иных мероприятий, направленных на преодоление гражданином
                                        ТСЖ</a></li>
                                <li><a href="http://localhost/social_contract.php?five=true">Вопросы-ответы</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost/appointment.php">Обратная связь</a>
                            <ul>
                                <li><a href="http://localhost/appointment.php">Запись на прием</a></li>
                                <li><a href="http://localhost/feedback.php?one=true">Горячая линия</a></li>
                                <li><a href="http://localhost/feedback.php?two=true">Онлайн консультирование</a></li>
                                <li><a href="http://localhost/reviews.php">Книга отзывов и предложений</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div id="info3">
        <div id="info_nav1">
            <ul class="nav1">
                <li><a href="http://localhost/news_content.php">Новости</a></li>
                <li><a href="news.php?two=true">Доска объявлений</a></li>
                <li><a href="news.php?trhee=true">Социальная реклама</a></li>
            </ul>
        </div>
        <div id="info_text3_1">

            <?php
            require 'connection.php';
            $link = mysqli_connect($host, $user, $password, $database)
                or die("Ошибка " . mysqli_error($link));

                $query = mysqli_query($link, "SELECT * FROM news_content ORDER BY id DESC LIMIT 3, 3");
            $rows = mysqli_num_rows($query);

            for ($i = 0; $i < 3; ++$i) {
                $myrow1 = mysqli_fetch_array($query);
                $title_news = $myrow1['title'];
                $photo_news = $myrow1['photo'];
                $information_news = $myrow1['information'];
                $datetime_news = $myrow1['date_time'];
                echo " <div id=info_text3>";
                echo " <div class=news_contents>";
                echo "<h3>$title_news</h3>";
                echo "<img src='$photo_news'>";
                echo "<p>$information_news</p>";
                echo "<p>$datetime_news</p>";
                echo " </div>";
                echo " </div>";
            }
            ?>

        </div>
    </div>
    <div class="a_a">
        <div class="a_a1">

        </div>
        <div class="a_a2">
        <p><a href='http://localhost/news_content.php'>&#8634;Вперед</a> || Назад &#8635;</p>

        </div>

    </div>

    <footer>
        <div class="w">
            <div class="footer_block_one">
                <div class="ww">
                    <div class="footer_block_one_one">
                        <a href="index.php"><img src="files/images/main_page/1.png"></a>
                    </div>
                    <div class="footer_block_one_two">
                        <p>
                            Единая справочная служба Департамента труда и социальной защиты населения города Москвы: 8
                            (495)
                            870-44-44 (круглосуточно)

                            107078, г. Москва, ул. Новая Басманная, д. 10, стр. 1
                        </p>
                    </div>
                </div>
                <div class="footer_block_one_three">
                    <a href="http://localhost/about.php?five=true">&#9742; Контакты</a>
                    <a href="">&#9993; Подать обращение</a>
                </div>
            </div>
            <div class="footer_block_two">
                <div class="footer_block_two_one">
                    <p>Основные разделы</p>
                </div>
                <div class="footer_block_two_two">
                    <div class="f1">
                        <a href="http://localhost/about.php?five=true">Об учреждении</a>
                        <a href="http://localhost/activity.php?one=true">Деятельность</a>
                        <a href="http://localhost/news_content.php">Пресс-центр</a>
                    </div>
                    <div class="f2">
                        <a href="http://localhost/documents.php?one=true">Документы</a>
                        <a href="http://localhost/social_contract.php?one=true">Социальный контракт</a>
                        <a href="http://localhost/appointment.php">Обратная связь</a>
                    </div>
                </div>
            </div>
            <div class="footer_block_three">
                <div class="footer_block_three_one">
                    <p>Дополнительные возможности</p>
                </div>
                <div class="footer_block_three_two">
                    <a href="https://www.volgograd.ru/requests/">Интернет-приемная</a>
                    <a href="http://localhost/about.php?four=true">График личного приема граждан</a>
                    <a href="http://localhost/feedback.php?one=true">Горячая линия</a>
                </div>
            </div>
        </div>
        <!-- дата-время -->
        <div id="block_one_four"></div>

        <div id="toTop">&uArr;</div>
    </footer>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        function zero_first_format(value) {
            if (value < 10) {
                value = '0' + value;
            }
            return value;
        }

        function date_time() {
            var current_datetime = new Date();
            var day = zero_first_format(current_datetime.getDate());
            var month = zero_first_format(current_datetime.getMonth() + 1);
            var year = current_datetime.getFullYear();
            var hours = zero_first_format(current_datetime.getHours());
            var minutes = zero_first_format(current_datetime.getMinutes());
            var seconds = zero_first_format(current_datetime.getSeconds());

            return day + "." + month + "." + year + " " + hours + ":" + minutes + ":" + seconds;
        }
        setInterval(function() {
            document.getElementById('block_one_four').innerHTML = "Сегодня" + " " + date_time();
        }, 1000);

        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() != 0) {
                    $('#toTop').fadeIn();
                } else {
                    $('#toTop').fadeOut();
                }
            });
            $('#toTop').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
            });
        });
    </script>
</body>

</html>