<?php
session_save_path("C:\OSPanel\session");
session_start();
?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./../css/card_product_style.css">
        <title></title>
    </head>
    <body>
        <?php
        include './../include/header.php'
        ?>
        <main>
            <div class="card_product">
            <div class="card_image">
                <img src="./../photo/pngtree-delicious-french-chocolate-croissant-png-image_12960295-Photoroom.png" class="image">
            </div>
            <div class="card_info">
            <div class="card_title">
                <h2>Круассан с шоколадом</h2>
            </div>
            <div class="card_opisanie">
                <details>
                    <summary>Описание:</summary>
                    <section class="card_opisanie_body"><p>Приятный молочный шоколад внутри этого велеколепного круасана оставит незабываемые ощущения</p></section>
                </details>
            </div>
            <div class="card_price">
                <section>Цена:399 рублей</section>
            </div>
            <a href='cart.php?action=add&id=4'>
            <div class="card_buy">
                <p>Добаить в корзину</p>
            </div>
            </a>
            <div class="favorite">
                <a href="favorite.php?action=add&id=4">
                    <img src="./../photo/favorite.svg" width="50px" height="50px">
                </a>
            </div>
            </div>
            </div>
        </main>
        <?php
        include './../include/footer.php'
        ?>
    </body>
</html>