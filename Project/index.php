<?php
session_save_path("C:\OSPanel\session");
session_start();
?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main_style.css">
        <title>Пряничный домик – доствка сладостей</title>
    </head>
    <body>
        <?php
        include 'include/header.php'
        ?>
        <main>
            <center>
            <div class="title_content">
                <h1>Популярное</h1>
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
            <div class="products">
                <a href="card_products/card_product_kruassan_malina.php">
                <div class="product-card1">
                    <img src="photo/kruasan_malina.svg" class="product-card1_image" width="290" height="230">
                    <h3 class="product-card1_title">Круассаны с малиной</h3>
                    <span class="product-card1_price">Цена:359 рублей</span>
                </div>
                </a>
                <a href="card_products/card_product_banana_pie.php">
                    <div class="product-card2">
                        <img src="photo/banana_pie-Photoroom.png" class="product-card2_image" width="290" height="230">
                        <h3 class="product-card2_title">Банановый пирог</h3>
                        <span class="product-card2_price">Цена:599 рублей</span>
                    </div>
                    </a>
                    <a href="card_products/card_product_klubnika_pie.php">
                        <div class="product-card3">
                            <img src="photo/klubnika_pie-Photoroom.png" class="product-card3_image" width="290" height="230">
                            <h3 class="product-card3_title">Клубничный пирог</h3>
                            <span class="product-card3_price">Цена:659 рублей</span>
                        </div>
                    </a>
                    <a href="card_products/card_product_kruassan_shokolad.php">
                        <div class="product-card4">
                            <img src="photo/pngtree-delicious-french-chocolate-croissant-png-image_12960295-Photoroom.png" class="product-card4_image" width="290" height="230">
                            <h3 class="product-card4_title">Круассан с шоколадом</h3>
                            <span class="product-card4_price">Цена:399 рублей</span>
                        </div>
                    </a>
                    <a href="card_products/card_product_vafli_chernika.php">
                        <div class="product-card5">
                            <img src="photo/pngtree-waffles-with-blueberries-and-bananas-in-french-style-separated-on-white-png-image_12424813-Photoroom.png" class="product-card5_image" width="290" height="230">
                            <h3 class="product-card5_title">Вафли с черникой</h3>
                            <span class="product-card5_price">Цена:339 рублей</span>
                        </div>
                    </a>
                    <a href="card_products/card_product_pink_nejnosti.php">
                        <div class="product-card6">
                            <img src="photo/Rozovaya_nejnosti-Photoroom.png" class="product-card6_image" width="290" height="230">
                            <h3 class="product-card6_title">Розовая нежность</h3>
                            <span class="product-card6_price">Цена:1 299 рублей</span>
                        </div>
                    </a>
                    <a href="card_products/card_product_shokoladniy_tort.php">
                        <div class="product-card7">
                            <img src="photo/shokoladniy_tort.png" class="product-card7_image" width="290" height="230">
                            <h3 class="product-card7_title">Шоколадный торт</h3>
                            <span class="product-card7_price">Цена:999 рублей</span>
                        </div>
                    </a>
                    <a href="card_products/card_product_klubnichniy_tort.php">
                        <div class="product-card8">
                            <img src="photo/Klubnichniy_tort.png" class="product-card8_image" width="290" height="230">
                            <h3 class="product-card8_title">Клубничный торт</h3>
                            <span class="product-card8_price">Цена:1 099 рублей</span>
                        </div>
                    </a>
                    <a href="card_products/card_product_chernichniy_pie.php">
                        <div class="product-card9">
                            <img src="photo/Chernichiy_pie.png" class="product-card9_image" width="290" height="230">
                            <h3 class="product-card9_title">Чернийчный пирог</h3>
                            <span class="product-card9_price">Цена:799 рублей</span>
                        </div>
                    </a>
                    <a href="card_products/card_product_vafli_klubnika.php">
                        <div class="product-card10">
                            <img src="photo/vafli_klubnika.png" class="product-card10_image" width="290" height="230">
                            <h3 class="product-card10_title">Вафли с клубникой</h3>
                            <span class="product-card10_price">Цена:399 рублей</span>
                        </div>
                    </a>
                    <a href="card_products/card_product_vafli_med.php">
                        <div class="product-card11">
                            <img src="photo/vafli_s_medom.svg" class="product-card11_image" width="290" height="230">
                            <h3 class="product-card11_title">Вафли с мёдом</h3>
                            <span class="product-card11_price">Цена:359 рублей</span>
                        </div>
                    </a>
                    <a href="card_products/card_product_kruassan_beznachinki.php">
                        <div class="product-card12">
                            <img src="photo/Круассан-мини-Венуазин-25гр-Delifrance.png" class="product-card12_image" width="290" height="230">
                            <h3 class="product-card12_title">Круассан без начинки</h3>
                            <span class="product-card12_price">Цена:299 рублей</span>
                        </div>
                    </a>
            </div>
        </main>
        <?php
        include 'include/footer.php'
        ?>
    </body>
</html>