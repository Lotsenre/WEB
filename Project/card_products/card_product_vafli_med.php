<?php
session_save_path("C:\OSPanel\session");
session_start();
?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./../css/card_product_style2.css">
        <title></title>
    </head>
    <body>
        <?php
        include './../include/header.php'
        ?>
        <main>
            <div class="card_product">
            <div class="card_image">
                <img src="./../photo/vafli_s_medom.svg" class="image">
            </div>
            <div class="card_info">
            <div class="card_title">
                <h2>Вафли с мёдом</h2>
            </div>
            <div class="card_opisanie">
                <details>
                    <summary>Описание:</summary>
                    <section class="card_opisanie_body"><p>Xрустящие вафли с душистым мёдом будут не только вкусными, но и полезными</p></section>
                </details>
            </div>
            <div class="card_price">
                <section>Цена:359 рублей</section>
                <a href='cart.php?action=add&id=11'>
            <div class="card_buy">
                <p>Добаить в корзину</p>
            </div>
            </a>
            <div class="favorite">
                <a href="favorite.php?action=add&id=11">
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