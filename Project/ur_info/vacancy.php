<?php
session_save_path("C:\OSPanel\session");
session_start();
?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./../css/vacancy.css">
        <title></title>
    </head>
    <body>
        <?php
        include './../include/header.php'
        ?>
        <main>
            <center>
                <div class="title_content">
                    <h1>Вакансии</h1>
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
                <h2>На данный момент, у компании нет свободных мест для рабочих!</h2>
                <p class="number_help">Задать свои вопросы вы можете по телефону:+7 777 777 77 77</p>
                </div>
            </div>
        </main>
        <?php
        include './../include/footer.php'
        ?>
    </body>
</html>