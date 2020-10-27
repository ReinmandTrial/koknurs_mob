<!DOCTYPE html>
<?php
    include_once 'fn.php';
    $col = item();
    $info_ip = info_ip();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
    <header class="header">
        <div class="wrapper">
            <div class="header_top">
                <a href="#" class="logo">#деньнародногоединства</a>
                <nav class="nav_header">
                    <ul class="ul_header">
                        <li class="li_header"><a href="#">о проекте</a></li>
                        <li class="li_header"><a href="#">участники</a></li>
                        <li class="li_header"><a href="#">география</a></li>
                    </ul>
                </nav>
                <button id="btn_modal_window" class="header_button">
                    <a>обратная связь</a>
                </button>
                <div id="my_modal" class="modal">
                    <div class="modal_content">
                        <span class="close_modal_window">×</span>
                        <h2 id="title_modal">Обратная связь</h2>
                        <p id="description_modal">Заполните форму и менеджер свяжется с Вами в ближайшее время</p>
                        <form action="php/mail.php" method="post">
                            <input type="text" name="name" id="name" class="name style_input_name" placeholder="Ваше Имя" required>


                            <div class="form-group style_phone_group">
                                <select id="country" class=" form-control">
                                    <option value="ru"><img src="">Россия +7</option>
                                    <option value="ua">Украина +380</option>
                                    <option value="by">Белоруссия +375</option>
                                </select>
                                <input placeholder="(999) 999-99-99" id="phone" type="text" class="form-control style_input_phone" required>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-modal style_modal_button" id="send-mail"
                                data-dismiss="modal">ОТПРАВИТЬ</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="header_title">
                <h1>
                    фотоконкурс <span class="purple_text">#интернациональнаясемья</span>
                </h1>
                <h2>
                    голосуй
                </h2>
                <div class="description_style_h2">
                    <p class="description_h2">
                        за понравившуюся пару до 04 ноября 12:00 МСК
                    </p>
                </div>    
                <p class="description_h2_second">
                    главный приз - поездка в крым!
                </p>
            </div>
        </div>
    </header>
    <?php
    $i = 0;
    $c = 100;
     $inf;
    ?>
    <section class="people">
        <div class="wrapper">
            <div class="people_content">
                <div class="people_block">
                    <img src="images/baba_1.png" alt="photo" class="people_img">
                    <h3 class="people_name">
                        семья ивановых
                    </h3>
                    <p class="people_city">
                        Ростов-на-Дону
                    </p>
                    <a href="#" class="people_info">читать о семье</a>
                    <?php
                    ++$i;
                    if($info_ip) {
                        ?>
                        <button type="submit" class="people_button" id="golos" data-id="<?php echo $i; ?>">
                            Проголосовать
                        </button>
                    <?php
                    }else{
                        if(empty($col[$i])){
                            $col[$i] = 0;
                        }
                        $inf = $col[$i]/array_sum($col)*$c;
                        $inf = number_format($inf,2);
                        echo "Количество голосов:".$inf."%";
                    }
                    ?>
                </div>
                <div class="people_block">
                    <img src="images/baba_1.png" alt="photo" class="people_img">
                    <h3 class="people_name">
                        семья ивановых
                    </h3>
                    <p class="people_city">
                        Ростов-на-Дону
                    </p>
                    <a href="#" class="people_info">читать о семье</a>
                    <?php
                    ++$i;
                    if($info_ip) {
                        ?>
                        <button type="submit" class="people_button" id="golos" data-id="<?php echo $i; ?>">
                            Проголосовать
                        </button>
                    <?php
                    }else{
                        if(empty($col[$i])){
                            $col[$i] = 0;
                        }
                        $inf = $col[$i]/array_sum($col)*$c;
                        $inf = number_format($inf,2);
                        echo "Количество голосов:".$inf."%";
                    }
                    ?>
                </div>
                <div class="people_block">
                    <img src="images/baba_1.png" alt="photo" class="people_img">
                    <h3 class="people_name">
                        семья ивановых
                    </h3>
                    <p class="people_city">
                        Ростов-на-Дону
                    </p>
                    <a href="#" class="people_info">читать о семье</a>
                    <?php
                    ++$i;
                    if($info_ip) {
                        ?>
                        <button type="submit" class="people_button" id="golos" data-id="<?php echo $i; ?>">
                            Проголосовать
                        </button>
                    <?php
                    }else{
                        if(empty($col[$i])){
                            $col[$i] = 0;
                        }
                        $inf = $col[$i]/array_sum($col)*$c;
                        $inf = number_format($inf,2);
                        echo "Количество голосов:".$inf."%";
                    }
                    ?>
                </div>
                <div class="people_block">
                    <img src="images/baba_1.png" alt="photo" class="people_img">
                    <h3 class="people_name">
                        семья ивановых
                    </h3>
                    <p class="people_city">
                        Ростов-на-Дону
                    </p>
                    <a href="#" class="people_info">читать о семье</a>
                    <?php
                    ++$i;
                    if($info_ip) {
                        ?>
                        <button type="submit" class="people_button" id="golos" data-id="<?php echo $i; ?>">
                            Проголосовать
                        </button>
                    <?php
                    }else{
                        if(empty($col[$i])){
                            $col[$i] = 0;
                        }
                        $inf = $col[$i]/array_sum($col)*$c;
                        $inf = number_format($inf,2);
                        echo "Количество голосов:".$inf."%";
                    }
                    ?>
                </div>
                <div class="people_block">
                    <img src="images/baba_1.png" alt="photo" class="people_img">
                    <h3 class="people_name">
                        семья ивановых
                    </h3>
                    <p class="people_city">
                        Ростов-на-Дону
                    </p>
                    <a href="#" class="people_info">читать о семье</a>
                    <?php
                    ++$i;
                    if($info_ip) {
                        ?>
                        <button type="submit" class="people_button" id="golos" data-id="<?php echo $i; ?>">
                            Проголосовать
                        </button>
                    <?php
                    }else{
                        if(empty($col[$i])){
                            $col[$i] = 0;
                        }
                        $inf = $col[$i]/array_sum($col)*$c;
                        $inf = number_format($inf,2);
                        echo "Количество голосов:".$inf."%";
                    }
                    ?>
                </div>
                <div class="people_block">
                    <img src="images/baba_1.png" alt="photo" class="people_img">
                    <h3 class="people_name">
                        семья ивановых
                    </h3>
                    <p class="people_city">
                        Ростов-на-Дону
                    </p>
                    <a href="#" class="people_info">читать о семье</a>
                    <?php
                    ++$i;
                    if($info_ip) {
                        ?>
                        <button type="submit" class="people_button" id="golos" data-id="<?php echo $i; ?>">
                            Проголосовать
                        </button>
                    <?php
                    }else{
                        if(empty($col[$i])){
                            $col[$i] = 0;
                        }
                        $inf = $col[$i]/array_sum($col)*$c;
                        $inf = number_format($inf,2);
                        echo "Количество голосов:".$inf."%";
                    }
                    ?>
                </div>
                <div class="people_block">
                    <img src="images/baba_1.png" alt="photo" class="people_img">
                    <h3 class="people_name">
                        семья ивановых
                    </h3>
                    <p class="people_city">
                        Ростов-на-Дону
                    </p>
                    <a href="#" class="people_info">читать о семье</a>
                    <?php
                    ++$i;
                    if($info_ip) {
                        ?>
                        <button type="submit" class="people_button" id="golos" data-id="<?php echo $i; ?>">
                            Проголосовать
                        </button>
                    <?php
                    }else{
                        if(empty($col[$i])){
                            $col[$i] = 0;
                        }
                        $inf = $col[$i]/array_sum($col)*$c;
                        $inf = number_format($inf,2);
                        echo "Количество голосов:".$inf."%";
                    }
                    ?>
                </div>
                <div class="people_block">
                    <img src="images/baba_1.png" alt="photo" class="people_img">
                    <h3 class="people_name">
                        семья ивановых
                    </h3>
                    <p class="people_city">
                        Ростов-на-Дону
                    </p>
                    <a href="#" class="people_info">читать о семье</a>
                    <?php
                    ++$i;
                    if($info_ip) {
                        ?>
                        <button type="submit" class="people_button" id="golos" data-id="<?php echo $i; ?>">
                            Проголосовать
                        </button>
                    <?php
                    }else{
                        if(empty($col[$i])){
                            $col[$i] = 0;
                        }
                        $inf = $col[$i]/array_sum($col)*$c;
                        $inf = number_format($inf,2);
                        echo "Количество голосов:".$inf."%";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="info_stage">
        <div class="wrapper">
            <div class="info_title">
                <h4>
                    этапы конкурса
                </h4>
            </div>
            <div class="stage">
                <div class="stage_content">
                    <div class="content_first">
                        <div class="stage_number">
                            <div class="stage_number_style">1</div>
                        </div>
                        <div class="stage_line">

                        </div>
                    </div>
                    <div class="content_second">
                        <div class="stage_title">
                            первый этап до 23 октября:<br> сбор заявок. <br>
                        </div>
                        <div class="stage_info">
                            Присылайте самые интересные истории о вашей интернациональной семье: о первой встрече, о
                            знакомстве, об объединении традиций и многом другом в тематике конкурса. Лучшие пройдут во
                            второй этап и примут участие в профессиональной фотосессии!
                        </div>
                    </div>
                </div>
                <div class="stage_content">
                    <div class="content_first">
                        <div class="stage_number">
                            <div class="stage_number_style">2</div>
                        </div>
                        <div class="stage_line">

                        </div>
                    </div>
                    <div class="content_second">
                        <div class="stage_title">
                            Второй этап 24-25 октября:
                        </div>
                        <div class="stage_info">
                            Пары, которые прошли отборочный тур, будут приглашены на профессиональную фотосессию со
                            стилистом в Вашем городе! Оригиналы фотографий мы передадим вам и опубликуем для голосования
                            на сайте, чтобы определить победителя, который получит ПУТЕВКУ В КРЫМ на двоих.
                        </div>
                    </div>
                </div>
                <div class="stage_content">
                    <div class="content_first">
                        <div class="stage_number">
                            <div class="stage_number_style">3</div>
                        </div>
                        <div class="stage_line">

                        </div>
                    </div>
                    <div class="content_second">
                        <div class="stage_title">
                            Третий этап с 28 октября 12:00 МСК до 04 ноября 12:00 МСК:
                        </div>
                        <div class="stage_info">
                            Запуск голосования для определения победителя в фотоконкурсе #интернациональнаясемья
                        </div>
                    </div>
                </div>
                <div class="stage_content">
                    <div class="content_first">
                        <div class="stage_number">
                            <div class="stage_number_style">4</div>
                        </div>
                    </div>
                    <div class="content_second">
                        <div class="stage_title">
                            Четвертый этап 04 ноября в 15:00 МСК:
                        </div>
                        <div class="stage_info">
                            Мы с радостью опубликуем пару, которая получила большее количество голосов и свяжемся для
                            передачи главного приза.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <div class="wrapper">
            <div class="title_map">
                <div class="info_title title_up_map">
                    <h4>
                        карта с географией участников
                    </h4>
                </div>
            </div>
            <div class="main_map">
                <img class="style_map" src="images/map.png" alt="map" >
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="wrapper">
            <div class="footer_content">
                <div class="icon">
                    <img src="images/icon.png" alt="logo">
                </div>
                <div class="partner">
                    <p>
                        информационный партнёр "это россия, детка!"
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="js/modal.js"></script>
    <script src="js/jquery.maskedinput.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.min.js"></script>
</body>

</html>