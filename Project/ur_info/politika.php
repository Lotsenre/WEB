<?php
session_save_path("C:\OSPanel\session");
session_start();
?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./../css/politika.css">
        <title></title>
    </head>
    <body>
        <?php
        include './../include/header.php'
        ?>
        <main>
            <center>
                <div class="title_content">
                    <h1>Политика Конфиденциальности</h1>
                </div>
                </center>
            <div class="burger-menu">
                <details class="burger-menu_details" name="burger-menu">
                    <summary class="burger-menu_summary">
                        <span
                        class="burger-menu_title"
                        role="term"
                        aria-details="burger-menu"
                        >
                        Категории
                        </span>
                    </summary>
                </details>
                <div class="burger-menu_content" id="burger-menu" role="definition">
                    <div class="burger-menu_content-body">
                        <a href="./../index_cakes.php" class="cakes"><p>Торты</p></a>
                        <a href="./../index_pie.php" class="pigori"><p>Пироги</p></a>
                        <a href="./../index_kruasan.php" class="krua"><p>Круассаны</p></a>
                        <a href="./../index_vafli.php" class="vafli"><p>Вафли</p></a>
                    </div>
                </div>
            </div>
            <div class="content_info">
                <div class="content_info_title">
                <p>Настоящая политика конфиденциальности (далее – «Политика») определяет порядок обработки персональных данных пользователей интернет-сайта название сайта (далее – «Сайт»), а также меры по обеспечению их защиты.
                    <br>1. Сбор и использование персональных данных. Сайт собирает персональные данные пользователей исключительно для выполнения заказов и улучшения качества обслуживания. К таким данным относятся:
                    <br>- ФИО;
                    <br>- контактный телефон;
                    <br>- адрес электронной почты;
                    <br>- адрес доставки.
                </p>
                <p>
                    2. Передача персональных данных третьим лицам
   Персональные данные могут быть переданы третьим лицам только в случаях, предусмотренных законодательством Российской Федерации, либо при наличии согласия пользователя.
                </p>
                <p>
                    3. Защита персональных данных
   Для обеспечения безопасности персональных данных применяются современные технические и организационные меры защиты информации. Доступ к персональным данным имеют только уполномоченные сотрудники Сайта.
                </p>
                <p>
                    4. Изменение политики конфиденциальности
   Настоящая Политика может быть изменена или дополнена в любое время без предварительного уведомления пользователей. Актуальная версия Политики всегда доступна на Сайте.
                </p>
                <p>
                    5. Согласие с политикой конфиденциальности
   Пользователь, регистрируясь на Сайте и/или совершая заказ, подтверждает свое согласие с настоящей Политикой и условиями обработки своих персональных данных.
                </p>
                </div>
            </div>
        </main>
      <?php
      include './../include/footer.php'
      ?>
    </body>
</html>