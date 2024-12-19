<?php 
session_save_path("C:\OSPanel\session");
session_start();
?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./../css/adress.css">
        <title></title>
    </head>
    <body>
    <?php
        include './../include/header.php'
        ?>
        <main>
            <div class="menu">
                <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                <label for="burger-checkbox" class="burger"></label>
                <ul class="menu-list">
                    <li><a href="./../card_products/cart.php" class="menu-item">Корзина</a><li>
                    <li><a href="./../card_products/favorite.php" class="menu-item">Избранное</a><li>
                    <li><a href="./../lk/adress.php" class="menu-item">Адрес</a><li>
                    <li><a href="./../scripts/out.php" class="menu-item">Выход</a><li>
                </ul>
            </div>
            <center>
            <div class="title_content">
                <h1>Добро пожаловать, <?php
                echo $_SESSION['login'];
                ?>!</h1>
            </div>
            
            <h2>Тут вы можете изменить адрес доставки</h2>
            <form action="./../scripts/save_adress.php" method="post">
                    <input type="text" class="form_adress" name="adress" id="adress" placeholder="Введите адрес"><br>
                    <button class="btn_success" type="submit">Сохранить</button>
            </form>
            </center>
        </main>
        <?php
        include './../include/footer.php'
        ?>
    </body>
</html>