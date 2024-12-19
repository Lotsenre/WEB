<?php
session_save_path("C:\OSPanel\session");
session_start();
?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./../css/company.css">
        <title></title>
    </head>
    <body>
        <?php
        include './../include/header.php'
        ?>
        <main>
            <center>
                <div class="title_content">
                    <h1>О Компании</h1>
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
                <h2>О нас</h2>
                <p class="O_nas">Добро пожаловать в мир сладких удовольствий! Мы – «Пряничный домик», компания, созданная с любовью к вкусной жизни и желанию дарить радость каждому клиенту. Наша миссия – сделать ваши дни немного слаще!</p>
                <h2>Что мы предлагаем?</h2>
                <p class="predlojeniya">Мы специализируемся на доставке высококачественных сладостей прямо к вашему порогу. Все наши продукты изготавливаются из натуральных ингредиентов без искусственных добавок и консервантов. Мы тщательно следим за качеством каждого изделия, чтобы вы могли наслаждаться настоящими вкусами.</p>
                <h2>Почему выбирают нас?</h2>
                <p class="vibor">
                        <br>Высокое качество продукции. Мы используем только лучшие ингредиенты и строго контролируем процесс приготовления.
                        <br>Индивидуальный подход. Каждый клиент для нас уникален, поэтому мы всегда готовы учесть все ваши предпочтения.
                        <br>Быстрая доставка. Ваша сладкая посылка будет у вас уже через несколько часов после заказа.
                        <br>Удобство оплаты. Вы можете выбрать любой удобный способ оплаты: онлайн или банковской картой.
                </p>
                <h2>Наши ценности</h2>
                <p class="cennosti">В основе нашей работы лежат такие принципы, как честность, открытость и забота о клиентах. Мы стремимся создать атмосферу доверия и комфорта, чтобы каждый контакт с нами приносил вам удовольствие.</p>
                <h2>Присоедниняйтесь к нам!</h2>
                <p class="join">Станьте частью нашего сладкого мира! Закажите доставку любимых лакомств сегодня и почувствуйте разницу. Мы уверены, что вы оцените наше внимание к деталям и любовь к своему делу.
                    <br>«Пряничный домик» – ваш надежный партнер в мире сладостей!
                </p>
                </div>
            </div>
        </main>
        <?php
        include './../include/footer.php'
        ?>
    </body>
</html>