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

    <div id="info1">
        <div id="info_nav1">
            <ul class="nav1">
            <li><a href="http://localhost/news_content.php">Новости</a></li>
            <li><a href="news.php?two=true">Доска объявлений</a></li>
            <li><a href="news.php?trhee=true">Социальная реклама</a></li>
            </ul>
        </div>
        <div id="info_text2">
            <?php
            function myFunction1()
            {
                require 'connection.php';
                $link = mysqli_connect($host, $user, $password, $database)
                    or die("Ошибка " . mysqli_error($link));

                $query = mysqli_query($link, "SELECT * FROM about WHERE id = '1'");
                for ($i = 0; $i < 1; ++$i) {
                    $myrow1 = mysqli_fetch_array($query);
                    $title_about = $myrow1['title'];
                    $text_about = $myrow1['text'];
                    echo " <h3>" . $title_about . "</h3>";
                    echo "<p>" . $text_about . "</p>";
                }
            }
            if (isset($_GET['one'])) {
                myFunction1();
            }

            function myFunction2()
            {
                echo "<h3>Доска объявлений</h3>";
                echo "<p><b>Величина прожиточного минимума</b></p>";
                echo "<p>Бюджет прожиточного минимума на 2023 год действует с 01 января 2023 года, постановление от 27.12.2022 №859-п</p>";
                echo "
                <table>
                <tr>
                    <td>на душу населения</td>
                    <td>12 363 руб.</td>
                </tr>
                <tr>
                    <td>трудоспособное население</td>
                    <td>13 476 руб.</td>
                </tr>
                <tr>
                <td>для пенсионеров</td>
                <td>10 660 рую.</td>
            </tr>
            <tr>
                <td>для детей</td>
                <td>12 307 руб.</td>
            </tr>
            <tr>
            <td>ветеранам труда Волгоградской области, при обращении на родительский капитал, дополнительное пособие при рождении 2 ребенка - 1,5 величина БПМ на душу населения</td>
            <td>18 544,5 руб.</td>
        </tr>
        <tr>
            <td>при обращении на ЕДВ при рождении третьего и последующих детей - 2-х кратная величина БПМ для трудоспособного населения</td>
            <td>26 952 руб.</td>
        </tr>
                </table>";
                echo "
                <div class='gaonutosal'>
                <div class='pesontedan'>
                    <input id='pesontedan-one' type='checkbox' name='pesontedans'>
                    <label for='pesontedan-one'>Изменения размера мер социальной поддержки и адресной социальной помощи</label>
                    <div class='pesontedan-content'>
                        <ul>
                        <li>• <a href='https://soc.volganet.ru/38/docs/Размеры%20выплат%20в%202023%20году%20с%20индексацией.pdf '>Размеры выплат в 2023 году с индексацией</a><li>
                        <li>• <a href='https://onedrive.live.com/view.aspx?resid=1AC8D3405FFEDDE6!471&ithint=file%2cdocx&authkey=!ALWb101RihmH3Z4'>Размеры выплат в 2022 году с индексацией</a></li>
                        <li>• <a href='https://onedrive.live.com/?authkey=%21ALxjA-jkauAvEHY&id=1AC8D3405FFEDDE6%21442&cid=1AC8D3405FFEDDE6&parId=root&parQt=sharedby&o=OneUp'>Размеры выплат в 2021 году с индексацией</a><li>
                        <li>• <a href='https://onedrive.live.com/?authkey=%21AB_hasHy3LGbamw&id=1AC8D3405FFEDDE6%21367&cid=1AC8D3405FFEDDE6&parId=root&parQt=sharedby&o=OneUp'>Размеры выплат в 2020 году с индексацией</a></li>
                        <li>• <a href='https://onedrive.live.com/?authkey=%21AJUmZnrlRjw9MDk&id=1AC8D3405FFEDDE6%21368&cid=1AC8D3405FFEDDE6&parId=root&parQt=sharedby&o=OneUp'>Размеры выплат в 2019 году с индексацией</a><li>
                        <li>• <a href='https://onedrive.live.com/redir?resid=1AC8D3405FFEDDE6!238&authkey=!AMmuWS6_huykqiw&ithint=file%2cdocx'>Размеры выплат в 2018 году</a></li>
                        </ul>
                    </div>
                </div>
            </div>
                ";
            }
            if (isset($_GET['two'])) {
                myFunction2();
            }

            function myFunction3()
            {
                require 'connection.php';
                $link = mysqli_connect($host, $user, $password, $database)
                    or die("Ошибка " . mysqli_error($link));

                $query = mysqli_query($link, "SELECT * FROM social_advertising_content");
            $rows = mysqli_num_rows($query); // количество новостей
               
                
                for ($i = 0; $i < $rows; ++$i) {
                echo "<div id=myFunction6>";

                    $myrow1 = mysqli_fetch_array($query);
                    $photo_about = $myrow1['video'];
                    $text_about = $myrow1['text'];
                    echo $photo_about;
                    echo "<p>" . $text_about . "</p>";
                echo " </div>";

                }
            }
            if (isset($_GET['trhee'])) {
                myFunction3();
            }
            ?>
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